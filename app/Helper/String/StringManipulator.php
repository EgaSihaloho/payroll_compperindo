<?php

namespace App\Helper\String;

use App\Helper\String\BuildResponse;

class StringManipulator
{
    public function __construct($data)
    {

        if (sizeof($data) == 2 && (is_array($data[1]) == true || is_object($data[1])) &&  (!is_array($data[0]) == true || !is_object($data[0]))) {
            $this->search = $data[0];
            $this->data = $data[1];
        } elseif (sizeof($data) == 2 && (is_array($data[1]) == true || is_object($data[1])) &&  (is_array($data[0]) == true || is_object($data[0] == true))) {

            $this->search = $data[0];
            $this->data = $data[1];
        } else {
            $this->data = $data;
        }
    }
    public function addCommasToData()
    {
        if (!is_array($this->data)) {
            return $string = $this->data;
        } else {
            $string = trim($this->data[0]);
            if (sizeof($this->data) > 1) {
                for ($i = 1; $i < sizeof($this->data); $i++) {
                    $string .= ', ' . trim($this->data[$i]);
                }
            }
            return $string;
        }
    }

    public static function addCommas($data)
    {
        $new = new StringManipulator($data);

        return $new->addCommasToData();
    }

    private function getValueOfToData()
    {
        $datas = [];
        $search = $this->search;
        foreach ($this->data as $d) {
            if (is_object($d)) {
                array_push($datas, $d->$search);
            } else {
                array_push($datas, $d[$search]);
            }
        }
        $this->data = $datas;
        $this->value = $this->data;
        return $this;
    }

    public static function getValueOf($data)
    {
        $new = new StringManipulator($data);
        $new->getValueOfToData();
        return $new;
    }

    private function prepareAddIndex($indexToAdd)
    {
        $this->indexToAdd = $indexToAdd;
        return $this;
    }

    public function addIndexToData()
    {
        if (sizeof($this->data) == 1) {
            foreach ($this->indexToAdd as $index => $add) {
                $this->data->$index = $add;
            }
        } else {
            foreach ($this->data as $datas => $data) {
                foreach ($this->indexToAdd as $index => $add) {
                    $data->$index = $add;
                }
            }
        }

        $this->value = $this->data;
        return $this;
    }

    public static function addIndex($data, $indexToAdd)
    {
        $new = new StringManipulator($data);
        $new->prepareAddIndex($indexToAdd);
        $new->addIndexToData();
        return $new;
    }

    public function modifyKeyIndex($data)
    {
        if (isset($this->data)) {
            if (is_array($data)) {
                if (sizeof($this->data) == 1) {
                    foreach ($data as $index => $add) {
                        $this->data->$add = $this->data->$index;
                        unset($this->data->$index);
                    }
                } else {
                    foreach ($this->data as $datas => $data_) {
                        foreach ($data as $index => $add) {
                            $data_->$add = $data_->$index;
                            unset($data_->$index);
                        }
                    }
                }
                $this->value = $this->data;
                return $this;
            } else {
                return $this->response = BuildResponse::response('101', 'Undifined Data', 'Undifined Array Modify To while modify Key Array');
            }
        } else {
            return $this->response = BuildResponse::response('101', 'Undifined Data', 'Source Array Not Set');
        }
    }



    public function searchData()
    {

        if (!isset($this->search) && !isset($this->data)) {
            $this->response = BuildResponse::response('404', 'index not found', 'index key search or data not set');
            return $this;
        } else {
            $data = [];
            foreach ($this->data as $index => $value) {
                if (is_numeric($index)) {
                    foreach ($value as $indexVal => $valInside) {

                        foreach ($this->search as $searchIndex => $searchValue) {

                            if ($searchIndex == $indexVal && $valInside == $searchValue) {

                                array_push($data, $value);
                            }
                        }
                    }
                }
            }
        }

        $this->value = $data;
        return $this;
    }

    public static function getKey($data)
    {
        $result = [];
        foreach ($data[0] as $key => $value) {
            array_push($result, $key);
        }
        return $result;
    }

    public static function search($data)
    {

        $new = new StringManipulator($data);

        $new->searchData();
        if (isset($new->response)) {
            return $new->response;
        } else {
            return $new;
        }
    }

    public function getMax()
    {
        if (isset($this->data)) {
            $this->value = max($this->data);
            return $this;
        } else {
            return [];
        }
    }

    public static function max($data)
    {
        $new = new StringManipulator($data);
        $new->getMax();
        return $new;
    }

    private function findIndex()
    {
        $this->values = 0;
        $this->status = false;
        foreach ($this->data as $index => $value) {

            $search = $this->search;
            if (is_array($value)) {
                foreach ($value as $indexVal => $valVal) {
                    if ($indexVal == $search) {
                        $this->status = true;
                        break;
                    }
                }
                if ($this->status == true) {
                    break;
                }
            } else {
                return null;
            }

            $this->values++;
        }
        // dd($this->search, $index, $this->data);
        if ($this->status == true) {

            return $this->values;
        } else {
            return null;
        }
    }

    public static function findIndexHas($data)
    {
        $new = new StringManipulator($data);
        return $new->findIndex();
    }
}
