<?php

namespace Src\Management\Login\Infrastructure\Services;

use Src\Shared\Infrastructure\Services\DependencyServiceProvider as ServiceProvider;

final class DependencyServiceProvider extends ServiceProvider
{
    /**
     * Create a new instance of DependencyServiceProvider.
     *
     * @return void
     */
    public function __construct($app)
    {
        // Add your constructor logic here
        $this->setDependency([
            [
                "useCase" => [
                    \Src\Management\Login\Application\Login\LoginAuthUseCase::class
                ],
                "contract" => \Src\Management\Login\Domain\Contracts\LoginRepositoryContract::class,
                "repository" => \Src\Management\Login\Infrastructure\Repositories\Eloquent\LoginRepository::class,
            ]
        ]);
        parent::__construct($app);
    }
}
