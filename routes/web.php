<?php

use App\Models\Detail_PG;
use Illuminate\Support\Manager;
use App\Http\Controllers\Detail;
use App\Http\Controllers\MathPG;
use App\Http\Controllers\MathPay;
use App\Http\Controllers\DetailPG;
use App\Http\Controllers\Productt;
use App\Http\Controllers\PGinvoice;
use App\Http\Controllers\ViewDanle;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ManagerUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PGController;
use App\Http\Controllers\InvoiceController;

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
    return view('homepage');
})->middleware(['auth', 'verified','guard'])->name('dashboard');

require __DIR__ . '/auth.php';
Route::group(['middleware' => 'role:admin'], function () {

    Route::get(
        '/admin',
        function () {

            return view('formadmin');
        }
    );
    Route::resource('invoice', InvoiceController::class);
    Route::resource('PG', PGController::class);
    Route::resource('PGinvoice', PGinvoice::class);
});
Route::resource('user', ManagerUser::class);


Route::get('/', function () {
    return view('home');
})->name('home')->middleware('loginGuard');


Route::get('/danle', [
    'middleware' => 'guard',
    function () {

        return view('pagedanle');


    }
])->name('danle');

Route::resource('pg', DetailPG::class)->middleware('guard');

Route::get('/feedback', [
    'middleware' => 'guard',
    function () {
        return view('pagefeedback');
    }
])->name('feedback');

Route::get('/personnel', [
    'middleware' => 'guard',
    function () {
        return view('pagepersonnel');
    }
])->name('personnel')->middleware('guard');
Route::get('/thu', function () {
    return view('formchinh');
});
Route::resource('product', Productt::class);
Route::post('/mathpay/{id}', [MathPay::class, 'payment'])->name('math')->middleware('guard');
Route::post('/mathpg/{id}', [MathPG::class, 'payment'])->middleware('guard');
// Route::get('danlev', [ViewDanle::class, 'index']);

Route::resource('pagedanle', Detail::class)->middleware('guard');