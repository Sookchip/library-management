@extends('layouts.app')

@section('title', 'Edit Borrow')

@section('content')
<div class="container">
    <h1 class="my-4 text-warning text-center">Edit Borrow</h1>
    <div class="card p-4 shadow">
        <form action="{{ route('borrows.update', $borrow->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="reader_id" class="form-label">Reader</label>
                <select class="form-control" id="reader_id" name="reader_id" required>
                    @foreach ($readers as $reader)
                        <option value="{{ $reader->id }}" {{ $borrow->reader_id == $reader->id ? 'selected' : '' }}>{{ $reader->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="book_id" class="form-label">Book</label>
                <select class="form-control" id="book_id" name="book_id" required>
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}" {{ $borrow->book_id == $book->id ? 'selected' : '' }}>{{ $book->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="borrow_date" class="form-label">Borrow Date</label>
                <input type="date" class="form-control" id="borrow_date" name="borrow_date" value="{{ $borrow->borrow_date }}" required>
            </div>
                    
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="status_returned" name="status" value="1" {{ $borrow->status == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="status_returned">Returned</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="status_not_returned" name="status" value="0" {{ $borrow->status == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="status_not_returned">Not Returned</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="return_date" class="form-label">Return Date</label>
                <input type="date" class="form-control" id="return_date" name="return_date" value="{{ $borrow->return_date ? $borrow->return_date : '' }}">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Update</button>
                <a href="{{ route('borrows.index') }}" class="btn btn-secondary"><i class="bi bi-x-circle"></i> Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
