<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_student_details', function (Blueprint $table) {
            $table->id();              
            $table->string('nama_lengkap');   
            $table->string('nama_panggilan');   
            $table->string('jenis_kelamin');   
            $table->string('tempat_lahir');   
            $table->date('tanggal_lahir');   
            $table->string('agama');   
            $table->string('kewarganegaraan');   
            $table->string('anak_ke');   
            $table->string('jumlah_saudara_kandung')->nullable();   
            $table->string('jumlah_saudara_tiri')->nullable();   
            $table->string('jumlah_saudara_angkat')->nullable();   
            $table->string('status_yatim');  
            $table->string('bahasa_keseharian');   
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
        Schema::dropIfExists('personal_student_details');
    }
}
