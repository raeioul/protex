@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Satisfaccione {{ $satisfaccione->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/encuestas/satisfacciones') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/encuestas/satisfacciones/' . $satisfaccione->id . '/edit') }}" title="Edit Satisfaccione"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('encuestas/satisfacciones' . '/' . $satisfaccione->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Satisfaccione" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $satisfaccione->id }}</td></tr>
                                    <tr><th> Fecha </th><td> {{ $satisfaccione->fecha }} </td></tr>
                                    <tr><th> Distribuidor </th><td> {{ $satisfaccione->distribuidor }} </td></tr>
                                    <tr><th> Version </th><td> {{ $satisfaccione->version }} </td></tr>
                                    <tr><th> Codigo </th><td> {{ $satisfaccione->codigo }} </td></tr>
                                    <tr><th> Respondido Por </th><td> {{ $satisfaccione->respondidoPor }} </td></tr>
                                    <tr><th> Cargo </th><td> {{ $satisfaccione->cargo }} </td></tr>
                                    <tr><th> Algodon </th><td> {{ $satisfaccione->algodon }} </td></tr>
                                    <tr><th> Gasa </th><td> {{ $satisfaccione->gasa }} </td></tr>
                                    <tr><th> Barbijo </th><td> {{ $satisfaccione->barbijo }} </td></tr>
                                    <tr><th> Guantes de Examinación </th><td> {{ $satisfaccione->guanteExaminacion }} </td></tr>
                                    <tr><th> Jeringa </th><td> {{ $satisfaccione->jeringa }} </td></tr>
                                    <tr><th> Vendas de Gasa </th><td> {{ $satisfaccione->vendaGasa }} </td></tr>
                                    <tr><th> Venda Elástica </th><td> {{ $satisfaccione->vendaElastica }} </td></tr>
                                    <tr><th> Compresa de Gasa </th><td> {{ $satisfaccione->compresaDeGasa }} </td></tr>
                                    <tr><th> Gorro Descartable </th><td> {{ $satisfaccione->gorroDescartable }} </td></tr>
                                    <tr><th> Cumplimiento </th><td> {{ $satisfaccione->cumplimiento }} </td></tr>
                                    <tr><th> Calidad del Empaque </th><td> {{ $satisfaccione->calidadEmpaque }} </td></tr>
                                    <tr><th> Embalaje </th><td> {{ $satisfaccione->embalaje }} </td></tr>
                                    <tr><th> Calidad de Entrega </th><td> {{ $satisfaccione->calidadEntrega }} </td></tr>
                                    <tr><th> Atención y Amabilidad </th><td> {{ $satisfaccione->atencionAmabilidad }} </td></tr>
                                    <tr><th> Precio </th><td> {{ $satisfaccione->precio }} </td></tr>
                                    <tr><th> Atención y Quejas </th><td> {{ $satisfaccione->atencionQuejas }} </td></tr>
                                    <tr><th> Sugerencias </th><td> {{ $satisfaccione->sugerencias }} </td></tr>
                                    <tr><th> User_id </th><td> {{ $satisfaccione->user_id }} </td></tr>
                                    <tr><th> Celular </th><td> {{ $satisfaccione->celular }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
