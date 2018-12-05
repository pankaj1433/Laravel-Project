<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EthinicityAndGradeData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $array_ethinicity = [
            ['id'=>101,'label' => 'American Indian', 'sort_key' => 'b'],
            ['id'=>102,'label' => 'Asian', 'sort_key' => 'a'],
            ['id'=>103,'label' => 'Black', 'sort_key' => 'a'],
            ['id'=>104,'label' => 'Multi Race', 'sort_key' => 'y'],
            ['id'=>105,'label' => 'Not Wish to Answer', 'sort_key' => 'z'],
            ['id'=>106,'label' => 'Pacific Islandar', 'sort_key' => 'a'],
            ['id'=>107,'label' => 'White', 'sort_key' => 'a'],
            ['id'=>108,'label' => 'Hispanic', 'sort_key' => 'a'],
        ];

        $data_ethinicity = [];
        
        foreach($array_ethinicity as $item) {
            array_push($data_ethinicity,[
                'id' => $item['id'],
                'description' => $item['label'],
                'label' => $item['label'],
                'active' => 'yes',
                'created_by' => 'jhon',
                'sort_key' => $item['sort_key'],
                'created_on' => date('Y-m-d'),
                'updated_by' => 'sam',
                'updated_on' => date('Y-m-d'),
            ]);
        }
        DB::table('ethinicity')->insert($data_ethinicity);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('ethinicity')->where('id','>',0)->delete();
    }
}
