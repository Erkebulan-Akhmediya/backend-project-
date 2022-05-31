<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WalletController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    $table->password = Hash::make($request->input('password'));
    $table->save();

    return redirect(route('index'));
})->name('store');



Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/check', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if (Auth::attempt(['username' => $username, 'password' => $password])) {
        return redirect(route('wallet.index'));
    } else {
        return redirect(route('login'));
    }
})->name('check');

Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
 
    $request->session()->regenerateToken();

    return redirect(route('index'));
})->name('logout');