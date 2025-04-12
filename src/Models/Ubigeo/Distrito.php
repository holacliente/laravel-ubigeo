<?php

namespace Holacliente\LaravelUbigeo\Models\Ubigeo;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    // Table associated with the model
    protected $table = 'distritos';

    // Primary key of the table
    protected $primaryKey = 'id';

    // Indicates if the IDs are auto-incrementing
    public $incrementing = true;

    // The attributes that are mass assignable
    protected $fillable = [
        'nombre',
        'provincia_id',
    ];

    // Disable timestamps if not needed
    public $timestamps = false;

    /**
     * Relationship: A Distrito belongs to a Provincia
     */
    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provincia_id');
    }
}