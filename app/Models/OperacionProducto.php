<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperacionProducto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'operacion_productos';

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
    protected $fillable = ['operation_id', 'product_id', 'user_id'];

    public function operation()
    {
        return $this->belongsTo('App\Models\Operation');
    }

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }

    public function hasPrecios()
    {
        return $this->hasMany('App\Models\Precio', 'producto_id');
    }
}
