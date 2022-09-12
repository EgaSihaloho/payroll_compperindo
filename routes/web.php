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

/* ------------------------------ Routes Login ------------------------------ */
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');
/* ---------------------------- End Routes Login ---------------------------- */

/* ---------------------------- Routes Dashboard ---------------------------- */
Route::get('/dashboard', 'DashboardController@index');
/* -------------------------- End Routes Dashboard -------------------------- */

/* ------------------------------ Routes Barang ----------------------------- */
Route::get('/barang', 'BarangController@index');
Route::get('/setting_barang', 'BarangController@index');
Route::get('/getDataTableBarang', 'BarangController@getDataTableBarang');
Route::get('/findBarang/{search}', 'BarangController@findBarang');
Route::post('/editBarang', 'barangController@editBarang');
Route::post('/addBarang', 'barangController@addBarang');
Route::post('/deleteBarang', 'barangController@deleteBarang');
/* ---------------------------- End Routes Barang --------------------------- */

/* ------------------------------ Routes Karyawan ----------------------------- */
Route::get('/karyawan', 'KaryawanController@index');
Route::get('/setting_karyawan', 'KaryawanController@index');
Route::get('/getDataTableKaryawan', 'KaryawanController@getDataTableKaryawan');
Route::get('/findKaryawan/{search}', 'KaryawanController@findKaryawan');
Route::post('/editKaryawan', 'KaryawanController@editKaryawan');
Route::post('/addKaryawan', 'KaryawanController@addKaryawan');
Route::post('/deleteKaryawan', 'KaryawanController@deleteKaryawan');
Route::get('/getRelGaji/{id}', 'KaryawanController@getDetailRelGaji');
// Route::get('/templateGaji', function () {
//     return 'hello';
// });
/* ---------------------------- End Routes Karyawan --------------------------- */


/* --------------------------------- Testing -------------------------------- */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/homes', function () {
    return view('dashboard');
});

Route::get('/layouts', function () {
    return view('content.dashboard');
});
Route::get('/test', function () {
    return view('layout.test');
});
/* ------------------------------- End Testing ------------------------------ */