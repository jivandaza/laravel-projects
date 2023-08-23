<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Without using controllers show view welcome.php
/*Route::get('/', function () {
    return view('welcome');
});*/

// Using controllers show view welcome.php
Route::get('/', HomeController::class);

// Without using controllers show view courses.php
/*Route::get('courses', function (){
    return 'Welcome to page courses';
});*/

// Using controllers show view courses.php
//Route::get('courses', [CourseController::class, 'index']);

// Without using controllers show view create-curse.php
/*Route::get('courses/create', function () {
    return "On this page you can create a course";
});*/

// Using controllers show view create-curse.php
//Route::get('courses/create', [CourseController::class, 'create']);

// Without using controllers show view show-curse.php
/*Route::get('courses/{curse}', function ($curse) {
    return "Welcome to curse: $curse";
});*/

// Using controllers show view show-curse.php
//Route::get('courses/{curse}', [CourseController::class, 'show']);

// Without using controllers show view show-category.php
/*Route::get('courses/{curse}/{category?}', function ($curse, $category=null) {
    if ($category){
        return "Welcome to the $curse curse of the $category category.";
    } else {
        return "Welcome to the $curse curse.";
    }
});*/

// Using controllers show view show-category.php
//Route::get('courses/{curse}/{category?}', [CourseController::class, 'show']);

// using group routes
Route::controller(CourseController::class)->group(function() {
    Route::get('courses', 'index');
    Route::get('courses/create', 'create');
    Route::get('courses/{course}', 'show');
    Route::get('courses/{course}/{category?}', 'show');
});
