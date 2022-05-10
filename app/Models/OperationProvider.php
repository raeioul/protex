<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperationProvider extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'operation_providers';

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
    protected $fillable = ['provider_id', 'operation_id', 'user_id'];

    public function operation()
    {
        return $this->belongsTo('App\Models\Operation');
    }
}
