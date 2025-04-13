<?php

namespace App\Models\Ubigeo;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    // Table associated with the model
    protected $table = 'ubigeo_distritos';

    // Primary key of the table
    protected $primaryKey = 'id';

    // Indicates if the IDs are auto-incrementing
    public $incrementing = false;

    // The attributes that are mass assignable
    protected $fillable = [
        'id',
        'descripcion',
        'cod_ubigeo',
        'provincia_id',
        'distrito_id',
    ];

    // Disable timestamps if not needed
    public $timestamps = false;

    /**
     * Relationship: A Distrito belongs to a Provincia
     */
    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'id', 'provincia_id');
    }
}