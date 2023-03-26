<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institucione extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'instituciones';

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
    protected $fillable = ['fecha', 'institucion', 'version', 'codigo', 'respondidoPor', 'cargo', 'algodonSuavidad', 'algodonAbsorcion', 'algodonLaminado', 'gasaSuavidad', 'gasaAbsorcion', 'gasaLibreImpurezas', 'gasaLibreServicioCortadoDoblado', 'barbijoComodidadRostro', 'barbijoFacilRespiracion', 'barbijoHipoalergenico', 'barbijoBarraFijacionNariz', 'guanteElasticidad', 'guantePresenciaTalco', 'guanteSuperficieRugosa', 'guanteResistenciaUso', 'guanteExaminacionElasticidad', 'guanteExaminacionPresenciaTalco', 'guanteExaminacionResistenciaUso', 'jeringaEmpaquePrimario', 'jeringaFijacionAguja', 'jeringaFiltracionEmbolo', 'jeringaCalidadAguja', 'jeringaImpresionEscala', 'equipoSueroEmpaque', 'equipoSueroCamaraGoteo', 'vendaGasaCalidadTejido', 'vendaGasaSuavidad', 'vendaGasaBordes', 'vendaElasticaElasticidad', 'vendaElasticaCapacidadDistensión', 'vendaElasticaClip', 'vendaElasticaCalidadTejido', 'cumplimiento', 'embalaje', 'calidadProducto', 'precio', 'atencionGestionReclamos', 'atencionAmabilidad', 'sugerencias', 'user_id', 'celular'];

    
}
