<?php

namespace Src\Management\Login\Application\Auth;

use Src\Management\Login\Domain\Contracts\LoginAuthenticationContract;
use Src\Management\Login\Domain\ValueObjects\LoginAuthenticationParameters;

final class LoginAuthenticationUseCase
{
    public function __construct(
        private readonly LoginAuthenticationContract $loginAuthenticationContract
    ) {
        // Constructor logic here
    }

    public function __invoke(array $request)
    {
        return $this->loginAuthenticationContract->auth(new LoginAuthenticationParameters($request));
    }
}
