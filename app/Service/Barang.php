<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class Barang
{
    public function __construct()
    {
        $this->tableName = 'data_barang';
    }

    public static function showBarang()
    {
        $new = new Barang();
        return StandardCrud::show(['table' => $new->tableName]);
    }


    public static function findBarang($data)
    {
        $new = new Barang();
        return StandardCrud::find(['table' => $new->tableName, 'where' => $data]);
    }

    public static function insertBarang($data)
    {
        $new = new Barang();
        return StandardCrud::insert(['table' => $new->tableName, 'data' => $data]);
    }


    public static function updateBarang($data)
    {
        $new = new Barang();
        return StandardCrud::update([
            'table' => $new->tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteBarang($data)
    {
        $new = new Barang();
        return StandardCrud::delete([
            'table' => $new->tableName,
            'where' => $data
        ]);
    }
}
