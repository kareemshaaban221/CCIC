<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddOrUpdateStudentRequest;
use App\Models\Student;

class StudentController extends Controller
{

    public function index() {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create() {
        return view('students.create');
    }

    public function store(AddOrUpdateStudentRequest $request) {
        Student::create($request->validated());
        session()->flash('success','Student added successfully');
        return redirect(route('students.index'));
    }

    public function edit(Student $student) {
        return view('students.edit', compact('student'));
    }

    public function update(AddOrUpdateStudentRequest $request, Student $student) {
        $student->update($request->validated());
        session()->flash('success','Student updated successfully');
        return redirect()->route('students.edit', $student->id);
    }

    public function destroy(Student $student) {
        $student->delete();
        session()->flash('success', 'Student deleted successfully');
        return redirect()->route('students.index');
    }

}
