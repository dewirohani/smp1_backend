<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthStudentInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_student_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');   
            $table->string('gol_darah', 2);
            $table->string('riwayat_penyakit');
            $table->string('kelainan_jasmani');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
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
        Schema::dropIfExists('health_student_information');
    }
}
