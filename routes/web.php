<?php

use App\Http\Controllers\Detail;
use App\Http\Controllers\ManagerUser;
use App\Http\Controllers\MathPay;
use App\Http\Controllers\ViewDanle;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Manager;
use App\Http\Controllers\Productt;
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






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
Route::group(['middleware' => 'role:admin'], function() {

    Route::get('/admin', function() {
 
       return view('formadmin');
       
    });
 
 });
Route::resource('user',ManagerUser::class);


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/danle', function () {
    return view('pagedanle');
})->name('danle');

Route::get('/pg', function () {
    return view('pagepg');
})->name('pg');

Route::get('/feedback', function () {
    return view('pagefeedback');
})->name('feedback');

Route::get('/personnel', function () {
    return view('pagepersonnel');
})->name('personnel');
Route::get('/thu',function(){
    return view('formchinh');
});
Route::resource('product',Productt::class);
Route::post('/detail',[MathPay::class,'payment']);
Route::get('danlev',[ViewDanle::class,'index']);
Route::get('/long',function(){
    return view('hi');
});
Route::resource('detaill',Detail::class);