<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helper\String\BuildResponse;

class DashboardController extends Controller
{
    public function index()
    {
        if (!session()->has('user')) return redirect('login')->with([
            "response" => json_decode(BuildResponse::response('99', 'Invalid Login', 'Please Login First'))
        ]);
        $dataSideBar = $this->findSideBar();

        return view('content.dashboard')->with(["sideBar" => $dataSideBar]);
    }

    private function findSideBar()
    {
        $result = DB::table('manage_view as submenu')
            ->join('group_view as group', 'submenu.group_view', 'group.id')
            ->select('submenu.menu_name', 'group.group_name')
            ->get()->groupBy('group_name');
        return $result;
    }
}
