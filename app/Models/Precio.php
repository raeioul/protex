<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'precios';

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
    protected $fillable = ['precio', 'cantidad', 'etd', 'user_id', 'producto_id'];

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }
    
}
