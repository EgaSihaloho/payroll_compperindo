<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helper\String\BuildResponse;

class DashboardController extends Controller
{
    public function index()
    {
        /* ------------------------- Validate User Has Login ------------------------ */
        if (!session()->has('user')) return redirect('login')->with([
            "response" => json_decode(BuildResponse::response('99', 'Invalid Login', 'Please Login First', ''))
        ]);

        /* ------------------------- push sideBar to Session ------------------------ */
        session()->put('sideBar', $this->findSideBar());

        /* ----------------------------- Return to View ----------------------------- */
        return view('content.dashboard');
    }

    private function findSideBar()
    {
        $result = DB::table('manage_view as submenu')
            ->join('group_view as group', 'submenu.group_view', 'group.id')
            ->select('submenu.menu_name', 'group.group_name', 'submenu.icon', 'url')
            ->get()->groupBy('group_name');
        return $result;
    }
}
