<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;
use Carbon\Carbon;


class Karyawan
{
    private static $tableName = 'data_karyawan';

    public static function showkaryawan()
    {
        return StandardCrud::show(['table' => self::$tableName]);
    }

    public static function showKaryawanForUser()
    {
        $dataTable = DB::table('data_karyawan as karyawan')
            ->select(
                'karyawan.id',
                'karyawan.nama',
                'karyawan.npwp',
                's_perkawinan.id as id_perkawinan',
                's_perkawinan.status_name as status_perkawinan',
                'departement.id as id_departement',
                'departement.departement_name',
                'rel_gaji.id as id_rel_gaji',
                'gapok.id as id_gapok',
                'gapok.nominal',
                'status.id as id_status',
                'status.status_name'
            )
            ->join('status_perkawinan as s_perkawinan', 's_perkawinan.id', 'karyawan.id_status_perkawinan')
            ->join('departement', 'departement.id', 'karyawan.id_departement')
            ->join('rel_gaji',  'rel_gaji.id', 'karyawan.id_rel_gaji')
            ->leftJoin('m_gaji_pokok as gapok', 'gapok.id', 'karyawan.id_gapok')
            ->join('status', 'status.id', 'karyawan.id_status')
            ->orderBy('karyawan.updated_at', 'desc')
            ->paginate(5);

        return $dataTable;
    }


    public static function editkaryawan($data)
    {
        $where = $data['id'];
        unset($data['token']);
        unset($data['id']);
        return DB::table(self::$tableName)->where('id', $where)->update($data);
    }

    public static function keykaryawan()
    {
        return [
            '#' => 'id',
            'Name' => 'nama',
            'NPWP' => 'npwp',
            'Status Perkawinan' => 'status_perkawinan',
            'Departement' => 'departement_name',
            'Gaji Pokok' => 'nominal',
            'Status' => 'status_name',
            'Setting' => ''
        ];
    }

    public static function findkaryawanForUser($where)
    {
        $dataTable = DB::table('data_karyawan as karyawan')
            ->select(
                'karyawan.id',
                'karyawan.nama',
                'karyawan.npwp',
                's_perkawinan.id as id_perkawinan',
                's_perkawinan.status_name as status_perkawinan',
                'departement.id as id_departement',
                'departement.departement_name',
                'rel_gaji.id as id_rel_gaji',
                'gapok.id as id_gapok',
                'gapok.nominal',
                'status.id as id_status',
                'status.status_name'
            )
            ->join('status_perkawinan as s_perkawinan', 's_perkawinan.id', 'karyawan.id_status_perkawinan')
            ->join('departement', 'departement.id', 'karyawan.id_departement')
            ->join('rel_gaji',  'rel_gaji.id', 'karyawan.id_rel_gaji')
            ->leftJoin('m_gaji_pokok as gapok', 'gapok.id', 'karyawan.id_gapok')
            ->join('status', 'status.id', 'karyawan.id_status')

            ->where('karyawan.nama', 'like', '%' . $where . '%')
            ->orWhere('karyawan.npwp', 'like', '%' . $where . '%')
            ->orWhere('s_perkawinan.status_name', 'like', '%' . $where . '%')
            ->orWhere(
                'departement.departement_name',
                'like',
                '%' . $where . '%'
            )
            ->orWhere('gapok.nominal', 'like', '%' . $where . '%')
            ->orWhere('status.status_name', 'like', '%' . $where . '%')
            ->orderBy('karyawan.updated_at', 'desc')
            ->paginate(5);
        return $dataTable;
    }

    public static function findkaryawan($data)
    {

        return StandardCrud::find(['table' => self::$tableName, 'where' => $data]);
    }

    public static function insertkaryawan($data)
    {
        if (isset($data['token'])) unset($data['token']);
        if (!isset($data['created_at'])) $data['created_at'] = Carbon::now();
        if (!isset($data['created_by'])) $data['created_by'] = session('user')->id;
        if (!isset($data['updated_at'])) $data['updated_at'] = Carbon::now();
        if (!isset($data['updated_by'])) $data['updated_by'] = session('user')->id;
        return StandardCrud::insert(['table' => self::$tableName, 'data' => $data]);
    }


    public static function updatekaryawan($data)
    {

        return StandardCrud::update([
            'table' => self::$tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deletekaryawan($data)
    {
        if (isset($data['token'])) unset($data['token']);
        return StandardCrud::delete([
            'table' => self::$tableName,
            'where' => $data
        ]);
    }
}
