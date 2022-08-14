<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class RelGaji
{
    public function __construct()
    {
        $this->tableName = 'rel_gaji';
    }

    public static function showRelGaji()
    {
        $new = new RelGaji();
        return StandardCrud::show(['table' => $new->tableName]);
    }


    public static function findRelGaji($data)
    {
        $new = new RelGaji();
        return StandardCrud::find(['table' => $new->tableName, 'where' => $data]);
    }

    public static function insertRelGaji($data)
    {
        $new = new RelGaji();
        return StandardCrud::insert(['table' => $new->tableName, 'data' => $data]);
    }


    public static function updateRelGaji($data)
    {
        $new = new RelGaji();
        return StandardCrud::update([
            'table' => $new->tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteRelGaji($data)
    {
        $new = new RelGaji();
        return StandardCrud::delete([
            'table' => $new->tableName,
            'where' => $data
        ]);
    }
}
