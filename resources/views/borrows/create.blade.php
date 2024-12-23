@extends('layouts.app')

@section('title', 'Add New Borrow')

@section('content')
<div class="container">
    <h1 class="my-4 text-primary text-center">Add New Borrow</h1>
    <div class="card p-4 shadow">
        <form action="{{ route('borrows.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="reader_id" class="form-label">Reader</label>
                <select class="form-control" id="reader_id" name="reader_id" required>
                    @foreach ($readers as $reader)
                        <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="book_id" class="form-label">Book</label>
                <select class="form-control" id="book_id" name="book_id" required>
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}">{{ $book->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="borrow_date" class="form-label">Borrow Date</label>
                <input type="date" class="form-control" id="borrow_date" name="borrow_date" required>
            </div>
            <div class="mb-3">
                <label for="return_date" class="form-label">Return Date</label>
                <input type="date" class="form-control" id="return_date" name="return_date">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Save</button>
                <a href="{{ route('borrows.index') }}" class="btn btn-secondary"><i class="bi bi-x-circle"></i> Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
