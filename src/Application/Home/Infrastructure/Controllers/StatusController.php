<?php

namespace Src\Application\Home\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Src\Application\Home\Exceptions\StatusExceptions;
use Src\Shared\Infrastructure\Controllers\CustomController;
use Src\Shared\Infrastructure\Helper\HttpCodesHelper;

final class StatusController extends CustomController
{
    private DB $db;
    use HttpCodesHelper;

    public function __construct()
    {
        $this->db = new DB;
    }

    /**
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        try {
            $this->connection();
            return $this->jsonResponse(
                $this->ok(),
                false,
                [
                    'status' => 'OK',
                ]
            );
        } catch (\Exception $e) {
            throw new StatusExceptions("NOT OK", $this->notService());
        }

    }

    /**
     * @return void
     */
    private function connection(): void
    {
        $this->db::connection()->getPdo();
    }
}
