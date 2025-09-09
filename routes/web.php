<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\SauryaPalletController;
use App\Http\Controllers\Frontend\ServiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('contact', [IndexController::class, 'contact'])->name('contact');
Route::get('faqs', [IndexController::class, 'faqs'])->name('faqs');
Route::get('brochure', [IndexController::class, 'brochure'])->name('brochure');
Route::get('notice', [IndexController::class, 'notice'])->name('notice');
Route::get('certificates', [IndexController::class, 'certificates'])->name('certificates');

Route::post('submitInquery/{submitInquery}', [IndexController::class, 'submitInquery'])->name('submitInquery');

Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('gallery', [SauryaPalletController::class, 'gallery'])->name('allgallery');
Route::get('videos', [SauryaPalletController::class, 'index'])->name('videos');
Route::get('salescenter', [SauryaPalletController::class, 'salescenter'])->name('salescenter');
Route::get('services/{service:slug}', [ServiceController::class, 'servicesingle'])->name('servicesingle');
Route::get('product/{product:slug}', [ServiceController::class, 'productsingle'])->name('productsingle');
Route::get('blogs/{blog:slug}', [BlogController::class, 'blogsingle'])->name('blogsingle');
Route::get('allblogs', [BlogController::class, 'allblogs'])->name('allblogs');
Route::get('services', [ServiceController::class, 'services'])->name('services');
Route::get('/service/{service:slug}', [IndexController::class, 'subservices'])->name('subservices');
Route::get('/offer/{offer:slug}', [IndexController::class, 'offers'])->name('offers.single');
Route::get('/location/{location:slug}', [IndexController::class, 'location'])->name('location.single');

Route::get('products', [ServiceController::class, 'products'])->name('products');
Route::post('/updatecontact', [IndexController::class, 'updatecontact'])->name('updatecontact');
Route::get('/privacyPolicy', [IndexController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/termsandcondition', [IndexController::class, 'termsandcondition'])->name('termsandcondition');
Route::get('/migrate', function () {
    Artisan::call('migrate');
    return 'Migration has been successfully';
});
Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return 'Application all kind of cache has been cleared';
});
