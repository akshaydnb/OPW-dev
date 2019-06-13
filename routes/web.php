<?php

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
/* Master
 *  
 */

Route::view('/dashboard', 'dashboard');
Route::view('/', 'dashboard');

Route::prefix('master')->group(function () {
    $prefix = "master.";
    Route::view('/profile', $prefix . 'profile.index');
    Route::view('/profile/create', $prefix . 'profile.create');

    Route::resource('product', 'ProductController');
    Route::get('/product/status/{id}', 'ProductController@changeStatus');

    Route::resource('parameter', 'ParameterController');
    Route::get('/parameter/status/{id}', 'ParameterController@changeStatus');

    Route::resource('parameter-value', 'ParameterValueController');
    Route::get('/parameter-value/autosuggest/{id}/{search}', 'ParameterValueController@autosuggest');

    Route::resource('gst', 'GstController');
    Route::get('/gst/status/{id}', 'GstController@changeStatus');
    Route::get('/gst/detail/{hsn_code}', 'GstController@detail');
    Route::get('/gst/autosuggest/{search}', 'GstController@autosuggest');

    Route::resource('barcode', 'BarcodeController');

    Route::view('/supplier', $prefix . 'supplier.index');
    Route::view('/supplier/create', $prefix . 'supplier.create');
    Route::view('/supplier/edit', $prefix . 'supplier.edit');
    Route::view('/supplier/branch', $prefix . 'supplier.branch.index');
    Route::view('/supplier/branch/create', $prefix . 'supplier.branch.create');
    Route::view('/customer', $prefix . 'customer.index');
    Route::view('/customer/create', $prefix . 'customer.create');
    Route::view('/customer/edit', $prefix . 'customer.edit');
    Route::view('/customer/branch', $prefix . 'customer.branch.index');
    Route::view('/customer/branch/create', $prefix . 'customer.branch.create');

});

Route::prefix('purchase')->group(function () {
    $prefix = "purchase.";
    Route::view('/', $prefix . 'index');
    Route::view('/create', $prefix . 'create');
    Route::view('/edit-history', $prefix . 'edit-history');
    Route::view('/edit', $prefix . 'edit');
    Route::view('/return', $prefix . 'return.index');
    Route::view('/return/create', $prefix . 'return.create');    
    Route::view('/return/edit', $prefix . 'return.edit');
});

Route::prefix('sales')->group(function () {
    $prefix = "sales.";
    Route::view('/', $prefix . 'index');
    Route::view('/create', $prefix . 'create');
    Route::view('/edit-history', $prefix . 'edit-history');
    Route::view('/edit', $prefix . 'edit');
    Route::view('/pending-approval', $prefix . 'pending-approval');
    Route::view('/approving', $prefix . 'approving');
    Route::view('/rejecting', $prefix . 'rejecting');
    Route::view('/process', $prefix . 'process');
    Route::view('/pending-dispatch', $prefix . 'pending-dispatch');
    Route::view('/return', $prefix . 'return.index');
    Route::view('/return/create', $prefix . 'return.create');    
    Route::view('/return/edit', $prefix . 'return.edit');
});

Route::prefix('inventory')->group(function () {
    $prefix = "inventory.";
    Route::view('/', $prefix . 'index');
    Route::view('/create', $prefix . 'create');
    Route::view('/level', $prefix . 'level');
    Route::view('/pending', $prefix . 'pending');
    Route::view('/transfer-stock/create', $prefix . 'transfer-stock.create');
    Route::view('/transfer-stock/', $prefix . 'transfer-stock.index');
    Route::view('/transfer-stock/edit', $prefix . 'transfer-stock.edit');
});

Route::prefix('billing')->group(function () {
    $prefix = "billing.";
    Route::view('/', $prefix . 'index');
    Route::view('/create', $prefix . 'create');
    Route::view('/edit', $prefix . 'edit');
    Route::view('/edit-history', $prefix . 'edit-history');
});

Route::prefix('payment')->group(function () {
    $prefix = "payment.";
    Route::view('/sent/', $prefix . 'sent.index');
    Route::view('/sent/create', $prefix . 'sent.create');
    Route::view('/sent/payment-payable', $prefix . 'sent.payment-payable');
    Route::view('/received/', $prefix . 'received.index');
    Route::view('/received/create', $prefix . 'received.create');
    Route::view('/received/payment-receivable', $prefix . 'received.payment-receivable');
});

Route::prefix('sample')->group(function () {
    $prefix = "sample.";
    Route::view('/table', $prefix . 'index');
    Route::view('/form', $prefix . 'create');
});