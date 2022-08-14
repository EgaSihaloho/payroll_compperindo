<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class Departemen
{
    public function __construct()
    {
        $this->tableName = 'departement';
    }

    public static function showDepartemen()
    {
        $new = new Departemen();
        return StandardCrud::show(['table' => $new->tableName]);
    }


    public static function findDepartemen($data)
    {
        $new = new Departemen();
        return StandardCrud::find(['table' => $new->tableName, 'where' => $data]);
    }

    public static function insertDepartemen($data)
    {
        $new = new Departemen();
        return StandardCrud::insert(['table' => $new->tableName, 'data' => $data]);
    }


    public static function updateDepartemen($data)
    {
        $new = new Departemen();
        return StandardCrud::update([
            'table' => $new->tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteDepartemen($data)
    {
        $new = new Departemen();
        return StandardCrud::delete([
            'table' => $new->tableName,
            'where' => $data
        ]);
    }
}
