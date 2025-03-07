<?php

namespace App\Traits;

trait ResponseTrait
{
    public function response($data, $code = 200, $message = null)
    {
        return response()->json([
            'data' => $data,
            'message' => $message,
            'code' => $code,
        ], $code);
    }
}
