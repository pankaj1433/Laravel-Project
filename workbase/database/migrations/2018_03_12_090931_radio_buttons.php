<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RadioButtons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radio_buttons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->nullable();
            $table->string('label')->nullable();
            $table->string('active')->nullable();
            $table->string('created_by')->nullable();
            $table->date('created_on')->nullable();
            $table->string('updated_by')->nullable();
            $table->date('updated_on')->nullable();
        });

        Schema::create('radio_button_options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('option_name');
            $table->integer('radio_id');
            $table->string('sort_key')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('radio_buttons');
        Schema::drop('radio_button_options');
    }
}
