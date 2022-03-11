<table class="table" style="table-layout: fixed">
   <thead>
      <tr>
         <th><strong> # </strong></th>
         <th><strong><strong>Fecha</strong></strong></th>
         <th><strong> Institucion </strong></th>
         <th><strong> Version </strong></th>
         <th><strong> Codigo </strong></th>
         <th><strong> Formulario respondido por </strong></th>
         <th><strong> Cargo </strong></th>
         <th><strong> Suavidad del Algodón </strong></th>
         <th><strong> Absorción del Algodón </strong></th>
         <th><strong> Laminado del Algodòn  </strong></th>
         <th><strong> Algodón Libre Impurezas </strong></th>
         <th><strong> Suavidad de la gasa </strong></th>
         <th><strong> Abosorción de la gasa </strong></th>
         <th><strong> Gasa libre de impurezas </strong></th>
         <th><strong> Servicio de cortado y Doblado de la Gasa </strong></th>
         <th><strong> Comodidad del barbijo en el rostro </strong></th>
         <th><strong> Facil respiracion barbijo </strong></th>
         <th><strong> Barbijo Hipoalergenico </strong></th>
         <th><strong> Barbijo Barra Fijacion Nariz </strong></th>
         <th><strong> Guante Elasticidad </strong></th>
         <th><strong> Guante Presencia Talco </strong></th>
         <th><strong> Guante Superficie Rugosa </strong></th>
         <th><strong> Guante Resistencia Uso </strong></th>
         <th><strong> Guante Examinacion Elasticidad </strong></th>
         <th><strong> Guante Examinacion PresenciaTalco </strong></th>
         <th><strong> Guante Examinacion Resistencia Uso </strong></th>
         <th><strong> Jeringa Empaque Primario </strong></th>
         <th><strong> Jeringa Filtracion Aguja </strong></th>
         <th><strong> Jeringa Filtracion Embolo </strong></th>
         <th><strong> Jeringa Calidad Aguja </strong></th>
         <th><strong> Jeringa Impresion Escala </strong></th>
         <th><strong> Equipo Suero Empaque </strong></th>
         <th><strong> Equipo Suero Camara Goteo </strong></th>
         <th><strong> Venda Gasa Calidad Tejido </strong></th>
         <th><strong> Venda Gasa Memoria </strong></th>
         <th><strong> Venda Gasa Bordes </strong></th>
         <th><strong> Venda Elastica Elasticidad </strong></th>
         <th><strong> Venda Elastica Capacidad Distensión </strong></th>
         <th><strong> Venda Elastica Memoria </strong></th>
         <th><strong> Venda Elastica Calidad Tejido </strong></th>
         <th><strong> Cumplimiento </strong></th>
         <th><strong> calidadProducto </strong></th>
         <th><strong> precio </strong></th>
         <th><strong> Atencion Gestion Reclamos </strong></th>
         <th><strong> Atencion Amabilidad </strong></th>
         <th><strong> Sugerencias </strong></th>
         <th><strong> User ID </strong></th>
         <th><strong> Celular </strong></th>
      </tr>
   </thead>
   <hr/>
   <tbody>
      @foreach($instituciones as $institucione)
      <tr>
         <td>{{ $loop->iteration }}</td>
         <td>{{ $institucione->fecha }}</td>
         <td>{{ $institucione->institucion }}</td>
         <td>{{ $institucione->version }}</td>
         <td> {{ $institucione->codigo }} </td>
         <td> {{ $institucione->respondidoPor }} </td>
         <td> {{ $institucione->cargo }} </td>
         <td> {{ $institucione->algodonSuavidad }} </td>
         <td> {{ $institucione->algodonAbsorcion }} </td>
         <td> {{ $institucione->algodonLaminado }} </td>
         <td> {{ $institucione->algodonLibreImpurezas }} </td>
         <td> {{ $institucione->gasaSuavidad }} </td>
         <td> {{ $institucione->gasaAbsorcion }} </td>
         <td> {{ $institucione->gasaLibreImpurezas }} </td>
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
         <td> {{ $institucione->jeringaFiltracionAguja }} </td>
         <td> {{ $institucione->jeringaFiltracionEmbolo }} </td>
         <td> {{ $institucione->jeringaCalidadAguja }} </td>
         <td> {{ $institucione->jeringaImpresionEscala }} </td>
         <td> {{ $institucione->equipoSueroEmpaque }} </td>
         <td> {{ $institucione->equipoSueroCamaraGoteo }} </td>
         <td> {{ $institucione->vendaGasaCalidadTejido }} </td>
         <td> {{ $institucione->vendaGasaMemoria }} </td>
         <td> {{ $institucione->vendaGasaBordes }} </td>
         <td> {{ $institucione->vendaElasticaElasticidad }} </td>
         <td> {{ $institucione->vendaElasticaCapacidadDistensión }} </td>
         <td> {{ $institucione->vendaElasticaMemoria }} </td>
         <td> {{ $institucione->vendaElasticaCalidadTejido }} </td>
         <td> {{ $institucione->cumplimiento }} </td>
         <td> {{ $institucione->calidadProducto }} </td>
         <td> {{ $institucione->precio }} </td>
         <td> {{ $institucione->atencionGestionReclamos }} </td>
         <td> {{ $institucione->atencionAmabilidad }} </td>
         <td> {{ $institucione->sugerencias }} </td>
         <td> {{ $institucione->user_id }} </td>
         <td> {{ $institucione->celular }} </td>
      </tr>
      @endforeach
   </tbody>
</table>
