<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('userid')->unsigned();
            $table->string('course');
            $table->string('specialization');
            $table->string('graduationtype');
            $table->string('applicationstatus');
            $table->string('isapproved')->default(0);
            $table->string('offerletter')->nullable();
            $table->string('testresult')->nullable();
            $table->timestamps();

            $table->foreign('userid')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicationdetails');
    }
}