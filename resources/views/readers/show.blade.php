@extends('layouts.app')

@section('title', 'Reader Details')

@section('content')
<div class="container">
    <h1 class="my-4 text-info text-center">Reader Details</h1>
    <div class="card p-4 shadow">
        <h4 class="card-title text-primary">{{ $reader->name }}</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Birthday:</strong> {{ $reader->birthday }}</li>
            <li class="list-group-item"><strong>Address:</strong> {{ $reader->address }}</li>
            <li class="list-group-item"><strong>Phone:</strong> {{ $reader->phone }}</li>
        </ul>
        <div class="mt-4 d-flex justify-content-end">
            <a href="{{ route('readers.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
        </div>
    </div>
</div>
@endsection
