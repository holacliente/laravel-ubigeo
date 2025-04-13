<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ubigeo\Departamento;

class DepartmentoSeeder extends Seeder
{
    public function run()
    {
        $departamentos = include __DIR__ . '/../data/ubigeo_peru_2016_departamentos.php';

        foreach ($departamentos as $departamento) {
            Departamento::create($departamento);
        }
    }
}