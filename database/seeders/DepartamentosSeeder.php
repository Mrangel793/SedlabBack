<?php

namespace Database\Seeders;
use App\Models\Departamento;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $departamentos = [
                'Amazonas',
                'Antioquia',
                'Arauca',
                'Atlántico',
                'Bolívar',
                'Boyacá',
                'Caldas',
                'Caquetá',
                'Casanare',
                'Cauca',
                'Cesar',
                'Chocó',
                'Córdoba',
                'Cundinamarca',
                'Guainía',
                'Guaviare',
                'Huila',
                'La Guajira',
                'Magdalena',
                'Meta',
                'Nariño',
                'Norte de Santander',
                'Putumayo',
                'Quindío',
                'Risaralda',
                'San Andrés y Providencia',
                'Santander',
                'Sucre',
                'Tolima',
                'Valle del Cauca',
                'Vaupés',
                'Vichada',
            ];
    
            foreach ($departamentos as $departamento) {
                Departamento::create(['name' => $departamento]);
            }
        }
    }
    
    //aaaaa

