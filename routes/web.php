<?php

use App\Http\Controllers\ManagerUser;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Manager;

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
    return view('home');
});

Route::get('/admin', function () {
    return view('formadmin');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
Route::group(['middleware' => 'role:developer'], function() {

    Route::get('/admin', function() {
 
       return 'Welcome Admin';
       
    });
 
 });
Route::resource('user',ManagerUser::class);


