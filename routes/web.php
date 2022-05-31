<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WalletController;
use App\Models\User;
use Illuminate\Http\Request;

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
    return view('welcome');
})->name('index');

Route::resource('wallet', WalletController::class);

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::post('/registration_store', function (Request $request) {
    $table = new User();

    $table->username = $request->input('username');
    $table->password = $request->input('password');
    $table->save();

    return redirect(route('index'));
})->name('store');