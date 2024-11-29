<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'job' => ['required', 'string', 'max:255'],
            'bio' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'language' => ['required', 'string', 'max:255'],
            'portfolio' => ['required', 'string', 'max:255'],
            'about' => ['required', 'string', 'max:255'],
            'skills' => ['required', 'string', 'max:255'],
            'projects' => ['required', 'string', 'max:255'],
            'work_experience' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // إضافة قاعدة التحقق من الصورة
            'profile_picture' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $profilePicture = null;
        if (request()->hasFile('profile_picture')) {
            // تخزين الصورة في مجلد storage/app/public/profile_pictures
            $profilePicture = request()->file('profile_picture')->store('profile_pictures', 'public');
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'job' => $data['job'],
            'bio' => $data['bio'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'location' => $data['location'],
            'language' => $data['language'],
            'portfolio' => $data['portfolio'],
            'about' => $data['about'],
            'skills' => $data['skills'],
            'projects' => $data['projects'],
            'work_experience' => $data['work_experience'],
            'profile_picture' => $profilePicture,

        ]);
    }
}