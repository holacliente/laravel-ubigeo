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
    protected $table = 'provincias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'departamento_id',
    ];

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
        return $this->hasMany(Distrito::class);
    }
}