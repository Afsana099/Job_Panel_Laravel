<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('admin.home.home');
});
Route::get('/home', function () {
    return view('admin.home.home');
});
Route::get('/jobs', function () {
    return view('admin.jobs');
});
Route::get('/create_resume', function () {
    return view('admin.create_resume');
});
Route::get('/job_details', function () {
    return view('admin.job_details'); 
});
Route::get('/applied_jobs', function () {
    return view('admin.applied_jobs');
});
Route::get('/edit_resume', function () {
    return view('admin.edit_resume');
});
Route::get('/view_resume', function () {
    return view('admin.view_resume');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/jobseeker/dashboard', function () {
    return view('jobseeker.edit_profile');
});