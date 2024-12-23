@extends('layouts.app')

@section('title', 'Books List')

@section('content')
<div class="container">
    <h1 class="my-4 text-success text-center">Books List</h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('books.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add New Book</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Year</th>
                    <th>Quantity</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->category }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->quantity }}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i>Show</a>
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil">Edit</i></a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">No Books Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
