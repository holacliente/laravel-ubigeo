<?php

namespace App\Models\Ubigeo;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    // Table associated with the model
    protected $table = 'ubigeo_departamentos';

    // Primary key of the table
    protected $primaryKey = 'id';

    // Indicates if the IDs are auto-incrementing
    public $incrementing = false;

    // The attributes that are mass assignable
    protected $fillable = [
        'id',
        'name',
    ];

    // Indicates if the model should be timestamped
    public $timestamps = false;

    /**
     * Relationships
     */

    // Example: A departamento has many provincias
    // public function provincias()
    // {
    //     return $this->hasMany(Provincia::class, 'departamento_id');
    // }
}