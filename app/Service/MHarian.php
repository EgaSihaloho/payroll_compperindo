<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;
use Carbon\Carbon;

class MHarian
{
    private static $tableName = 'm_harian';

    public static function showMHarian()
    {
        return StandardCrud::show(['table' => self::$tableName]);
    }

    public static function showMHarianForUser()
    {
        return DB::table('data_MHarian as MHarian')
            ->select('MHarian.id', 'MHarian.nama_MHarian', 'satuan.satuan_name', 'MHarian.harga', 'MHarian.created_at')
            ->join('m_satuan as satuan', 'satuan.id', 'MHarian.id_satuan')
            ->orderBy('MHarian.updated_at', 'desc')
            ->paginate(5);
    }


    public static function editMHarian($data)
    {
        $where = $data['id'];
        unset($data['token']);
        unset($data['id']);
        return DB::table(self::$tableName)->where('id', $where)->update($data);
    }

    public static function keyMHarian()
    {
        return [
            '#' => 'id',
            'Item Name' => 'nama_MHarian',
            'Unit' => 'satuan_name',
            'Price Item' => 'harga',
            'Created At' => 'created_at',
            'Setting' => ''
        ];
    }

    public static function findMHarianForUser($where)
    {
        return DB::table('data_MHarian as MHarian')
            ->select('MHarian.id', 'MHarian.nama_MHarian', 'satuan.satuan_name', 'MHarian.harga', 'MHarian.created_at')
            ->join('m_satuan as satuan', 'satuan.id', 'MHarian.id_satuan')
            ->where('MHarian.id', 'like', '%' . $where . '%')
            ->orWhere('MHarian.nama_MHarian', 'like', '%' . $where . '%')
            ->orWhere('satuan.satuan_name', 'like', '%' . $where . '%')
            ->orWhere('MHarian.harga', 'like', '%' . $where . '%')
            ->orderBy('MHarian.updated_at', 'desc')
            ->paginate(5);
    }

    public static function findMHarian($data)
    {

        return StandardCrud::find(['table' => self::$tableName, 'where' => $data]);
    }

    public static function insertMHarian($data)
    {
        if (isset($data['token'])) unset($data['token']);
        if (!isset($data['created_at'])) $data['created_at'] = Carbon::now();
        if (!isset($data['created_by'])) $data['created_by'] = session('user')->id;
        if (!isset($data['updated_at'])) $data['updated_at'] = Carbon::now();
        if (!isset($data['updated_by'])) $data['updated_by'] = session('user')->id;
        return StandardCrud::insert(['table' => self::$tableName, 'data' => $data]);
    }


    public static function updateMHarian($data)
    {

        return StandardCrud::update([
            'table' => self::$tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteMHarian($data)
    {
        if (isset($data['token'])) unset($data['token']);
        return StandardCrud::delete([
            'table' => self::$tableName,
            'where' => $data
        ]);
    }
}
