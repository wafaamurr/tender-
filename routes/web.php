<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BackEnd\CompanyController;
use App\Http\Controllers\BackEnd\CategoryController;
use App\Http\Controllers\BackEnd\ProductController;
use App\Http\Controllers\BackEnd\PersonController;
use App\Http\Controllers\product2Controller;

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
Route::view('/eq','vue/eq');
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


 /*
|--------------------------------------------------------------------------
|                        TENDER ROUTES
|--------------------------------------------------------------------------
|
*/

Route::middleware(['auth:sanctum', 'verified'])-> group(function(){
 
    
   /*
|--------------------------------------------------------------------------
|                       PERSONS ROUTES
|--------------------------------------------------------------------------
|
*/
   
    // start create or insert data for new member

        Route::get('/add_member',[PersonController::class,'create'])->name('person.create');; 
        Route::Post('/add_member/store',[PersonController::class,'store'])->name('person.store');

    //end create or insert data for new member

    //start view persons info 
        Route::get('/all_member',[PersonController::class,'index'])->name('person.index'); 
        Route::get('/member/show/{id}', [PersonController::class,'show'])->name('person.show');
        Route::get('/all_trash_member',[PersonController::class,'trashMember'])->name('person.trashMember'); 

    //end view persons info
    //start edit parson info
        Route::get('/member/edit/{id}',[PersonController::class,'edit'])->name('person.edit');
        Route::Post('/member/update/{id}',[PersonController::class,'update'])->name('person.update');

    //endedit parson info

   
    //start  destroy       
      
      Route::get('/member/{id}',[PersonController::class,'destroy'] )->name('person.destroy');
      Route::get('/member/restore/{id}',[PersonController::class,'restore'] )->name('person.restore');

    //

 
 /*
|--------------------------------------------------------------------------
|                        COMPANY ROUTES
|--------------------------------------------------------------------------
|
*/
    // start create or insert data for new company

        Route::get('/add_company',[CompanyController::class,'create'])->name('company.create');; 
        Route::Post('/add_company/store',[CompanyController::class,'store'])->name('company.store');

    //end create or insert data for new company

    //start view companis info 
        Route::get('/all_companis',[CompanyController::class,'index'])->name('company.index'); 
        Route::get('/all_trash_companis',[CompanyController::class,'trashCompany'])->name('company.trashCompany'); 
        Route::get('/company/show/{id}',[CompanyController::class,'show'])->name('company.show');


    //end view company info
    //start edit company info
        Route::get('/company/edit/{id}',[CompanyController::class,'edit'])->name('company.edit');
        Route::Post('/company/update/{id}',[CompanyController::class,'update'])->name('company.update');

    //endedit company info

    //start  destroy       
      
       Route::get('/company/{id}',[CompanyController::class,'destroy'] )->name('company.destroy');
       Route::get('/company/restore/{id}',[CompanyController::class,'restore'] )->name('company.restore');
     
    

    //
    

  


 
    /*
|--------------------------------------------------------------------------
|                        CATEGORY  ROUTES
|--------------------------------------------------------------------------
|
*/
    
// start create or insert data to new category
    
    Route::get('/add_category',[CategoryController::class,'create'])->name('category.create');; 
    Route::Post('/add_category/store',[CategoryController::class,'store'])->name('category.store');
    
        //end create or insert data to new category
    
//start view category info 
    Route::get('/all_category',[CategoryController::class,'index'])->name('category.index');
    Route::get('/all_trash_category',[CategoryController::class,'trashCategory'])->name('category.trashCategory');  
    Route::get('/category/show/{id}', [CategoryController::class,'show'])->name('category.show');
    
    
        //end view category info
//start edit category info
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::Post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');

        //endedit category info
//start  destroy       
      
    Route::get('/category/{id}',[CategoryController::class,'destroy'] )->name('category.destroy');
   
    Route::get('/category/restore/{id}',[CategoryController::class,'restore'] )->name('category.restore');
   
    //
  
    

    /*
|--------------------------------------------------------------------------
|                        PRODUCT  ROUTES
|--------------------------------------------------------------------------
|
*/

        
    // start create or insert data to new product
        
      Route::get('/add_product',[ProductController::class,'create'])->name('product.create');; 
      Route::Post('/add_product/store',[ProductController::class,'store'])->name('product.store');

        //end create or insert data to new product

    //start view product info 
      Route::get('/all_product',[ProductController::class,'index'])->name('product.index');
      Route::get('/all_trash_product',[ProductController::class,'trashProduct'])->name('product.trashProduct');  
      Route::get('/product/show/{id}', [ProductController::class,'show'])->name('product.show');


        //end view product info
    //start edit category info
      Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
      Route::Post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');

        //endedit product info
    //start  destroy       
    
      Route::get('/product/{id}',[ProductController::class,'destroy'] )->name('product.destroy');
     Route::get('/product/restore/{id}',[ProductController::class,'restore'] )->name('product.restore');

    //










    
    });
    
    // API'S
    //Postman  
    Route::put('/pp/{id}',[product2Controller::class,'update'])->name('products.update'); 

    Route::get('/pp',[product2Controller::class,'index'])->name('products.index');
    Route::post('/pp',[product2Controller::class,'store'])->name('products.store');
    Route::delete('/pp/{id}',[product2Controller::class,'destroy'])->name('products.destroy'); 

    //Server  HTTP methods (POST,GET,PUT,DELLETE,PATHC)