<?php

namespace App\Helper\Log;

use DB;
use App\Helper\String\StringManipulator;
use App\Helper\String\BuildResponse;
use App\Helper\Validation\Validation;

class Log
{
    public static function insertLog($data)
    {
        $new = new Log();
        $new->data = $data;
        $validate = Validation::validate($new->data, 'insertlog');
        if ($validate->value == false) return $validate->response;
        $new->insertLogOnDB();
        return $new;
    }

    private function insertLogOnDB()
    {
        $this->insertLog = DB::table('activity_log')->insertGetId($this->data);

        $this->response = BuildResponse::response('00', 'Success', 'Success Insert Log');
        $this->value = true;
        return $this;
    }
}
