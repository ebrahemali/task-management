<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\project;
use App\Models\Task;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all(); // Assuming you have a Profile model with data
        // Return the index view and pass the profiles data
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // جلب جميع المستخدمين والمشاريع لإظهارهم في الفورم
        $users = User::all();
        $projects = Project::all();

        return view('tasks.create', compact('users', 'projects'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // التحقق من البيانات المدخلة
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'due_date' => 'required|date',

            'user_id' => 'required|exists:users,id',
            'project_id' => 'required|exists:projects,id',
        ]);



        // إنشاء المهمة الجديدة
        Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'due_date' => $request->due_date,

            'completed' => $request->has('completed'),
            'user_id' => $request->user_id,  // ربط المهمة بالمستخدم
            'project_id' => $request->project_id,  // ربط المهمة بالمشروع
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id); 
        $users = User::all();  
        $projects = Project::all();
        return view('tasks.edit', compact('task', 'users', 'projects'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $users = User::findOrFail($id);
        // التحقق من البيانات المدخلة
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'due_date' => 'required|date',

            'user_id' => 'required|exists:users,id',
            'project_id' => 'required|exists:projects,id',
        ]);

        // تحديث المهمة
        $task->update([
            'name' => $request->name,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'completed' => $request->has('completed'),
            'user_id' => $request->user_id,
            'project_id' => $request->project_id,
        ]);

        return redirect()->route('tasks.index');    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tasks = Task::findOrFail($id);
        $tasks->delete();

        return redirect()->route('tasks.index');
    }
}