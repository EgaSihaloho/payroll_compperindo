<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Service\StandardCrud;

class Satuan
{
    public static function showAllSatuan()
    {
        return DB::table('m_satuan')->get();
    }
}
