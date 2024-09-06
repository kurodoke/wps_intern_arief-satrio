<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'id' => 1,
            'name' => "Rocky Gunawan",
            'role' => "Direktur",
        ]);

        Employee::create([
            'id' => 2,
            'name' => "Arief Satrio Budi Prasojo",
            'role' => "Manager Operasional"
        ]);

        Employee::create([
            'id' => 3,
            'name' => "Ari Wibisono",
            'role' => "Manager Keuangan"
        ]);
        Employee::create([
            'id' => 4,
            'name' => "Athar Reza",
            'role' => "Staf"
        ]);
        Employee::create([
            'id' => 5,
            'name' => "Dody Irawan",
            'role' => "Staf"
        ]);
    }
}
