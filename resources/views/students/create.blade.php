@extends('layouts.app')

@section('content')
    <h1>Add Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="IDno">ID Number:</label>
            <input type="text" name="IDno" id="IDno" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="track_id">Track ID:</label>
            <input type="text" name="track_id" id="track_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
