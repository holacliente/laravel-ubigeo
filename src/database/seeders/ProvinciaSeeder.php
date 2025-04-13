<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ubigeo\Provincia;

class ProvinciaSeeder extends Seeder
{
    public function run()
    {
        $provincias = include __DIR__ . '/ubigeo_peru_2016_provincias.php';
        foreach ($provincias as $provincia) {
            Provincia::create([
                'id' => $provincia['id'],
                'name' => $provincia['name'],
                'cod_ubigeo' => $provincia['id'],
                'id_departamento_provincia' => $provincia['department_id'],
            ]);
        }
    }
}