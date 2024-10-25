<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
 class ProfileController extends Controller
{
    // Display a listing of the profiles
    public function index()
    {

        $profiles = User::all();

        return view('profiles.index', compact('profiles'));
    }

    // Show the form for creating a new profile
    public function create()
    {
        return view('profiles.create');
    }

    // Store a newly created profile in storage
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
    
    public function store(Request $request)
    {
        $profilePicture = null;
        if (request()->hasFile('profile_picture')) {
            // تخزين الصورة في مجلد storage/app/public/profile_pictures
            $profilePicture = request()->file('profile_picture')->store('profile_pictures', 'public');
        }
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'job' => $request['job'],
            'bio' => $request['bio'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'location' => $request['location'],
            'language' => $request['language'],
            'portfolio' => $request['portfolio'],
            'about' => $request['about'],
            'skills' => $request['skills'],
            'projects' => $request['projects'],
            'work_experience' => $request['work_experience'],
            'profile_picture' => $profilePicture,

        ]);
        $profiles = User::all();
        return redirect()->route('profiles.index', compact('profiles'));
     }


    public function show($id)
    {
        $profiles = User::all();

        return view('profiles.index', compact('profiles'));
    }

    // Show the form for editing the specified profile
    public function edit($id)
    {
        $profile = User::findOrFail($id);
        return view('profiles.edit', compact('profile'));
    }

    // Update the specified profile in storage

    public function update(Request $request, $id)
    {
        // الحصول على المستخدم
        $user = User::findOrFail($id);

        // إعداد المتغير للصورة الجديدة
        $profilePicture = $user->profile_picture; // الاحتفاظ بالصورة القديمة في حال عدم وجود صورة جديدة

        if ($request->hasFile('profile_picture')) {
            // حذف الصورة القديمة إذا كانت موجودة
            if ($profilePicture) {
                Storage::disk('public')->delete($profilePicture);
            }

            // تخزين الصورة الجديدة
            $profilePicture = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        // تحديث بيانات المستخدم
        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'job' => $request['job'],
            'bio' => $request['bio'],
            'password' => $request['password'], // تأكد من تشفير كلمة المرور إذا كنت تقوم بتحديثها
            'phone' => $request['phone'],
            'location' => $request['location'],
            'language' => $request['language'],
            'portfolio' => $request['portfolio'],
            'about' => $request['about'],
            'skills' => $request['skills'],
            'projects' => $request['projects'],
            'work_experience' => $request['work_experience'],
            'profile_picture' => $profilePicture,
        ]);

        $profiles = User::all();

        return view('profiles.index', compact('profiles'));
    }



    // Remove the specified profile from storage
    public function destroy($id)
    {
        $user = User::findOrFail($id);


        $user->delete();
        $profiles = User::all();

        return view('profiles.index', compact('profiles'));
    }
}