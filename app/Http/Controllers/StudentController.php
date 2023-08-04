<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'IDno' => 'required|unique:students',
            'track_id' => 'required|exists:tracks,id',
            'age' => 'nullable|integer', // Validate the 'age' field (optional)
        ]);

        Student::create($validatedData);

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'IDno' => 'required|unique:students,IDno,'.$student->id,
            'track_id' => 'required|exists:tracks,id',
            'age' => 'nullable|integer', // Validate the 'age' field (optional)
        ]);

        $student->update($validatedData);

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}
