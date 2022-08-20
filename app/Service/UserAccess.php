<?php

namespace App\Service;

use App\Service\StandardCrud;

use Illuminate\Support\Facades\Hash;

class UserAccess
{
    private static $tableName;

    public static function showUserAccess()
    {

        return StandardCrud::show(['table' => self::$tableName]);
    }


    public static function findUserAccess($data)
    {

        return StandardCrud::find(['table' => self::$tableName, 'where' => $data]);
    }

    public static function insertUserAccess($data)
    {

        if (isset($data['passwords'])) $data['passwords'] = Hash::make($data['passwords']);
        return StandardCrud::insert(['table' => self::$tableName, 'data' => $data]);
    }


    public static function updateUserAccess($data)
    {

        if (isset($data['passwords'])) $data['passwords'] = Hash::make($data['passwords']);
        return StandardCrud::update([
            'table' => self::$tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteUserAccess($data)
    {

        return StandardCrud::delete([
            'table' => self::$tableName,
            'where' => $data
        ]);
    }
}
