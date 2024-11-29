@extends('../layouts.layouts')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Profile</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profiles.update', ['profile' => $profile->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- استخدم PUT لتحديث -->

                        <label for="name">Name</label>
                        <input class="form-control" value="{{ $profile->name }}" type="text" id="name" name="name"
                            required>

                        <label for="job">Job</label>
                        <input class="form-control" value="{{ $profile->job }}" type="text" id="job" name="job"
                            required>

                        <label for="bio">Bio</label>
                        <input class="form-control" value="{{ $profile->bio }}" name="bio" id="bio" required>

                        <label for="email">Email</label>
                        <input id="email" type="email" value="{{ $profile->email }}" class="form-control" name="email"
                            required autocomplete="email">

                        <label for="password">Password </label>
                        <input id="password" type="password" value="{{ $profile->password }}" class="form-control"
                            name="password" autocomplete="new-password">

                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" value="{{ $profile->password }}" type="password"
                            class="form-control" name="password_confirmation" autocomplete="new-password">

                        <label for="phone">Phone</label>
                        <input class="form-control" value="{{ $profile->phone }}" id="phone" type="text" name="phone"
                            required>

                        <label for="location">Location</label>
                        <input type="text" id="location" value="{{ $profile->location }}" class="form-control"
                            name="location" required>

                        <label for="language">Language</label>
                        <input type="text" id="language" value="{{ $profile->language }}" class="form-control"
                            name="language" required>

                        <label for="portfolio">Portfolio</label>
                        <input type="text" id="portfolio" value="{{ $profile->portfolio }}" class="form-control"
                            name="portfolio">

                        <label for="about">About</label>
                        <input name="about" id="about" value="{{ $profile->about }}" class="form-control">

                        <label for="skills">Skills</label>
                        <input type="text" id="skills" value="{{ $profile->skills }}" class="form-control"
                            name="skills">

                        <label for="projects">Projects</label>
                        <input type="text" id="projects" value="{{ $profile->projects }}" class="form-control"
                            name="projects">

                        <label for="work_experience">Work Experience</label>
                        <input class="form-control" value="{{ $profile->work_experience }}" id="work_experience"
                            name="work_experience">

                        <div class="form-group">
                            <label for="profile_picture">Profile Picture</label>
                            <img class="mt-3" src="{{ Storage::url($profile->profile_picture) }}" alt="Profile Image"
                                width="150">
                            <input id="profile_picture" type="file" class="form-control" name="profile_picture">
                        </div>

                        <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection