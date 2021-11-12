<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use RealRashid\SweetAlert\Facades\Alert;

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


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\ProfileController::class, 'home']);
// Route::get('profile', function () {
//     return view('profile');
// });
Route::get('profile', [App\Http\Controllers\ProfileController::class, 'profile']);

Route::post('profile/post', [App\Http\Controllers\ProfileController::class, 'profilepost']);
Route::post('profile/update', [App\Http\Controllers\ProfileController::class, 'profileupdate']);
// Route::get('editprofile', function () {
//     return view('editprofile');
// });
Route::get('editprofile', [App\Http\Controllers\ProfileController::class, 'editprofile']);
// Route::get('deleteprofile', function () {
//     return view('deleteprofile');
// });
Route::get('deleteprofile', [App\Http\Controllers\ProfileController::class, 'deleteprofile']);
// Route::get('billing-info', function () {
//     return view('billing-info');
// });
Route::get('billing-info', [App\Http\Controllers\ProfileController::class, 'billingInfo']);
// Route::get('invoice', function () {
//     return view('invoice');
// });
Route::get('invoice', [App\Http\Controllers\ProfileController::class, 'invoice']);
// Route::get('payment', function () {
//     return view('payment');
// });
Route::get('payment', [App\Http\Controllers\ProfileController::class, 'payment']);

Route::get('security', [App\Http\Controllers\ProfileController::class, 'security']);

Route::get('linkedaccount', [App\Http\Controllers\ProfileController::class, 'account']);


// Status Route


Route::get('status/online', function () {
    return view('status.online');
});
Route::get('status/offline', function () {
    return view('status.offline');
});
Route::get('status/busy', function () {
    return view('status.busy');
});
Route::get('status/away', function () {
    return view('status.away');
});