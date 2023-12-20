<?php

namespace Src\Shared\Infrastructure\Middleware;

use Closure;
use Illuminate\Http\Request;
use Src\Shared\Infrastructure\Exceptions\ApiAuthException;
use Src\Shared\Infrastructure\Helper\HttpCodesHelper; // Import HttpCodesHelper

final class ApiMiddleware
{

    use HttpCodesHelper; // Use HttpCodesHelper

    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     * @throws ApiAuthException
     */
    public function handle(
        Request $request,
        Closure $next
    ): mixed {
        // Add your middleware logic here
        if (empty($request->header('authorization'))) {
            throw new ApiAuthException("Not auth authoritation is empty", $this->badRequest());
        }

        if (env('API_KEY') !== $request->header('authorization')) {
            throw new ApiAuthException("Not auth authoritation is failed", $this->unauthorized());
        }

        return $next($request);
    }
}
