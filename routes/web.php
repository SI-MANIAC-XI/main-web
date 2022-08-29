<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
   return view('home');
});

Route::get('/about', function () {
   return view('about');
});

Route::get('/competition', function () {
   return view('competition');
});

// Route::get('404', function () {
//     return view('404');
// });

Route::get('/faq', function () {
   return view('faq');
});

Route::get('/login', function () {
   return view('auth.login');
})->name('login');

Route::post('/login', 'AccountController@authenticate');
Route::post('/logout', 'AccountController@logout');

Route::get('/register', 'AccountController@registerPage');

Route::post('/register', 'RegisterController@store');

//Auth::routes();


// Route::group(['middleware' => 'auth'], function () {
//    Route::get('')
// });
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'is_admin'], function () {
   Route::put('/dashboardadmin/confirm/{team}/', 'TeamController@confirmation');
   Route::put('/dashboardadmin/reject/{team}/', 'TeamController@rejectConfirmation');
   Route::resource('/verifikasiteam', 'TeamController');
   Route::get('/dashboardadmin', function () {
      return view('admin.adminwelcome');
   });
   Route::delete('/deleteteam/{team}', 'TeamController@destroy');
   Route::get('/pesertaWorkshop', 'AdminController@getPesertaWorkshop');
});

Route::group(['middleware' => 'auth'], function () {
   Route::get('/dashboard/{account}', 'TeamController@TeamDisplay');
   Route::put('/updateteam/{team}', 'TeamDetailController@updateImg');
   Route::get('/workshop', 'TeamController@displayWorkshop');
   Route::post('/workshop/insert', 'TeamController@registerWorkshop')->name('register_workshop');
});

Route::group(['middleware' => 'is_super_admin'], function () {
   Route::get('/dashboardAkun', 'AccountController@index');
   Route::put('/updateAkun/{account}', 'AccountController@update');
});
