<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class Gaji
{
    public function __construct()
    {
        $this->tableName = 'input_gaji';
    }

    public static function showGaji()
    {
        $new = new Gaji();
        return StandardCrud::show(['table' => $new->tableName]);
    }


    public static function findGaji($data)
    {
        $new = new Gaji();
        return StandardCrud::find(['table' => $new->tableName, 'where' => $data]);
    }

    public static function insertGaji($data)
    {
        $new = new Gaji();
        return StandardCrud::insert(['table' => $new->tableName, 'data' => $data]);
    }


    public static function updateGaji($data)
    {
        $new = new Gaji();
        return StandardCrud::update([
            'table' => $new->tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteGaji($data)
    {
        $new = new Gaji();
        return StandardCrud::delete([
            'table' => $new->tableName,
            'where' => $data
        ]);
    }
}
