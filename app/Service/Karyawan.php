<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class Karyawan
{
    public function __construct()
    {
        $this->tableName = 'data_karyawan';
    }

    public static function showKaryawan()
    {
        $new = new Karyawan();
        return StandardCrud::show(['table' => $new->tableName]);
    }


    public static function findKaryawan($data)
    {
        $new = new Karyawan();
        return StandardCrud::find(['table' => $new->tableName, 'where' => $data]);
    }

    public static function insertKaryawan($data)
    {
        $new = new Karyawan();
        return StandardCrud::insert(['table' => $new->tableName, 'data' => $data]);
    }


    public static function updateKaryawan($data)
    {
        $new = new Karyawan();
        return StandardCrud::update([
            'table' => $new->tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteKaryawan($data)
    {
        $new = new Karyawan();
        return StandardCrud::delete([
            'table' => $new->tableName,
            'where' => $data
        ]);
    }
}
