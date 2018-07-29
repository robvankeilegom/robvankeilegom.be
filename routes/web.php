<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::localizedGroup(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/projects', 'ProjectsController@index')->name('projects');
    Route::get('/projects/{tag}', 'ProjectsController@tag')->name('projectsByTag');
    Route::get('/project/{project_id}', 'ProjectsController@modal')->name('projectModal');
});
