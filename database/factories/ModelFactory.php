<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Product::class, static function (Faker\Generator $faker) {
    return [
        'COD_P' => $faker->randomNumber(5),
        'NOMBRE_PRO' => $faker->sentence,
        'UNDAD_MEDIDA' => $faker->sentence,
        'FECHA_P' => $faker->date(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Plantum::class, static function (Faker\Generator $faker) {
    return [
        'ID_PLANTA' => $faker->sentence,
        'NOMBRE_PL' => $faker->sentence,
        'DESCIPCION' => $faker->sentence,
        'ENCARGADO' => $faker->sentence,
        'APELLIDO_ENC' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Empleado::class, static function (Faker\Generator $faker) {
    return [
        'CI_EMPLEADO' => $faker->randomNumber(5),
        'NOMBRE_EMPLEADO' => $faker->sentence,
        'APELLIDO_P' => $faker->sentence,
        'APELLIDO_M' => $faker->sentence,
        'FECHA_NAC' => $faker->date(),
        'FECHA_INICIO' => $faker->date(),
        'TELEFONO' => $faker->randomNumber(5),
        'DIRECCION' => $faker->sentence,
        'SALARIO' => $faker->randomFloat,
        'SEXO' => $faker->boolean(),
        'ID_PLANTA' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Ubicacion::class, static function (Faker\Generator $faker) {
    return [
        'ID_UBICACION' => $faker->randomNumber(5),
        'DESIGNACION' => $faker->sentence,
        'TIPO' => $faker->sentence,
        'CAPACIDAD' => $faker->sentence,
        'ID_PLANTA' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Detalle::class, static function (Faker\Generator $faker) {
    return [
        'ID_DETALLE' => $faker->randomNumber(5),
        'PRECIO_ALMACEN' => $faker->randomFloat,
        'PRECIO_VENTA' => $faker->randomFloat,
        'COD_P' => $faker->randomNumber(5),
        'ID_PLANTA' => $faker->sentence,
        'CI_EMPLEADO' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Inventario::class, static function (Faker\Generator $faker) {
    return [
        'ID_INVENTARIO' => $faker->randomNumber(5),
        'FECHA' => $faker->date(),
        'COD_P' => $faker->randomNumber(5),
        'ID_PLANTA' => $faker->sentence,
        'CI_EMPLEADO' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
