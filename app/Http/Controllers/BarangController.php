<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\Barang;

class BarangController extends Controller
{
    public function index()
    {
        if (!session()->has('user')) return redirect('login')->with([
            "response" => json_decode(BuildResponse::response('99', 'Invalid Login', 'Please Login First'))
        ]);
        return view('content.barang')->with(["barang" => Barang::showBarang()]);
    }
}
