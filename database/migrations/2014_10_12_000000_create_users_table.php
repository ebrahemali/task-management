<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('job');
            $table->string('bio')->nullable();
            $table->string('phone')->nullable();
            $table->enum('role', ['User', 'Admin'])->default('User');
            $table->string('location')->nullable();
            $table->string('language')->nullable();
            $table->string('portfolio')->nullable();
            $table->string('about')->nullable();
            $table->string('skills')->nullable();
            $table->string('projects')->nullable();
            $table->string('work_experience')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
