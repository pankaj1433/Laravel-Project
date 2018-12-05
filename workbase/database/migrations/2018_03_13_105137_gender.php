<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gender extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('gender', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->nullable();
            $table->string('label')->nullable();
            $table->string('option_name');
            $table->string('active')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
        // DB::table('radio_button_options')->insert([
        //    ['description' => $radio,
        //    'label' => $radio,
        //    'option_name' => '',
        //    'active' => 'yes',
        //    'created_by' => 'jhon',
        //    'updated_by' => 'sam'],
           
        //    ['description' => $radio,
        //    'label' => $radio,
        //    'option_name' => '',
        //    'active' => 'yes',
        //    'created_by' => 'jhon',
        //    'updated_by' => 'sam'],

        //    ['description' => $radio,
        //    'label' => $radio,
        //    'option_name' => '',
        //    'active' => 'yes',
        //    'created_by' => 'jhon',
        //    'updated_by' => 'sam'],
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gender');
    }
}
