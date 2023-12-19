<?php

namespace Src\Shared\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

abstract class CustomController extends Controller
{
    // Aquí puedes agregar métodos y propiedades comunes a todos los controladores personalizados

    /**
     * @param int $status
     * @param bool $error
     * @param array|string|int|bool $response
     * @return JsonResponse
     */
    protected function jsonResponse(int $status, bool $error, array|string|int|bool $response): JsonResponse
    {
        return response()->json([
            "status" => $status,
            "error" => $error,
            "message" => $response
        ]);
    }
}
