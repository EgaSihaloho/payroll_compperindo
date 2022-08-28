<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class Barang
{
    private static $tableName = 'data_barang';

    public static function showBarang()
    {
        return StandardCrud::show(['table' => self::$tableName]);
    }

    public static function showBarangForUser()
    {
        return DB::table('data_barang as barang')
            ->select('barang.id', 'barang.nama_barang as Nama', 'satuan.satuan_name as Satuan', 'barang.harga as Price', 'barang.created_at as Created_At')
            ->join('m_satuan as satuan', 'satuan.id', 'barang.id_satuan')
            ->paginate(5);
    }

    public static function findBarangForUser($where)
    {
        return DB::table('data_barang as barang')
            ->select('barang.id', 'barang.nama_barang as Nama', 'satuan.satuan_name as Satuan', 'barang.harga as Price', 'barang.created_at as Created_At')
            ->join('m_satuan as satuan', 'satuan.id', 'barang.id_satuan')
            ->where('barang.id', 'like', '%' . $where . '%')
            ->orWhere('barang.nama_barang', 'like', '%' . $where . '%')
            ->orWhere('satuan.satuan_name', 'like', '%' . $where . '%')
            ->orWhere('barang.harga', 'like', '%' . $where . '%')
            ->paginate(5);
    }

    public static function findBarang($data)
    {

        return StandardCrud::find(['table' => self::$tableName, 'where' => $data]);
    }

    public static function insertBarang($data)
    {

        return StandardCrud::insert(['table' => self::$tableName, 'data' => $data]);
    }


    public static function updateBarang($data)
    {

        return StandardCrud::update([
            'table' => self::$tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteBarang($data)
    {

        return StandardCrud::delete([
            'table' => self::$tableName,
            'where' => $data
        ]);
    }
}
