<?php

namespace Src\Shared\Infrastructure\Services;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

abstract class RouteServiceProvider extends ServiceProvider
{

    private mixed $prefix;
    private mixed $namespace;
    private mixed $group;
    private ?bool $except = null;

    /**
     * @param mixed $prefix
     * @param mixed $namespace
     * @param mixed $group
     * @param bool|null $except
     * @return void
     */
    public function setDependency(
        mixed $prefix,
        mixed $namespace,
        mixed $group,
        ?bool $except = null
    ): void {
        $this->prefix = $prefix;
        $this->namespace = $namespace;
        $this->group = $group;
        $this->except = $except;
    }

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map(): void
    {
        $this->mapRoutes();
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapRoutes()
    {
        Route::prefix($this->prefix)
            ->namespace($this->namespace)
            ->middleware('api')
            ->group(base_path($this->group));
    }
}
