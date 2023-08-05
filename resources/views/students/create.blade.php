@extends('layouts.app')

@section('content')
    <h1>Add Student</h1>

    <form action="{{ route('students.store') }}" method="POST" class="container">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="IDno">ID Number:</label>
            <input type="text" name="IDno" id="IDno" class="form-control @error('IDno') is-invalid @enderror" value="{{ old('IDno') }}" required>
            @error('IDno')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="track_id">Track:</label>
            <select name="track_id" id="track_id" class="form-control" required>
                <option value="">Select a track</option>
                @foreach ($tracks as $track)
                    <option value="{{ $track->id }}">{{ $track->name }}</option>
                @endforeach
            </select>
            @error('track_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
