@extends('layouts.app')

@section('title', 'Borrow Details')

@section('content')
<div class="container">
    <h1 class="my-4 text-info text-center">Borrow Details</h1>
    <div class="card p-4 shadow">
        <h4 class="card-title text-primary">{{ $borrow->book->name }}</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Reader:</strong> {{ $borrow->reader->name }}</li>
            <li class="list-group-item"><strong>Borrow Date:</strong> {{ $borrow->borrow_date }}</li>
            <li class="list-group-item"><strong>Return Date:</strong> {{ $borrow->return_date ? $borrow->return_date : 'Not Returned' }}</li>
        </ul>
        <div class="mt-4 d-flex justify-content-end">
            <a href="{{ route('borrows.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
        </div>
    </div>
</div>
@endsection
