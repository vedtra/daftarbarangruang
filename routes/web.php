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

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

// Route::get('/coba', function () {
//     return view('coba');
// });
// Route::get('/halaman/{page?}', function ($page=1) {//route dengan parameter ,=1-->default parameter
//     return "Halo, kamu sedang mengakses halaman ".$page;
// });

Route::group(['namespace' => 'auth'],function(){
    Route::post('/login','LoginController@login')->name('login');
    Route::get('/logout',function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');;
    Route::post('/register','RegisterController@store');
});

// Routing untuk user level admin
Route::group(['prefix' => 'admin','middleware' => 'admin'], function() {
    Route::get('/', function () {
        $this->data['title'] = 'Dashboard';
        return view('admin.index',$this->data);
    });
    Route::get('/addroom','AdminController@addroom');
    Route::get('/addroommilik','AdminController@addruangmilik');
    Route::get('/addDbr','AdminController@addDbr');
    Route::get('/addkodeaset','AdminController@addkodeaset');
    Route::get('/addbrg','AdminController@addbarang');
    Route::get('/addstokbrg','AdminController@addstok_brg');
    Route::post('/storeruang', 'AdminController@storeruang');
    Route::post('/storeruangmilik', 'AdminController@storeruangmilik');
    Route::post('/storedbr', 'AdminController@storedbr');
    Route::post('/storeaset', 'AdminController@storeaset');
    Route::post('/storebrg', 'AdminController@storebrg');
    Route::post('/storestokbrg', 'AdminController@storestokbrg');
    Route::get('/show', 'AdminController@showruang');
    Route::get('/showroommilik', 'AdminController@showruangmilik');
    Route::get('/showdbr', 'AdminController@showdbr');
    Route::get('/showmohon', 'AdminController@showmohon');
    Route::get('/showkodeaset', 'AdminController@showkodeaset');
    Route::get('/showmohondetail/{id}', 'AdminController@showmohondetail');
    Route::post('/confirm/{id}', 'AdminController@confirm');
    Route::get('/showstokbrg', 'AdminController@showstokbrg');
    Route::get('/showmohondetailbaru/{id}', 'AdminController@showmohondetailbrg');
    Route::post('/confirmbaru/{id}', 'AdminController@confirmbaru');
    Route::get('/showmohonbaru', 'AdminController@showmohonbaru');
    Route::get('/tolakmohon/{tolak}', 'AdminController@showreject');
    Route::post('/rejectprocess/{tolak}', 'AdminController@rejectprocess');
    Route::get('/tambahakun','AdminController@addakun');
    Route::post('/storeakun', 'AdminController@storeakun');
    Route::get('/showakun','AdminController@showakun');
    Route::get('/getPDF/{id}', 'AdminController@exportPDF');
    Route::get('/laporandbr','AdminController@showlaporan');
    Route::get('/getPDFAll', 'AdminController@exportPDFAll');
    Route::get('/tolakmohonbaru/{tolak}', 'AdminController@showrejectbaru');
    Route::post('/rejectprocessbaru/{tolak}', 'AdminController@rejectprocessbaru');
});

Route::group(['prefix' => 'pemohon','middleware' => 'pemohon'], function() {
    Route::get('/', function () {
        $this->data['title'] = 'Dashboard';
        return view('pemohon.index',$this->data);
    });
    Route::get('/addpindah','PemohonController@addpindah');
    Route::get('/addbarangbaru','PemohonController@addbarangbaru');
    Route::post('/storepindah', 'PemohonController@storepindah');
    Route::post('/storebaru', 'PemohonController@storebaru');
    Route::get('/mohonpindah', 'PemohonController@showmohonpindah');
    Route::get('/mohonbaru', 'PemohonController@showmohonbaru');

    
});