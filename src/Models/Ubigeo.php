<?php

namespace Holacliente\LaravelUbigeo\Models;

use Holacliente\LaravelUbigeo\Models\Ubigeo\Departamento;
use Holacliente\LaravelUbigeo\Models\Ubigeo\Provincia;
use Holacliente\LaravelUbigeo\Models\Ubigeo\Distrito;

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
            if($value['id'] == $codigo) {
                return $value['name'];
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
            if($value['id'] == $codigo) {
                return $value['name'];
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
            if($value['id'] == $codigo) {
                return $value['name'];
            }
        }
        return '---';
    }
}