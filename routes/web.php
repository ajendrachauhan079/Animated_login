<?php

// use App\Http\Controllers\Democontroller;

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
//revision route
Route::get('/revisionform','Revisioncontroller@displayForm')->name('revisionform');
Route::post('/revision-create','Revisioncontroller@create')->name('revision.create')->middleware('auth');
Route::get('/revisions','Revisioncontroller@index')->name('revision.index')->middleware('auth');
Route::get('/revision-edit/{id}','Revisioncontroller@edit')->name('revision.edit');
Route::post('/revision-update/{id}','Revisioncontroller@update')->name('revision.update');
Route::get('/revision-delete/{id}','Revisioncontroller@delete')->name('revision.delete');

//Custom authentication routes
Route::view('/customlogin','customlogin.login')->name('custom.login');
Route::post('/login-validate','CustomAuthControllr@login')->name('customlogin.validate');
Route::get('/customlogout','CustomAuthControllr@customLogout')->name('customlogin.Logout');

 

Route::get('/demo','Testcontroller@testMethod')->name('demo');
Route::get('/test','Democontroller@demoMethod');
// Route::get('/testnew',[App\Http\Controllers\Democontroller::demoMethod]);
Route::view('/product','product');
Route::post('/create','Productcontroller@create')->name('create');
Route::get('/display','Productcontroller@displayData')->name('display');

Route::get('/delete/{id}','Productcontroller@delete')->name('delete');
Route::get('/edit/{id}','Productcontroller@edit')->name('edit');
Route::post('/update/{id}','Productcontroller@update')->name('update');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/gotohell', function () {
    return view('a');
})->name('suraj');

Route::get('/bladeb', function () {
    return view('b');
});

Route::get('/bladec', function () {
    return view('c');
});

Route::get('/bladed', function () {
    return view('d');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
