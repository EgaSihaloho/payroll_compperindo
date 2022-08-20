<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Validation\Validation;
use App\Helper\String\BuildResponse;
use App\Helper\Log\Log;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        /*Set Request To Var Data*/
        $data = $request->all();
        /*Validate Request*/
        $validate = Validation::validate($data, 'login');
        /*Return If False*/
        if ($validate->value == false) return view('login');
        /*Insert Log*/
        Log::insertLog([
            "id_user_access" => $this->findUser($data["user_name"])->id,
            "user_name" => $data["user_name"],
            "activity" => "login",
            "note" => "Someone Try To Login, data : " . json_encode($request->all())
        ]);
        /*Return To View*/
        return view('content.dashboard');
    }

    private function findUser($username)
    {
        return DB::table('user_access')->where('user_name', $username)->first();
    }
}
