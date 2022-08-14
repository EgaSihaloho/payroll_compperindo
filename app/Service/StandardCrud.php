<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;

class StandardCrud
{


    public static function show($data)
    {
        $new = new StandardCrud();
        $new->tableName = $data['table'];
        $new->execShow();
        return $new;
    }
    private function execShow()
    {
        $this->value = DB::table($this->tableName)->get();
        return $this;
    }

    public static function find($data)
    {
        $new = new StandardCrud();
        $new->tableName = $data['table'];
        if (isset($data['where'])) $new->where = $data['where'];
        $new->execFind($data['where']);
        return $new;
    }

    private function execFind($data)
    {
        if (sizeof($data) > 1) {
            $arrayWhere = [];
            foreach ($data as $key => $val) {
                array_push($arrayWhere, [$key, $val]);
            }
            $this->value = DB::table($this->tableName)->where($arrayWhere)->get();
        } else {
            $key = '';
            $val = '';
            foreach ($data as $dKey => $dVal) {
                $key = $dKey;
                $val = $dVal;
            }
            $this->value = DB::table($this->tableName)->where($key, $val)->get();
        }
        return $this;
    }

    public static function insert($data)
    {
        $new = new StandardCrud();
        $new->tableName = $data['table'];
        if (isset($data['data'])) $new->data = $data['data'];
        $new->execInsert($data['data']);
        return $new;
    }

    private function execInsert($data)
    {
        $this->value = DB::table($this->tableName)->insertGetId($data);
        return $this;
    }

    public static function update($data)
    {
        $new = new StandardCrud();
        $new->tableName = $data['table'];
        if (isset($data['where'])) $new->where = $data['where'];
        if (isset($data['data'])) $new->where = $data['data'];
        $new->execUpdate($data['where'], $data['data']);
        return $new;
    }

    private function execUpdate($where, $data)
    {
        if (sizeof($where) > 1) {
            $arrayWhere = [];
            foreach ($where as $key => $val) {
                array_push($arrayWhere, [$key, $val]);
            }
            $this->value = DB::table($this->tableName)->where($arrayWhere)->update($data);
        } else {
            $key = '';
            $val = '';
            foreach ($where as $dKey => $dVal) {
                $key = $dKey;
                $val = $dVal;
            }
            $this->value = DB::table($this->tableName)->where($key, $val)->update($data);
        }
        return $this;
    }

    public static function delete($data)
    {
        $new = new StandardCrud();
        $new->tableName = $data['table'];
        if (isset($data['where'])) $new->where = $data['where'];
        $new->execDelete($data['where']);
        return $new;
    }

    private function execDelete($data)
    {

        if (sizeof($data) > 1) {
            $arrayWhere = [];
            foreach ($data as $key => $val) {
                array_push($arrayWhere, [$key, $val]);
            }
            $this->value = DB::table($this->tableName)->where($arrayWhere)->delete();
        } else {
            $key = '';
            $val = '';
            foreach ($data as $dKey => $dVal) {
                $key = $dKey;
                $val = $dVal;
            }
            $this->value = DB::table($this->tableName)->where($key, $val)->delete();
        }
        return $this;
    }
}
