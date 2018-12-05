<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();


Route::post('/agencyUser/password/reset', 'AgencyController@storeAgencyUserPassword')->middleware('auth');
Route::get('/agencyUser/password/reset', 'AgencyController@showAgencyPasswordResetForm')->middleware('auth');
//Route::middleware(['agency_reset_password'])->group(function () {
    Route::get('/home', 'HomeController@index');

    Route::get('/application-form', 'ApplicationFormController@create')->name('ApplicationForm.create');
    Route::post('/application-form', 'ApplicationFormController@store')->name('ApplicationForm.store');
    Route::post('/application-form/{id}/update', 'ApplicationFormController@updateApplication')->name('ApplicationForm.update');
    Route::get('/application/{id}/edit', 'ApplicationFormController@editApplication')->name('ApplicationForm.edit');
    Route::get('/application/{id}/{stream}', 'ApplicationFormController@editApplication');

    Route::get('/user-responsibility', 'UserResponsibilityController@show')->name('userResponsibility.show');
    Route::get('/user-responsibility/edit/{id}', 'UserResponsibilityController@edit')->name('userResponsibility.edit');
    Route::post('/user-responsibility', 'UserResponsibilityController@update')->name('userResponsibility.update');

    Route::get('/status-report', 'StatusReportController@show')->name('status.report');
    Route::get('/YepController', 'YepController@show')->name('yep');
    Route::get('/dpss', 'YepController@dpsssearch')->name('dpss');
    Route::get('/dusercreate', 'YepController@dusercreate')->name('dusercreate');

    Route::get('/appinfo', 'YepController@applicantinfo')->name('appinfo');
    Route::get('/naics', 'YepController@naics')->name('naics');
    Route::get('/auserassign', 'YepController@auserassign')->name('auserassign');
    Route::get('/duserassign', 'YepController@duserassign')->name('duserassign');
    Route::get('/appsummary', 'YepController@appsummary')->name('appsummary');
    Route::get('/appagency', 'YepController@appagency')->name('appagency');
    Route::get('/css-home', 'CssHomeController@show')->name('css.home');

    Route::get('/timesheet', 'TimesheetController@show')->name('timesheet');

//Agency User
////Route::get('/ausercreate', 'YepController@ausercreate')->name('ausercreate');

    Route::get('/agencyUser/create', 'AgencyController@create');
    Route::get('/agencyUser/{id}/edit', 'AgencyController@create');
    Route::post('/agencyUser/{id}/update', 'AgencyController@update');
    Route::post('/agencyUser/save', 'AgencyController@store');

    Route::get('/agency/mainPage', 'AgencyController@mainIndex');

    Route::get('/agencyUser/roles', 'AgencyController@getAgencyUserRoles');
    Route::get('/agencyUser/{id}/editAgencyUserRole', 'AgencyController@editAgencyUserRole');
    Route::post('/agencyUser/{id}/updateRole', 'AgencyController@updateUserRole');
    Route::get('/agencyUser/{id}/assignRole', 'AgencyController@assignUserRole');
    Route::get('/agencyUser/{id}/getUserFullName', 'AgencyController@getUserFullName');

    Route::post('/agencyUser/roleSave', 'AgencyController@saveUserRole');

    Route::get('/agencyUser/{id}/resetPassword', 'AgencyController@updateAgencyUserPasswordForm');
    Route::post('/agencyUser/{id}/updatePassword', 'AgencyController@updateAgencyUserPassword');

//Route::post('/ausercreate', 'YepController@createauser')->name('ausercreate');
    Route::get('/auseredit/{id}', 'YepController@auseredit')->name('auseredit');
    Route::post('/auseredit/{id}', 'YepController@updateauser')->name('auseredit');

//Department User
    Route::get('/dusercreate', 'YepController@dusercreate')->name('dusercreate');
    Route::post('/dusercreate', 'YepController@createduser')->name('dusercreate');
    Route::get('/duseredit/{id}', 'YepController@duseredit')->name('duseredit');
    Route::post('/duseredit/{id}', 'YepController@updateduser')->name('duseredit');

//Applicant Info Search
    Route::post('/ajaxsearch', 'ApplicationFormController@search')->name('ajaxsearch');

	Route::get('/getEthnicity/{race}','ApplicationFormController@getEthnicity');
    //participant listing
    Route::get('/agency/participantListing','ApplicationFormController@agencyParticipantListing');
    Route::get('/agency/{id}/dropoutApplication','ApplicationFormController@dropOut');
    Route::post('/agency/{id}/saveDropoutReason','ApplicationFormController@saveDropOutReason');



    Route::get('/agency/applicant/{id}/attachments','ApplicationFormController@applicationAttachmentForm');
    Route::post('/agency/applicant/saveAttachment','ApplicationFormController@saveUploadAttachment');
    Route::get('/agency/applicant/{id}/downloadAttachment','ApplicationFormController@downloadApplicantAttachment');
    Route::get('/agency/applicant/{id}/deleteAttachment','ApplicationFormController@deleteApplicantAttachment');
    Route::get('/agencyUsers','AgencyController@agencyUsers');

    Route::get('/worksite/create','WorksiteController@createWorksite');
    Route::post('/worksite/create','WorksiteController@saveWorksite');
    Route::get('/worksite/{id}/edit','WorksiteController@editWorkSite');
    Route::post('/worksite/{id}/update','WorksiteController@updateWorkSite');
    Route::get('/getWorksites','WorksiteController@getWorksites');



    //petstatus
    Route::get('/agency/{application_id}/petStatus','ApplicationFormController@petStatus');
    Route::post('/agency/petStatus/save','ApplicationFormController@addPetStatus');
    Route::get('/agency/petStatus/{id}/edit','ApplicationFormController@editPetStatus');
    Route::post('/agency/petStatus/{id}/update','ApplicationFormController@updatePetStatus');
//});
