<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RaceAndFundingSourceData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $array_fund = [
            ['id'=>201, 'label' => 'CalTeens', 'sort_key' => 'a','begin_date'=>'2012-12-05','end_date'=>'2013-05-21'],
            ['id'=>202, 'label' => 'NCC', 'sort_key' => 'a','begin_date'=>'2012-05-12','end_date'=>'2016-06-30'],
            ['id'=>203, 'label' => 'GROW', 'sort_key' => 'a','begin_date'=>'2012-05-23','end_date'=>null],
            ['id'=>204, 'label' => 'WIA Waiver', 'sort_key' => 'a','begin_date'=>'2012-01-01','end_date'=>'2016-06-30'],
            ['id'=>205, 'label' => 'CalWORKs', 'sort_key' => 'a','begin_date'=>'2014-04-01','end_date'=>null],
            ['id'=>206, 'label' => 'DPSS Foster', 'sort_key' => 'a','begin_date'=>'2014-05-01','end_date'=>null],
            ['id'=>207, 'label' => 'NCC Hot Spots', 'sort_key' => 'a','begin_date'=>'2014-07-01','end_date'=>'2015-02-27'],
            ['id'=>208, 'label' => 'CWYR', 'sort_key' => 'a','begin_date'=>'2015-02-10','end_date'=>null],
            ['id'=>209, 'label' => 'Other Underserved Youth', 'sort_key' => 'a','begin_date'=>'2016-07-01','end_date'=>null],
            ['id'=>210, 'label' => 'Probation JJCPA', 'sort_key' => 'a','begin_date'=>'2017-04-25','end_date'=>null],
            ['id'=>211, 'label' => 'WIOA Waiver', 'sort_key' => 'a','begin_date'=>'2016-07-01','end_date'=>null],
        ];
        $array_race = [
            ['id'=>101,'label' => 'American Indian', 'sort_key' => 'b'],
            ['id'=>102,'label' => 'Asian', 'sort_key' => 'a'],
            ['id'=>103,'label' => 'Black', 'sort_key' => 'a'],
            ['id'=>104,'label' => 'Multi Race', 'sort_key' => 'y'],
            ['id'=>105,'label' => 'Not Wish to Answer', 'sort_key' => 'z'],
            ['id'=>106,'label' => 'Pacific Islandar', 'sort_key' => 'a'],
            ['id'=>107,'label' => 'White', 'sort_key' => 'a'],
            ['id'=>108,'label' => 'Hispanic', 'sort_key' => 'a'],
        ];

        $data_fund = [];
        $data_race = [];

        foreach($array_fund as $item) {
            array_push($data_fund,[
                'id' => $item['id'],
                'description' => $item['label'],
                'label' => $item['label'],
                'active' => 'yes',
                'begin_date' => $item['begin_date'],
                'end_date' => $item['end_date'],
                'created_by' => 'e496632',
                'sort_key' => $item['sort_key'],
                'created_on' => date('Y-m-d'),
                'updated_by' => 'e496632',
                'updated_on' => date('Y-m-d'),
            ]);
        }
        
        foreach($array_race as $item) {
            array_push($data_race,[
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

        DB::table('funding_source')->insert($data_fund);
        DB::table('race')->insert($data_race);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('funding_source')->where('id','>',0)->delete();
        DB::table('race')->where('id','>',0)->delete();
    }
}
