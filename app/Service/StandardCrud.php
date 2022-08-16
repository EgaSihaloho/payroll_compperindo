<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;

class StandardCrud
{

    private static $tableName;
    private static $data;
    private static $where;

    public static function show($data)
    {
        self::$tableName = $data['table'];
        $result = self::execShow();
        return $result;
    }
    private static function execShow()
    {
        $value = DB::table(self::$tableName)->get();
        return $value;
    }

    public static function find($data)
    {

        self::$tableName = $data['table'];
        if (isset($data['where'])) self::$where = $data['where'];
        $value = self::execFind($data['where']);
        return $value;
    }

    private static function execFind($data)
    {
        if (sizeof($data) > 1) {
            $arrayWhere = [];
            foreach ($data as $key => $val) {
                array_push($arrayWhere, [$key, $val]);
            }
            $value = DB::table(self::$tableName)->where($arrayWhere)->get();
        } else {
            $key = '';
            $val = '';
            foreach ($data as $dKey => $dVal) {
                $key = $dKey;
                $val = $dVal;
            }
            $value = DB::table(self::$tableName)->where($key, $val)->get();
        }
        return $value;
    }

    public static function insert($data)
    {

        self::$tableName = $data['table'];
        if (isset($data['data'])) self::$data = $data['data'];
        $value = self::execInsert($data['data']);
        return $value;
    }

    private static function execInsert($data)
    {
        $value = DB::table(self::$tableName)->insertGetId($data);
        return $value;
    }

    public static function update($data)
    {

        self::$tableName = $data['table'];
        if (isset($data['where'])) self::$where = $data['where'];
        if (isset($data['data'])) self::$data = $data['data'];
        $value = self::execUpdate($data['where'], $data['data']);
        return $value;
    }

    private static function execUpdate($where, $data)
    {
        if (sizeof($where) > 1) {
            $arrayWhere = [];
            foreach ($where as $key => $val) {
                array_push($arrayWhere, [$key, $val]);
            }
            $value = DB::table(self::$tableName)->where($arrayWhere)->update($data);
        } else {
            $key = '';
            $val = '';
            foreach ($where as $dKey => $dVal) {
                $key = $dKey;
                $val = $dVal;
            }
            $value = DB::table(self::$tableName)->where($key, $val)->update($data);
        }
        return $value;
    }

    public static function delete($data)
    {

        self::$tableName = $data['table'];
        if (isset($data['where'])) self::$where = $data['where'];
        $value = self::execDelete($data['where']);
        return $value;
    }

    private static function execDelete($data)
    {

        if (sizeof($data) > 1) {
            $arrayWhere = [];
            foreach ($data as $key => $val) {
                array_push($arrayWhere, [$key, $val]);
            }
            $value = DB::table(self::$tableName)->where($arrayWhere)->delete();
        } else {
            $key = '';
            $val = '';
            foreach ($data as $dKey => $dVal) {
                $key = $dKey;
                $val = $dVal;
            }
            $value = DB::table(self::$tableName)->where($key, $val)->delete();
        }
        return $value;
    }
}
