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
        Schema::create('prsubjects', function (Blueprint $table) {
            $table->id('subject_id');
            $table->string('subject_Name');
            $table->unsignedBigInteger('CourseName');
            $table->foreign('CourseName')->references('course_id')->on('courses'); 
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prsubjects');
    }
};
