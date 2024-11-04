<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashhboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => 'auth'], function () {
Route::get('/dashboard', [DashhboardController::class, 'index']);


Route::get('generate-pdf/{id}', [DashhboardController::class, 'generatePDF']);


Route::get('/chart_apex', [DashhboardController::class, 'chart_apex']);


Route::get('/client_add', [DashhboardController::class, 'client_add']);
Route::post('/client_add', [DashhboardController::class, 'client_adds'])->name('client_adds');
Route::get('client_edit/{id}', [DashhboardController::class, 'client_edit']);
Route::post('client_update/{id}', [DashhboardController::class, 'client_update']);
Route::get('client_delete/{id}', [DashhboardController::class, 'client_delete']);
Route::get('/client_list', [DashhboardController::class, 'client_list']);
Route::get('/search_client', [DashhboardController::class, 'search_client']);


// staff start
Route::get('/user_add', [DashhboardController::class, 'user_add']);
Route::post('/user_register', [DashhboardController::class, 'userregisterPost'])->name('userregister');
Route::get('/user_list', [DashhboardController::class, 'user_list']);
Route::get('user_delete/{id}', [DashhboardController::class, 'user_delete']);
Route::get('user_edit/{id}', [DashhboardController::class, 'user_edit']);
Route::post('user_update/{id}', [DashhboardController::class, 'user_update']);
Route::get('/search_user', [DashhboardController::class, 'search_user']);



// staff end





// logout start 
Route::delete('/logout', [DashhboardController::class, 'logout'])->name('logout');
// logout end




Route::get('/form_input_group', [DashhboardController::class, 'form_input_group']);
Route::get('/form_layout', [DashhboardController::class, 'form_layout']);
Route::get('/privacy_policy', [DashhboardController::class, 'privacy_policy']);
Route::get('/product_add_category', [DashhboardController::class, 'product_add_category']);
Route::post('/product_add_category', [DashhboardController::class, 'product_add_categorys'])->name('product_add_categorys');
Route::get('/product_reject_add_category', [DashhboardController::class, 'product_reject_add_category']);
Route::post('/reject_product_add_categorys', [DashhboardController::class, 'reject_product_add_categorys'])->name('reject_product_add_categorys');

Route::get('/add_products', [DashhboardController::class, 'add_products']);


// buyers
Route::get('/buyers', [DashhboardController::class, 'add_buyers']);
Route::post('/buyers', [DashhboardController::class, 'buyers_adds'])->name('buyers_adds');
Route::get('/buyers_list', [DashhboardController::class, 'buyers_list']);
Route::get('buyers_show/{id}', [DashhboardController::class, 'buyers_show']);
Route::get('buyers_edit/{id}', [DashhboardController::class, 'buyers_edit']);
Route::post('buyers_update/{id}', [DashhboardController::class, 'buyers_update']);
Route::get('buyers_delete/{id}', [DashhboardController::class, 'buyers_delete']);
Route::get('/search_buyer', [DashhboardController::class, 'search_buyer']);

// buyers end

Route::get('/auth_confirm_mail', [DashhboardController::class, 'auth_confirm_mail']);
Route::get('/auth_lock_screen', [DashhboardController::class, 'auth_lock_screen']);


Route::get('/auth_recover_pwd', [DashhboardController::class, 'auth_recover_pwd']);
Route::get('/auth_recoverpw', [DashhboardController::class, 'auth_recoverpw']);



// Route::get('/buyers_list', [DashhboardController::class, 'buyers_list']);
// Route::get('/search', [DashhboardController::class, 'searchbuyers']);


// Route::get('buyers_edit/{id}', [DashhboardController::class, 'buyers_edit']);
// Route::post('buyers_update/{id}', [DashhboardController::class, 'buyers_update']);
// Route::get('buyers_delete/{id}', [DashhboardController::class, 'buyers_delete']);





Route::get('/product_list', [DashhboardController::class, 'product_list']);
Route::get('/search', [DashhboardController::class, 'searchproduct']);


Route::get('product_edit/{id}', [DashhboardController::class, 'product_edit']);
Route::post('product_update/{id}', [DashhboardController::class, 'product_update']);
Route::get('product_delete/{id}', [DashhboardController::class, 'product_delete']);


// <-----------------------Reject Product -------------------------->
Route::get('/reject_product_list', [DashhboardController::class, 'reject_product_list']);

Route::get('/request_search', [DashhboardController::class, 'search_reject_product']);

Route::get('reject_product_edit/{id}', [DashhboardController::class, 'reject_product_edit']);
Route::post('reject_product_update/{id}', [DashhboardController::class, 'reject_product_update']);
Route::get('reject_product_delete/{id}', [DashhboardController::class, 'reject_product_delete']);


// <-----------------------End Reject Product -------------------------->
Route::get('/table_data', [DashhboardController::class, 'table_data']);
Route::get('/table_editable', [DashhboardController::class, 'table_editable']);
Route::get('/table_basic', [DashhboardController::class, 'table_basic']);
Route::get('/terms_of_service', [DashhboardController::class, 'terms_of_service']);



Route::get('/user_account_setting', [DashhboardController::class, 'user_account_setting']);
Route::get('/user_privacy_setting', [DashhboardController::class, 'user_privacy_setting']);
Route::get('/user_profile_edit', [DashhboardController::class, 'user_profile_edit']);
Route::post('/user_profile_edit', [DashhboardController::class, 'user_profile_edits'])->name('user_profile_edits');
Route::get('/user_profile', [DashhboardController::class, 'user_profile']);
});


Route::get('/', [DashhboardController::class, 'auth_login']);

Route::group(['middleware' => 'guest'], function () {

Route::post('/register', [DashhboardController::class, 'registerPost'])->name('register');
Route::get('/auth_sign_in', [DashhboardController::class, 'auth_sign_in']);
Route::get('/auth_sign_up', [DashhboardController::class, 'auth_sign_up']);
Route::post('/', [DashhboardController::class, 'loginPost'])->name('login');

});