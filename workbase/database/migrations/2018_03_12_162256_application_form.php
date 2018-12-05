<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApplicationForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_form', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id');

            $table->text('data_json');
            // $table->date('application_date');
            // $table->date('enrollment_date');
            // $table->string('assigned_agency');
            // $table->string('current_status');

            // $table->string('last_name');
            // $table->string('first_name');
            // $table->string('ssn');
            // $table->string('funding_source');
            // $table->string('caljobs_app');
            // $table->date('birth_date');
            // $table->integer('age');
            // $table->string('gender');
            // $table->string('address_residence');
            // $table->string('city');
            // $table->string('state');
            // $table->string('zip_code');
            // $table->string('phone_residence');
            // $table->string('mail_address');
            // $table->string('mail_city');
            // $table->string('mail_state');
            // $table->string('mail_zip');
            // $table->string('message_phone');
            // $table->string('citizen');
            // $table->string('eligible_to_work');
            // $table->string('alien_doc');
            // $table->string('race');
            // $table->string('unincorporated_area')->nullable();
            // $table->string('email_address');

            // $table->string('foster_child');
            // $table->string('tanf_calworks');
            // $table->string('family_food_stamps');
            // $table->string('gr');
            // $table->string('other_needy_family');
            // $table->string('disabled');
            // $table->string('homeless');
            // $table->string('pregnant_parenting_youth');
            // $table->string('runaway_youth');
            // $table->string('probation');
            // $table->string('english_learner');
            // $table->string('unemployment_insurance');
            // $table->string('veteran_status');
            // $table->string('spouse_of_qualifying_veteran');
            // $table->string('supportive_service_needed');

            // $table->string('education_status');
            // $table->string('highest_grade_completed')->nullable();
            // $table->string('referred_by')->nullable();
            // $table->string('tse')->nullable();
            // $table->string('agency');
            // $table->string('staff_id');
            // $table->string('note');
            // $table->string('work_permit_on_file');
            // $table->string('parent_signature_on_file');

            // $table->string('pdj');
            // $table->string('cluster');
            // $table->string('area_office');
            // $table->string('caseload_no');

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
        Schema::drop('application_form');
    }
}
