<?php

namespace App\Traits;

trait HttpResponses
{
    protected function success($data, $code = 200, $message = null): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'status' => 'Request was succesful',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function error($data, $code, $message = null): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'status' => 'Error has occurred',
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
