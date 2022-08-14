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

Route::post('/findBarang', function () {
    return json_encode(Barang::findBarang(
        [
            "nama_barang" => "LHLDDA009",
            "id_satuan" => 1,
            "harga" => 1200,
            "created_by" => 99
        ]

    )->value);
});

Route::post('/findDepartemen', function () {
    return json_encode(Departemen::findDepartemen(
        [
            "departement_name" => "Connector",
            "created_by" => 99
        ]

    )->value);
});

Route::post('/insertBarang', function () {
    return json_encode(Barang::insertBarang(
        [
            "nama_barang" => "testing5",
            "id_satuan" => 1,
            "harga" => 1500,
            "created_by" => 99
        ]
    )->value);
});

Route::post('/updateBarang', function () {
    return json_encode(Barang::updateBarang(
        [
            "where" => [
                "id" => "21"
            ],
            "data" => [
                "nama_barang" => "testing6",
                "id_satuan" => 1,
                "harga" => 1500,
                "created_by" => 99,
                "updated_by" => 99
            ]
        ]

    )->value);
});

Route::post('/deleteBarang', function () {
    return json_encode(Barang::deleteBarang(
        [
            "id" => "21"
        ]
    )->value);
});
