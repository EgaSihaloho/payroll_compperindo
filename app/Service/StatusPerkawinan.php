<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class StatusPerkawinan
{

    private static $tableName = 'status_perkawinan';

    public static function showStatusPerkawinan()
    {

        return StandardCrud::show(['table' => self::$tableName]);
    }


    public static function findStatusPerkawinan($data)
    {

        return StandardCrud::find(['table' => self::$tableName, 'where' => $data]);
    }

    public static function insertStatusPerkawinan($data)
    {

        return StandardCrud::insert(['table' => self::$tableName, 'data' => $data]);
    }


    public static function updateStatusPerkawinan($data)
    {

        return StandardCrud::update([
            'table' => self::$tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteStatusPerkawinan($data)
    {

        return StandardCrud::delete([
            'table' => self::$tableName,
            'where' => $data
        ]);
    }
}
