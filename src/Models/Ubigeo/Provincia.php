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
}