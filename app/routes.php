<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('nursing-exam', function()
{
	return View::make('nursing-exam');
});

Route::get('napolcom-exam', function()
{
	return View::make('napolcom-exam');
});


// Route for Civil Exam
Route::get('Civil-exam', 'CivilController@RecordCivil');
Route::get('civil-examination', 'CivilController@ShowCivil');
Route::get('civil-examination-error', 'CivilController@ShowCivilError');
Route::post('civil', 'CivilController@CivilCheck');
Route::post('civil-suggest', 'CivilController@CivilSuggest');
Route::get('civil-finish', 'CivilController@ShowFinish');

// Route for General Education Exam
Route::get('LET-examination', 'GeneralController@ShowExamination');
Route::get('general-education', 'GeneralController@RecordGeneral');
Route::post('general-education', 'GeneralController@GeneralCheck');
Route::get('general-education-error', 'GeneralController@ShowError');
Route::post('general-suggest', 'GeneralController@GeneralSuggest');
Route::get('general-education-finish', 'GeneralController@ShowFinish');

// Route for Professional Education Exam
Route::post('addscore', 'ProfessionalController@add');
Route::get('professional-education', 'ProfessionalController@RecordProfessional');
Route::post('professional-education', 'ProfessionalController@ProfessionalCheck');
Route::get('professional-education-error', 'ProfessionalController@ShowError');
Route::post('professional-suggest', 'ProfessionalController@ProfessionalSuggest');
Route::get('professional-education-finish', 'ProfessionalController@ShowFinish');

//other pages
Route::get('Requirements-Philippine-Public-School-Teacher', 'HomeController@ShowRequirements');
Route::get('OHS', 'HomeController@ShowOhs');
Route::get('/', 'HomeController@ShowIndex');
Route::get('contact', 'HomeController@ShowContact');
Route::post('sendtous', 'HomeController@sendtous');
Route::get('tips-civil-service-examination', 'HomeController@ShowCivilTips');




