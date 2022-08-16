<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class Gaji
{

    private static $tableName = 'input_gaji';

    public static function showGaji()
    {

        return StandardCrud::show(['table' => self::$tableName]);
    }


    public static function findGaji($data)
    {

        return StandardCrud::find(['table' => self::$tableName, 'where' => $data]);
    }

    public static function insertGaji($data)
    {

        return StandardCrud::insert(['table' => self::$tableName, 'data' => $data]);
    }


    public static function updateGaji($data)
    {

        return StandardCrud::update([
            'table' => self::$tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteGaji($data)
    {

        return StandardCrud::delete([
            'table' => self::$tableName,
            'where' => $data
        ]);
    }
}
