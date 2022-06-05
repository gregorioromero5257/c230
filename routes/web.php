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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'ProjectController@getProjectPrincipal');


Route::get('acerca', function () {
    return view('acerca');
});
Route::get('/avisoprivacidad', function () {
    return view('avisoprivacidad');
});
Route::get('/equipo', function () {
    return view('equipo');
});
Route::get('/avisoprivacidadgral', function () {
    return view('avisoprivacidadgeneral');
});
// Route::get('/proyectos', function () {
//     return view('projectos');
// });
// Route::get('/project-details/{id}', function () {
//     return view('project-detail');
// });
Route::get('/working', function () {
    return view('working');
});

Route::post('send-email', 'EmailController@send');

Route::get('vacantes', 'VacancieController@vacancy');
Route::get('vacantes/{id}', 'VacancieController@getvacancy');

Route::get('proyectos', 'ProjectController@getProjects');
Route::get('proyectos/{id}', 'ProjectController@getProject');


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    // return what you want
});

Route::get('/view-cache', function() {
    $exitCode = Artisan::call('view:cache');
    // return what you want
});
