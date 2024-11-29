
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
                                                <h4 class="card-title">Edit Project</h4>
                                            </div>
                                             
                                        </div>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12">
                                            <form action="{{route('projects.update',['id' => $projects->id])}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control"  value="{{$projects->name}}" type="text"  id="name" name="name" required>
                                                     </div>
                                                </div><!-- end row -->
                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Description</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="description" value="{{$projects->description}}" required id="description">
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row mb-3 mt-3 mt-xl-0">
                                                    <label for="example-date-input" class="col-md-2 col-form-label">Start Date</label>
                                                    <div class="col-md-10">
  
                                                        <input class="form-control" type="date" value="2019-08-19" value="{{$projects->start_date}}" id="start_date"  name="start_date">
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row mb-3 mt-3 mt-xl-0">
                                                    <label for="example-date-input" class="col-md-2 col-form-label">End Date</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="date" value="2023-01-19" value="{{$projects->end_date}}" name="end_date" id="end_date">
                                                    </div>
                                                </div><!-- end row -->
                                                <div style="    text-align: center;">
                                                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                                                </div>
                                                </form>
                                        </div><!-- end row -->
                                                              
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

     
                    </div> <!-- container-fluid -->
                </div>
                @endsection
 
 
</html>

