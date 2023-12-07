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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->string('dateofbirth');
            $table->string('rollnum');
            $table->string('bloodgroup')->nullable();
            $table->string('religion');
            $table->string('email')->unique();
            $table->unsignedBigInteger('department');
            $table->foreign('department')->references('department_id')->on('department');
            $table->unsignedBigInteger('class');
            $table->foreign('class')->references('course_id')->on('courses');
            $table->unsignedBigInteger('section');
            $table->foreign('section')->references('id')->on('section');
            $table->string('phone_number');
            $table->string('student_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
