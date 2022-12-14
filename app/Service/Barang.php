<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;
use Carbon\Carbon;

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
            ->select('barang.id', 'barang.nama_barang', 'satuan.satuan_name', 'barang.harga', 'barang.created_at')
            ->join('m_satuan as satuan', 'satuan.id', 'barang.id_satuan')
            ->orderBy('barang.updated_at', 'desc')
            ->paginate(5);
    }


    public static function editBarang($data)
    {
        $where = $data['id'];
        unset($data['token']);
        unset($data['id']);
        return DB::table(self::$tableName)->where('id', $where)->update($data);
    }

    public static function keyBarang()
    {
        return [
            '#' => 'id',
            'Item Name' => 'nama_barang',
            'Unit' => 'satuan_name',
            'Price Item' => 'harga',
            'Created At' => 'created_at',
            'Setting' => ''
        ];
    }

    public static function findBarangForUser($where)
    {
        return DB::table('data_barang as barang')
            ->select('barang.id', 'barang.nama_barang', 'satuan.satuan_name', 'barang.harga', 'barang.created_at')
            ->join('m_satuan as satuan', 'satuan.id', 'barang.id_satuan')
            ->where('barang.id', 'like', '%' . $where . '%')
            ->orWhere('barang.nama_barang', 'like', '%' . $where . '%')
            ->orWhere('satuan.satuan_name', 'like', '%' . $where . '%')
            ->orWhere('barang.harga', 'like', '%' . $where . '%')
            ->orderBy('barang.updated_at', 'desc')
            ->paginate(5);
    }

    public static function findBarang($data)
    {

        return StandardCrud::find(['table' => self::$tableName, 'where' => $data]);
    }

    public static function insertBarang($data)
    {
        if (isset($data['token'])) unset($data['token']);
        if (!isset($data['created_at'])) $data['created_at'] = Carbon::now();
        if (!isset($data['created_by'])) $data['created_by'] = session('user')->id;
        if (!isset($data['updated_at'])) $data['updated_at'] = Carbon::now();
        if (!isset($data['updated_by'])) $data['updated_by'] = session('user')->id;
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
        if (isset($data['token'])) unset($data['token']);
        return StandardCrud::delete([
            'table' => self::$tableName,
            'where' => $data
        ]);
    }
}
