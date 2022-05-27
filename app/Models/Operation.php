<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'operations';

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
    protected $fillable = ['name', 'proveedor', 'productos', 'precio', 'currency','etd', 'user_id'];

    public function hasPagos()
    {
        return $this->hasMany('App\Models\Pago', 'operation_id');
    }

    public function hasOperationStatus()
    {
        return $this->hasMany('App\Models\OperationStatus', 'operation_id');
    }
}
