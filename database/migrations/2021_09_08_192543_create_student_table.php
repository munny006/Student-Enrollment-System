<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
         $table->bigIncrements('student_id');
         $table->string('student_name');
         $table->string('student_roll');
         $table->string('student_fathername');
         $table->string('student_mothername');
         $table->string('student_email');
         $table->string('student_Phone');
         $table->string('student_address');
          $table->string('student_img');
           $table->string('student_password');
            $table->string('student_dept');
             $table->string('student_addmissionyear');
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
        Schema::dropIfExists('student');
    }
}
