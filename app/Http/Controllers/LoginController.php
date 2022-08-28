<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Validation\Validation;
use App\Helper\String\BuildResponse;
use App\Helper\Log\Log;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller

{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {

        /*Set Request To Var Data*/
        $data = $request->all();
        /*Validate Request*/
        $validate = Validation::validate($data, 'login');
        // dd($validate);
        /*Return If False*/
        if ($validate->value == false) return Redirect::back()->with(["response" => json_decode($validate->response)]);
        /*Insert Log*/
        $findUser = $this->findUser($data["user_name"]);
        Log::insertLog([
            "id_user_access" => $findUser->id,
            "user_name" => $data["user_name"],
            "activity" => "login",
            "note" => "Someone Try To Login, data : " . json_encode($request->all())
        ]);
        /*Put User Login To Session*/
        session()->put('user', $findUser);
        /*Return To View*/
        return redirect('/dashboard')->with(["response" => json_decode($validate->response)]);
    }

    private function findUser($username)
    {
        return DB::table('user_access')->where('user_name', $username)->first();
    }

    public function logout()
    {
        Log::insertLog([
            "id_user_access" => session('user')->id,
            "user_name" => session('user')->user_name,
            "activity" => "logout",
            "note" => session('user')->first_name . " " . session('user')->last_name . " Has Logout"
        ]);
        session()->flush();
        return redirect('/login');
    }
}
