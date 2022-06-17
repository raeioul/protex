
                            <table class="table table-striped table-hover">
                            <h3>En Transito = {{$suma-$almacen-$cancel}}</h3>
                            <h3>    Almacen = {{$almacen}}</h3>
                            <h3> Canceladas = <span class="badge bg-info">{{$cancel}}</span></h3>
                            <h3>TOTAL = <span class="badge bg-dark">{{$suma}}</span></h3>
                                <thead>
                                    <tr>
                                        <th><strong>#Operación</strong></th>
                                        <th><strong>#Factura</strong></th>
                                        <th><strong>Name</strong></th>
                                        <th  style="white-space: nowrap;">
                                            <strong>Proveedor</strong>
                                        </th>
                                        <th  style="white-space: nowrap;">
                                            <strong>Producto</strong>
                                        </th>
                                        <th><strong>Costo</strong></th>
                                        <th><strong>Detalle Pagos</strong></th>
                                        <th><strong>Suma Pagos</strong></th>
                                        <th><strong>Saldo</strong></th>
                                        <th  style="white-space: nowrap;">
                                            <strong>Status (fecha)</strong>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($operations as $item)
                                    <tr class="{{isset($item->hasCancel)?
                                                    $item->hasCancel->cancelar===1?
                                                        'table-dark':''
                                                    :''}}

                                                {{$item->isFinished()?'bg-success':''}}    ">
                                        <td>{{ $item->numeroOperacion }}</td>
                                        <td>{{ $item->numeroFactura }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            {{  App\Models\Provider::findOrFail($item->proveedor)->name }}
                                        </td>
                                        <td>
                                        @foreach(explode(',',$item->productos) as $key2 =>$x)
                                           {{$x}} 
                                            <p><strong>X</strong> {{isset($item->cantidades)?explode(',',$item->cantidades)[$key2]:''}}
                                            </p>
                                        @endforeach    
                                        </td>
                                        <td>
                                           {{$item->precio}} / $US
                                        </td>
                                        <td>
                                            @if(isset($item->hasPagos))
                                                @foreach($item->hasPagos as $pago)
                                                    <p style="white-space: nowrap;">
                                                        <strong>{{$pago->pago}}</strong> $US
                                                    </p>

                                                    <p style="white-space: nowrap;">
                                                        (
                                                            {{$pago->updated_at->format('d-m-Y,  H:i:s')}}
                                                        )
                                                    </p>
                                                @endforeach
                                            @endif    
                                        </td>
                                        <td>
                                            {{$item->getPagos()}}    
                                        </td>
                                        <td>{{$item->precio-$item->getPagos()}}</td>
                                        <td>
                                            @if(isset($item->hasOperationStatus))
                                                @foreach($item->hasOperationStatus as $operationStatus)
                                                    <p style="white-space: nowrap;">
                                                        <strong>{{$operationStatus->name}}</strong>
                                                    
                                                        (
                                                            {{$operationStatus->updated_at->format('d-m-Y,  H:i:s')}}
                                                        )
                                                    </p>
                                                    @if(!$loop->last)
                                                    <hr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                    <tr><th><strong>Transito</strong></th><td>{{$suma-$almacen-$cancel}}</td></tr>    
                                    <tr><th><strong>Almacen</strong></th><td>{{$almacen}}</td></tr>
                                    <tr><th><strong>Canceladas</strong></th><td>{{$cancel}}</td></tr>
                                    <tr><th><strong>Total</strong></th><td>{{$suma}}</td></tr>        
                                </tbody>
                            </table>
                        