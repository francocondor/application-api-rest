<?php

namespace Src\Application\User\Domain;

use Src\Application\User\Domain\Exceptions\UserNotFoundException;
use Src\Shared\Domain\Domain;
use Src\Shared\Domain\Helper\HttpCodesDomainHelper;

final class User extends Domain
{
    use HttpCodesDomainHelper;

    private const USER_NOT_FOUND = 'USER_NOT_FOUND';

    protected function isException(?string $exception): void
    {
        if (!is_null($exception)) {
            match ($exception) {
                self::USER_NOT_FOUND => throw new UserNotFoundException("Use not found", $this->notFound())
            };
        }
    }
}