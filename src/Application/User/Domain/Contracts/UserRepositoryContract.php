<?php

namespace Src\Application\User\Domain\Contracts;

use Src\Application\User\Domain\User;
use Src\Application\User\Domain\ValueObjects\UserId;
use Src\Application\User\Domain\ValueObjects\UserStore;

interface UserRepositoryContract
{
    /**
     * @return User
     */
    public function index(): User;

    /**
     * @param UserId $userId
     * @return User
     */
    public function show(UserId $userId): User;

    /**
     * @param UserStore $userStore
     * @return User
     */
    public function store(UserStore $userStore): User;
}
