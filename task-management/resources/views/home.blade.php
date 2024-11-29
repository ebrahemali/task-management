@extends('layouts.layouts')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Task Management</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Task Management</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

    </div> <!-- container-fluid -->

    <div class="row"> </div>
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body p-4 pb-0">
                <div class="pb-3 mb-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <div class="flex-1">
                                    <h5 class="mb-1 text-uppercas">Probic Admin Dashboard</h5>
                                    <p class="text-muted mb-0">A Kanban template will ease your
                                        transition into a new project management method.</p>
                                </div>
                            </div>
                           
                        </div><!-- end col -->

                        <div class="col-sm-6">
                            <div class="d-flex flex-wrap justify-content-sm-end align-items-center mt-4 mt-md-0">
                                <div class="me-3">
                                    <h6 class="fw-medium text-muted mb-0">Members :-</h6>
                                </div>
                                <div class="avatar-group">
                                    @foreach($users as $user)
                                    <div class="avatar-group-item">
                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="{{ $user->name }}">
                                            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt=""
                                                class="rounded-circle avatar-sm">
                                        </a>
                                    </div>
                                    @endforeach

                                </div><!-- end avatar group -->
                            </div><!-- end -->

                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>

                <div class="task-board" id="kanbanboard">
                    @foreach($projects as $project)

                    <div class="task-list" id="remove-item-15">
                        <div class="card bg-light shadow-none card-h-100">
                            <div class="card-header bg-transparent border-bottom-0 d-flex align-items-center">
                                <div class="flex-1">
                                    <h4 class="card-title mb-0" id="edit-text-5">
                                        <span class="board-column-header" id="edit-input-5">{{$project->name}}</span>
                                    </h4>
                                 
                                </div>
                               
                            </div><!-- end card-header -->

                            <div>
                                <div data-simplebar class="tasklist-content pt-0 p-3">
                                    <div id="done-task" class="task d-flex flex-column">

                                        <div class="card task-box shadow-none" id="remove-item-12">
                                            <div class="card-body">



                                                <p class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                    {{$project->description}}
                                                </p>

                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted font-size-13 fw-medium mb-2">
                                                            <i class="mdi mdi-calendar-range me-1"></i><span
                                                                class="due-date">{{$project->start_date}}</span>
                                                        </p>
                                                    </div>


                                                </div>
                                                <div class="d-flex">
                                                    <div id="all-member-lists-12" class="flex-grow-1">
                                                        <div class="avatar-group float-start task-assigne">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    value="member-1" title="Rita Callahan">
                                                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                        class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    value="member-5" title="Timothy Turner">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                                        class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    value="member-10" title="Joycelyn Blanchard">
                                                                    <img src="assets/images/users/avatar-10.jpg" alt=""
                                                                        class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title rounded-circle bg-warning text-white font-size-14">
                                                                        +1
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end avatar group -->
                                                    </div>

                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end task card -->


                                    </div>
                                </div><!-- end data - simplebar -->

                            </div>
                        </div><!-- end card -->
                    </div><!-- end tasklist -->
                    @endforeach
                </div>
            </div><!-- end card body -->
        </div><!-- end card  -->
    </div><!-- end col -->
</div><!-- end row -->
@endsection