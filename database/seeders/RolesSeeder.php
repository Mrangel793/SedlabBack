<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $role = Role::create(['name' => 'SuperAdmin']);
        $role = Role::create(['name' => 'Aliado']);
        $role = Role::create(['name' => 'Orientador']);
        $role = Role::create(['name' => 'Asesor']);
        $role = Role::create(['name' => 'Emprendedor']);

    }
}