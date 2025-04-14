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

    protected $keyType = 'string';

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

    /**
     * Scope a query to only include distritos with a specific cod_ubigeo.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $codUbigeo
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUbigeo($query, string $codUbigeo)
    {
        return $query->where('cod_ubigeo', $codUbigeo);
    }
}