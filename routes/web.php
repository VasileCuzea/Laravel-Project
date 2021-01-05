<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
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


Route::get('/', 'AddressController@showAllAddresses');
Route::get('/address-edit/{ID}', 'AddressController@showAddressById');
Route::post('/address-edit', ['as' => 'edit-address', 'uses' => 'AddressController@updateAddress']);
Route::get('/address-list/{ID}', 'AddressController@deleteAddress');
//Route::post('/address-add', ['as' => 'insert-address', 'uses' => 'AddressController@addNewAddress']);
Route::post('/address-list', 'AddressController@addNewAddress')->name('addAddressRoute');


Route::get('/address-edit', function() { 
    return view('address-edit'); 
});


Route::get('/address-add', function() { 
    return view('address-add'); 
});

Route::get('/address-list', function() { 
    return view('address-list'); 
});