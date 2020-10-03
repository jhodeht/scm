<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cita;
use App\Rol;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Rol::class, function (Faker $faker) {
    return [
        'slug' => 'admin',
        'nombre' => 'Administrador',
        'descripcion' => 'Super Usuario',
    ];
});

$factory->define(User::class, function (Faker $faker) {
    return [
        'ap_paterno' => $faker->lastName,
        'ap_materno' => $faker->lastName,
        'nombre' => $faker->firstName,
        'ci' => $faker->randomNumber(8),
        'fecha_nacimiento' => '1980-01-01',
        'telefono' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        // 'rol' => $faker->randomElement($array = array ('admin','medico','paciente')),
        //'estado' => $faker->randomElement($array = array ('a','i')),
        'remember_token' => Str::random(10),
        //'roles' => factory(Rol::class),
    ];
});

$factory->define(Cita::class, function (Faker $faker) {
    return [
        'fecha_programada' => $faker->dateTimeBetween('+1 day', '+1 week', 'America/Caracas'),
        'hora_programada' => $faker->randomElement(['08:00:00', '08:30:00', '09:00:00', '09:30:00', '10:00:00', '10:30:00', '11:00:00', '11:30:00']),
        'estado' => $faker->randomElement(['Reservada', 'Confirmada', 'Atendida', 'Cancelada']),
        'numero_ficha' => $faker->randomNumber(3),
    ];
});
