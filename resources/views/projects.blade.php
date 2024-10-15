@extends('layouts.layouts')

@section('content')
 
<div class="page-content">
<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Projects</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                    <li class="breadcrumb-item active">Projects</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div>
   
    <div class="row mt-4" id="all-projects">
    @foreach($projects as $project)
        <div class="col-xl-3 col-md-6 team-box" id="project-items-1">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="flex-grow-1 align-items-start">
                            <div>
                                <h6 class="mb-0 text-muted">
                                    <i class="mdi mdi-circle-medium text-danger fs-3 align-middle"></i>
                                    <span class="team-date">{{$project->start_date}}</span>
                                </h6>
                            </div>
                        </div>
                      
                    </div>

                    <div class="mb-4">
                        <h5 class="mb-1 font-size-17 team-title"><a href="tasks-list">{{$project->name}}</a></h5>
                        <p class="text-muted mb-0 team-description">{{$project->description}}</p>
                    </div>
                 
                </div><!-- end card body-->
            </div><!-- end card -->
        </div><!-- end col -->
        @endforeach
  
     
    </div><!-- end row -->
</div>
</div> <!-- container-fluid -->
</div>
 
@endsection