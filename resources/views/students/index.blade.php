<!-- resources/views/students/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Student List</h1>

    <a href="{{ route('students.create') }}" class="btn btn-primary mb-2">Add Student</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>ID Number</th>
                <th>Track ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->IDno }}</td>
                    <td>{{ $student->track_id }}</td>
                    <td>
                        <a href="{{ route('students.edit', ['student' => $student->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('students.destroy', ['student' => $student->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
