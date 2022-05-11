<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $marca
 * @property $modelo
 * @property $precio
 * @property $stock
 * @property $galeria_id
 * @property $tipoproducto_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Galeriaproducto $galeriaproducto
 * @property Tipoproducto $tipoproducto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'marca' => 'required',
		'modelo' => 'required',
		'precio' => 'required',
		'stock' => 'required',
		'galeria_id' => 'required',
		'tipoproducto_id' => 'required',
    ];

    protected $perPage = 20;
    protected $table = 'Producto';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marca','modelo','precio','stock','galeria_id','tipoproducto_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function galeriaproducto()
    {
        return $this->hasOne('App\Models\Galeriaproducto', 'id', 'galeria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoproducto()
    {
        return $this->hasOne('App\Models\Tipoproducto', 'id', 'tipoproducto_id');
    }
    

}
