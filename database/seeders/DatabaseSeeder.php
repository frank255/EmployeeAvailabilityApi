<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Office;
use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Title::factory(20)->create();
        Office::factory(20)->create();
        Employee::factory(20)->create();
    }
}
