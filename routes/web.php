<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Frontend\Allshow;
use App\Http\Controllers\PaypalController;

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

Route::get('/', [Allshow::class,'frontcatshow'])->name('frontcatshow');
Route::get('aboutshow', [Allshow::class,'aboutshow'])->name('aboutshow');
Route::get('contactshow', [Allshow::class,'contactshow'])->name('contactshow');
Route::get('showProductDetails/{id}', [Allshow::class,'showProductDetails'])->name('showProductDetails');
Route::post('feedback', [Allshow::class,'feedbackstore'])->name('feedback');
Route::get('send', [Allshow::class,'sendnotification'])->name('sendnotification');





Route::get('/admin', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');



Route::group(['prefix'=>'/cart'],function(){
    Route::post('/add','App\Http\Controllers\Frontend\cartController@store')->name('add');
    Route::get('/delete/{id}','App\Http\Controllers\Frontend\cartController@itemDelete')->name('itemDelete');
    Route::get('/viewcart','App\Http\Controllers\Frontend\cartController@viewcart')->name('viewcart');
    Route::post('/addOrder','App\Http\Controllers\Frontend\cartController@index')->name('addOrder');
    Route::get('/searchdata/{id}','App\Http\Controllers\Frontend\cartController@searchdata')->name('searchdata');
    Route::get('/userdata','App\Http\Controllers\Frontend\cartController@userdata')->name('userdata');
    

});




Route::group(['prefix'=>'/admin'],function(){
  
    
    Route::group(['prefix'=>'/subcategory'],function(){
        Route::get('/create','App\Http\Controllers\Backend\SubcategoryController@create')->name('subcategorycreate');
        Route::post('/insert','App\Http\Controllers\Backend\SubcategoryController@store')->name('subcategoryinsert');
        Route::get('/manage','App\Http\Controllers\Backend\SubcategoryController@index')->name('subcategorymanage');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\SubcategoryController@edit')->name('subcategoryedit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\SubcategoryController@update')->name('subcategoryupdate');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\SubcategoryController@delete')->name('subcategorydelete');
    });

    Route::group(['prefix'=>'/orders'],function(){
        Route::get('/create','App\Http\Controllers\Backend\OrderController@create')->name('ordercreate');
        Route::get('/manage','App\Http\Controllers\Backend\OrderController@index')->name('ordermanage');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\OrderController@edit')->name('orderedit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\OrderController@update')->name('orderupdate');
        Route::get('/feedview','App\Http\Controllers\Backend\OrderController@feedview')->name('feedview');
        
    });

    Route::group(['prefix'=>'/item'],function(){
        Route::get('/create','App\Http\Controllers\Backend\ItemsController@create')->name('item.create');
        Route::post('/insert','App\Http\Controllers\Backend\ItemsController@store')->name('item.store');
        Route::get('/manage','App\Http\Controllers\Backend\ItemsController@index')->name('item.manage');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\ItemsController@edit')->name('item.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\ItemsController@update')->name('item.update');
        Route::post('/update/singleImage/{id}','App\Http\Controllers\Backend\ItemsController@updatesingImage')->name('item.single.update');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\ItemsController@destroy')->name('item.delete');
        Route::get('/delete/image/{id}','App\Http\Controllers\Backend\ItemsController@deletesingleImage')->name('item.image.delete');
    });
});

route::get('createpaypal',[PaypalController::class,'createpaypal'])->name('createpaypal');

route::post('processPaypal',[PaypalController::class,'processPaypal'])->name('processPaypal');

route::get('processSuccess',[PaypalController::class,'processSuccess'])->name('processSuccess');

route::get('processCancel',[PaypalController::class,'processCancel'])->name('processCancel');
require __DIR__.'/auth.php';
