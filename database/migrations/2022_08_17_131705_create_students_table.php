<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->foreignId('class_id')->constrained('student_classes');        
            $table->foreignId('personal_student_detail_id')->nullable()->constrained('personal_student_details');        
            $table->foreignId('health_student_information_id')->nullable()->constrained('health_student_information');        
            $table->foreignId('residence_student_information_id')->nullable()->constrained('residence_student_information');        
            $table->foreignId('guardian_student_information_id')->nullable()->constrained('guardian_student_information');        
            $table->foreignId('previous_education_student_information_id')->nullable()->constrained('previous_education_student_information');        
            $table->foreignId('student_hobbie_id')->nullable()->constrained('student_hobbies');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
