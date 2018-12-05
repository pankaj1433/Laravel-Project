<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EducationStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->nullable();
            $table->string('label')->nullable();
            $table->string('active')->nullable();
            $table->string('created_by')->nullable();
            $table->string('sort_key')->nullable();
            $table->date('created_on')->nullable();
            $table->string('updated_by')->nullable();
            $table->date('updated_on')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('education_status');
    }
}
