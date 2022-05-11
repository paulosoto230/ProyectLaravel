<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 *
 * @property $id
 * @property $cantidad
 * @property $total
 * @property $tipodepago_id
 * @property $cliente_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Tipopago $tipopago
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compra extends Model
{
    
    static $rules = [
		'cantidad' => 'required',
		'total' => 'required',
		'tipodepago_id' => 'required',
		'cliente_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad','total','tipodepago_id','cliente_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipopago()
    {
        return $this->hasOne('App\Models\Tipopago', 'id', 'tipodepago_id');
    }
    

}
