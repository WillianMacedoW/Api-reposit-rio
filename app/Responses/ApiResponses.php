<?php

namespace App\Responses;

class ApiResponses
{
    public static function success(?string $message = null,mixed $data = null)
    {
        return response()->json(["message" => $message, "date" => $data,"status" => "success"],200);
    }
    public function ok(string $message)
    {
        return self::success($message);
        
    }
}