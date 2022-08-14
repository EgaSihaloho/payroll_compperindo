<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Helper\Validation\Validation;
use App\Helper\Log\Log;
use App\Helper\String\BuildResponse;


class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->all();
        /*Insert Log Activity*/
        Log::insertLog([
            "id_user_access" => "0",
            "user_name" => "",
            "activity" => "register",
            "note" => "Someone Try To Register, data : " . json_encode($request->all())
        ]);
        /*Validate Data*/
        $validate = Validation::validate($data, 'register');
        if ($validate->value == false) return $validate->response;
        /*Add Role To Data*/
        $data['role'] = '2';
        /*encrypt Password*/
        $data['passwords'] = Hash::make($data['passwords']);
        /*InsertData*/
        $this->insertUserAccess($data);

        return BuildResponse::response('00', 'Success', 'Success On Registration');
    }


    private function buildResponse($code, $response)
    {
        return json_encode(['code' => $code, 'response' => $response]);
    }

    private function insertUserAccess($data)
    {
        $this->lastInsertUserAcess = DB::table('user_access')->insertGetId($data);
        return $this;
    }
}
