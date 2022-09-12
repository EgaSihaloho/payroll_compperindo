<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class RelGaji
{
    private static $tableName = 'rel_gaji';

    public static function showRelGajiForUser()
    {
        return DB::table('rel_gaji as rel')
            ->select(
                'rel.id',
                'rel.name_rel_gaji',
                'rel.id_m_assy',
                'lembur.id as id_lembur',
                'lembur.nominal as nominal_lembur',
                'harian.id as id_harian',
                'harian.nominal as nominal_harian',
                'makan.id as id_makan',
                'makan.nominal as nominal_makan'
            )
            ->leftJoin('m_lembur as lembur', 'lembur.id', 'rel.id_m_lembur')
            ->leftJoin('m_makan as makan', 'makan.id', 'rel.id_m_makan')
            ->leftJoin('m_harian as harian', 'harian.id', 'rel.id_m_harian')
            ->get();
    }
    public static function showDetailRelGaji($data)
    {
        return DB::table('rel_gaji as rel')
            ->select(
                'rel.id',
                'rel.name_rel_gaji',
                'rel.id_m_assy',
                'lembur.id as id_lembur',
                'lembur.nominal as nominal_lembur',
                'harian.id as id_harian',
                'harian.nominal as nominal_harian',
                'makan.id as id_makan',
                'makan.nominal as nominal_makan'
            )
            ->leftJoin('m_lembur as lembur', 'lembur.id', 'rel.id_m_lembur')
            ->leftJoin('m_makan as makan', 'makan.id', 'rel.id_m_makan')
            ->leftJoin('m_harian as harian', 'harian.id', 'rel.id_m_harian')
            ->where('rel.id', $data)
            ->first();
    }

    public static function showRelGaji()
    {

        return StandardCrud::show(['table' => self::$tableName]);
    }


    public static function findRelGaji($data)
    {

        return StandardCrud::find(['table' => self::$tableName, 'where' => $data]);
    }

    public static function insertRelGaji($data)
    {

        return StandardCrud::insert(['table' => self::$tableName, 'data' => $data]);
    }


    public static function updateRelGaji($data)
    {

        return StandardCrud::update([
            'table' => self::$tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteRelGaji($data)
    {

        return StandardCrud::delete([
            'table' => self::$tableName,
            'where' => $data
        ]);
    }
}
