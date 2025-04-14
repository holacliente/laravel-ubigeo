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

    public static function provincias()
    {
        return Provincia::all();
    }

    // public static function provincias(string $departamento)
    // {
    //     $result = Departamento::where('name', 'LIKE', "%{$departamento}%")->first();
    //     if($result === null) {
    //         throw new Exception("Departamento no encontrado");
    //     }
    //     return $result->provincias;
    // }

    public static function distritos()
    {
        return Distrito::all();
    }

    // public static function distritos(string $departamento, string $provincia)
    // {
    //     $result = Departamento::where('name', 'LIKE', "%{$departamento}%")->first();
    //     if($result === null) {
    //         throw new Exception("Departamento no encontrado");
    //     }
    //     $provincia = $result->provincias()->where('name', 'LIKE', "%{$provincia}%")->first();
    //     if($provincia === null) {
    //         throw new Exception("Distrito no encontrado");
    //     }
    //     return $provincia->distritos;
    // }

    public function getDepartamento($codigo): string
    {
        if($codigo === null) {
            return "---";
        }
        foreach (self::departamentos() as $value) {
            if($value->id == $codigo) {
            return $value->name;
            }
        }
        return '---';
    }

    public function getDistrito($codigo): string
    {
        if($codigo === null) {
            return "---";
        }
        foreach (self::distritos() as $value) {
            if($value->id == $codigo) {
            return $value->name;
            }
        }
        return '---';
    }

    public function getProvincia($codigo): string
    {
        if($codigo === null) {
            return "---";
        }
        foreach (self::provincias() as $value) {
            if($value->id == $codigo) {
            return $value->name;
            }
        }
        return '---';
    }
}