<?php

namespace Src\Application\User\Application\Get;

use Src\Application\User\Domain\Contracts\UserRepositoryContract;

final class UserIndexUseCase
{
    public function __construct(
        private readonly UserRepositoryContract $userRepositoryContract
    ) {
    }

    public function __invoke()
    {
        return $this->userRepositoryContract->index();
    }
}
