<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Trip;
use App\Models\User;
use App\Models\Vehicle;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Vehicle::factory()->count(10)->create();
        Employee::factory()->count(20)->create();
        Trip::factory()->count(10000)->create();
    }
}
