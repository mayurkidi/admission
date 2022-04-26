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
            $table->string('leavingcertificate')->nullable();
            $table->string('aadharcard')->nullable();
            $table->string('marksheet10')->nullable();
            $table->string('marksheetd2d')->nullable();
            $table->string('marksheet12')->nullable();
            $table->string('marksheetgraduation')->nullable();
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
