<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreviousEducationStudentInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_education_student_information', function (Blueprint $table) {
            $table->id();  
            $table->string('asal_sekolah');
            $table->date('tanggal_skhun');
            $table->string('no_skhun');
            $table->date('tanggal_ijazah');
            $table->string('no_ijazah');
            $table->string('pindahan_dari_sekolah')->nullable();
            $table->string('diterima_dikelas');
            $table->string('kelompok');
            $table->date('tanggal_penerimaan');
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
        Schema::dropIfExists('previous_education_student_information');
    }
}
