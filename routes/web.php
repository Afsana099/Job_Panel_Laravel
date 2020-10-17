<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

///////////// Frontend Routes//////////////////

    // Auth
    Auth::routes(['verify' => true]);
    // Custom register
    Route::get('employer/company/create','SiteController@employer');
    Route::post('employer/company/create','SiteController@emReg');

    Route::get('seeker/resume/create','SiteController@seeker');
    Route::post('seeker/resume/create','SiteController@seekReg');


    // navigation
    Route::get('/','SiteController@index');
    Route::get('/home', function(){
        return view('jome');
    });

    Route::resource('category', 'Admin\CategoryController');
    Route::resource('job', 'JobController');
    Route::get('search', 'JobController@search');

//

///////////// Admin Backend Routes//////////////////
    Route::group(['prefix' => '/admin','namespace' => 'Admin','middleware' => ['auth','admin']], function () {

        // navigation
        Route::middleware(['verified'])->get('/','AdminController@dashboard');
        Route::get('profile','AdminController@profile');
        Route::post('profile','AdminController@profileUpdate');
        Route::get('job/applied', 'JobController@applied');

        // Restfull Controller| Category | degere | job
        Route::resource('category', 'CategoryController');
        Route::resource('degree', 'DegreeController');
        Route::resource('job', 'JobController');


        // Manage users
        Route::get('manage_seeker','UserController@manage_seeker');
        Route::get('manage_employer','UserController@manage_employer');
        Route::get('manage_admin','UserController@manage_admin');

        // Update users
        Route::put('manage_user/{user}','UserController@update');
        Route::delete('manage_user/{user}','UserController@destroy');

    });
//


///////////// Employer Routes//////////////////
Route::group(['prefix' => '/employer','namespace' => 'employer', 'middleware' => ['auth','verified']], function () {

    Route::get('/','SiteController@index');
    Route::get('/applied', 'JobController@applied');
    Route::resource('job', 'JobController');
    Route::get('company', 'CompanyController@index');
    Route::get('company/edit', 'CompanyController@edit');
    Route::put('company/update', 'CompanyController@update');

});
//


///////////// Seeker Routes //////////////////
    Route::group(['prefix' => '/seeker','namespace' => 'Seeker','middleware' => ['auth','verified']], function () {

        Route::get('/','SeekerController@index');
        Route::get('/profile/edit','SeekerController@edit');
        Route::get('/profile/download','SeekerController@download');
        Route::get('/applied','SeekerController@applied');
        Route::resource('job', 'JobController');
        Route::post('job/{job}/apply', 'ApplyController@store');
        Route::post('/profileUpdate', 'SeekerController@profileUpdate');
        Route::post('/edu_add', 'SeekerController@edu_add');
        Route::post('/edu_update', 'SeekerController@edu_update');
        Route::post('/edu_delete', 'SeekerController@edu_delete');
        Route::post('/experience_add', 'SeekerController@experience_add');
        Route::post('/experience_update', 'SeekerController@experience_update');
        Route::post('/experience_delete', 'SeekerController@experience_delete');
        Route::post('/trainings_add', 'SeekerController@trainings_add');
        Route::post('/trainings_update', 'SeekerController@trainings_update');
        Route::post('/trainings_delete', 'SeekerController@trainings_delete');
        Route::post('/extras_add', 'SeekerController@extras_add');
        Route::post('/extras_update', 'SeekerController@extras_update');
        Route::post('/extras_delete', 'SeekerController@extras_delete');
        Route::post('/achivements_add', 'SeekerController@achivements_add');
        Route::post('/achivements_update', 'SeekerController@achivements_update');
        Route::post('/achivements_delete', 'SeekerController@achivements_delete');
        Route::post('/password_change', 'SeekerController@password_change');
        Route::post('/photo_change', 'SeekerController@photo_change');


    });
//

