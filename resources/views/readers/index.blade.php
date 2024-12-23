@extends('layouts.app')

@section('title', 'Readers List')

@section('content')
<div class="container">
    <h1 class="my-4 text-success text-center">Readers List</h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('readers.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add New Reader</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($readers as $reader)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $reader->name }}</td>
                        <td>{{ $reader->birthday }}</td>
                        <td>{{ $reader->address }}</td>
                        <td>{{ $reader->phone }}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="{{ route('readers.show', $reader->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i>Show</a>
                                <a href="{{ route('readers.edit', $reader->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i>Edit</a>
                                <form action="{{ route('readers.destroy', $reader->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">No Readers Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
