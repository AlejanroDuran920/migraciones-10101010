<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Product\ProductController;
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
 *  COMPANY
 */
Route::get('company',[CompanyController::class,'index'])->name('company.index');
Route::get('company/create',[CompanyController::class,'create'])->name('company.create');
Route::post('company',[CompanyController::class,'store'])->name('company.store');
Route::get('company/{id}',[CompanyController::class,'show'])->name('company.show');
Route::get('company/edit/{id}',[CompanyController::class,'edit'])->name('company.edit');
Route::put('company/{id}',[CompanyController::class,'update'])->name('company.update');
Route::delete('company/{id}',[CompanyController::class,'destroy'])->name('company.destroy');
/*
 * PRODUCT
 */

Route::get('product/create',[ProductController::class,'create'])->name('product.create');
Route::post('product',[ProductController::class,'store'])->name('product.store');

