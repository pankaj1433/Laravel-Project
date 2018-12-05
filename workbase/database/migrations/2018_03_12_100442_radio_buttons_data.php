<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RadioButtonsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $radios = [
            'Foster Child',
            'TANF/CALWORKS',
            'FAMILY FOOD STAMPS',
            'GR',
            'Other Needy Family',
            'Disabled',
            'Homeless',
            'Pregnant/Parenting Youth',
            'Runaway Youth',
            'Probation',
            'English Learner',
            'Unemployment Insurance',
            'Veteran Status',
            'Spouse of Qualifying Veteran',
            'Supportive Service Needed'
        ];
        $data = [];
        foreach($radios as $radio) {
            array_push($data,[
                'description' => $radio,
                'label' => $radio,
                'active' => 'yes',
                'created_by' => 'jhon',
                'created_on' => date('Y-m-d'),
                'updated_by' => 'sam',
                'updated_on' => date('Y-m-d'),
            ]);
        }
        DB::table('radio_buttons')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('radio_buttons')->where('id','>',0)->delete();
    }
}
