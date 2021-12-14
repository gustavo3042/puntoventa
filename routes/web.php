<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\PrinterController;
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
/*
Route::get('/', function () {
  return view('welcome');
});

*/


Route::get('/',[HomeController::class, 'index'])->name('home.index');


//crud categorias rutas


Route::get('report/reports_day',[ReportController::class, 'reports_day'])->name('reports.day');
Route::get('report/reports_date',[ReportController::class, 'reports_date'])->name('reports.date');

Route::post('report/report_results',[ReportController::class, 'report_results'])->name('report.results');

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
Route::get('admin/product/persiana',[ProductController::class, 'persiana'])->name('product.persiana');
Route::get('admin/product/cordoneria',[ProductController::class, 'cordoneria'])->name('product.cordoneria');
Route::get('admin/product/{product}/edit',[ProductController::class, 'edit'])->name('product.edit');


Route::resource('client','ClientController');
Route::get('admin/client/index',[ClientController::class, 'index'])->name('client.index');
Route::get('admin/client/create',[ClientController::class, 'create'])->name('client.create');
Route::get('admin/client/{client}/edit',[ClientController::class, 'edit'])->name('client.edit');


Route::resource('purchase','PurchaseController')->except(['edit','update','destroy']);
Route::get('admin/purchase/index',[PurchaseController::class, 'index'])->name('purchase.index');
Route::get('admin/purchase/create',[PurchaseController::class, 'create'])->name('purchase.create');



Route::resource('sale','SaleController')->except(['edit','update','destroy']);;
Route::get('admin/sale/index',[SaleController::class, 'index'])->name('sale.index');
Route::get('admin/sale/create',[SaleController::class, 'create'])->name('sale.create');


Route::get('purchase/pdf/{purchase}',[PurchaseController::class, 'pdf'])->name('purchase.pdf');
Route::get('sales/pdf/{sale}',[SaleController::class, 'pdf'])->name('sale.pdf');


Route::get('sales/print/{sale}',[SaleController::class, 'print'])->name('sale.print');


Route::resource('business','BusinessController')->only(['index','update']);
Route::get('business/index',[BusinessController::class, 'index'])->name('business.index');

Route::resource('printer','PrinterController')->only(['index','update']);
Route::get('printer',[PrinterController::class, 'index'])->name('printer.index');


Route::get('purchase/upload/{purchase}',[PurchaseController::class, 'upload'])->name('upload.purchase');




Route::get('change_status/product/{product}',[ProductController::class, 'change_status'])->name('change.status.products');
Route::get('change_status/purchase/{purchase}',[PurchaseController::class,'change_status'])->name('change.status.purchases');
Route::get('change_status/sale/{sale}',[SaleController::class, 'change_status'])->name('change.status.sales');




Route::resource('user','UserController');
Route::get('admin/user/index',[UserController::class,'index'])->name('user.index');


Route::resource('role','RoleController');
Route::get('admin/role/index',[RoleController::class,'index'])->name('role.index');



//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
