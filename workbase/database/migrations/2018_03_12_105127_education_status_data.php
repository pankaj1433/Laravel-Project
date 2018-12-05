<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EducationStatusData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $array = [
            ['label' => 'Student H.S or less', 'sort_key' => 'A'],
            ['label' => 'Student attending post H.S.', 'sort_key' => 'B'],
            ['label' => 'Out-of-School, H.S dropout', 'sort_key' => 'C'],
            ['label' => 'Out-of-School, H.S grad, employment difficulty', 'sort_key' => 'D'],
            ['label' => 'Out-of-School, H.S grad, no employment difficulty', 'sort_key' => 'E'],
            ['label' => 'Alternative School', 'sort_key' => 'F']
        ];
        $data = [];
        foreach($array as $item) {
            array_push($data,[
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
        DB::table('education_status')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('education_status')->where('id','>',0)->delete();
    }
}
