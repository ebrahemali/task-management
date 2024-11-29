<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public function tasks()
{
    return $this->hasMany(Task::class, 'assigned_to');
}
    // Define the fillable fields for mass assignment
    protected $fillable = [
        'name',
        'job',
        'bio',
        'email',
        'password',
        'phone',
        'social_media',
        'location',
        'language',
        'portfolio',
        'about',
        'skills',
        'projects',
        'work_experience',
        'picture'
    ];
}
