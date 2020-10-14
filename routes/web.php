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

use App\Medicine;
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cleared!";
});
Route::get('/', function () {
    $medicines=Medicine::inRandomOrder()->limit('8')->get();
    return view('welcome',compact('medicines'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'HomeController@search')->name('search');


Route::get('company{id}abcd', 'HomeController@company')->name('company');
Route::get('about', 'HomeController@about')->name('about');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::post('contact', 'HomeController@message')->name('message.store');

Route::get('cart', 'CartController@cart')->name('cart');
Route::get('add/cart{post}', 'CartController@addtocart')->name('add.cart');
Route::get('show/cart', 'CartController@showCart')->name('show.cart');
Route::get('remove/cart{id}', 'CartController@remove')->name('remove.cart');

Route::group(['middleware'=>['auth']],function() {
    Route::get('checkout', 'CartController@checkout')->name('checkout.cart');
    Route::post('confirm/checkout', 'CartController@confirmcheckout')->name('checkout.confirm');
});

Route::get('patient/profile','PatientProfileController@index')->name('patient.profile');
Route::get('pending/order','PatientProfileController@pendingOrder')->name('pending.order');
Route::get('order/history','PatientProfileController@orderHistory')->name('order.history');
Route::get('change/pass','PatientProfileController@changePass')->name('change.pass');


Route::group(['as'=>'admin.','prefix'=>'admin','middleware'=>['auth','admin']],function() {

    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('admin/profile', 'Admin\DashboardController@profile')->name('admin.profile');


    Route::get('add/company', 'Admin\CompanyController@index')->name('add.company');
    Route::get('company/list', 'Admin\CompanyController@companylist')->name('company.list');
    Route::post('company/store', 'Admin\CompanyController@store')->name('store.company');
    Route::get('company/delete{id}', 'Admin\CompanyController@destroy')->name('delete.company');

    Route::get('category', 'Admin\CategoryController@index')->name('add.category');
    Route::get('category/list', 'Admin\CategoryController@categorylist')->name('category.list');
    Route::post('category/store', 'Admin\CategoryController@store')->name('store.category');
    Route::get('category/delete{id}', 'Admin\CategoryController@destroy')->name('delete.category');


    Route::get('pending', 'Admin\OrderController@index')->name('pending');
    Route::get('delivered', 'Admin\OrderController@delivered')->name('delivered');
    Route::get('edit/order', 'Admin\OrderController@edit')->name('edit.order');

    Route::get('add/medicine', 'Admin\MedicineController@index')->name('add.medicine');
    Route::get('medicine/list', 'Admin\MedicineController@medicinelist')->name('medicine.list');
    Route::post('medicine/store', 'Admin\MedicineController@store')->name('store.medicine');
    Route::get('medicine/delete{id}', 'Admin\MedicineController@destroy')->name('delete.medicine');
    Route::get('medicine/edit{id}', 'Admin\MedicineController@edit')->name('edit.medicine');
    Route::post('medicine/update', 'Admin\MedicineController@update')->name('update.medicine');

});
