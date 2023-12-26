<?php

namespace Src\Application\User\Infrastructure\Repositories\Eloquent;

use Src\Application\User\Domain\Contracts\UserRepositoryContract;
use Src\Application\User\Domain\User;
use Src\Application\User\Domain\ValueObjects\UserId;
use Src\Application\User\Infrastructure\Repositories\Eloquent\User as Model;

final class UserRepository implements UserRepositoryContract
{
    /**
     * @var \Src\Application\User\Infrastructure\Repositories\Eloquent\User
     */
    private Model $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    /**
     * @return User
     */
    public function index(): User
    {
        $index = $this->model->with('state')->get();
        return new User($index->toArray());
    }

    /**
     * @param UserId $userId
     * @return User
     */
    public function show(UserId $userId): User
    {
        $user =  $this->model->where('id', $userId->value())->get();

        if (empty($user->toArray())) {
            return new User(null, 'USER_NOT_FOUND');
        }
        return new User($user->toArray());
    }
}
