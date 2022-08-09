<?php


namespace App\Providers;

use App\Faker\MaterialServiceProvider;
use App\Faker\ProductServiceProvider;
use Faker\{Factory, Generator};
use Illuminate\Support\ServiceProvider;


class FakerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new MaterialServiceProvider($faker));
            $faker->addProvider(new ProductServiceProvider($faker));
            return $faker;
        });
    }
}
