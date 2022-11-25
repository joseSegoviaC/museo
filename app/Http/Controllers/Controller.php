<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Response with json
     *
     * @param array|null $data
     * @param int $statusCode
     * @return Illuminate\Http\JsonResponseJsonResponse
     */

    public function responseJson($data, $message = '', $statusCode = 200)
    {
        $payload =  [
            'data' => $data ?? [],
            'message' => $message,
            'success' => $statusCode === 200,
        ];

        return response()->json($payload, $statusCode);
    }
}
