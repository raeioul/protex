@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Institucione {{ $institucione->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/encuestas/instituciones') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/encuestas/instituciones/' . $institucione->id . '/edit') }}" title="Edit Institucione"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('encuestas/instituciones' . '/' . $institucione->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Institucione" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $institucione->id }}</td>
                                    </tr>
                                    <tr><th> Fecha </th><td> {{ $institucione->fecha }} </td></tr>
                                    <tr><th> Distribuidor </th><td> {{ $institucione->distribuidor }} </td></tr>
                                    <tr><th> Versión </th><td> {{ $institucione->version }} </td></tr>
                                    <tr><th> Código </th><td> {{ $institucione->codigo }} </td></tr>
                                    <tr><th> Formulario respondido por </th><td> {{ $institucione->respondidoPor }} </td></tr>
                                    <tr><th> Cargo </th><td> {{ $institucione->cargo }} </td></tr>
                                    <tr><th> Suavidad del Algodón </th><td> {{ $institucione->algodonSuavidad }} </td></tr>
                                    <tr><th> Absorción del Algodón </th><td> {{ $institucione->algodonAbsorcion }} </td></tr>
                                    <tr><th> Laminado del Algodòn </th><td> {{ $institucione->algodonLaminado }} </td></tr>
                                    <tr><th> Algodón Libre Impurezas</th><td> {{ $institucione->algodonLibreImpurezas }} </td></tr>
                                    <tr><th> Suavidad de la gasa </th><td> {{ $institucione->gasaSuavidad }} </td></tr>
                                    <tr><th> Absorción de la gasa </th><td> {{ $institucione->gasaAbsorcion }} </td></tr>
                                    <tr><th> Gasa libre de impurezas </th><td> {{ $institucione->gasaLibreImpurezas }} </td></tr>
                                    <tr><th> Servicio de cortado y Doblado de la Gasa </th><td> {{ $institucione->gasaLibreServicioCortadoDoblado }} </td></tr>
                                    <tr><th> Comodidad del barbijo en el rostro </th><td> {{ $institucione->barbijoComodidadRostro }} </td></tr>
                                    <tr><th> Facil respiración barbijo </th><td> {{ $institucione->barbijoFacilRespiracion }} </td></tr>
                                    <tr><th> Barbijo Hipoalergénico </th><td> {{ $institucione->barbijoHipoalergenico }} </td></tr>
                                    <tr><th> Barbijo Barra Fijación Nariz </th><td> {{ $institucione->barbijoBarraFijacionNariz }} </td></tr>
                                    <tr><th> Guante Elasticidad </th><td> {{ $institucione->guanteElasticidad }} </td></tr>
                                    <tr><th> Guante Presencia Talco </th><td> {{ $institucione->guantePresenciaTalco }} </td></tr>
                                    <tr><th> Guante Superficie Rugosa </th><td> {{ $institucione->guanteSuperficieRugosa }} </td></tr>
                                    <tr><th> Guante Resistencia Uso </th><td> {{ $institucione->guanteResistenciaUso }} </td></tr>
                                    <tr><th> Guante Examinacion Elasticidad </th><td> {{ $institucione->guanteExaminacionElasticidad }} </td></tr>
                                    <tr><th> Guante Examinacion Presencia Talco</th><td> {{ $institucione->guanteExaminacionPresenciaTalco }} </td></tr>
                                    <tr><th> Guante Examinacion Resistencia Uso </th><td> {{ $institucione->guanteExaminacionResistenciaUso }} </td></tr>
                                    <tr><th> Jeringa Empaque Primario </th><td> {{ $institucione->jeringaEmpaquePrimario }} </td></tr>
                                    <tr><th> Jeringa Filtración Aguja </th><td> {{ $institucione->jeringaFiltracionAguja }} </td></tr>
                                    <tr><th> Jeringa Filtración Émbolo </th><td> {{ $institucione->jeringaFiltracionEmbolo }} </td></tr>
                                    <tr><th> Jeringa Calidad Aguja </th><td> {{ $institucione->jeringaCalidadAguja }} </td></tr>
                                    <tr><th> Jeringa Impresión Escala </th><td> {{ $institucione->jeringaImpresionEscala }} </td></tr>
                                    <tr><th> Equipo Suero Empaque </th><td> {{ $institucione->equipoSueroEmpaque }} </td></tr>
                                    <tr><th> Equipo Suero Cámara Goteo </th><td> {{ $institucione->equipoSueroCamaraGoteo }} </td></tr>
                                    <tr><th> Venda Gasa Calidad Tejido </th><td> {{ $institucione->vendaGasaCalidadTejido }} </td></tr>
                                    <tr><th> Venda Gasa Memoria </th><td> {{ $institucione->vendaGasaMemoria }} </td></tr>
                                    <tr><th> Venda Gasa Bordes </th><td> {{ $institucione->vendaGasaBordes }} </td></tr>
                                    <tr><th> Venda Elástica Elasticidad </th><td> {{ $institucione->vendaElasticaElasticidad }} </td></tr>
                                    <tr><th> Venda Elastica Capacidad Distensión </th><td> {{ $institucione->vendaElasticaCapacidadDistensión }} </td></tr>
                                    <tr><th> Venda Elastica Memoria </th><td> {{ $institucione->vendaElasticaMemoria }} </td></tr>
                                    <tr><th> Venda Elastica Calidad Tejido </th><td> {{ $institucione->vendaElasticaCalidadTejido }} </td></tr>
                                    <tr><th> Cumplimiento </th><td> {{ $institucione->cumplimiento }} </td></tr>
                                    <tr><th> Calidad Producto </th><td> {{ $institucione->calidadProducto }} </td></tr>
                                    <tr><th> Precio </th><td> {{ $institucione->precio }} </td></tr>
                                    <tr><th> Atención Gestión Reclamos </th><td> {{ $institucione->atencionGestionReclamos }} </td></tr>
                                    <tr><th> Atención Amabilidad </th><td> {{ $institucione->atencionAmabilidad }} </td></tr>
                                    <tr><th> Sugerencias </th><td> {{ $institucione->sugerencias }} </td></tr>
                                    <tr><th> ID del Usuario </th><td> {{ $institucione->user_id }} </td></tr>
                                    <tr><th> Email </th><td> {{ $institucione->email }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
