<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cancelacione extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cancelaciones';

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
    protected $fillable = ['cancelar', 'operation_id', 'user_id'];

    public function operacion()
    {
        return $this->belongsTo('App\Models\Operation');
    }
}
