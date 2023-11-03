<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DemoController;
// use App\Http\Controllers\SingleActionController;
// use App\Http\Controllers\PhotoController;
// use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\CustomerController;
use App\Models\Customer;


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

// Route::get('/', [DemoController::class, 'index']);
// Route::get('/about', 'App\Http\Controllers\DemoController@about');
// Route::get('/about', SingleActionController::class);
// Route::resource('photo', PhotoController::class);

// Route::get('/form', [RegistrationController::class, 'index']);
// Route::post('/form', [RegistrationController::class, 'register']);

// Route::get('/customer', function(){
//     $customers = Customer::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });

Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.name');
Route::get('/customer/view', [CustomerController::class, 'view']);
Route::post('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/update/{id}', [CustomerController::class, 'update']);
Route::post('/customer', [CustomerController::class, 'store']);
