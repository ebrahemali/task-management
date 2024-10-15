@extends('layouts.layouts')

@section('content')
<div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Profile</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Utility</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="text-center border-end">
                                        <img src="{{ asset('storage/' . $user->profile_picture) }}"  class="img-fluid avatar-xxl rounded-circle" alt="Profile Picture" width="150">

                                            
                                            <h4 class="text-primary font-size-20 mt-3 mb-2"> {{ $user->name }}
    
</h4>
                                            <h5 class="text-muted font-size-13 mb-0">{{ $user->job }}</h5>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-md-9">
                                        <div class="ms-3">
                                            <div>
                                                <h4 class="card-title mb-2">Biography</h4>
                                                <p class="mb-0 text-muted">{{ $user->bio }}</p>
                                            </div>
                                            <div class="row my-4">
                                                <div class="col-md-12">
                                                    <div>
                                                        <p class="text-muted mb-2 fw-medium"><i
                                                                class="mdi mdi-email-outline me-2"></i>{{ $user->email }}
                                                        </p>
                                                        <p class="text-muted fw-medium mb-0"><i
                                                                class="mdi mdi-phone-in-talk-outline me-2"></i>{{ $user->phone }}
                                                        </p>
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        
                                            <ul class="nav nav-tabs nav-tabs-custom border-bottom-0 mt-3 nav-justfied"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active px-4" data-bs-toggle="tab"
                                                        href="#projects-tab" role="tab">
                                                        <span class="d-block d-sm-none"><i
                                                                class="fas fa-home"></i></span>
                                                        <span class="d-none d-sm-block">Projects</span>
                                                    </a>
                                                </li><!-- end li -->
                                                <li class="nav-item">
                                                    <a class="nav-link px-4" data-bs-toggle="tab" href="#tasks-tab"
                                                        role="tab">
                                                        <span class="d-block d-sm-none"><i
                                                                class="mdi mdi-menu-open"></i></span>
                                                        <span class="d-none d-sm-block">Tasks</span>
                                                    </a>
                                                </li><!-- end li -->
                                        
                                            </ul><!-- end ul -->
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end card body -->
                        </div><!-- end card -->

                        <div class="card">
                            <div class="tab-content p-4">
                                <div class="tab-pane active" id="projects-tab" role="tabpanel">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-1">
                                            <h4 class="card-title mb-4">Projects</h4>
                                        </div>
                                    </div>

                                    <div class="row" id="all-projects">
                                    @foreach($projects as $project)
         
   
                                    <div class="col-md-6" id="project-items-1">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex mb-3">
                                                        <div class="flex-grow-1 align-items-start">
                                                            <div>
                                                                <h6 class="mb-0 text-muted">
                                                                    <i
                                                                        class="mdi mdi-circle-medium text-danger fs-3 align-middle"></i>
                                                                    <span class="team-date">{{ \Carbon\Carbon::parse($project->start_date)->format('d M Y') }} </span>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                 
                                                    </div>

                                                    <div class="mb-4">
                                                        <h5 class="mb-1 font-size-17 team-title">{{$project->name}}</h5>
                                                        <p class="text-muted mb-0 team-description">{{$project->description}}
                                                          </p>
                                                    </div>
                                               
                                                </div><!-- end cardbody -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        @endforeach
                                 
                                    </div><!-- end row -->
                                </div><!-- end tab pane -->

                                <div class="tab-pane" id="tasks-tab" role="tabpanel">
                                    <h4 class="card-title mb-4">Tasks</h4>

                                    <div class="row">
                                    @foreach($tasks as $task)
                                        <div class="col-xl-12">
                                            <div class="task-list-box" id="landing-task">
                                                <div id="task-item-1">
                                                    <div class="card task-box rounded-3">
                                                        <div class="card-body">
                                                            <div class="row align-items-center">
                                                                <div class="col-xl-6 col-sm-5">
                                                                    <div class="checklist form-check font-size-15">
                                                                      
                                                                        <label class="form-check-label ms-1 task-title"
                                                                            for="customCheck1">{{$task->name}}</label>
                                                                            <label class="form-check-label ms-1 task-title"
                                                                            for="customCheck1">{{$task->description}}</label>
                                                                    </div>
                                                                </div><!-- end col -->
                                                            
                                                            </div><!-- end row -->
                                                        </div><!-- end cardbody -->
                                                    </div><!-- end card -->
                                                </div>
                                            </div><!-- end -->

                                          
                                        </div><!-- end col -->
                                        @endforeach
                                    </div><!-- end row -->
                                </div><!-- end tab pane -->

                             
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="pb-2">
                                    <h4 class="card-title mb-3">About</h4>
                                    <p> {{ $user->about }}</p>
                                    
                                    <!-- end ul -->
                                </div>
                                <hr>
                                <div class="pt-2">
                                    <h4 class="card-title mb-4">My Skill</h4>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <span class="badge badge-soft-secondary p-2"> {{ $user->skills }}</span>
                                        
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h4 class="card-title mb-4">Personal Details</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Name</th>
                                                    <td> {{ $user->name }}</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <th scope="row">Location</th>
                                                    <td> {{ $user->location }}</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <th scope="row">Language</th>
                                                    <td> {{ $user->language }}</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <th scope="row">portfolio</th>
                                                    <td> {{ $user->portfolio }}</td>
                                                </tr><!-- end tr -->
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h4 class="card-title mb-4">Work Experince</h4>
                                    <ul class="list-unstyled work-activity mb-0">
                                        <li class="work-item" data-date="2020-21">
                                          
                                            <p class="font-size-13 mb-2"> {{ $user->work_experience }}</p>
                                           
                                        </li>
                                       
                                    </ul><!-- end ul -->
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div> <!-- container-fluid -->
        </div>
@endsection