@extends('layouts.app')

@section('title', 'Add New Reader')

@section('content')
<div class="container">
    <h1 class="my-4 text-primary text-center">Add New Reader</h1>
    <div class="card p-4 shadow">
        <form action="{{ route('readers.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birthday" name="birthday" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Save</button>
                <a href="{{ route('readers.index') }}" class="btn btn-secondary"><i class="bi bi-x-circle"></i> Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
