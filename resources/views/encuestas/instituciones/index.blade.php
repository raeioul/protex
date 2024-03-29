@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><strong>Instituciones<strong></div>
                    <div class="card-body">
                        <div style="margin-bottom: 5px">
                            <a href="{{ url('/encuestas/instituciones/create') }}" class="btn btn-success btn-sm" title="Add New Institucione">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <a href="{{ url('instituciones/export/') }}" class="btn btn-success btn-sm" title="exportar excel">
                                <i class="fa fa-file-excel" aria-hidden="true" ></i>
                            </a>
                        </div>
                        <form method="GET" action="{{ url('/encuestas/instituciones') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Fecha </th>
                                        <th> Institucion </th>
                                        <th> Version </th>
                                        <th> Codigo </th>
                                        <th> Formulario respondido por </th>
                                        <th> Cargo </th>
                                        <th> Suavidad del Algodón </th>
                                        <th> Absorción del Algodón </th>
                                        <th> Laminado del Algodòn  </th>
                                        <th> Suavidad de la gasa </th>
                                        <th> Abosorción de la gasa </th>
                                        <th> Servicio de cortado y Doblado de la Gasa </th>
                                        <th> Comodidad del barbijo en el rostro </th>
                                        <th> Facil respiracion barbijo </th>
                                        <th> Barbijo Hipoalergenico </th>
                                        <th> Barbijo Barra Fijacion Nariz </th>
                                        <th> Guante Elasticidad </th>
                                        <th> Guante Presencia Talco </th>
                                        <th> Guante Superficie Rugosa </th>
                                        <th> Guante Resistencia Uso </th>
                                        <th> Guante Examinacion Elasticidad </th>
                                        <th> Guante Examinacion PresenciaTalco </th>
                                        <th> Guante Examinacion Resistencia Uso </th>
                                        <th> Jeringa Empaque Primario </th>
                                        <th> Jeringa Fijación Aguja </th>
                                        <th> Jeringa Filtracion Embolo </th>
                                        <th> Jeringa Calidad Aguja </th>
                                        <th> Jeringa Impresion Escala </th>
                                        <th> Equipo Suero Empaque </th>
                                        <th> Equipo Suero Camara Goteo </th>
                                        <th> Venda Gasa Calidad Tejido </th>
                                        <th> Venda Gasa Suavidad </th>
                                        <th> Venda Gasa Bordes </th>
                                        <th> Venda Elastica Elasticidad </th>
                                        <th> Venda Elastica Capacidad Distensión </th>
                                        <th> Venda Elastica Clip </th>
                                        <th> Venda Elastica Calidad Tejido </th>
                                        <th> Cumplimiento </th>
                                        <th> Embalaje</th>
                                        <th> calidadProducto </th>
                                        <th> precio </th>
                                        <th> Atencion Gestion Reclamos </th>
                                        <th> Atencion Amabilidad </th>
                                        <th> Sugerencias </th>
                                        <th> User ID </th>
                                        <th> Celular </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($instituciones as $institucione)
                                    <tr>
                                        <td>{{ $institucione->id }}</td>
                                        <td>{{ $institucione->fecha }}</td>
                                        <td>{{ $institucione->institucion }}</td>
                                        <td>{{ $institucione->version }}</td>
                                        <td> {{ $institucione->codigo }} </td>
                                        <td> {{ $institucione->respondidoPor }} </td>
                                        <td> {{ $institucione->cargo }} </td>
                                        <td> {{ $institucione->algodonSuavidad }} </td>
                                        <td> {{ $institucione->algodonAbsorcion }} </td>
                                        <td> {{ $institucione->algodonLaminado }} </td>
                                        <td> {{ $institucione->gasaSuavidad }} </td>
                                        <td> {{ $institucione->gasaAbsorcion }} </td>
                                        <td> {{ $institucione->gasaLibreServicioCortadoDoblado }} </td>
                                        <td> {{ $institucione->barbijoComodidadRostro }} </td>
                                        <td> {{ $institucione->barbijoFacilRespiracion }} </td>
                                        <td> {{ $institucione->barbijoHipoalergenico }} </td>
                                        <td> {{ $institucione->barbijoBarraFijacionNariz }} </td>
                                        <td> {{ $institucione->guanteElasticidad }} </td>
                                        <td> {{ $institucione->guantePresenciaTalco }} </td>
                                        <td> {{ $institucione->guanteSuperficieRugosa }} </td>
                                        <td> {{ $institucione->guanteResistenciaUso }} </td>
                                        <td> {{ $institucione->guanteExaminacionElasticidad }} </td>
                                        <td> {{ $institucione->guanteExaminacionPresenciaTalco }} </td>
                                        <td> {{ $institucione->guanteExaminacionResistenciaUso }} </td>
                                        <td> {{ $institucione->jeringaEmpaquePrimario }} </td>
                                        <td> {{ $institucione->jeringaFijacionAguja }} </td>
                                        <td> {{ $institucione->jeringaFiltracionEmbolo }} </td>
                                        <td> {{ $institucione->jeringaCalidadAguja }} </td>
                                        <td> {{ $institucione->jeringaImpresionEscala }} </td>
                                        <td> {{ $institucione->equipoSueroEmpaque }} </td>
                                        <td> {{ $institucione->equipoSueroCamaraGoteo }} </td>
                                        <td> {{ $institucione->vendaGasaCalidadTejido }} </td>
                                        <td> {{ $institucione->vendaGasaSuavidad }} </td>
                                        <td> {{ $institucione->vendaGasaBordes }} </td>
                                        <td> {{ $institucione->vendaElasticaElasticidad }} </td>
                                        <td> {{ $institucione->vendaElasticaCapacidadDistensión }} </td>
                                        <td> {{ $institucione->vendaElasticaClip }} </td>
                                        <td> {{ $institucione->vendaElasticaCalidadTejido }} </td>
                                        <td> {{ $institucione->cumplimiento }} </td>
                                        <td> {{ $institucione->embalaje }} </td>
                                        <td> {{ $institucione->calidadProducto }} </td>
                                        <td> {{ $institucione->precio }} </td>
                                        <td> {{ $institucione->atencionGestionReclamos }} </td>
                                        <td> {{ $institucione->atencionAmabilidad }} </td>
                                        <td> {{ $institucione->sugerencias }} </td>
                                        <td> {{ $institucione->user_id }} </td>
                                        <td> {{ $institucione->celular }} </td>
                                        <td>
                                            <a href="{{ url('/encuestas/instituciones/' . $institucione->id) }}" title="View Institucione"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/encuestas/instituciones/' . $institucione->id . '/edit') }}" title="Edit Institucione"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/encuestas/instituciones' . '/' . $institucione->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Institucione" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                            <a href="{{ url('instituciones/export/'.$institucione->id) }}" class="btn btn-success btn-sm" title="Exportar excel">
                                                <i class="fa fa-file-excel" aria-hidden="true" ></i>
                                            </a>
                                            <a href="{{ url('exportpdf/'.$institucione->id) }}" class="btn btn-danger btn-sm" title="Exportar PDF">
                                                <i class="fa fa-file-pdf" aria-hidden="true" ></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="pagination-wrapper align-self-center"> {!! $instituciones->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
@endsection
