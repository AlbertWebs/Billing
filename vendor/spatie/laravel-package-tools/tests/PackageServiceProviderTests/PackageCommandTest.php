<?php

namespace Spatie\LaravelPackageTools\Tests\PackageServiceProviderTests;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\Tests\TestClasses\TestCommand;

class PackageCommandTest extends PackageServiceProviderTestCase
{
    public function configurePackage(Package $package)
    {
        $package
            ->name('laravel-package-tools')
            ->hasCommand(TestCommand::class);
    }

    /** @test */
    public function it_can_execute_a_registered_commands()
    {
        $this
            ->artisan('test-command')
            ->assertExitCode(0);
    }
}
