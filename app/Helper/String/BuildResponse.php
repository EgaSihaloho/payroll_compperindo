<?php

namespace App\Helper\String;

class BuildResponse
{
    public function __construct($code, $header, $desc, $data)
    {
        $this->code = $code;
        $this->header = $header;
        $this->desc = $desc;
        $this->data  = $data;
    }

    private function buildAndEncode()
    {
        return json_encode([
            "code" => $this->code,
            "header" => $this->header,
            "desc" => $this->desc,
            "data" => $this->data
        ]);
    }

    public static function response($code, $header, $desc, $data)
    {
        $new = new BuildResponse($code, $header, $desc, $data);
        return $new->buildAndEncode();
    }
}
