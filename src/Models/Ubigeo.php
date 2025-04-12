<?php

namespace Holacliente\LaravelUbigeo\Models;

use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    // Define the table associated with the model (optional if it matches the class name in plural form)
    protected $table = 'ubigeos';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'department',
        'province',
        'district',
        'code',
    ];

    // Disable timestamps if not needed
    public $timestamps = false;

    // Add any relationships or custom methods here
}