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
    protected $fillable = ['name', 'numeroOperacion', 'numeroFactura','proveedor', 'productos', 'cantidades','precio', 'etd', 'user_id'];

    public function hasPagos()
    {
        return $this->hasMany('App\Models\Pago', 'operation_id');
    }

    public function hasCancel()
    {
        return $this->hasOne('App\Models\Cancelacione', 'operation_id', 'id');
    }

    public function hasOperationStatus()
    {
        return $this->hasMany('App\Models\OperationStatus', 'operation_id');
    }
    public function getPagos()
    {
        return $this->hasPagos()->sum('pago');
    }
    public function isFinished()
    {
        $precio = $this->precio;
        $pagos = $this->hasPagos()->sum('pago');
        $saldo = $precio - $pagos;
        $operationAlmacen = array();
        if(isset($this->hasOperationStatus)) {
            foreach ($this->hasOperationStatus as $op) {
                if($op->name == 'Almacen') {
                    $operationAlmacen[] = $op;
                }
            }
        }
        return count($operationAlmacen)>0 && $saldo==0?true:false;
    }
    public function isCancel()
    {
        return 
            $this->hasCancel!==null?
                $this->hasCancel->cancelar==1?
                    true:false
            :false;
    }
}
