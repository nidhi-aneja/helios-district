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
use App\User;
use App\Parentcategory;
use App\Subcategory;
use App\Childcategory;

use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/index', function(){
    $parentcat = Parentcategory::all();
    
//    dd($parentcat[0]->subcategories);
    /*$subcat=Subcategory::level2();
    $childcat=Childcategory::level3();*/
   return view('layout.index', compact('parentcat')); 
});
//Route::resource('register','Registration');
//Route::resource('login', 'Login');

Route::get('/register', 'Registration@create')->name('register.create');
Route::post('/register', 'Registration@store')->name('register.store');

Route::get('/login', 'Login@create')->name('login.create');
Route::post('/login', 'Login@store')->name('login.store');

Route::get('/login/destroy', 'Login@destroy')->name('login.destroy');

Route::get('/userdashboard', 'Login@index')->name('login.index')->middleware('isuser');



Route::get('/forgetpassword', 'Login@forgetpassword')->name('login.forgetpassword');
//Route::get('/sendmail', 'Login@sendmail')->name('login.sendmail');
Route::post('password-reset', 'login@sendPasswordResetToken');
Route::get('reset-password/{token}', 'login@showPasswordResetForm')->name('show-reset-password');
Route::post('reset-password/{token}', 'login@resetPassword')->name('reset-password');
//--------------------------------------------------------------------------------------
 
Route::post('/vendor', 'Registration@vendorRegister')->name('vendor.register');//registring vendor to database
Route::get('/vendor', 'Registration@vendorView')->name('vendor.view');//vendor page
Route::get('/vendorboard', 'Registration@index')->name('Registration.index')->middleware('isvendor');
//------------------------------------------------------------------------------------------------

Route::get('/admin/admin', 'Login@showAdmin')->name('admin')->middleware('isadmin');
Route::get('/admin/categories', 'Categories@categoryTable')->name('categoryTable');
Route::get('/admin/addcategory', 'Categories@addCategory')->name('addcategory');
Route::get('/admin/storecategory', 'Categories@storeCategory')->name('storecategory');
//____________________________________________________________________________________________________
Route::get('/admin/editparentcategory/{slug}', 'Categories@editParentCategory')->name('editparentcategory');
Route::get('/admin/editsubcategory/{slug}', 'Categories@editSubCategory')->name('editsubcategory');
Route::get('/admin/editchildcategory/{slug}', 'Categories@editChildCategory')->name('editchildcategory');
//_______________________________________________________________________________________________________________
Route::get('/admin/updateparentcategory/{slug}', 'Categories@updateParentCategory')->name('updateparentcategory');
Route::get('/admin/updatesubcategory/{slug}', 'Categories@updateSubCategory')->name('updatesubcategory');
Route::get('/admin/updatechildcategory/{slug}', 'Categories@updateChildCategory')->name('updatechildcategory');
//________________________________________________________________________________________________________________________
Route::get('/admin/destroyparentcategory/{slug}', 'Categories@destroyParentCategory')->name('destroyparentcategory');
Route::get('/admin/destroysubcategory/{slug}', 'Categories@destroySubCategory')->name('destroysubcategory');
Route::get('/admin/destroychildcategory/{slug}', 'Categories@destroyChildCategory')->name('destroychildcategory');

