<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['namespace' => 'admin','prefix'=>'thefalcon-admin', 'middleware' => ['auth', 'verified']], function() {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password');

    Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');

    Route::get('category', [App\Http\Controllers\admin\CategoryController::class, 'index'])->name('category');      
    
    Route::post('/createcategories', [App\Http\Controllers\admin\CategoryController::class, 'create'])->name('createcategories');
        
    Route::get('categories', [App\Http\Controllers\admin\CategoryController::class, 'show'])->name('categories');  
    
    Route::get('/editcategories/{id}', [App\Http\Controllers\admin\CategoryController::class, 'edit'])->name('editcategory');    
    
    Route::patch('/updatecategories/{id}',[App\Http\Controllers\admin\CategoryController::class, 'update'])->name('updatecategory'); 
    
    Route::delete('deletecategories/{id}',[App\Http\Controllers\admin\CategoryController::class, 'destroy'])->name('delete_category');

    Route::get('/s', [App\Http\Controllers\admin\SliderController::class, 'index'])->name('addslider'); 

    Route::post('/slider_t', [App\Http\Controllers\admin\SliderController::class, 'create'])->name('sliderstore');

    Route::get('slider', [App\Http\Controllers\admin\SliderController::class, 'show'])->name('slider'); 

    Route::get('/editslider/{id}', [App\Http\Controllers\admin\SliderController::class, 'edit'])->name('editslider');
    
    Route::patch('/updateslider/{id}',[App\Http\Controllers\admin\SliderController::class, 'update'])->name('updateslider'); 

    Route::delete('deleteslider/{id}',[App\Http\Controllers\admin\SliderController::class, 'destroy'])->name('deleteslider');  

    Route::get('servicedetails', [App\Http\Controllers\admin\ServiceDetailController::class, 'index'])->name('servicedetail');      
        
    Route::post('/create_servicedetails', [App\Http\Controllers\admin\ServiceDetailController::class, 'create'])->name('create_servicedetails');
        
    Route::get('serviceDetails', [App\Http\Controllers\admin\ServiceDetailController::class, 'show'])->name('serviceDetails');  
    
    Route::get('/editservicedetails/{id}', [App\Http\Controllers\admin\ServiceDetailController::class, 'edit'])->name('editservicedetails');    
    
    Route::patch('/update_servicedetails/{id}',[App\Http\Controllers\admin\ServiceDetailController::class, 'update'])->name('update_servicedetails'); 
    
    Route::delete('delete_servicedetails/{id}',[App\Http\Controllers\admin\ServiceDetailController::class, 'destroy'])->name('delete_servicedetails');

    Route::get('/a', [App\Http\Controllers\admin\AboutController::class, 'index'])->name('addabout'); 

    Route::post('/aboutstore', [App\Http\Controllers\admin\AboutController::class, 'create'])->name('aboutstore');

    Route::get('aboutus', [App\Http\Controllers\admin\AboutController::class, 'show'])->name('aboutus'); 

    Route::get('/editabout/{id}', [App\Http\Controllers\admin\AboutController::class, 'edit'])->name('editabout');
    
    Route::patch('/updateabout/{id}',[App\Http\Controllers\admin\AboutController::class, 'update'])->name('updateabout'); 

    Route::delete('deleteabout/{id}',[App\Http\Controllers\admin\AboutController::class, 'destroy'])->name('deleteabout');  

    Route::get('/c', [App\Http\Controllers\admin\CountController::class, 'index'])->name('addcount'); 

    Route::post('/count-store', [App\Http\Controllers\admin\CountController::class, 'create'])->name('countstore');

    Route::get('count', [App\Http\Controllers\admin\CountController::class, 'show'])->name('count'); 

    Route::get('/editcount/{id}', [App\Http\Controllers\admin\CountController::class, 'edit'])->name('editcount');
    
    Route::patch('/updatecount/{id}',[App\Http\Controllers\admin\CountController::class, 'update'])->name('updatecount'); 

    Route::delete('deletecount/{id}',[App\Http\Controllers\admin\CountController::class, 'destroy'])->name('deletecount'); 
    
    Route::get('/service', [App\Http\Controllers\admin\ServicesController::class, 'index'])->name('addservices'); 

    Route::post('/services-store', [App\Http\Controllers\admin\ServicesController::class, 'store'])->name('createservices');

    Route::get('services', [App\Http\Controllers\admin\ServicesController::class, 'show'])->name('services'); 

    Route::get('/editservices/{id}', [App\Http\Controllers\admin\ServicesController::class, 'edit'])->name('editservices');
    
    Route::patch('/updateservices/{id}',[App\Http\Controllers\admin\ServicesController::class, 'update'])->name('updateservices'); 

    Route::delete('deleteservices/{id}',[App\Http\Controllers\admin\ServicesController::class, 'destroy'])->name('deleteservices'); 
    
    });


 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\web\IndexController::class, 'index'])->name('index');

Route::get('/about', [App\Http\Controllers\web\IndexController::class, 'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\web\IndexController::class, 'contact'])->name('contact');

Route::get('/service1', [App\Http\Controllers\web\IndexController::class, 'service1'])->name('service1');

Route::get('/service2', [App\Http\Controllers\web\IndexController::class, 'service2'])->name('service2');

Route::get('/service3', [App\Http\Controllers\web\IndexController::class, 'service3'])->name('service3');

Route::get('/service4', [App\Http\Controllers\web\IndexController::class, 'service4'])->name('service4');

