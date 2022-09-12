<?php

namespace App\Http\Controllers;

use App\Helper\String\BuildResponse;
use Illuminate\Http\Request;
use App\Service\Barang;
use App\Helper\String\StringManipulator;
use Psy\Util\Json;
use DB;
use App\Service\Satuan;

class BarangController extends Controller
{
    public function index()
    {
        if (!session()->has('user')) return redirect('login')->with([
            "response" => json_decode(BuildResponse::response('99', 'Invalid Login', 'Please Login First', ''))
        ]);
        session()->put('sideBar', $this->findSideBar());

        return view('content.barang')->with([
            'urlTable' => 'http://localhost:8000/getDataTableBarang',
            'urlFind' => 'http://localhost:8000/findBarang/',
            'breadCrumb' => session('sideBar')->filter(function ($value, $key) {
                return $key == 'Main' || $key == 'Barang';
            }),
            'head' => 'Data Barang',
            'activeSideBar' => 'Barang',
            'm_satuan' => Satuan::showAllSatuan()
        ]);
    }


    public function addBarang(Request $request)
    {
        $insertBarang = Barang::insertBarang($request->all());
        return BuildResponse::response('00', 'success', 'Success Add Barang', $insertBarang);
    }

    public function editBarang(Request $request)
    {
        // dd($request->all());
        $updateData = Barang::editBarang($request->all());
        return BuildResponse::response('00', 'success', 'Success Update Data Barang', $request->all());
    }

    private function findSideBar()
    {
        $result = DB::table('manage_view as submenu')
            ->join('group_view as group', 'submenu.group_view', 'group.id')
            ->select('submenu.menu_name', 'group.group_name', 'submenu.icon', 'url')
            ->get()->groupBy('group_name');
        return $result;
    }

    public function getDataTableBarang()
    {
        return BuildResponse::response('00', 'success', 'Success Retrieve Data', [
            'dataTable' => Barang::showBarangForUser(),
            'keyTable' => Barang::keyBarang(),
            'for' => 'barang'
        ]);
    }

    public function deleteBarang(Request $request)
    {
        $deleteBarang = Barang::deleteBarang($request->all());
        return BuildResponse::response('00', 'success', 'Success Delete Data', $deleteBarang);
    }

    public function findBarang($search)
    {
        $dataTable = Barang::findBarangForUser(trim($search));
        if (sizeof($dataTable) > 0) {
            return BuildResponse::response('00', 'success', 'Success Retrieve Data', [
                'dataTable' => $dataTable,
                'keyTable' => Barang::keyBarang(),
                'for' => 'barang'
            ]);
        } else {
            return BuildResponse::response('99', 'Error', 'Cannot Find Item', [
                'dataTable' => Barang::showBarangForUser(),
                'keyTable' => Barang::keyBarang(),
                'for' => 'barang'
            ]);
        }
    }
}
