@extends('layouts.layouts')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <h4 class="card-title">tasks</h4>
                                    <div style="    text-align: end;">
                                        <a href="{{ route('tasks.create') }}" class="btn btn-primary w-md">Add task</a>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered border-primary mb-0">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>name</th>
                                                    <th>description</th>
                                                    <th>due_date</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead><!-- end thead -->
                                            <tbody>
                                                @foreach($tasks as $task)
                                                <tr>
                                                    <th scope="row">{{$task->id}}</th>
                                                    <td>{{$task->name}}</td>
                                                    <td>{{$task->description}}</td>
                                                    <td>{{$task->due_date}}</td>
                                                    <td> <a class="btn btn-outline-primary"
                                                            href="{{ route('tasks.edit', $task->id) }}">Edit Profile</a>
                                                    </td>
                                                    <td>
                                                        <form method="POST"
                                                            action="{{ route('tasks.destroy', $task->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-outline-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div><!-- end table responsive -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection