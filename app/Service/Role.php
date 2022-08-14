<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class Role
{
    public function __construct()
    {
        $this->tableName = 'role';
    }

    public static function showRole()
    {
        $new = new Role();
        return StandardCrud::show(['table' => $new->tableName]);
    }


    public static function findRole($data)
    {
        $new = new Role();
        return StandardCrud::find(['table' => $new->tableName, 'where' => $data]);
    }

    public static function insertRole($data)
    {
        $new = new Role();
        return StandardCrud::insert(['table' => $new->tableName, 'data' => $data]);
    }


    public static function updateRole($data)
    {
        $new = new Role();
        return StandardCrud::update([
            'table' => $new->tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteRole($data)
    {
        $new = new Role();
        return StandardCrud::delete([
            'table' => $new->tableName,
            'where' => $data
        ]);
    }
}
