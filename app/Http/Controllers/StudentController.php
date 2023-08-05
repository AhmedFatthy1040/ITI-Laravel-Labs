<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Track;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $tracks = Track::all(); // Fetch all tracks from the database
        return view('students.create', compact('tracks'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'IDno' => 'required|unique:students',
            'track_id' => 'required|exists:tracks,id',
            'age' => 'nullable|integer',
        ]);

        Student::create($validatedData);

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    public function edit(Student $student)
    {
        $this->authorize('update', $student);
        $tracks = Track::all(); // Fetch all tracks from the database
        return view('students.edit', compact('student', 'tracks'));
    }

    public function update(Request $request, Student $student)
    {
        $this->authorize('update', $student);
        $validatedData = $request->validate([
            'name' => 'required',
            'IDno' => 'required|unique:students,IDno,'.$student->id,
            'track_id' => 'required|exists:tracks,id',
            'age' => 'nullable|integer',
        ]);

        $student->update($validatedData);

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        $this->authorize('delete', $student);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}
