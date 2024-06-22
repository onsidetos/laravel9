<?php

use App\Http\Controllers\CategoryController;
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
    return view('home.home');
});

//Route::get('/category', function (){
//    return view('category.category-list');
//});

Route::get('/category', [CategoryController::class,'list'])->name('category');


Route::get('/category/create', function (){
    return view('category.category-add');
});

Route::get('/test', function (){
    return 'Test Route';
});

Route::match(['get', 'post'], '/match', function (){
    return 'Match Route';
});

Route::get("/user/{id}", function ($id){
    return "User ID: ".$id;
})->where('id', '[0-9]+');


Route::get("/hello", function (){
    return view('hello');
});


