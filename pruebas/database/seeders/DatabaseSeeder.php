<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Cliente::factory(10)->create();
         \App\Models\LotePago::factory(10)->create();
         \App\Models\MetodoPago::factory(3)->create();
    }
}
