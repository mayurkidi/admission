<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicdetails', function (Blueprint $table) {
            $table->id('id');
            $table->string('userid');
            $table->string('leavingcertificate');
            $table->string('aadharcard');
            $table->string('marksheet10');
            $table->string('marksheetd2d');
            $table->string('marksheet12');
            $table->string('marksheetgraduation');
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
        Schema::dropIfExists('academicdetails');
    }
}
