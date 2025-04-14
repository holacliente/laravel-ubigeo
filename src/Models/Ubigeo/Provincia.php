<?php

namespace App\Models\Ubigeo;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ubigeo_provincias';

    // Primary key of the table
    protected $primaryKey = 'id';

    // Indicates if the IDs are auto-incrementing
    public $incrementing = false;

    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'cod_ubigeo',
        'departamento_id',
    ];

    // Disable timestamps if not needed
    public $timestamps = false;

    /**
     * Get the departamento that owns the provincia.
     */
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    /**
     * Get the distritos for the provincia.
     */
    public function distritos()
    {
        return $this->hasMany(Distrito::class, 'provincia_id', 'id');
    }

    public function distrito(string $name)
    {
        return $this->distritos()->where('descripcion', $name)->first();
    }

    /**
     * Scope a query to only include provincias with a specific cod_ubigeo.
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