<?php

namespace Src\Management\Login\Domain;

use Src\Management\Login\Domain\Exceptions\NotLoginException;
use Src\Shared\Domain\Domain;
use Src\Shared\Domain\Helper\HttpCodesDomainHelper;

final class Login extends Domain
{

    use HttpCodesDomainHelper;

    private const USER_OR_PASSWORD_INCORRECT = 'USER_OR_PASSWORD_INCORRECT';

    /**
     * @var array|null
     */
    public function handler():array
    {
        return [
            "id" => $this->entity()['id'],
            "first_name" => $this->entity()['first_name'],
            "email" => $this->entity()['email'], 
        ];
    }

    /**
     * @param string|null $exception
     * @return void
     * @throws NotLoginException
     */
    protected function isException(?string $exception): void
    {
        if(!is_null($exception)){
            match ($exception) {
                self::USER_OR_PASSWORD_INCORRECT => throw new NotLoginException("email or password incorrect", $this->badRequest())
            };

        }
    }
}
