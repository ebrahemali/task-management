<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class Controller extends BaseController
{ 
    public function index()
    {
        $users = User::get();
        $projects = Project::get();
        return view('home', compact('users', 'projects'));

    }
    

}