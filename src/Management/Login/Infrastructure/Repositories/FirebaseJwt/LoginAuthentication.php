<?php

namespace Src\Management\Login\Infrastructure\Repositories\FirebaseJwt;

use Exception;
use Src\Management\Login\Domain\Contracts\LoginAuthenticationContract;
use Src\Management\Login\Domain\ValueObjects\LoginAuthenticationParameters;

use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Log;
use Src\Management\Login\Domain\ValueObjects\LoginJwt;

final class LoginAuthentication implements LoginAuthenticationContract
{
    /**
     * @var JWT
     */
    private JWT $jwt;

    /**
     * @param JWT $jwt
     */
    public function __construct()
    {
        $this->jwt = new JWT();
    }

    /**
     * @param LoginAuthenticationParameters $loginAuthenticationParameters
     * @return string
     */
    public function auth(LoginAuthenticationParameters $loginAuthenticationParameters): string
    {
        return $this->jwt->encode(
            [$loginAuthenticationParameters->handler()],
            $loginAuthenticationParameters->jwtKey()
        );
    }

    /**
     * @param LoginJwt $loginJwt
     * @return bool
     */
    public function check(LoginJwt $loginJwt): bool
    {
        try {
            $decode = $this->jwt::decode(
                $loginJwt->value(),
                $loginJwt->jwtKey(),
                $loginJwt->jwtEncrypt()
            );

            if (time() > $decode[0]->exp) {
                Log::error('El token ha expirado');
                return false;
            }
        } catch (Exception $e) {
            Log::error('Error al decodificar el token - ' . $e->getMessage() . ' - ' . $e->getLine() . ' - ' . $e->getFile());
            return false;
        }

        return true;
    }
}
