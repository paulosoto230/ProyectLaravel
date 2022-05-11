<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Galeriaproducto
 *
 * @property $id
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Galeriaproducto extends Model
{
    
    static $rules = [
		'imagen' => 'required',
    ];

    protected $perPage = 20;
    protected $table = 'Galeriaproducto';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'galeria_id', 'id');
    }
    

}
