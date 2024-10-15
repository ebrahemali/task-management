<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Task;

use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{ use AuthorizesRequests, ValidatesRequests;
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  
   
    public function layout()
    {$users = User::all(); 
        $projects = Project::all(); 

        // إرسال البيانات إلى الـ view باستخدام compact
        return view('home', compact('users', 'projects'));
        

    }
    public function projects(Request $request)
    {
        $projects = Project::get();
        return view('projects', compact('projects'));
    }
    
    public function profile()
    {
        if (!Auth::check()) {
            return redirect('/login');
    } 
    else {
        $user = Auth::user();
        $projects = $user->projects()->distinct()->get();
        $tasks = $user->tasks;

        return view('profile', compact('user', 'projects', 'tasks'));
    }
}

    public function taskslist()
    {
        

        return view('taskslist');
    }
}