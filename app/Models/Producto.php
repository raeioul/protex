<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'user_id', 'provider_id'];

    public function hasPrecio()
    {
        return $this->hasOne('App\Models\Precio', 'producto_id');
    }
    public function hasOperationProductos()
    {
        return $this->hasMany('App\Models\OperacionProducto', 'product_id');
    }
}
