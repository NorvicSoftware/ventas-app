<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $group = new Group();
        $group->type = "Frecuente";
        $group->save();

        $group2 = new Group();
        $group2->type = "Excepcional";
        $group2->save();

        $group3 = new Group();
        $group3->type = "Preferencial";
        $group3->save();
    }
}
