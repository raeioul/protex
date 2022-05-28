@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Operations</div>
                    <div class="card-body">
                        @if(Auth::user()->hasRole('admin'))
                        <a href="{{ url('/admin/operations/create') }}" class="btn btn-success btn-sm" title="Add New Operation">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @endif
                        <form method="GET" action="{{ url('/admin/operations') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>Name</th>
                                        <th  style="white-space: nowrap;">
                                            Proveedor
                                            <a href="{{ url('/admin/providers') }}" title="Agregar Proveedor">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </th>
                                        <th  style="white-space: nowrap;">
                                            Producto
                                            <a href="{{ url('/admin/productos') }}" title="Agregar Producto">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </th>
                                        <th>Precio</th>
                                        <th  style="white-space: nowrap;">
                                            Status (fecha)
                                            <a href="{{ url('/admin/status') }}" title="Agregar Producto">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </th>
                                        <th>Pagos</th>
                                        @if(Auth::user()->hasRole('admin'))
                                            <th>Actions</th>
                                        @endif    
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($operations as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            {{  App\Models\Provider::findOrFail($item->proveedor)->name }}
                                        </td>
                                        <td>
                                           {{$item->productos}}
                                        </td>
                                        <td>
                                           {{$item->precio}} / {{$item->currency}}
                                        </td>
                                        <td>
                                            @if(isset($item->hasOperationStatus))
                                                @foreach($item->hasOperationStatus as $operationStatus)
                                                    <p style="white-space: nowrap;">
                                                        <strong>{{$operationStatus->name}}</strong>
                                                    
                                                        (
                                                            {{$operationStatus->updated_at->format('d-m-Y,  H:i:s')}}
                                                        )
                                                    </p>
                                                    @if(Auth::user()->hasRole('importer'))
                                                    <a href="{{ url('/admin/operation-status/' . $operationStatus->id . '/edit') }}" title="Edit OperationStatus"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                    <form method="POST" action="{{ url('/admin/operation-status' . '/' . $operationStatus->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete OperationStatus" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                    </form>
                                                    @endif
                                                    @if(!$loop->last)
                                                    <hr>
                                                    @endif
                                                @endforeach
                                            @endif
                                            @if(Auth::user()->hasRole('importer'))
                                            <form method="POST" action="{{ url('/admin/operation-status') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                @include ('admin.operation-status.form', ['formMode' => 'create'])
                                            </form>
                                            @endif
                                        </td>
                                        <td>
                                            @if(isset($item->hasPagos))
                                                @foreach($item->hasPagos as $pago)
                                                    <p style="white-space: nowrap;">
                                                        <strong>{{$pago->pago}}</strong> {{$item->currency}}
                                                    </p>

                                                    <p style="white-space: nowrap;">
                                                        (
                                                            {{$pago->updated_at->format('d-m-Y,  H:i:s')}}
                                                        )
                                                    </p>
                                                    @if(Auth::user()->hasRole('accountant'))
                                                    <a href="{{ url('/admin/pagos/' . $pago->id . '/edit') }}" title="Edit Pago"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                    <form method="POST" action="{{ url('/admin/pagos' . '/' . $pago->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Pago" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                    </form>
                                                    @endif
                                                @endforeach
                                                @if(Auth::user()->hasRole('accountant'))
                                                    <form method="POST" action="{{ url('/admin/pagos') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                        @include ('admin.pagos.form', ['formMode' => 'create'])
                                                    </form>
                                                @endif
                                        </td>
                                        @endif
                                        @if(Auth::user()->hasRole('admin'))
                                        <td>
                                            @if(isset($item))
                                                @if(\File::exists(public_path('facturas/'.$item->user_id.'.'.strtotime($item->created_at).'.jpg'))) 
                                                <a href="{{url('facturas/'.$item->user_id.'.'.strtotime($item->created_at).'.jpg')}}">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                                </a>
                                                @endif
                                            @endif
                                            <a href="{{ url('/admin/operations/' . $item->id . '/edit') }}" title="Edit Operation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/operations' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Operation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $operations->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
