<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;
use Carbon\Carbon;

class MLembur
{
    private static $tableName = 'm_lembur';

    public static function showMLembur()
    {
        return StandardCrud::show(['table' => self::$tableName]);
    }

    public static function showMLemburForUser()
    {
        return DB::table('data_MLembur as MLembur')
            ->select('MLembur.id', 'MLembur.nama_MLembur', 'satuan.satuan_name', 'MLembur.harga', 'MLembur.created_at')
            ->join('m_satuan as satuan', 'satuan.id', 'MLembur.id_satuan')
            ->orderBy('MLembur.updated_at', 'desc')
            ->paginate(5);
    }


    public static function editMLembur($data)
    {
        $where = $data['id'];
        unset($data['token']);
        unset($data['id']);
        return DB::table(self::$tableName)->where('id', $where)->update($data);
    }

    public static function keyMLembur()
    {
        return [
            '#' => 'id',
            'Item Name' => 'nama_MLembur',
            'Unit' => 'satuan_name',
            'Price Item' => 'harga',
            'Created At' => 'created_at',
            'Setting' => ''
        ];
    }

    public static function findMLemburForUser($where)
    {
        return DB::table('data_MLembur as MLembur')
            ->select('MLembur.id', 'MLembur.nama_MLembur', 'satuan.satuan_name', 'MLembur.harga', 'MLembur.created_at')
            ->join('m_satuan as satuan', 'satuan.id', 'MLembur.id_satuan')
            ->where('MLembur.id', 'like', '%' . $where . '%')
            ->orWhere('MLembur.nama_MLembur', 'like', '%' . $where . '%')
            ->orWhere('satuan.satuan_name', 'like', '%' . $where . '%')
            ->orWhere('MLembur.harga', 'like', '%' . $where . '%')
            ->orderBy('MLembur.updated_at', 'desc')
            ->paginate(5);
    }

    public static function findMLembur($data)
    {

        return StandardCrud::find(['table' => self::$tableName, 'where' => $data]);
    }

    public static function insertMLembur($data)
    {
        if (isset($data['token'])) unset($data['token']);
        if (!isset($data['created_at'])) $data['created_at'] = Carbon::now();
        if (!isset($data['created_by'])) $data['created_by'] = session('user')->id;
        if (!isset($data['updated_at'])) $data['updated_at'] = Carbon::now();
        if (!isset($data['updated_by'])) $data['updated_by'] = session('user')->id;
        return StandardCrud::insert(['table' => self::$tableName, 'data' => $data]);
    }


    public static function updateMLembur($data)
    {

        return StandardCrud::update([
            'table' => self::$tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteMLembur($data)
    {
        if (isset($data['token'])) unset($data['token']);
        return StandardCrud::delete([
            'table' => self::$tableName,
            'where' => $data
        ]);
    }
}
