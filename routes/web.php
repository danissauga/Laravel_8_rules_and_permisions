<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes();


Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

  
Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

Route::prefix('holders')->group(function() {

    Route::get('', 'App\Http\Controllers\HolderController@index')->name('holder.index');
    Route::get('search', 'App\Http\Controllers\HolderController@search')->name('holder.search');
    Route::get('getBranches/{company}', 'App\Http\Controllers\HolderController@getBranches')->name('holder.getBranches');
    Route::get('getDepartments/{company}', 'App\Http\Controllers\HolderController@getDepartments')->name('holder.getDepartments');
    //Route::get('create', 'App\Http\Controllers\HolderController@create')->name('holder.create');
    Route::post('storeAjax', 'App\Http\Controllers\HolderController@storeAjax')->name('holder.storeAjax');
    Route::post('storeHolder', 'App\Http\Controllers\HolderController@storeHolder')->name('holder.storeHolder');
    Route::get('editAjax/{holder}', 'App\Http\Controllers\HolderController@editAjax')->name('holder.editAjax');
    Route::get('showAjax/{holder}', 'App\Http\Controllers\HolderController@showAjax')->name('holder.showAjax');
    Route::post('updateAjax/{holder}', 'App\Http\Controllers\HolderController@updateAjax')->name('holder.updateAjax');
    Route::post('deleteAjax/{holder}', 'App\Http\Controllers\HolderController@deleteAjax')->name('holder.deleteAjax');

});