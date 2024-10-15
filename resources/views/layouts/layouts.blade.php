<!doctype html>
<html lang="en">


<!-- Mirrored from preview.pichforest.com/probic/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Oct 2024 22:57:19 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Task Managment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Pichforest" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">

    <!-- choice plugin css -->
    <link href="../../assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />

    <link href="../../assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" />

    <!-- dragula css -->
    <link href="../../assets/libs/dragula/dragula.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="../../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="../../assets/images/images.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="../../assets/images/images.png" alt="" height="22">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="../../assets/images/images.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="../../assets/images/images.png" alt="" height="22">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                  

                     
                </div>

                <div class="d-flex">
                   
                    <div>

                    </div>
                 
                   
                 
 

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item user text-start d-flex align-items-center"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            @if(Auth::check()) <!-- التحقق إذا كان هناك مستخدم مسجل -->
            
                            <img class="rounded-circle header-profile-user" src="{{ asset('storage/' . $authUser->profile_picture) }}" alt="User Image" style="width: 50px; height: 50px; border-radius: 50%;">
                            <span class="ms-2 d-none d-sm-block user-item-desc">
                                <span class="user-name">{{ $authUser->name }}</span>
                                <span class="user-sub-title">{{ $authUser->job }}</span>
                            </span>
        @endif
                                         
                        </button>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="p-3 bg-primary border-bottom">
                            @if(Auth::check()) 
                                <h6 class="mb-0 text-white">{{ $authUser->name }}</h6>
                                <p class="mb-0 font-size-11 text-white-50 fw-semibold">{{ $authUser->email }}</p>
                                @endif  </div>
                            <a class="dropdown-item" href="profile"><i
                                    class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span
                                    class="align-middle">Profile</span></a>

                            <a class="dropdown-item" href="profile"><i
                                    class="mdi mdi-calendar-check-outline text-muted font-size-16 align-middle me-1"></i>
                                <span class="align-middle">Taskboard</span></a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="../../assets/images/images.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="../../assets/images/images.png" alt="" height="22">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="../../assets/images/images.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="../../assets/images/images.png" alt="" height="22">
                    </span>
                    <span class="logo-lg-brand">
                        <img src="../../assets/images/images.png" alt="" height="22">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">

                        <li class="menu-title" data-key="t-applications">Applications</li>

                       
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="users"></i>
                                <span class="menu-item" data-key="t-team-overview">User</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('profiles.create') }}" data-key="t-projects">Add User</a></li>
                                <li><a href="{{ route('profiles.index') }}" data-key="t-employee">User List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="briefcase"></i>
                                <span class="menu-item" data-key="t-contacts">Projects</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('projects.index') }}" data-key="t-task-list">Project List</a></li>
                                <li><a href="{{ route('projects.add-project') }}" data-key="t-file-manager">Create Project</a></li>
                             </ul>
                        </li>  
                        
                        <li>
                            <a href="form-elements.html">
                                <i class="icon nav-icon" data-feather="edit-3"></i>
                                <span class="menu-item" data-key="t-forms">Task</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('tasks.create') }}" data-key="t-projects">Add Task</a></li>
                                <li><a href="{{ route('tasks.index') }}" data-key="t-employee">Task List</a></li>
                            </ul>
                        </li>     
                        <li><a href="{{ route('profile') }}" data-key="t-task-list">profile</a></li>
                        <li><a href="{{ route('projects') }}" data-key="t-task-list">projects</a></li>

                        <li><a href="{{ route('register') }}" data-key="t-task-list">register</a></li>
                                <li><a href="{{ route('login') }}" data-key="t-task-list">login</a></li>
                                <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
  


                        
                     
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">


            <!-- End Page-content -->

            <!-- Projects Details Modal -->
            <div class="modal fade bs-task-details" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content border-0">
                        <div class="modal-header border-bottom-0 pb-0 pt-2">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id="edit-modal"></button>
                        </div>
                        <div class="modal-body pt-0 py-4">
                            <div class="ps-2 pe-4">
                                <h5 class="modal-title font-size-14 text-primary mb-2">#PM0020</h5>
                                <h5 class="mb-2">Probic : Dashboard UI</h5>
                            </div>
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="ps-2 pe-4" data-simplebar style="max-height: 690px;">
                                        <p class="text-muted">All the Lorem Ipsum generators on the Internet tend to
                                            repeat
                                            predefined chunks as necessary, making this the first true generator on the
                                            Internet.</p>
                                        <div class="mt-4">
                                            <h6 class="font-size-13 text-muted">Checklist</h6>
                                            <h5 class="font-size-17">General Tasks</h5>
                                            <div class="mt-3" id="general-tasks">
                                                <div class="sub-group-item">
                                                    <div
                                                        class="checklist d-flex bg-light py-1 font-size-16 px-3 rounded form-check align-items-center mb-2">
                                                        <div class="flex-grow-1">
                                                            <input type="checkbox" class="form-check-input ms-0"
                                                                id="custom_Design">
                                                            <label class="form-check-label font-size-15 mb-0 ms-3"
                                                                for="custom_Design">Brand Logo Design.</label>
                                                        </div>
                                                        <div>
                                                            <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div><!-- end -->
                                                <div class="sub-group-item">
                                                    <div
                                                        class="checklist d-flex bg-light py-1 px-3 font-size-16 rounded form-check align-items-center mb-2">
                                                        <div class="flex-grow-1">
                                                            <input type="checkbox" class="form-check-input ms-0"
                                                                id="Multi_Design" checked>
                                                            <label class="form-check-label font-size-15 mb-0 ms-3"
                                                                for="Multi_Design">Multipurpose Design.</label>
                                                        </div>
                                                        <div>
                                                            <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div><!-- end -->
                                                <div class="sub-group-item">
                                                    <div
                                                        class="checklist d-flex bg-light font-size-16 py-1 px-3 rounded form-check align-items-center mb-2">
                                                        <div class="flex-grow-1">
                                                            <input type="checkbox" class="form-check-input ms-0"
                                                                id="app_Design">
                                                            <label class="form-check-label font-size-15 mb-0 ms-3"
                                                                for="app_Design">App Pages.</label>
                                                        </div>
                                                        <div>
                                                            <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div><!-- end -->
                                                <div class="sub-group-item">
                                                    <div
                                                        class="checklist d-flex bg-light py-1 px-3 rounded form-check align-items-center font-size-16 mb-2">
                                                        <div class="flex-grow-1">
                                                            <input type="checkbox" class="form-check-input ms-0"
                                                                id="galleryDesign">
                                                            <label class="form-check-label font-size-15 mb-0 ms-3"
                                                                for="galleryDesign">Gallery Pages.</label>
                                                        </div>
                                                        <div>
                                                            <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div><!-- end -->
                                            </div><!-- end -->
                                            <div class="mt-4">
                                                <h5 class="font-size-17 mb-0">Comments</h5>
                                            </div>
                                            <div class="border rounded mt-3">
                                                <form action="#">
                                                    <textarea rows="3"
                                                        class="form-control border-0 resize-none task-comment"
                                                        placeholder="Add a Comments..."></textarea>
                                                    <div class="px-2 bg-light">
                                                        <div class="btn-group" role="group">
                                                            <button type="button"
                                                                class="btn btn-sm btn-link shadow-none text-dark">
                                                                <i class="mdi mdi-link-variant"></i></button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-link shadow-none text-dark">
                                                                <i
                                                                    class="mdi mdi-emoticon-excited-outline"></i></button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-link shadow-none text-dark">
                                                                <i class="mdi mdi-at"></i></button>
                                                        </div>
                                                        <div class="float-end">
                                                            <button type="button"
                                                                class="btn btn-sm btn-link shadow-none text-dark">
                                                                <i class="mdi mdi-send send-task-comment"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form><!-- end form -->
                                            </div>
                                            <div id="comments">
                                                <div class="d-flex mt-2 align-items-start border-bottom py-4">
                                                    <img class="me-3 rounded-circle avatar-sm"
                                                        src="../../assets/images/users/avatar-2.jpg" alt="">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-15 mt-0 mb-1">Denny Silva
                                                            <small class="text-muted float-end">01:23 PM</small>
                                                        </h5>
                                                        <p class="text-muted">To achieve this, it would be necessary to
                                                            have
                                                            uniform pronunciation. But I must explain to you how all
                                                            this
                                                            mistaken idea of denouncing pleasure and praising pain was
                                                            born
                                                            and
                                                            I will complete account the system, and expound the actual
                                                            teachings
                                                            of the great explorer.</p>

                                                        <a href="javascript: void(0);"
                                                            class="text-muted font-size-13 d-inline-block"><i
                                                                class="mdi mdi-reply me-1"></i>Reply</a>
                                                    </div>
                                                </div><!-- end -->

                                                <div class="d-flex mt-2 align-items-start border-bottom py-4">
                                                    <img class="me-3 rounded-circle avatar-sm"
                                                        src="../../assets/images/users/avatar-10.jpg" alt="">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-15 mt-0 mb-1">Jansh Wells
                                                            <small class="text-muted float-end">11:06 AM</small>
                                                        </h5>
                                                        <p class="text-muted">Thanks for the help !!</p>

                                                        <a href="javascript: void(0);"
                                                            class="text-muted font-size-13 d-inline-block"><i
                                                                class="mdi mdi-reply me-1"></i>Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end mt-3">
                                        <button type="button" class="btn btn-light shadow-none" data-bs-dismiss="modal"
                                            id="cancelMember">Cancel</button>
                                        <button type="button" class="btn btn-soft-primary shadow-none"
                                            id="createnote">Update</button>
                                    </div>
                                </div><!-- end col -->

                                <div class="col-xl-4">
                                    <div class="pe-2 mt-4 mt-xl-0">
                                        <div class="card bg-light">
                                            <div class="card-body">
                                                <h6 class="mb-0">Attributes</h6>
                                                <hr>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless table-sm mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th class="text-muted font-size-14">Status</th>
                                                                <th class="text-end font-size-13">
                                                                    <span class="badge badge-soft-primary p-2">In
                                                                        Progress</span>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-muted font-size-14">Priority</th>
                                                                <th class="text-end font-size-13">
                                                                    <span class="badge badge-soft-danger p-2">
                                                                        <i
                                                                            class="mdi mdi-alert-circle-outline text-danger me-1"></i>High</span>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-muted font-size-14">Label</th>
                                                                <th class="text-end font-size-13">None</th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-muted font-size-14">Repoter</th>
                                                                <th class="text-end font-size-13">Ayaan Curry</th>
                                                            </tr>
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->
                                                </div><!-- end table responsive -->
                                            </div><!-- end card-body -->
                                        </div><!-- end card -->

                                        <div class="card bg-light">
                                            <div class="card-body">
                                                <h6 class="mb-0">Team Members</h6>
                                                <hr>
                                                <div class="d-flex">
                                                    <div id="allmember" class="flex-grow-1"></div>
                                                    <div class="align-self-end">
                                                        <button class="btn btn-soft-secondary shadow-none btn-sm"
                                                            id="add-members" data-bs-toggle="modal"
                                                            data-bs-target=".add-members">+ Add Members</button>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->

                                        <div class="card mb-0 bg-light">
                                            <div class="card-body">
                                                <h6 class="mb-0">Files</h6>
                                                <hr>
                                                <div class="card mb-2 p-2 fade show" id="file-items-1">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-3 ms-0 flex-shrink-0">
                                                            <div
                                                                class="avatar-title bg-light text-muted rounded font-size-20">
                                                                <i class="mdi mdi-folder-zip"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div class="text-start">
                                                                <h5 class="font-size-14 mb-1">document.zip</h5>
                                                                <p class="text-muted font-size-13 mb-0">5.9 MB</p>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="delete-item" data-id="file-items-1"><i
                                                                class="mdi mdi-trash-can-outline text-danger font-size-16"></i></a>
                                                    </div>
                                                </div>
                                                <!-- end card -->
                                                <div class="card mb-2 p-2 fade show" id="file-items-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-3 ms-0 flex-shrink-0">
                                                            <div
                                                                class="avatar-title bg-light text-muted rounded font-size-20">
                                                                <i class="mdi mdi-text-box-check"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div class="text-start">
                                                                <h5 class="font-size-14 mb-1">file_update.docx</h5>
                                                                <p class="text-muted font-size-13 mb-0">2.0 MB</p>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="delete-item" data-id="file-items-2">
                                                            <i
                                                                class="mdi mdi-trash-can-outline text-danger font-size-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end card -->

                                                <div class="card mb-0 p-2 fade show" id="file-items-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-3 ms-0 flex-shrink-0">
                                                            <div
                                                                class="avatar-title bg-light text-muted rounded font-size-20">
                                                                <i class="mdi mdi-file-code"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="text-start">
                                                                <h5 class="font-size-14 mb-1">widgets-changes.txt</h5>
                                                                <p class="text-muted font-size-13 mb-0">2.0 MB</p>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="delete-item" data-id="file-items-3"><i
                                                                class="mdi mdi-trash-can-outline text-danger font-size-16"></i></a>
                                                    </div>
                                                </div><!-- end card -->
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- KanbanBoard Card Edit Modal -->
            <div class="modal fade bs-task-details-edit" tabindex="-1" role="dialog" id="modalForm" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0 add-task-title" id="add-task-title">Add New Task</h5>
                            <h5 class="modal-title mt-0 update-task-title" id="update-task-title"
                                style="display: none;">
                                Update Task</h5>
                            <button type="button" id="update-task" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="NewtaskForm">
                                <div class="mb-3">
                                    <label for="taskname" class="form-label">Project Name</label>
                                    <input id="taskname" name="taskname" type="text" class="form-control validate"
                                        placeholder="Enter Project Name..." required>
                                </div>
                                <div class="mb-3">
                                    <label for="taskdesc" class="form-label">Project Description</label>
                                    <textarea id="taskdesc" class="form-control" name="taskdesc"
                                        placeholder="Add Description"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6" id="taskbudget">
                                        <div class="mb-3">
                                            <label for="task-due-date" class="form-label">Due Date</label>
                                            <input class="form-control" type="date" value="2021-09-20"
                                                id="task-due-date" required>
                                        </div><!-- end -->
                                    </div><!-- end col -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Categories</label>
                                            <div>
                                                <select class="form-control" data-trigger name="TaskStatus"
                                                    id="TaskStatus" required>
                                                    <option value="">Choose...</option>
                                                    <option value="Web Design">Web Design</option>
                                                    <option value="UI/UX">UI/UX</option>
                                                    <option value="React">React</option>
                                                </select>
                                            </div>
                                        </div><!-- end -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <div class="mb-3" id="task-progressbar">
                                    <label for="taskprogressbar" class="form-label">Progress</label>
                                    <input id="taskprogressbar" name="taskprogressbar" type="number" required
                                        class="form-control validate" placeholder="Enter Progress Bar Number...">
                                </div>

                                <div class="pt-2">
                                    <p class="fw-medium mb-3">Add Team Member</p>
                                    <ul class="list-unstyled user-list validate mt-2" id="taskassignee" data-simplebar
                                        style="max-height: 160px;">
                                        <li>
                                            <div
                                                class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-1"
                                                    name="member[]" data-type="image">
                                                <img src="../../assets/images/users/avatar-1.jpg"
                                                    class="rounded-circle avatar-sm" alt="">
                                                <label class="form-check-label font-size-14 mb-0 ms-3"
                                                    for="member-1">Albert
                                                    Rodarte</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-2"
                                                    name="member[]" data-type="image">
                                                <img src="../../assets/images/users/avatar-2.jpg"
                                                    class="rounded-circle avatar-sm" alt="">
                                                <label class="form-check-label font-size-14 mb-0 ms-3"
                                                    for="member-2">Denny
                                                    Silva</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-10"
                                                    name="member[]" data-type="image">
                                                <img src="../../assets/images/users/avatar-10.jpg"
                                                    class="rounded-circle avatar-sm" alt="">
                                                <label class="form-check-label font-size-14 mb-0 ms-3"
                                                    for="member-10">Jansh
                                                    Wells</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-3"
                                                    name="member[]" data-type="image">
                                                <img src="../../assets/images/users/avatar-3.jpg"
                                                    class="rounded-circle avatar-sm" alt="">
                                                <label class="form-check-label font-size-14 mb-0 ms-3"
                                                    for="member-3">Adrian
                                                    Rodarte</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-4"
                                                    name="member[]" data-type="image">
                                                <img src="../../assets/images/users/avatar-4.jpg"
                                                    class="rounded-circle avatar-sm" alt="">
                                                <label class="form-check-label ms-3 font-size-14 mb-0"
                                                    for="member-4">Frank
                                                    Hamilton</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-5"
                                                    name="member[]" data-type="image">
                                                <img src="../../assets/images/users/avatar-5.jpg"
                                                    class="rounded-circle avatar-sm" alt="">
                                                <label class="form-check-label ms-3 font-size-14 mb-0"
                                                    for="member-5">Justin
                                                    Howard</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-6"
                                                    name="member[]" data-type="image">
                                                <img src="../../assets/images/users/avatar-6.jpg"
                                                    class="rounded-circle avatar-sm" alt="">
                                                <label class="form-check-label ms-3 font-size-14 mb-0"
                                                    for="member-6">Michael Lawrence</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-7"
                                                    name="member[]" data-type="image">
                                                <img src="../../assets/images/users/avatar-7.jpg"
                                                    class="rounded-circle avatar-sm" alt="">
                                                <label class="form-check-label ms-3 font-size-14 mb-0"
                                                    for="member-7">Oliver
                                                    Sharp</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-8"
                                                    name="member[]" data-type="image">
                                                <img src="../../assets/images/users/avatar-8.jpg"
                                                    class="rounded-circle avatar-sm" alt="">
                                                <label class="form-check-label font-size-14 mb-0 ms-3"
                                                    for="member-8">Richard Simpson</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-9"
                                                    name="member[]" data-type="image">
                                                <img src="../../assets/images/users/avatar-9.jpg"
                                                    class="rounded-circle avatar-sm" alt="">
                                                <label class="form-check-label ms-3 font-size-14 mb-0"
                                                    for="member-9">Dan
                                                    Gibson</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-15"
                                                    name="member[]" data-type="dataimage">
                                                <div class="avatar-sm">
                                                    <div class="avatar-title rounded-circle bg-primary">
                                                        D
                                                    </div>
                                                </div>
                                                <label class="form-check-label font-size-14 mb-0 ms-3"
                                                    for="member-15">Den
                                                    Hudda</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-12"
                                                    name="member[]" data-type="dataimage">
                                                <div class="avatar-sm">
                                                    <div class="avatar-title rounded-circle bg-purple">
                                                        J
                                                    </div>
                                                </div>
                                                <label class="form-check-label ms-3 font-size-14 mb-0"
                                                    for="member-12">Jim
                                                    Lee</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-13"
                                                    name="member[]" data-type="dataimage">
                                                <div class="avatar-sm">
                                                    <div class="avatar-title rounded-circle bg-primary">
                                                        V
                                                    </div>
                                                </div>
                                                <label class="form-check-label ms-3 font-size-14 mb-0"
                                                    for="member-13">Vihan
                                                    Bragg</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-14"
                                                    name="member[]" data-type="dataimage">
                                                <div class="avatar-sm">
                                                    <div class="avatar-title rounded-circle bg-purple">
                                                        L
                                                    </div>
                                                </div>
                                                <label class="form-check-label ms-3 font-size-14 mb-0"
                                                    for="member-14">Lisa
                                                    Freeman</label>
                                            </div>
                                        </li><!-- end li -->
                                    </ul><!-- end ul -->
                                </div>
                                <!-- end -->

                                <div class="mt-3">
                                    <p class="fw-medium mb-0">Sub Tasks</p>
                                    <div id="sub-tasks" class="mt-1">
                                        <div>
                                            <div class="sub-group-item">
                                                <div
                                                    class="checklist px-0 d-flex form-check font-size-16 align-items-center font-size-15">
                                                    <div class="flex-grow-1">
                                                        <input type="checkbox" name="subtask"
                                                            class="form-check-input ms-0" id="customDesign">
                                                        <label class="form-check-label font-size-14 mb-0 ms-3"
                                                            for="customDesign">Brand Logo Design.</label>
                                                    </div>
                                                    <div>
                                                        <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                    </div>
                                                </div><!-- end -->
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sub-group-item">
                                                <div
                                                    class="checklist px-0 d-flex form-check font-size-16 align-items-center font-size-15">
                                                    <div class="flex-grow-1">
                                                        <input type="checkbox" name="subtask"
                                                            class="form-check-input ms-0" id="multiDesign" checked>
                                                        <label class="form-check-label font-size-14 mb-0 ms-3"
                                                            for="multiDesign">Multipurpose Design.</label>
                                                    </div>
                                                    <div>
                                                        <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                    </div>
                                                </div><!-- end -->
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sub-group-item">
                                                <div
                                                    class="checklist px-0 d-flex form-check font-size-16 align-items-center font-size-15">
                                                    <div class="flex-grow-1">
                                                        <input type="checkbox" name="subtask"
                                                            class="form-check-input ms-0" id="appDesign">
                                                        <label class="form-check-label font-size-14 mb-0 ms-3"
                                                            for="appDesign">App Pages.</label>
                                                    </div>
                                                    <div>
                                                        <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                    </div>
                                                </div><!-- end -->
                                            </div>
                                        </div><!-- end -->
                                    </div>

                                    <div class="row px-0 mt-2">
                                        <div class="col">
                                            <input type="text" id="myInput" class="form-control"
                                                placeholder="Type task">
                                        </div>
                                        <div class="col-auto">
                                            <span onclick="newElement()" class="btn btn-light float-end">Add
                                                Tasks</span>
                                        </div>
                                    </div><!-- end -->
                                </div>

                                <div class="mt-4" id="attachments-files"></div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-primary addtask" id="addtask">Create
                                            Task</button>
                                        <button type="submit" class="btn btn-primary updatetaskdetail"
                                            id="updatetaskdetail">Update
                                            Task</button>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- Add Member Modal -->
            <div class="modal fade add-members" tabindex="-1" role="dialog" aria-labelledby="addMemberModal"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content border shadow">
                        <div class="modal-header bg-soft-primary">
                            <h5 class="modal-title font-size-16 text-primary" id="addMemberModal">Employee List</h5>
                            <button type="button" class="btn-close" id="save-employee" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <!-- end modal header -->
                        <div class="modal-body">
                            <div id="member-list"></div>
                            <div class="search-box mt-2 py-2 px-4">
                                <div class="position-relative">
                                    <input type="text" class="form-control rounded" placeholder="Search...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                            <!-- end search box -->
                            <div data-simplebar style="max-height: 300px;">

                                <ul class="list-unstyled p-3 pb-0 mb-0" id="member-lists">
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-1" name="member[]" data-name="Albert Rodarte"
                                                data-image="../../assets/images/users/avatar-1.jpg" data-type="image"
                                                data-id="member-item-1">
                                            <img src="../../assets/images/users/avatar-1.jpg"
                                                class="rounded-circle avatar-sm ms-3" alt="">
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-1">Albert
                                                Rodarte</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-2" name="member[]" data-name="Denny Silva"
                                                data-id="member-item-2">
                                            <img src="../../assets/images/users/avatar-2.jpg"
                                                class="rounded-circle avatar-sm ms-3" alt="">
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-2">Denny
                                                Silva</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-10" name="member[]" data-name="Jansh Wells"
                                                data-image="../../assets/images/users/avatar-10.jpg" data-type="image"
                                                data-id="member-item-10">
                                            <img src="../../assets/images/users/avatar-10.jpg"
                                                class="rounded-circle avatar-sm ms-3" alt="">
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-10">Jansh
                                                Wells</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-3" name="member[]" data-name="Adrian Rodarte"
                                                data-image="../../assets/images/users/avatar-3.jpg" data-type="image"
                                                data-id="member-item-3">
                                            <img src="../../assets/images/users/avatar-3.jpg"
                                                class="rounded-circle avatar-sm ms-3" alt="">
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-3">Adrian
                                                Rodarte</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-4" name="member[]" data-name="Frank Hamilton"
                                                data-image="../../assets/images/users/avatar-4.jpg" data-type="image"
                                                data-id="member-item-4">
                                            <img src="../../assets/images/users/avatar-4.jpg"
                                                class="rounded-circle avatar-sm ms-3" alt="">
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-4">Frank
                                                Hamilton</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-5" name="member[]" data-name="Justin Howard"
                                                data-image="../../assets/images/users/avatar-5.jpg" data-type="image"
                                                data-id="member-item-5">
                                            <img src="../../assets/images/users/avatar-5.jpg"
                                                class="rounded-circle avatar-sm ms-3" alt="">
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-5">Justin
                                                Howard</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-6" name="member[]" data-name="Michael Lawrence"
                                                data-image="../../assets/images/users/avatar-6.jpg" data-type="image"
                                                data-id="member-item-6">
                                            <img src="../../assets/images/users/avatar-6.jpg"
                                                class="rounded-circle avatar-sm ms-3" alt="">
                                            <label class="form-check-label font-size-14 ms-3 mb-0"
                                                for="member-6">Michael
                                                Lawrence</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-7" name="member[]" data-name="Oliver Sharp"
                                                data-image="../../assets/images/users/avatar-7.jpg" data-type="image"
                                                data-id="member-item-7">
                                            <img src="../../assets/images/users/avatar-7.jpg"
                                                class="rounded-circle avatar-sm ms-3" alt="">
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-7">Oliver
                                                Sharp</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-8" name="member[]" data-name="Richard Simpson"
                                                data-image="../../assets/images/users/avatar-8.jpg" data-type="image"
                                                data-id="member-item-8">
                                            <img src="../../assets/images/users/avatar-8.jpg"
                                                class="rounded-circle avatar-sm ms-3" alt="">
                                            <label class="form-check-label font-size-14 ms-3 mb-0"
                                                for="member-8">Richard
                                                Simpson</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-9" name="member[]" data-name="Dan Gibson"
                                                data-image="../../assets/images/users/avatar-9.jpg" data-type="image"
                                                data-id="member-item-9">
                                            <img src="../../assets/images/users/avatar-9.jpg"
                                                class="rounded-circle avatar-sm ms-3" alt="">
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-9">Dan
                                                Gibson</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-15" name="member[]" data-name="Den Hudda" data-image="D"
                                                data-type="dataimage" data-id="member-item-1">
                                            <div class="avatar-sm ms-3">
                                                <div class="avatar-title rounded-circle bg-primary">
                                                    D
                                                </div>
                                            </div>
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-15">Den
                                                Hudda</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-12" name="member[]" data-name="Jim Lee" data-image="J"
                                                data-type="dataimage" data-id="member-item-12">
                                            <div class="avatar-sm ms-3">
                                                <div class="avatar-title rounded-circle bg-purple">
                                                    J
                                                </div>
                                            </div>
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-12">Jim
                                                Lee</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-13" name="member[]" data-name="Vihan Bragg"
                                                data-image="V" data-type="dataimage" data-id="member-item-13">
                                            <div class="avatar-sm ms-3">
                                                <div class="avatar-title rounded-circle bg-primary">
                                                    V
                                                </div>
                                            </div>
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-13">Vihan
                                                Bragg</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input member-list-checkbox" type="checkbox"
                                                id="list-member-14" name="member[]" data-name="Lisa Freeman"
                                                data-image="L" data-type="dataimage" data-id="member-item-14">
                                            <div class="avatar-sm ms-3">
                                                <div class="avatar-title rounded-circle bg-purple">
                                                    L
                                                </div>
                                            </div>
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-14">Lisa
                                                Freeman</label>
                                        </div>
                                    </li><!-- end li -->
                                </ul><!-- end ul -->
                            </div>
                        </div><!-- /.modal body -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-soft-primary" id="saveAllMember">Save</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- Add New Board modal -->
            <div class="modal fade bs-add-new-board" id="bs-add-new-board" tabindex="-1" role="dialog"
                aria-labelledby="myNewBoardModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-header bg-soft-primary">
                            <h5 class="modal-title font-size-16 text-primary" id="myNewBoardModal">Add Board</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id="btn-close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="#" method="post">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Board Name</label>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button id="taskboardStageCreat" type="button" class="btn btn-soft-primary">Create</button>
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            @yield('content')
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                            document.write(new Date().getFullYear())
                            </script> © Probic.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a
                                    href="https://pichforest.com/" target="_blank" class="text-reset">Pichforest</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    </body>

    <!-- Bootstrap JS -->
    <script src="../../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Metismenu Js -->
    <script src="../../assets/libs/metismenujs/metismenujs.min.js"></script>

    <!-- Simplebar Js -->
    <script src="../../assets/libs/simplebar/simplebar.min.js"></script>

    <!-- Feather Js -->
    <script src="../../assets/libs/feather-icons/feather.min.js"></script>


    <!-- dragula plugins -->
    <script src="../../assets/libs/dragula/dragula.min.js"></script>

    <!-- dom autoscroll -->
    <script src="../../assets/libs/dom-autoscroller/dom-autoscroller.min.js"></script>

    <!-- choice plugins -->
    <script src="../../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- flatpickr js -->
    <script src="../../assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- moment Js -->
    <script src="../../assets/js/pages/moment.js"></script>

    <!-- kanbanboard Js -->
    <script src="../../assets/js/pages/kanbanboard.init.js"></script>

    <!-- team project remove -->
    <script src="../../assets/js/pages/remove.init.js"></script>

    <!-- flatpickr init -->
    <script src="../../assets/js/pages/flatpickr.init.js"></script>

    <!-- choice init -->
    <script src="../../assets/js/pages/choices.init.js"></script>

    <!-- custom Js -->
    <script src="../../assets/js/app.js"></script>




<!-- Mirrored from preview.pichforest.com/probic/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Oct 2024 22:57:54 GMT -->

</html>