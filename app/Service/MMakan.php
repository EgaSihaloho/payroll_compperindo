<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;
use Carbon\Carbon;

class MMakan
{
    private static $tableName = 'm_makan';

    public static function showMMakan()
    {
        return StandardCrud::show(['table' => self::$tableName]);
    }

    public static function showMMakanForUser()
    {
        return DB::table('data_MMakan as MMakan')
            ->select('MMakan.id', 'MMakan.nama_MMakan', 'satuan.satuan_name', 'MMakan.harga', 'MMakan.created_at')
            ->join('m_satuan as satuan', 'satuan.id', 'MMakan.id_satuan')
            ->orderBy('MMakan.updated_at', 'desc')
            ->paginate(5);
    }


    public static function editMMakan($data)
    {
        $where = $data['id'];
        unset($data['token']);
        unset($data['id']);
        return DB::table(self::$tableName)->where('id', $where)->update($data);
    }

    public static function keyMMakan()
    {
        return [
            '#' => 'id',
            'Item Name' => 'nama_MMakan',
            'Unit' => 'satuan_name',
            'Price Item' => 'harga',
            'Created At' => 'created_at',
            'Setting' => ''
        ];
    }

    public static function findMMakanForUser($where)
    {
        return DB::table('data_MMakan as MMakan')
            ->select('MMakan.id', 'MMakan.nama_MMakan', 'satuan.satuan_name', 'MMakan.harga', 'MMakan.created_at')
            ->join('m_satuan as satuan', 'satuan.id', 'MMakan.id_satuan')
            ->where('MMakan.id', 'like', '%' . $where . '%')
            ->orWhere('MMakan.nama_MMakan', 'like', '%' . $where . '%')
            ->orWhere('satuan.satuan_name', 'like', '%' . $where . '%')
            ->orWhere('MMakan.harga', 'like', '%' . $where . '%')
            ->orderBy('MMakan.updated_at', 'desc')
            ->paginate(5);
    }

    public static function findMMakan($data)
    {

        return StandardCrud::find(['table' => self::$tableName, 'where' => $data]);
    }

    public static function insertMMakan($data)
    {
        if (isset($data['token'])) unset($data['token']);
        if (!isset($data['created_at'])) $data['created_at'] = Carbon::now();
        if (!isset($data['created_by'])) $data['created_by'] = session('user')->id;
        if (!isset($data['updated_at'])) $data['updated_at'] = Carbon::now();
        if (!isset($data['updated_by'])) $data['updated_by'] = session('user')->id;
        return StandardCrud::insert(['table' => self::$tableName, 'data' => $data]);
    }


    public static function updateMMakan($data)
    {

        return StandardCrud::update([
            'table' => self::$tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteMMakan($data)
    {
        if (isset($data['token'])) unset($data['token']);
        return StandardCrud::delete([
            'table' => self::$tableName,
            'where' => $data
        ]);
    }
}
