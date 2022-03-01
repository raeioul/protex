<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Satisfaccione extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'satisfacciones';

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
    protected $fillable = ['fecha', 'distribuidor', 'version', 'codigo', 'respondidoPor', 'cargo', 'algodon', 'gasa', 'barbijo', 'guanteExaminacion', 'jeringa', 'vendaGasa', 'vendaElastica', 'cumplimiento', 'calidadEmpaque', 'calidadEntrega', 'atencionAmabilidad', 'precio', 'atencionQuejas', 'sugerencias', 'user_id', 'email'];

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
    
}
