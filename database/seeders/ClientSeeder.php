<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;
use App\Models\Client;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // Crear los grupos
        $group1 = Group::create(['name' => 'Grupo A']);
        $group2 = Group::create(['name' => 'Grupo B']);

        // Crear 20 clientes con nombres y datos aleatorios
        for ($i = 0; $i < 20; $i++) {
            Client::create([
                'ci' => $faker->randomNumber(7),
                'name' => $faker->name,
                'birth_date' => $faker->date('Y-m-d', '-20 years'),
                'gender' => $faker->randomElement(['male', 'female']),
                'group_id' => $i < 10 ? $group1->id : $group2->id,
                'customer_type' => $faker->randomElement(['preferencial', 'frecuente', 'medio']),
            ]);
        }
    }
}
