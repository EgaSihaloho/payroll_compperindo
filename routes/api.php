<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;
use App\Service\Barang;
use App\Service\Departemen;

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

Route::get('/showAllBarang', function () {
    return json_encode(Barang::showBarang());
});

Route::get('/showAllDepartemen', function () {
    return json_encode(Departemen::showDepartemen());
});


Route::post('/findBarang', function (Request $request) {
    return json_encode(Barang::findBarang($request->all())->value);
});

Route::post('/findDepartemen', function (Request $request) {
    return json_encode(Departemen::findDepartemen($request->all())->value);
});

Route::post('/insertBarang', function (Request $request) {
    return json_encode(Barang::insertBarang($request->all())->value);
});

Route::post('/updateBarang', function (Request $request) {
    return json_encode(Barang::updateBarang($request->all())->value);
});

Route::post('/deleteBarang', function (Request $request) {
    return json_encode(Barang::deleteBarang($request->all())->value);
});
