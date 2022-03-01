<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstitucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('fecha')->nullable();
            $table->string('distribuidor')->nullable();
            $table->string('version')->nullable();
            $table->string('codigo')->nullable();
            $table->string('respondidoPor')->nullable();
            $table->string('cargo')->nullable();
            $table->string('algodonSuavidad');
            $table->string('algodonAbsorcion');
            $table->string('algodonLaminado');
            $table->string('algodonLibreImpurezas');
            $table->string('gasaSuavidad');
            $table->string('gasaAbsorcion');
            $table->string('gasaLibreImpurezas');
            $table->string('gasaLibreServicioCortadoDoblado');
            $table->string('barbijoComodidadRostro');
            $table->string('barbijoFacilRespiracion');
            $table->string('barbijoHipoalergenico');
            $table->string('barbijoBarraFijacionNariz');
            $table->string('guanteElasticidad');
            $table->string('guantePresenciaTalco');
            $table->string('guanteSuperficieRugosa');
            $table->string('guanteResistenciaUso');
            $table->string('guanteExaminacionElasticidad');
            $table->string('guanteExaminacionPresenciaTalco');
            $table->string('guanteExaminacionResistenciaUso');
            $table->string('jeringaEmpaquePrimario');
            $table->string('jeringaFiltracionAguja');
            $table->string('jeringaFiltracionEmbolo');
            $table->string('jeringaCalidadAguja');
            $table->string('jeringaImpresionEscala');
            $table->string('equipoSueroEmpaque');
            $table->string('equipoSueroCamaraGoteo');
            $table->string('vendaGasaCalidadTejido');
            $table->string('vendaGasaMemoria');
            $table->string('vendaGasaBordes');
            $table->string('vendaElasticaElasticidad');
            $table->string('vendaElasticaCapacidadDistensión');
            $table->string('vendaElasticaMemoria');
            $table->string('vendaElasticaCalidadTejido');
            $table->string('cumplimiento');
            $table->string('calidadProducto');
            $table->string('precio');
            $table->string('atencionGestionReclamos');
            $table->string('atencionAmabilidad');
            $table->string('sugerencias')->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('email')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('instituciones');
    }
}
