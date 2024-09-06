<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => "Rocky Gunawan",
            'username' => "rocky",
            'password' => hash("sha256", "rocky123"),
            'role' => "Direktur",
        ]);

        User::create([
            'id' => 2,
            'name' => "Arief Satrio Budi Prasojo",
            'username' => "arief",
            'password' => hash("sha256", "arief123"),
            'role' => "Manager Operasional"
        ]);

        User::create([
            'id' => 3,
            'name' => "Ari Wibisono",
            'username' => "ari",
            'password' => hash("sha256", "ari123"),
            'role' => "Manager Keuangan"
        ]);
        User::create([
            'id' => 4,
            'name' => "Athar Reza",
            'username' => "athar",
            'password' => hash("sha256", "athar123"),
            'role' => "Staf"
        ]);
        User::create([
            'id' => 5,
            'name' => "Dody Irawan",
            'username' => "dody",
            'password' => hash("sha256", "dody123"),
            'role' => "Staf"
        ]);
    }
}
