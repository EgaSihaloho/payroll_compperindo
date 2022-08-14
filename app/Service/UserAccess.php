<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class UserAccess
{
    public function __construct()
    {
        $this->tableName = 'user_access';
    }

    public static function showUserAccess()
    {
        $new = new UserAccess();
        return StandardCrud::show(['table' => $new->tableName]);
    }


    public static function findUserAccess($data)
    {
        $new = new UserAccess();
        return StandardCrud::find(['table' => $new->tableName, 'where' => $data]);
    }

    public static function insertUserAccess($data)
    {
        $new = new UserAccess();
        return StandardCrud::insert(['table' => $new->tableName, 'data' => $data]);
    }


    public static function updateUserAccess($data)
    {
        $new = new UserAccess();
        return StandardCrud::update([
            'table' => $new->tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteUserAccess($data)
    {
        $new = new UserAccess();
        return StandardCrud::delete([
            'table' => $new->tableName,
            'where' => $data
        ]);
    }
}
