<?php

namespace App\Models;

use App\Models\Ubigeo\Departamento;
use App\Models\Ubigeo\Provincia;
use App\Models\Ubigeo\Distrito;

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

    public static function distritos()
    {
        return Distrito::all();
    }

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