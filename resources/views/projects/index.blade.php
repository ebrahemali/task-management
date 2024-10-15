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
                                                        <h4 class="card-title">Projects</h4>
                                                        <div style="    text-align: end;">
                                                        <a href="{{ route('projects.add-project') }}" class="btn btn-primary w-md">Add Project</a>

                                                                 </div>
                                                    </div><!-- end card header -->
                                                    <div class="card-body">                                        
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered border-primary mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>id</th>
                                                                        <th>title</th>
                                                                        <th>description</th>
                                                                        <th>start_date</th>
                                                                        <th>end_date</th>
                                                                        <th>Edit</th>
                                                                        <th>Delete</th>
                                                                    </tr>
                                                                </thead><!-- end thead -->
                                                                <tbody>
                                                                @foreach($projects as $project)
                <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->name}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->start_date}}</td>
                    <td>{{$project->end_date}}</td>
                                       <td><a href="{{route('projects.edit',['id' => $project->id])}}">Edit</a></td> 
                                       <td><a href="{{route('projects.destroy',['id' => $project->id])}}">Delete</a></td>

           
                       </tr>
                @endforeach
                                                           
                                                                  
                                                                     
                                                                </tbody><!-- end tbody -->
                                                            </table><!-- end table -->
                                                        </div><!-- end table responsive -->
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end col -->
                                            </div> </div> </div> </div> </div> </div>
            
        @endsection
