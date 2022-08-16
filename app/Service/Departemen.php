<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class Departemen
{

    private static $tableName = 'departement';


    public static function showDepartemen()
    {

        return StandardCrud::show(['table' => self::$tableName]);
    }


    public static function findDepartemen($data)
    {

        return StandardCrud::find(['table' => self::$tableName, 'where' => $data]);
    }

    public static function insertDepartemen($data)
    {
        return StandardCrud::insert(['table' => self::$tableName, 'data' => $data]);
    }


    public static function updateDepartemen($data)
    {

        return StandardCrud::update([
            'table' => self::$tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteDepartemen($data)
    {

        return StandardCrud::delete([
            'table' => self::$tableName,
            'where' => $data
        ]);
    }
}
