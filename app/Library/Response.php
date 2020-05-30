<?php
namespace App\Library;

class Response
{
    public static function JsonSuccess(string $message = '', $data = [],int $code = 200)
    {
        return response()->json([
            'status'  => $code,
            'message' => $message,
            'data'    => $data
        ]);
    }

    public static function JsonError(string $message = '', $data = [], int $code = 500)
    {
        return response()->json([
            'status'  => $code,
            'message' => $message,
            'data'    => $data
        ]);
    }
}
