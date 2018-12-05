<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserResponsibility extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_responsibility', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Application_Name')->nullable();
            $table->string('Full_Name')->nullable();
            $table->string('User_Name')->nullable();
            $table->string('Responsibility')->nullable();
            $table->date('Start_Date')->nullable();
            $table->date('End_Date')->nullable();
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
        Schema::drop('user_responsibility');
    }
}
