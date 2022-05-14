<?php

use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home') ;
Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('homepage') ;
Route::get('/aboutus',[\App\Http\Controllers\HomeController::class,'aboutus'])->name('aboutus') ;
Route::get('/fag',[\App\Http\Controllers\HomeController::class,'fag'])->name('fag') ;
Route::get('/contact',[\App\Http\Controllers\HomeController::class,'contact'])->name('contact') ;
Route::get('/references',[\App\Http\Controllers\HomeController::class,'references'])->name('references') ;
Route::post('/sendmessage',[\App\Http\Controllers\HomeController::class,'sendmessage'])->name('sendmessage') ;
Route::get('/product/{id}/{slug}',[\App\Http\Controllers\HomeController::class,'product'])->name('product') ;
Route::get('/categoryproducts/{id}/{slug}',[\App\Http\Controllers\HomeController::class,'categoryproducts'])->name('categoryproducts') ;
Route::get('/addtocart/{id}',[\App\Http\Controllers\HomeController::class,'addtocart'])->name('addtocart') ;
Route::post('/getproduct',[\App\Http\Controllers\HomeController::class,'getproduct'])->name('getproduct') ;

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    #Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    # Product
    Route::prefix('product')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_products');
        Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
        Route::post('store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');
    });

    # Message
    Route::prefix('messages')->group(function () {

        Route::get('/',[MessageController::class,'index'])->name('admin_messages');
        Route::get('edit/{id}',[MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[MessageController::class,'update'])->name('admin_message_update');
        Route::get('delete/{id}',[MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('show',[MessageController::class,'show'])->name('admin_message_show');
    });

    # Product Image Galery
    Route::prefix('image')->group(function () {

        Route::get('create/{product_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{product_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{product_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });

    #Setting
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

});

Route::get('/login',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name('login');
Route::post('/admin/logincheck', [\App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout',[\App\Http\Controllers\Admin\HomeController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home_login');
    Route::post('/home/logincheck',[\App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('home_logincheck');
    Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('home_logout');

});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {

    Route::get('/',[UserController::class,'index'])->name('myprofile');


});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('/profile',[UserController::class,'index'])->name('userprofile');

});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
