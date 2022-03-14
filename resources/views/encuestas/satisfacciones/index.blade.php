@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><strong>Distribuidores</strong></div>test
                    <div class="card-body">
                        <div style="margin-bottom: 5px">
                            <a href="{{ url('/encuestas/satisfacciones/create') }}" class="btn btn-success btn-sm" title="Add New Satisfaccione">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <a href="{{ url('satisfacciones/export/') }}" class="btn btn-success btn-sm" title="exportar excel">
                                <i class="fa fa-file-excel" aria-hidden="true" ></i>
                            </a>
                        </div>
                        <form method="GET" action="{{ url('/encuestas/satisfacciones') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th>
                                        <th>Fecha</th>
                                        <th>Distribuidor</th>
                                        <th>Version</th>
                                        <th>Código</th>
                                        <th>Respondido Por</th>
                                        <th>Cargo</th>
                                        <th>Algodón</th>
                                        <th>Gasa</th>
                                        <th>Barbijo</th>
                                        <th>Guantes de Examinación</th>
                                        <th>Jeringa</th>
                                        <th>Vendas de Gasa</th>
                                        <th>Venda Elástica</th>
                                        <th>Cumplimiento</th>
                                        <th>Calidad del Empaque</th>
                                        <th>Calidad de la Entrega</th>
                                        <th>Atención y Amabilidad</th>
                                        <th>Precio</th>
                                        <th>Atención y Quejas</th>
                                        <th>Sugerencias</th>
                                        <th>User ID</th>
                                        <th>Celular</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($satisfacciones as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->fecha }}</td>
                                        <td>{{ $item->distribuidor }}</td>
                                        <td>{{ $item->version }}</td>
                                        <td>{{ $item->codigo }}</td>
                                        <td>{{ $item->respondidoPor }}</td>
                                        <td>{{ $item->cargo }}</td>
                                        <td>{{ $item->algodon }}</td>
                                        <td>{{ $item->gasa }}</td>
                                        <td>{{ $item->barbijo }}</td>
                                        <td>{{ $item->guanteExaminacion }}</td>
                                        <td>{{ $item->jeringa }}</td>
                                        <td>{{ $item->vendaGasa }}</td>
                                        <td>{{ $item->vendaElastica }}</td>
                                        <td>{{ $item->cumplimiento }}</td>
                                        <td>{{ $item->calidadEmpaque }}</td>
                                        <td>{{ $item->calidadEntrega }}</td>
                                        <td>{{ $item->atencionAmabilidad }}</td>
                                        <td>{{ $item->precio }}</td>
                                        <td>{{ $item->atencionQuejas }}</td>
                                        <td>{{ $item->sugerencias }}</td>
                                        <td>{{ $item->user_id }}</td>
                                        <td>{{ $item->celular }}</td>
                                        <td>
                                            <a href="{{ url('/encuestas/satisfacciones/' . $item->id) }}" title="View Satisfaccione"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/encuestas/satisfacciones/' . $item->id . '/edit') }}" title="Edit Satisfaccione"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/encuestas/satisfacciones' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Satisfaccione" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                            <a href="{{ url('satisfacciones/export/'.$item->id) }}" class="btn btn-success btn-sm" title="Exportar excel">
                                                <i class="fa fa-file-excel" aria-hidden="true" ></i>
                                            </a>
                                            <a href="{{ url('satisfacciones/exportpdf/'.$item->id) }}" class="btn btn-danger btn-sm" title="Exportar PDF">
                                                <i class="fa fa-file-pdf" aria-hidden="true" ></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $satisfacciones->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
