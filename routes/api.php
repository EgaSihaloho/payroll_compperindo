<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;
use App\Service\Barang;
use App\Service\Departemen;
use App\Service\Gaji;
use App\Service\Karyawan;
use App\Service\Role;
use App\Service\UserAccess;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', 'RegistrationController@register');
Route::post('/login', 'LoginController@login');


Route::get('/showAllUserAccess', function () {
    return json_encode(UserAccess::showUserAccess());
});

Route::get('/showAllBarang', function () {
    return json_encode(Barang::showBarang());
});

Route::get('/showAllDepartemen', function () {
    return json_encode(Departemen::showDepartemen());
});

Route::get('/showAllGaji', function () {
    return json_encode(Gaji::showGaji());
});


Route::get('/showAllKaryawan', function () {
    return json_encode(Karyawan::showKaryawan());
});

Route::get('/showAllRole', function () {
    return json_encode(Role::showRole());
});

Route::post('/findUserAccess', function (Request $request) {
    return json_encode(UserAccess::findUserAccess($request->all())->value);
});

Route::post('/findRole', function (Request $request) {
    return json_encode(Role::findRole($request->all())->value);
});

Route::post('/findBarang', function (Request $request) {
    return json_encode(Barang::findBarang($request->all())->value);
});

Route::post('/findDepartemen', function (Request $request) {
    return json_encode(Departemen::findDepartemen($request->all())->value);
});

Route::post('/findGaji', function (Request $request) {
    return json_encode(Gaji::findGaji($request->all())->value);
});

Route::post('/findKaryawan', function (Request $request) {
    return json_encode(Karyawan::findKaryawan($request->all())->value);
});

Route::post('/insertUserAccess', function (Request $request) {
    return json_encode(UserAccess::insertUserAccess($request->all())->value);
});

Route::post('/insertRole', function (Request $request) {
    return json_encode(Role::insertRole($request->all())->value);
});

Route::post('/insertBarang', function (Request $request) {
    return json_encode(Barang::insertBarang($request->all())->value);
});

Route::post('/insertDepartemen', function (Request $request) {
    return json_encode(Departemen::insertDepartemen($request->all())->value);
});

Route::post('/insertGaji', function (Request $request) {
    return json_encode(Gaji::insertGaji($request->all())->value);
});

Route::post('/insertKaryawan', function (Request $request) {
    return json_encode(Karyawan::insertKaryawan($request->all())->value);
});

Route::post('/updateUserAccess', function (Request $request) {
    return json_encode(UserAccess::updateUserAccess($request->all())->value);
});

Route::post('/updateRole', function (Request $request) {
    return json_encode(Role::updateRole($request->all())->value);
});

Route::post('/updateBarang', function (Request $request) {
    return json_encode(Barang::updateBarang($request->all())->value);
});

Route::post('/updateDepartemen', function (Request $request) {
    return json_encode(Departemen::updateDepartemen($request->all())->value);
});

Route::post('/updateGaji', function (Request $request) {
    return json_encode(Gaji::updateGaji($request->all())->value);
});

Route::post('/updateKaryawan', function (Request $request) {
    return json_encode(Karyawan::updateKaryawan($request->all())->value);
});

Route::post('/deleteUserAccess', function (Request $request) {
    return json_encode(UserAccess::deleteUserAccess($request->all())->value);
});

Route::post('/deleteRole', function (Request $request) {
    return json_encode(Role::deleteRole($request->all())->value);
});

Route::post('/deleteBarang', function (Request $request) {
    return json_encode(Barang::deleteBarang($request->all())->value);
});

Route::post('/deleteDepartemen', function (Request $request) {
    return json_encode(Departemen::deleteDepartemen($request->all())->value);
});

Route::post('/deleteGaji', function (Request $request) {
    return json_encode(Gaji::deleteGaji($request->all())->value);
});

Route::post('/deleteKaryawan', function (Request $request) {
    return json_encode(Karyawan::deleteKaryawan($request->all())->value);
});
