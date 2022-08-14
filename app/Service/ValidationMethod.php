<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class ValidationMethod
{
    public function __construct()
    {
        $this->tableName = 'validation_method';
    }

    public static function showValidationMethod()
    {
        $new = new ValidationMethod();
        return StandardCrud::show(['table' => $new->tableName]);
    }


    public static function findValidationMethod($data)
    {
        $new = new ValidationMethod();
        return StandardCrud::find(['table' => $new->tableName, 'where' => $data]);
    }

    public static function insertValidationMethod($data)
    {
        $new = new ValidationMethod();
        return StandardCrud::insert(['table' => $new->tableName, 'data' => $data]);
    }


    public static function updateValidationMethod($data)
    {
        $new = new ValidationMethod();
        return StandardCrud::update([
            'table' => $new->tableName,
            'where' => $data['where'],
            'data' => $data['data']
        ]);
    }

    public static function deleteValidationMethod($data)
    {
        $new = new ValidationMethod();
        return StandardCrud::delete([
            'table' => $new->tableName,
            'where' => $data
        ]);
    }
}
