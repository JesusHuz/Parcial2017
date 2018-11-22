<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'nombre' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Propietario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'cedula' => $faker->unique()->numberBetween(1,200),
        'descripcion' => $faker->paragraph(),
        'telefono' => $faker->numberBetween(1,999),
        'email' => $faker->unique()->safeEmail,
       // 'user_id' => $faker->numberBetween(1,10);

    ];
});
/*
$factory->define(App\Inspeccion::class, function (Faker $faker) {
    return [
        'placa' => $faker->numberBetween(1000,99999),
        'marca' => $faker->name,
        'modelo' => $faker->name,
        'duracion' => $faker->date(),
        'estado' => $faker->date(),
        'propietario_id' => $faker->unique()->numberBetween(1,100),
        

       // 'user_id' => $faker->numberBetween(1,10);

    ];
   
});
 */
