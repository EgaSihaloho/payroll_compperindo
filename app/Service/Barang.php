<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class Barang
{
    private static $tableName = 'data_barang';

    public static function showBarang()
    {
        return StandardCrud::show(['table' => self::$tableName]);
    }


    public static function findBarang($data)
    {

        return StandardCrud::find(['table' => self::$tableName, 'where' => $data]);
    }

    public static function insertBarang($data)
    {

        return StandardCrud::insert(['table' => self::$tableName, 'data' => $data]);
    }


    public static function updateBarang($data)
    {

        return StandardCrud::update([
            'table' => self::$tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteBarang($data)
    {

        return StandardCrud::delete([
            'table' => self::$tableName,
            'where' => $data
        ]);
    }
}
