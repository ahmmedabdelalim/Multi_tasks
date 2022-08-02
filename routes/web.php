<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ExtractController;
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


    route::get('/' , [Controller::class ,'home']);
    route::get('/Blog' , [Controller::class ,'blog']);
    route::get('/Contact' , [Controller::class ,'contact']);
    route::get('/index' , [Controller::class ,'index']);



Route::group(['prefix' => 'Extract_Text_From_Image']  ,  function (){

    route::get('/' , [ExtractController::class ,'index']);
    Route::post('google-ocr', [ExtractController::class, 'submit'])->name('submit');
} );
