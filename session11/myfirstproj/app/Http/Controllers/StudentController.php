<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddOrUpdateStudentRequest;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{

    public function index() {
        $students = Student::get();
        return view('students.index', compact('students'));
    }

    public function create() {
        return view('students.create');
    }

    public function store(AddOrUpdateStudentRequest $request) {
        $pic = $request->file('picture');
        $filename = Storage::disk('public')->put('/uploads', $pic);

        // $new_filename = time() . '.' . $pic->getClientOriginalExtension();
        // move_uploaded_file($pic->getRealPath(), public_path('uploads/' . $new_filename));

        $validated = (array) $request->validated();
        $validated['picture'] = $filename;

        Student::create($validated);
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
