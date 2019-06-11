<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('password'), // password
        'remember_token' => Str::random(10),
        'role' => 'user',
    ];
});

/**
 * Состояние для учтной записи администратора
 */
 $factory->state(User::class, 'admin', [
      'email' => 'admin@test.ru',
      'role' => 'admin',
 ]);

 /**
  * Состояние для учтной записи продавца-консультанта
  */
  $factory->state(User::class, 'seller', [
       'role' => 'seller',
  ]);

  /**
   * Состояние для учтной записи мастера
   */
   $factory->state(User::class, 'master', [
        'role' => 'master',
   ]);
