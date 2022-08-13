<?php

namespace App\Helper\String;

class BuildResponse
{
    public function __construct($code, $header, $desc)
    {
        $this->code = $code;
        $this->header = $header;
        $this->desc = $desc;
    }

    private function buildAndEncode()
    {
        return json_encode([
            "code" => $this->code,
            "header" => $this->header,
            "desc" => $this->desc
        ]);
    }

    public static function response($code, $header, $desc)
    {
        $new = new BuildResponse($code, $header, $desc);
        return $new->buildAndEncode();
    }
}
