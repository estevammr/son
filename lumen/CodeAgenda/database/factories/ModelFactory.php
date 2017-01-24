<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->email,
//     ];
// });

$factory->define(\CodeAgenda\Entities\Person::class, function ($faker) {
  return [
      'name' => $faker->name,
      'nickname' => $faker->firstName,
      'gender' => $faker->randomElement(['F', 'M'])
  ];
});

$factory->define(\CodeAgenda\Entities\Phone::class, function ($faker) {
  return [
      'description' => $faker->randomElement(['Residencial', 'Comercial', 'Celular', 'Recados']),
      'code' => $faker->optional(0.7, 55)->numberBetween(1,197),
      'ddd' => $faker->numberBetween(11,91),
      'prefix' => $faker->randomNumber(4),
      'sufix' => $faker->randomNumber(4),
      'person_id' => $faker->numberBetween(1,30)
  ];
});
