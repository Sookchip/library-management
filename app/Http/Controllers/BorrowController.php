<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Reader;
use App\Models\Book;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function index()
    {
        $borrows = Borrow::all();
        $borrows = Borrow::orderBy('created_at', 'desc')->paginate(5);
        return view('borrows.index', compact('borrows'));
    }

    public function create()
    {
        $readers = Reader::all();
        $books = Book::all();
        return view('borrows.create', compact('readers', 'books'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'reader_id' => 'required|exists:readers,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'nullable|date|after_or_equal:borrow_date',
        ]);

        Borrow::create($validated);
        return redirect()->route('borrows.index')->with('success', 'Borrow created successfully.');
    }

    public function show(Borrow $borrow)
    {
        $borrow->load(['reader', 'book']);
        return view('borrows.show', compact('borrow'));
    }

    public function edit(Borrow $borrow)
    {
        $readers = Reader::all();
        $books = Book::all();
        return view('borrows.edit', compact('borrow', 'readers', 'books'));
    }

    public function update(Request $request, Borrow $borrow)
    {
        $request->validate([
            'reader_id' => 'required|exists:readers,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'nullable|date|after_or_equal:borrow_date',
            'status' => 'required|boolean', // Trường trạng thái
        ]);
    
        $borrow = Borrow::findOrFail($borrow->id);
    
        $borrow->update([
            'reader_id' => $request->reader_id,
            'book_id' => $request->book_id,
            'borrow_date' => $request->borrow_date,
            'return_date' => $request->return_date,
            'status' => $request->status, // Cập nhật trạng thái
        ]);
        return redirect()->route('borrows.index')->with('success', 'Borrow updated successfully.');
    }

    public function destroy(Borrow $borrow)
    {
        $borrow->delete();
        return redirect()->route('borrows.index')->with('success', 'Borrow deleted successfully.');
    }
}
