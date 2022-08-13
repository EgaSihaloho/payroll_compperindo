<?php

namespace App\Helper\Validation;

use DB;
use App\Helper\String\StringManipulator;
use App\Helper\String\BuildResponse;
use Illuminate\Support\Facades\Hash;


class Validation
{

    public static function validate($data, $method)
    {
        $new  = new Validation();
        $new->data = $data;
        $new->method = $method;
        if ($new->method == 'register') $new->validateOnRegister();
        if ($new->method == 'login') $new->validateOnLogin();
        if ($new->method == 'insertlog') $new->validateOnInsertLog();


        return $new;
    }

    private function validateOnLogin()
    {
        $this->getTable()->getColumn()->validateData();
        if ($this->value == true) $this->findExistingAcccount();
        if ($this->value == true)  $this->matchPassword();
        return $this;
    }

    private function matchPassword()
    {
        if (!Hash::make($this->data['passwords']) == $this->user->passwords) {
            $this->response =
                BuildResponse::response('00', 'Success', 'Success Validate Data');
            $this->value = true;
            return $this;
        }
        $this->response =
            BuildResponse::response('99', 'Error', 'Password Not Match');
        $this->value = true;
        return $this;
    }



    private function validateOnInsertLog()
    {
        $this->column = ['username', 'passwords'];
        $this->validateData();
        return $this;
    }

    private function validateOnRegister()
    {
        $this->getTable()->getColumn()->validateData();
        if ($this->value == true) $this->findExistingAcccount();
        if ($this->value == true) $this->validateEmail();
        return $this;
    }

    private function validateEmail()
    {
        if (!filter_var($this->data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->response = BuildResponse::response('99', 'Invalid Email', 'Wrong Email Format');
            $this->value = false;
            return $this;
        }
        $this->response =
            BuildResponse::response('00', 'Success', 'Success Validate Data');
        $this->value = true;
        return $this;
    }

    private function findExistingAcccount()
    {
        $this->user = DB::table($this->tableName)->select('*')
            ->where('user_name', $this->data['user_name'])
            ->first();
        if (sizeof($this->user) > 0) {
            $this->response = BuildResponse::response('99', 'Duplicate User', 'User Name & Email Already Exist');
            $this->value = false;
            return $this;
        }
        $this->response =
            BuildResponse::response('00', 'Success', 'Success Validate Data');
        $this->value = true;
        return $this;
    }

    private function validateData()
    {
        if (sizeof($this->column) == 0) {
            $this->response = BuildResponse::response('99', 'Undifined Data', 'No Data Send');
            $this->value = false;
            return $this;
        }

        foreach ($this->column as $key => $keyVal) {
            foreach ($this->data as $d => $dVal) {
                if ($d == $keyVal) {
                    unset($this->column[$key]);
                    break;
                }
            }
        }
        $this->column = array_values($this->column);

        if (sizeof($this->column) > 0) {
            $this->response = BuildResponse::response('99', 'Undifined Data', 'index ' .
                StringManipulator::addCommas($this->column) . ' not found');
            $this->value = false;
            return $this;
        }
        $this->response =
            BuildResponse::response('00', 'Success', 'Success Validate Data');
        $this->value = true;
        return $this;
    }

    private function getTable()
    {
        $selectTable =
            DB::table('validation_method')->select('table_name')->where('method', $this->method)->first();
        $this->tableName = $selectTable->table_name;
        return $this;
    }

    private function getColumn()
    {
        $selectColumn =
            DB::select("select COLUMN_NAME
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_SCHEMA = 'dapurweb_payroll_compperindo' AND TABLE_NAME = '" . $this->tableName . "'");

        $selectColumn = StringManipulator::getValueOf(['COLUMN_NAME', $selectColumn])->value;
        $selectColumn = $this->unsetIndex($selectColumn);

        $this->column = $selectColumn;



        return $this;
    }

    private function unsetIndex($data)
    {
        if ($this->method == 'register') {
            foreach ($data as $key => $val) {
                if ($val == 'id') unset($data[$key]);
                if ($val == 'role') unset($data[$key]);
                if ($val == 'created_at') unset($data[$key]);
            }
        } elseif ($this->method == 'insertlog') {
            foreach ($data as $key => $val) {
                if ($val == 'id') unset($data[$key]);
                if ($val == 'created_at') unset($data[$key]);
            }
        }
        $data = array_values($data);

        return $data;
    }
}
