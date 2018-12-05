<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserResponsibilityData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $table->increments('id');
        //     $table->string('Application_Name')->nullable();
        //     $table->string('Full_Name')->nullable();
        //     $table->string('User_Name')->nullable();
        //     $table->string('Responsibility')->nullable();
        //     $table->date('Start_Date')->nullable();
        //     $table->date('End_Date')->nullable();
        $array = [
            ['Application_Name' => 'one', 'Full_Name' => 'Carrie' , 'User_Name' => 'user name', 'Responsibility'=>'Responsibility'],
            ['Application_Name' => 'two', 'Full_Name' => 'Raju' , 'User_Name' => 'user name', 'Responsibility'=>'Responsibility'],
            ['Application_Name' => 'three', 'Full_Name' => 'Sujith' , 'User_Name' => 'user name', 'Responsibility'=>'Responsibility'],
        ];
        $data = [];
        foreach($array as $item) {
            array_push($data,[
                'Application_Name' => $item['Application_Name'],
                'Full_Name' => $item['Full_Name'],
                'User_Name' => $item['User_Name'],
                'Responsibility' => $item['Responsibility'],
                'Start_Date' => date('Y-m-d'),
                'End_Date' => date('Y-m-d'),
            ]);
        }
        DB::table('user_responsibility')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('user_responsibility')->where('id','>',0)->delete();
    }
}
