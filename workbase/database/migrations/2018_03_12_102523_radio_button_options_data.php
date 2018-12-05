<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RadioButtonOptionsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('radio_button_options')->insert([
            [ 'option_name' => 'Yes', 'radio_id' => 1, 'sort_key'=>'a'],
            [ 'option_name' => 'No',  'radio_id' => 1, 'sort_key'=>'b'],

            [ 'option_name' => 'Yes', 'radio_id' => 2, 'sort_key'=>'a'],
            [ 'option_name' => 'No', 'radio_id' => 2, 'sort_key'=>'b'],

            [ 'option_name' => 'Yes', 'radio_id' => 3, 'sort_key'=>'a'],
            [ 'option_name' => 'No', 'radio_id' => 3, 'sort_key'=>'b'],

            [ 'option_name' => 'Yes', 'radio_id' => 4, 'sort_key'=>'a'],
            [ 'option_name' => 'No', 'radio_id' => 4, 'sort_key'=>'b'],

            [ 'option_name' => 'Yes', 'radio_id' => 5, 'sort_key'=>'a'],
            [ 'option_name' => 'No', 'radio_id' => 5, 'sort_key'=>'b'],

            [ 'option_name' => 'Yes', 'radio_id' => 6, 'sort_key'=>'a'],
            [ 'option_name' => 'No', 'radio_id' => 6, 'sort_key'=>'b'],

            [ 'option_name' => 'Yes', 'radio_id' => 7, 'sort_key'=>'a'],
            [ 'option_name' => 'No', 'radio_id' => 7, 'sort_key'=>'b'],

            [ 'option_name' => 'Yes', 'radio_id' => 7, 'sort_key'=>'a'],
            [ 'option_name' => 'No', 'radio_id' => 7, 'sort_key'=>'b'],

            [ 'option_name' => 'Yes', 'radio_id' => 8, 'sort_key'=>'a'],
            [ 'option_name' => 'No', 'radio_id' => 8, 'sort_key'=>'b'],

            [ 'option_name' => 'Yes', 'radio_id' => 9, 'sort_key'=>'a'],
            [ 'option_name' => 'No', 'radio_id' => 9, 'sort_key'=>'b'],

            [ 'option_name' => 'Yes', 'radio_id' => 10, 'sort_key'=>'a'],
            [ 'option_name' => 'No', 'radio_id' => 10, 'sort_key'=>'b'],
            [ 'option_name' => 'Did Not Disclose', 'radio_id' => 10, 'sort_key'=>'c'],

            [ 'option_name' => 'Yes', 'radio_id' => 11, 'sort_key'=>'a'],
            [ 'option_name' => 'No', 'radio_id' => 11, 'sort_key'=>'b'],

            [ 'option_name' => 'Yes,<=180 Days', 'radio_id' => 12, 'sort_key'=>'a'],
            [ 'option_name' => 'Yes,Eligible Veteran', 'radio_id' => 12, 'sort_key'=>'b'],
            [ 'option_name' => 'No', 'radio_id' => 12, 'sort_key'=>'c'],

            [ 'option_name' => 'Yes, UI Claimant', 'radio_id' => 13, 'sort_key'=>'a'],
            [ 'option_name' => 'Yes,UI Exhausted', 'radio_id' => 13, 'sort_key'=>'b'],
            [ 'option_name' => 'No', 'radio_id' => 13, 'sort_key'=>'c'],

            [ 'option_name' => 'Yes', 'radio_id' => 14, 'sort_key'=>'a'],
            [ 'option_name' => 'No', 'radio_id' => 14, 'sort_key'=>'b'],

            [ 'option_name' => 'Yes', 'radio_id' => 15, 'sort_key'=>'a'],
            [ 'option_name' => 'No', 'radio_id' => 15, 'sort_key'=>'b'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('radio_button_options')->where('id','>',0)->delete();
    }
}
