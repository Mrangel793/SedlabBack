<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TiposDeDocumento;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        $tipo_de_documento = [
            'Cédula de Ciudadanía',
            'Cédula de Extranjería',
            'Permiso especial de Permanencia'
        ];

        foreach ($tipo_de_documento  as $tipo_de_documento ) {
            TiposDeDocumento::create(['tipo_de_documento' => $tipo_de_documento ]);
        }

    }
}
//hola