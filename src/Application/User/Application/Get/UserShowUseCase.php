<?php

namespace Src\Application\User\Application\Get;

use Src\Application\User\Domain\Contracts\UserRepositoryContract;
use Src\Application\User\Domain\ValueObjects\UserId;

final class UserShowUseCase
{
    public function __construct(
        private readonly UserRepositoryContract $userRepositoryContract
    ) {
    }

    public function __invoke(int $id)
    {
        return $this->userRepositoryContract->show(new UserId($id));
    }
}
