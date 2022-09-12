<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class GajiPokok
{

    private static $tableName = 'm_gaji_pokok';

    public static function showGajiPokok()
    {

        return StandardCrud::show(['table' => self::$tableName]);
    }


    public static function findGajiPokok($data)
    {

        return StandardCrud::find(['table' => self::$tableName, 'where' => $data]);
    }

    public static function insertGajiPokok($data)
    {

        return StandardCrud::insert(['table' => self::$tableName, 'data' => $data]);
    }


    public static function updateGajiPokok($data)
    {

        return StandardCrud::update([
            'table' => self::$tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteGajiPokok($data)
    {

        return StandardCrud::delete([
            'table' => self::$tableName,
            'where' => $data
        ]);
    }
}
