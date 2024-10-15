@extends('layouts.layouts')

@section('content')

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Basic Elements</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Form</a></li>
                                            <li class="breadcrumb-item active">Basic Elements</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center mb-0">
                                            <div class="flex-grow-1">
                                                <h4 class="card-title">Task</h4>
                                            </div>
                                             
                                        </div>
                                    </div><!-- end card header -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Task </div>
                <div class="card-body">
                <form method="POST" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
    @csrf
    <label for="name">Task Name:</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>

    <label for="description">Description:</label>
    <textarea name="description" class="form-control" id="description" required>{{ old('description') }}</textarea>

    <label for="due_date">Due Date:</label>
    <input type="date" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}" required>

    <label for="user_id">Assign to User:</label>
    <select name="user_id" class="form-control" id="user_id" required>
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>

    <label for="project_id">Project:</label>
    <select name="project_id" class="form-control" id="project_id" required>
        @foreach($projects as $project)
            <option value="{{ $project->id }}">{{ $project->name }}</option>
        @endforeach
    </select>
 

    <button  class="btn btn-primary w-md" type="submit">Save Task</button>
</form>

            </div>
        
    </form>
                  
                </div>
            </div>
        </div>
    </div> </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

     
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection
