@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Operations</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/operations/create') }}" class="btn btn-success btn-sm" title="Add New Operation">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

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
                                        <th>Actions</th>
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
                                        <th>Status</th>
                                        <th>Pagos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($operations as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="{{ url('/admin/operations/' . $item->id) }}" title="View Operation"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/operations/' . $item->id . '/edit') }}" title="Edit Operation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/operations' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Operation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                        <td>
                                            {{ $item->proveedor }}
                                        </td>
                                        <td>
                                           @if(isset($item->hasOperationProductos))
                                                @foreach($item->hasOperationProductos as $product)
                                                    <p>
                                                    {{
                                                        App\Models\Producto::findOrFail(

                                                        App\Models\OperacionProducto::findOrFail($product->id)->product_id
                                                        )
                                                        ->name
                                                    }} 
                                                    </p>
                                                @endforeach
                                            @endif
                                            <form method="POST" action="{{ url('/admin/operacion-productos') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                            @include ('admin.operacion-productos.form', ['formMode' => 'create', 'productos' => App\Models\Producto::whereIn('provider_id', [1])->pluck('name','id')])
                                            </form>
                                        </td>
                                        <td>
                                            {{  Form::select('status',['Transito', 'terrestre', 'Arica', 'Aduana Bolivia'],null,['class' => 'required form-control select2','id'=>'provider_id']) }}
                                        </td>
                                        <td>
                                            @if(isset($item->hasPagos))
                                                @foreach($item->hasPagos as $pagos)
                                                    <p>
                                                        {{$pagos->pago}}
                                                    </p>
                                                @endforeach
                                            @endif
                                            <form method="POST" action="{{ url('/admin/pagos') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                @include ('admin.pagos.form', ['formMode' => 'create'])
                                            </form>
                                        </td>
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
