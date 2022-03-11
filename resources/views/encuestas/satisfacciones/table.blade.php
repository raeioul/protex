

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
      </tr>
      @endforeach
   </tbody>
</table>
