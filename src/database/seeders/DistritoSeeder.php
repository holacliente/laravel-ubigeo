<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ubigeo\Distrito;

class DistritoSeeder extends Seeder
{
    public function run()
    {
        $distritos = include __DIR__ . '/../data/ubigeo_peru_2016_distritos.php';
        foreach ($distritos as $distrito) {
            Distrito::create([
                'descripcion' => $distrito['name'],
                'cod_ubigeo' => $distrito['id'],
                'id_provincia_distrito' => $distrito['department_id'],
            ]);
        }
    }
}