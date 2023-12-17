<?php

namespace Src\Shared\Infrastructure\Helper;

use App\Shared\Domain\Helper\HttpCodesDomainHelper;

trait HttpCodesHelper
{

    use HttpCodesDomainHelper;

    // public function getHttpCodeMessage(int $httpCode): string
    // {
    //     switch ($httpCode) {
    //         case 200:
    //             return 'OK';
    //         case 201:
    //             return 'Created';
    //         case 400:
    //             return 'Bad Request';
    //         case 401:
    //             return 'Unauthorized';
    //         case 404:
    //             return 'Not Found';
    //         case 500:
    //             return 'Internal Server Error';
    //         default:
    //             return 'Unknown';
    //     }
    // }
}
