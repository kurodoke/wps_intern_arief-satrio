<?php

namespace Database\Seeders;

use App\Models\Subordinate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubordinateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subordinate::create([
            "upper" => 1,
            "lower" => 2
        ]);
        
        Subordinate::create([
            "upper" => 1,
            "lower" => 3
        ]);

        Subordinate::create([
            "upper" => 2,
            "lower" => 4
        ]);

        Subordinate::create([
            "upper" => 3,
            "lower" => 5
        ]);
    }
}
