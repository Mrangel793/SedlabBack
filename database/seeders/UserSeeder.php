<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nombre' => 'superadmin',
            'email'=> 'admin@admin.com',
            'email_verified_at'=> '2024-04-17',
            'password'=>bcrypt('1234'),
            'id_departamento'=>1,
            'id_municipio'=>1,
            'id_estado'=>1, 
            'id_tipo_documento'=>1,
    ]);
    }
}
