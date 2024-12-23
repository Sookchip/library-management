@extends('layouts.app')

@section('title', 'Book Details')

@section('content')
<div class="container">
    <h1 class="my-4 text-info text-center">Book Details</h1>
    <div class="card p-4 shadow">
        <h4 class="card-title text-primary">{{ $book->name }}</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Author:</strong> {{ $book->author }}</li>
            <li class="list-group-item"><strong>Category:</strong> {{ $book->category }}</li>
            <li class="list-group-item"><strong>Year:</strong> {{ $book->year }}</li>
            <li class="list-group-item"><strong>Quantity:</strong> {{ $book->quantity }}</li>
        </ul>
        <div class="mt-4 d-flex justify-content-end">
            <a href="{{ route('books.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
        </div>
    </div>
</div>
@endsection
