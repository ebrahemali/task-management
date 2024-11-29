@extends('../layouts.layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Profile </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profiles.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" class="form-control" id="name" name="name" required
                                    placeholder="Enter username">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="job">job</label>
                                <input type="text" class="form-control" id="job" name="job" required
                                    placeholder="Enter job">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bio">Bio</label>
                                <input type="text" class="form-control" id="bio" name="bio" required
                                    placeholder="Enter Bio">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="phone">phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required
                                    placeholder="Enter phone">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">email</label>
                                <input type="text" class="form-control" id="email" name="email" required
                                    placeholder="Enter email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="password">password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    name="password" required partlaceholder="Enter password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="password">Confirm password</label>
                                <input type="password" class="form-control" id="password-confirm"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Enter password confirm">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="location">location</label>
                                <input type="text" class="form-control" id="location" name="location" required
                                    placeholder="Enter location">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="language">language</label>
                                <input type="text" class="form-control" id="language" name="language" required
                                    placeholder="Enter language">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="portfolio">portfolio</label>
                                <input type="text" class="form-control" id="portfolio" name="portfolio" required
                                    placeholder="Enter portfolio">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="about">about</label>
                                <input type="text" class="form-control" id="about" name="about" required
                                    placeholder="Enter about">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="skills">skills</label>
                                <input type="text" class="form-control" id="skills" name="skills" required
                                    placeholder="Enter skills">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="projects">projects</label>
                                <input type="text" class="form-control" id="projects" name="projects" required
                                    placeholder="Enter projects">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="work_experience">work experience</label>
                                <input type="text" class="form-control" id="work_experience" name="work_experience"
                                    required placeholder="Enter work experience">
                            </div>
                            <div class="mb-3">
                                <label for="profile_picture">Profile Picture</label>
                                <input id="profile_picture" type="file" class="form-control" name="profile_picture">
                            </div>


                            <div class="row justify-content-center">
                                <div class="col-sm-4 text-center">
                                    <button class="btn btn-primary w-100 rounded-pill" type="submit">Create</button>

                                </div>
                            </div><!-- end row -->
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection