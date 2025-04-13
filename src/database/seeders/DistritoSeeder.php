<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ubigeo\Distrito;

class DistritoSeeder extends Seeder
{
    public function run()
    {
        $distritos = include __DIR__ . '/ubigeo_peru_2016_distritos.php';
        foreach ($distritos as $distrito) {
            Distrito::create([
                'id' => $distrito['id'],
                'descripcion' => $distrito['name'],
                'cod_ubigeo' => $distrito['id'],
                'provincia_id' => $distrito['province_id'],
                'distrito_id' => $distrito['department_id'],
            ]);
        }
    }
}