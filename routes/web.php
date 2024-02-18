<?php

use App\Http\Controllers\DocumentHandler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Settings;
use App\Http\Controllers\ProfileHandler;
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
Route::get('/', [User::class,"login_pg"]);
Route::post('login', [User::class,"Login"]);
Route::get('logout', [User::class,"Logout"]);
Route::post('login_user', [User::class,"Login"])->name('Admin');
Route::post('new_user', [User::class,"add_user"])->middleware('hasLogin');
Route::post('new_profile_subcity', [ProfileHandler::class,"new_profile_sub"])->middleware('hasLogin');
Route::get('users', [User::class,"user_pg"])->middleware('hasLogin');
Route::get('/dashboard', [Admin::Class,"dashboard"])->middleware('hasLogin');
Route::get('/folders_city', [DocumentHandler::class,"list_directory"])->middleware('hasLogin');
Route::get('/sub_folder/{id}', [DocumentHandler::class,"list_sub_directory"])->middleware('hasLogin');
Route::get('/doc_list_city', [DocumentHandler::class,"list_files"])->middleware('hasLogin');
Route::get('/subcity', [ProfileHandler::class,"sub_city_pg"])->middleware('hasLogin');
Route::get('/woreda', [Settings::class,"woreda"])->middleware('hasLogin');
Route::get('/organ',[Settings::class,"organ_pg"])->middleware('hasLogin');
Route::get('/role',[Settings::class,"role_pg"])->middleware('hasLogin');
Route::post('/save_folder',[DocumentHandler::class,"save_folder"])->middleware('hasLogin')->name("save_folder");
Route::post('/save_file',[DocumentHandler::class,"save_file"])->middleware('hasLogin')->name("save_file");
Route::post('/save_organization',[Settings::class,"organ_add"])->middleware('hasLogin');
Route::post('/save_role',[Settings::class,"role_add"])->middleware('hasLogin');
