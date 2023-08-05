@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>

    <!-- Bind the student model data to the form -->
    {!! Form::model($student, ['route' => ['students.update', $student->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'required']) !!}
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('IDno', 'ID Number:') !!}
            {!! Form::text('IDno', null, ['class' => 'form-control' . ($errors->has('IDno') ? ' is-invalid' : ''), 'required']) !!}
            @error('IDno')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('track_id', 'Track:') !!}
            {!! Form::select('track_id', $tracks->pluck('name', 'id'), null, ['class' => 'form-control' . ($errors->has('track_id') ? ' is-invalid' : ''), 'required']) !!}
            @error('track_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('age', 'Age:') !!}
            {!! Form::number('age', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
