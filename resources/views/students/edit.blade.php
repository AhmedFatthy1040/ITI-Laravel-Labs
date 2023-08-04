<!-- resources/views/students/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', ['student' => $student->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}" required>
        </div>
        <div class="form-group">
            <label for="IDno">ID Number:</label>
            <input type="text" name="IDno" id="IDno" class="form-control" value="{{ $student->IDno }}" required>
        </div>
        <div class="form-group">
            <label for="track_id">Track ID:</label>
            <input type="text" name="track_id" id="track_id" class="form-control" value="{{ $student->track_id }}" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ $student->age }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
