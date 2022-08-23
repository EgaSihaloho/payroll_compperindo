<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\Barang;
use App\Helper\String\StringManipulator;

class BarangController extends Controller
{
    public function index()
    {
        if (!session()->has('user')) return redirect('login')->with([
            "response" => json_decode(BuildResponse::response('99', 'Invalid Login', 'Please Login First'))
        ]);


        return view('content.barang')->with([
            'dataTable' => Barang::showBarangForUser(),
            'keyTable' => StringManipulator::getKey(Barang::showBarangForUser()),
            'breadCrumb' => session('sideBar')->filter(function ($value, $key) {
                return $key == 'Main' || $key == 'Barang';
            }),
            'head' => 'Data Barang'
        ]);
    }
}
