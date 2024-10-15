@extends('../layouts.layouts')
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
                                <h4 class="card-title">Edit Task</h4>
                            </div>
                        </div>
                    </div><!-- end card header -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Edit Task</div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('tasks.update', $task->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <!-- لتحديد أن هذه العملية هي تحديث -->

                                            <div class="form-group">
                                                <label for="name">Task Name:</label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    value="{{ old('name', $task->name) }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description:</label>
                                                <textarea name="description" id="description" class="form-control"
                                                    required>{{ old('description', $task->description) }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="due_date">Due Date:</label>
                                                <input type="date" name="due_date" id="due_date" class="form-control"
                                                    value="{{ old('due_date', $task->due_date) }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="user_id">Assign to User:</label>
                                                <select name="user_id" id="user_id" class="form-control" required>
                                                    @foreach($users as $user)
                                                    <option value="{{ $user->id }}"
                                                        {{ $user->id == $task->user_id ? 'selected' : '' }}>
                                                        {{ $user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="project_id">Project:</label>
                                                <select name="project_id" id="project_id" class="form-control" required>
                                                    @foreach($projects as $project)
                                                    <option value="{{ $project->id }}"
                                                        {{ $project->id == $task->project_id ? 'selected' : '' }}>
                                                        {{ $project->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>



                                            <div class="form-group">
                                                <label for="completed">Completed:</label>
                                                <input type="checkbox" name="completed" id="completed"
                                                    {{ $task->completed ? 'checked' : '' }}>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Update Task</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->


    </div> <!-- container-fluid -->
</div>
@endsection