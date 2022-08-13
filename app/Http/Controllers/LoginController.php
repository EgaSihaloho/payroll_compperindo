<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Validation\Validation;
use App\Helper\String\BuildResponse;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->all();
        $validate = Validation::validate($data, 'login');
        if ($validate->value == false) $validate->response;
        return $validate->response;
    }
}
