@extends('layouts.app')

@section('title', 'Students | Edit')

@section('content')

<section class="h-100 mt-5">
    <div class="card w-100 bg-transparent text-light text-center border border-light">
        <div class="card-title text-start p-3 d-flex justify-content-between" style="align-items: baseline;">
            <h1>Edit Student | ID: {{ $student->id }}</h1>
        </div>
        <div class="card-body text-start">
            <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" value="{{ $student->fname }}">
                    @error('fname')
                        <small class="text-danger">* {{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" value="{{ $student->lname }}">
                    @error('lname')
                        <small class="text-danger">* {{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $student->phone }}">
                    @error('phone')
                        <small class="text-danger">* {{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}">
                    @error('email')
                        <small class="text-danger">* {{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">Picture</label>
                    <input type="file" class="form-control" id="picture" name="picture">
                </div>
                <button type="submit" class="btn btn-primary">Update <i class="fa fa-edit"></i></button>
            </form>
        </div>
    </div>
</section>

@endsection
