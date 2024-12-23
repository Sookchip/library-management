@extends('layouts.app')

@section('title', 'Borrows List')

@section('content')
<div class="container">
    <h1 class="my-4 text-success text-center">Borrows List</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th>#</th>
                    <th>Reader</th>
                    <th>Book</th>
                    <th>Borrow Date</th>
                    <th>Return Date</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($borrows as $borrow)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $borrow->reader->name }}</td>
                        <td>{{ $borrow->book->name }}</td>
                        <td>{{ $borrow->borrow_date}}</td>
                        <td>{{ $borrow->return_date ? $borrow->return_date : 'Not Returned' }}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="{{ route('borrows.show', $borrow->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i>Show</a>
                                <a href="{{ route('borrows.edit', $borrow->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i>Edit</a>
                                <form action="{{ route('borrows.destroy', $borrow->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">No Borrows Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
