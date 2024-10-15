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
                                                        <h4 class="card-title">profiless</h4>
                                                        <div style="    text-align: end;">
                                                        <a href="{{ route('profiles.create') }}" class="btn btn-primary w-md">Add profile</a>

                                                                 </div>
                                                    </div><!-- end card header -->
                                                    <div class="card-body">                                        
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered border-primary mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>id</th>
                                                                        <th>name</th>
                                                                        <th>job</th>
                                                                        <th>email</th>
                                                                        <th>phone</th>
                                                                        <th>Edit</th>
                                                                        <th>Delete</th>
                                                                    </tr>
                                                                </thead><!-- end thead -->
                                                                <tbody>
                                                                @foreach($profiles as $profile)
                <tr>
                    <th scope="row">{{$profile->id}}</th>
                    <td>{{$profile->name}}</td>
                    <td>{{$profile->job}}</td>
                    <td>{{$profile->email}}</td>
                    <td>{{$profile->phone}}</td>
 
                                       <td>  <a class="btn btn-outline-primary" href="{{ route('profiles.edit', $profile->id) }}">Edit Profile</a></td>
                                       <td>     <form method="POST" action="{{ route('profiles.destroy', $profile->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger">Delete</button>
</form> </td>
                                      
           
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
