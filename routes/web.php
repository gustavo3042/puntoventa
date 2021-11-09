<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
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
});


Route::get('/',[HomeController::class, 'index'])->name('home.index');


//crud categorias rutas

Route::resource('categories','CategoryController');
Route::get('admin/categories/index',[CategoryController::class, 'index'])->name('categoria.index');
Route::get('admin/categories/create',[CategoryController::class, 'create'])->name('categoria.create');
Route::get('admin/categories/{category}/edit',[CategoryController::class, 'edit'])->name('categoria.edit');



//crud proveedores
Route::resource('provider','ProviderController');
Route::get('admin/provider/index',[ProviderController::class, 'index'])->name('provider.index');
Route::get('admin/provider/create',[ProviderController::class, 'create'])->name('provider.create');
Route::get('admin/provider/{provider}/edit',[ProviderController::class, 'edit'])->name('provider.edit');



Route::resource('product','ProductController');
Route::get('admin/product/index',[ProductController::class, 'index'])->name('product.index');
Route::get('admin/product/create',[ProductController::class, 'create'])->name('product.create');
Route::get('admin/product/{product}/edit',[ProductController::class, 'edit'])->name('product.edit');


Route::resource('client','ClientController');
Route::get('admin/client/index',[ClientController::class, 'index'])->name('client.index');
Route::get('admin/client/create',[ClientController::class, 'create'])->name('client.create');
Route::get('admin/client/{client}/edit',[ClientController::class, 'edit'])->name('client.edit');


Route::resource('purchase','PurchaseController');
Route::get('admin/purchase/index',[PurchaseController::class, 'index'])->name('purchase.index');
Route::get('admin/purchase/create',[PurchaseController::class, 'create'])->name('purchase.create');



Route::resource('sale','SaleController');
Route::get('admin/sale/index',[SaleController::class, 'index'])->name('sale.index');
Route::get('admin/sale/create',[SaleController::class, 'create'])->name('sale.create');


Route::get('purchase/pdf/{purchase}',[PurchaseController::class, 'pdf'])->name('purchase.pdf');

//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
