<?php

namespace App\Models;

use App\Models\Ubigeo\Departamento;
use App\Models\Ubigeo\Provincia;
use App\Models\Ubigeo\Distrito;
use Exception;

final class Ubigeo
{

    public static function departamentos()
    {
        return Departamento::all();
    }

    public static function provincias(string $departamento)
    {
        $result = Departamento::where('name', 'LIKE', "%{$departamento}%")->first();
        if($result === null) {
            throw new Exception("Departamento no encontrado");
        }
        return $result->provincias;
    }

    public function distritos(string $departamento, string $provincia)
    {
        $result = Departamento::where('name', 'LIKE', "%{$departamento}%")->first();
        if($result === null) {
            throw new Exception("Departamento no encontrado");
        }
        $provincia = $result->provincias()->where('name', 'LIKE', "%{$provincia}%")->first();
        if($provincia === null) {
            throw new Exception("Distrito no encontrado");
        }
        return $provincia->distritos;

    }
}