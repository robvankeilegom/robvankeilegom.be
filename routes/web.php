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
    Route::post('/contact', 'HomeController@contact')->name('contact');
    Route::get('/projects', 'ProjectsController@index')->name('projects');
    Route::get('/projects/{tag}', 'ProjectsController@tag')->name('projectsByTag');
    // Route::get('/project/{project_id}', 'ProjectsController@project')->name('project');
    Route::get('/project/{project_id}', 'ProjectsController@modal')->name('projectModal');
});

// Auth::routes();
//
// Route::get('/admin', 'AdminController@index')->name('admin');
// Route::get('/admin/projects', 'AdminController@projects')->name('admin_projects');
// Route::get('/admin/project/{project_id}', 'AdminController@project')->name('admin_project');
//
// Route::get('/admin/delete-project/{project_id}', 'AdminController@deleteProject')->name('delete_project');
// Route::get('/admin/delete-link/{project_id}/{link_id}', 'AdminController@deleteLink')->name('delete_link');
