<?php

namespace App\Http\Controllers;

use App\Helper\String\BuildResponse;
use Illuminate\Http\Request;
use App\Service\Karyawan;
use App\Helper\String\StringManipulator;
use Psy\Util\Json;
use DB;
use App\Service\StatusPerkawinan;
use App\Service\Departemen;
use App\Service\RelGaji;
use App\Service\GajiPokok;
use App\Service\MHarian;
use App\Service\MLembur;
use App\Service\MMakan;

class KaryawanController extends Controller
{
    public function index()
    {
        if (!session()->has('user')) return redirect('login')->with([
            "response" => json_decode(BuildResponse::response('99', 'Invalid Login', 'Please Login First', ''))
        ]);
        session()->put('sideBar', $this->findSideBar());

        return view('content.karyawan')->with([
            'urlTable' => 'http://localhost:8000/getDataTableKaryawan',
            'urlFind' => 'http://localhost:8000/findKaryawan/',
            'breadCrumb' => session('sideBar')->filter(function ($value, $key) {
                return $key == 'Main' || $key == 'Karyawan';
            }),
            'head' => 'Data Karyawan',
            'activeSideBar' => 'Karyawan',
            'status_perkawinan' => StatusPerkawinan::showStatusPerkawinan(),
            'departement' => Departemen::showDepartemen(),
            'relgaji' => RelGaji::showRelGaji(),
            'gaji_pokok' => GajiPokok::showGajiPokok()
        ]);
    }

    public function getDetailRelGaji($id)
    {
        return BuildResponse::response(
            '00',
            'Success',
            'Success Get Rel',
            [
                'detailRel' => RelGaji::showDetailRelGaji($id),
                'allLembur' => MLembur::showMLembur(),
                'allMakan' => MMakan::showMMakan(),
                'allHarian' => MHarian::showMHarian(),
                'allRel' => RelGaji::showRelGajiForUser()
            ]

        );
    }


    public function addKaryawan(Request $request)
    {
        $insertKaryawan = Karyawan::insertKaryawan($request->all());
        return BuildResponse::response('00', 'success', 'Success Add Karyawan', $insertKaryawan);
    }

    public function editKaryawan(Request $request)
    {
        $updateData = Karyawan::editKaryawan($request->all());
        return BuildResponse::response('00', 'success', 'Success Update Data Karyawan', $request->all());
    }

    private function findSideBar()
    {
        $result = DB::table('manage_view as submenu')
            ->join('group_view as group', 'submenu.group_view', 'group.id')
            ->select('submenu.menu_name', 'group.group_name', 'submenu.icon', 'url')
            ->get()->groupBy('group_name');
        return $result;
    }

    public function getDataTableKaryawan()
    {
        return BuildResponse::response('00', 'success', 'Success Retrieve Data', [
            'dataTable' => Karyawan::showKaryawanForUser(),
            'keyTable' => Karyawan::keyKaryawan(),
            'for' => 'karyawan'
        ]);
    }

    public function deleteKaryawan(Request $request)
    {
        $deleteKaryawan = Karyawan::deleteKaryawan($request->all());
        return BuildResponse::response('00', 'success', 'Success Delete Data', $deleteKaryawan);
    }

    public function findKaryawan($search)
    {
        $dataTable = Karyawan::findKaryawanForUser(trim($search));
        if (sizeof($dataTable) > 0) {
            return BuildResponse::response('00', 'success', 'Success Retrieve Data', [
                'dataTable' => $dataTable,
                'keyTable' => Karyawan::keyKaryawan(),
                'for' => 'karyawan'
            ]);
        } else {
            return BuildResponse::response('99', 'Error', 'Cannot Find Item', [
                'dataTable' => Karyawan::showKaryawanForUser(),
                'keyTable' => Karyawan::keyKaryawan(),
                'for' => 'karyawan'
            ]);
        }
    }
}
