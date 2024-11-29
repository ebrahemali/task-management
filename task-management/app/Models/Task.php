<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
protected $table = 'tasks';
protected $fillable = [
    'name',
    'description',
    'due_date',
   
    'completed',
    'user_id',
    'project_id'
];

 
public function user()
{
    return $this->belongsTo(User::class);
}

// علاقة المهمة مع المشروع
public function project()
{
    return $this->belongsTo(Project::class);
}
 
}


