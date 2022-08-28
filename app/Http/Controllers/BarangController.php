<?php

namespace App\Http\Controllers;

use App\Helper\String\BuildResponse;
use Illuminate\Http\Request;
use App\Service\Barang;
use App\Helper\String\StringManipulator;
use Psy\Util\Json;

class BarangController extends Controller
{
    public function index()
    {
        if (!session()->has('user')) return redirect('login')->with([
            "response" => json_decode(BuildResponse::response('99', 'Invalid Login', 'Please Login First', ''))
        ]);


        return view('content.barang')->with([
            'dataTable' => Barang::showBarangForUser(),
            'keyTable' => StringManipulator::getKey(Barang::showBarangForUser()),
            'breadCrumb' => session('sideBar')->filter(function ($value, $key) {
                return $key == 'Main' || $key == 'Barang';
            }),
            'head' => 'Data Barang',
            'activeSideBar' => 'Barang'
        ]);
    }

    public function getDataTable()
    {
        return BuildResponse::response('00', 'success', 'Success Retrieve Data', [
            'dataTable' => Barang::showBarangForUser(),
            'keyTable' => StringManipulator::getKey(Barang::showBarangForUser()),
        ]);
    }

    public function findBarang($search)
    {
        $dataTable = Barang::findBarangForUser(trim($search));
        if (sizeof($dataTable) > 0) {
            return BuildResponse::response('00', 'success', 'Success Retrieve Data', [
                'dataTable' => $dataTable,
                'keyTable' => StringManipulator::getKey($dataTable),
            ]);
        } else {
            return BuildResponse::response('99', 'Error', 'Cannot Find Item', [
                'dataTable' => Barang::showBarangForUser(),
                'keyTable' => StringManipulator::getKey(Barang::showBarangForUser()),
            ]);
        }
    }
}
