@extends('layouts.app')

@section('title', 'Teachers')

@section('content')

<section class="h-100 mt-5">
    <div class="card w-100 bg-transparent text-light text-center border border-light">
        <div class="card-title text-start p-3 d-flex justify-content-between" style="align-items: baseline;">
            <h1>Teachers</h1>
            <a href="teachers-create.php" class="btn btn-success">Add Student <i class="fa fa-plus"></i></a>
        </div>
        <div class="card-body">
            <table class="table table-dark">
                <thead>
                    <tr class="table-light">
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Picture</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ahmed</td>
                        <td>ali</td>
                        <td><a href="mailto:ahmed.ali@gmail.com">ahmed.ali@gmail.com</a></td>
                        <td><a href="tel:+20104324323">+20104324323</a></td>
                        <td><img src="" width="50" height="50" alt="profile image"></td>
                        <td>
                            <a href="students-edit.php?id=" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="students.php?action=delete&id=" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
