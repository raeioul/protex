<div class="row">
    <div class="col-md-8"></div>
    <div class="form-group {{ $errors->has('version') ? 'has-error' : ''}} col-md-2">
        <label for="version" class="control-label">Versi&oacuten</label>
        <input class="form-control" name="version" type="text" id="version" value="{{ isset($institucione->version) ? $institucione->version : ''}}" >
        {!! $errors->first('version', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}} col-md-2">
        <label for="codigo" class="control-label">C&oacutedigo</label>
        <input class="form-control" name="codigo" type="text" id="codigo" value="{{ isset($institucione->codigo) ? $institucione->codigo : ''}}" >
        {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row">
    <div class="form-group {{ $errors->has('distribuidor') ? 'has-error' : ''}} col-md-8">
        <label for="distribuidor" class="control-label">{{ 'Distribuidor' }}</label>
        <input class="form-control" name="distribuidor" type="text" id="distribuidor" value="{{ isset($institucione->distribuidor) ? $institucione->distribuidor : ''}}" >
        {!! $errors->first('distribuidor', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}} col-md-4">
        <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
        <input class="form-control" name="fecha" type="text" id="fecha" value="{{ isset($institucione->fecha) ? $institucione->fecha : ''}}" >
        {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row">
    <div class="form-group {{ $errors->has('respondidoPor') ? 'has-error' : ''}} col-md-8">
        <label for="respondidoPor" class="control-label">{{ 'Respondido por' }}</label>
        <input class="form-control" name="respondidoPor" type="text" id="respondidoPor" value="{{ isset($institucione->respondidoPor) ? $institucione->respondidoPor : ''}}" >
        {!! $errors->first('respondidoPor', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('cargo') ? 'has-error' : ''}} col-md-4">
        <label for="cargo" class="control-label">{{ 'Cargo' }}</label>
        <input class="form-control" name="cargo" type="text" id="cargo" value="{{ isset($institucione->cargo) ? $institucione->cargo : ''}}" >
        {!! $errors->first('cargo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="row border border-default" style="margin: 5px; padding: 5px">
    <h3>Algod&oacuten</h3>
    <div class="form-group {{ $errors->has('algodonSuavidad') ? 'has-error' : ''}} col-md-3">
        <label for="algodonSuavidad" class="control-label">Suavidad</label>
        <select name="algodonSuavidad" class="form-control" id="algodonSuavidad" >
            <option class="text-danger" {{ (isset($institucione->algodonSuavidad) && $institucione->algodonSuavidad == 'Malo (1)') ? 'selected' : ''}}>Malo (1)</option>
            <option class="text-warning" {{ (isset($institucione->algodonSuavidad) && $institucione->algodonSuavidad == 'Regular (2)') ? 'selected' : ''}}>Regular (2)</option>
            <option class="text-success" {{ (isset($institucione->algodonSuavidad) && $institucione->algodonSuavidad == 'Bueno (3)') ? 'selected' : ''}}>Bueno (3)</option>
            <option class="text-primary" {{ (isset($institucione->algodonSuavidad) && $institucione->algodonSuavidad == 'N/A') ? 'selected' : ''}}>N/A</option>
        </select>
        {!! $errors->first('algodonSuavidad', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('algodonAbsorcion') ? 'has-error' : ''}} col-md-3">
        <label for="algodonAbsorcion" class="control-label">Absorci&oacuten</label>
        <select name="algodonAbsorcion" class="form-control" id="algodonAbsorcion" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->algodonAbsorcion) && $institucione->algodonAbsorcion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('algodonAbsorcion', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('algodonLaminado') ? 'has-error' : ''}} col-md-3">
        <label for="algodonLaminado" class="control-label">Laminado</label>
        <select name="algodonLaminado" class="form-control" id="algodonLaminado" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->algodonLaminado) && $institucione->algodonLaminado == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('algodonLaminado', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('algodonLibreImpurezas') ? 'has-error' : ''}} col-md-3">
        <label for="algodonLibreImpurezas" class="control-label">Libre impurezas</label>
        <select name="algodonLibreImpurezas" class="form-control" id="algodonLibreImpurezas" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->algodonLibreImpurezas) && $institucione->algodonLibreImpurezas == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('algodonLibreImpurezas', '<p class="help-block">:message</p>') !!}
    </div>
    <br/>
    <br/>
</div>
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <h3>Gasa</h3>
    <div class="form-group {{ $errors->has('gasaSuavidad') ? 'has-error' : ''}} col-md-3">
        <label for="gasaSuavidad" class="control-label">Suavidad</label>
        <select name="gasaSuavidad" class="form-control" id="gasaSuavidad" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->gasaSuavidad) && $institucione->gasaSuavidad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('gasaSuavidad', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('gasaAbsorcion') ? 'has-error' : ''}} col-md-3">
        <label for="gasaAbsorcion" class="control-label">Absorci&oacuten</label>
        <select name="gasaAbsorcion" class="form-control" id="gasaAbsorcion" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->gasaAbsorcion) && $institucione->gasaAbsorcion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('gasaAbsorcion', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('gasaLibreImpurezas') ? 'has-error' : ''}} col-md-3">
        <label for="gasaLibreImpurezas" class="control-label">Libre de impurezas</label>
        <select name="gasaLibreImpurezas" class="form-control" id="gasaLibreImpurezas" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->gasaLibreImpurezas) && $institucione->gasaLibreImpurezas == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('gasaLibreImpurezas', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('gasaLibreServicioCortadoDoblado') ? 'has-error' : ''}} col-md-3">
        <label for="gasaLibreServicioCortadoDoblado" class="control-label">Servicio cortado doblado</label>
        <select name="gasaLibreServicioCortadoDoblado" class="form-control" id="gasaLibreServicioCortadoDoblado" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->gasaLibreServicioCortadoDoblado) && $institucione->gasaLibreServicioCortadoDoblado == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('gasaLibreServicioCortadoDoblado', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <h3>Barbijo</h3>   
    <div class="form-group {{ $errors->has('barbijoComodidadRostro') ? 'has-error' : ''}} col-md-3">
        <label for="barbijoComodidadRostro" class="control-label">Comodidad en el rostro</label>
        <select name="barbijoComodidadRostro" class="form-control" id="barbijoComodidadRostro" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->barbijoComodidadRostro) && $institucione->barbijoComodidadRostro == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('barbijoComodidadRostro', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('barbijoFacilRespiracion') ? 'has-error' : ''}} col-md-3">
        <label for="barbijoFacilRespiracion" class="control-label">F&aacutecil respiraci&oacuten</label>
        <select name="barbijoFacilRespiracion" class="form-control" id="barbijoFacilRespiracion" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->barbijoFacilRespiracion) && $institucione->barbijoFacilRespiracion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('barbijoFacilRespiracion', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('barbijoHipoalergenico') ? 'has-error' : ''}} col-md-3">
        <label for="barbijoHipoalergenico" class="control-label">Hipoalerg&eacutenico</label>
        <select name="barbijoHipoalergenico" class="form-control" id="barbijoHipoalergenico" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->barbijoHipoalergenico) && $institucione->barbijoHipoalergenico == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('barbijoHipoalergenico', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('barbijoBarraFijacionNariz') ? 'has-error' : ''}} col-md-3">
        <label for="barbijoBarraFijacionNariz" class="control-label">Barra fijaci&oacuten en la nariz</label>
        <select name="barbijoBarraFijacionNariz" class="form-control" id="barbijoBarraFijacionNariz" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->barbijoBarraFijacionNariz) && $institucione->barbijoBarraFijacionNariz == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('barbijoBarraFijacionNariz', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <h3>Guantes Quir&uacutergicos</h3>   
    <div class="form-group {{ $errors->has('guanteElasticidad') ? 'has-error' : ''}} col-md-3">
        <label for="guanteElasticidad" class="control-label">Elasticidad</label>
        <select name="guanteElasticidad" class="form-control" id="guanteElasticidad" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->guanteElasticidad) && $institucione->guanteElasticidad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('guanteElasticidad', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('guantePresenciaTalco') ? 'has-error' : ''}} col-md-3">
        <label for="guantePresenciaTalco" class="control-label">Presencia de talco</label>
        <select name="guantePresenciaTalco" class="form-control" id="guantePresenciaTalco" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->guantePresenciaTalco) && $institucione->guantePresenciaTalco == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('guantePresenciaTalco', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('guanteSuperficieRugosa') ? 'has-error' : ''}} col-md-3">
        <label for="guanteSuperficieRugosa" class="control-label">Superficie Rugosa</label>
        <select name="guanteSuperficieRugosa" class="form-control" id="guanteSuperficieRugosa" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->guanteSuperficieRugosa) && $institucione->guanteSuperficieRugosa == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('guanteSuperficieRugosa', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('guanteResistenciaUso') ? 'has-error' : ''}} col-md-3">
        <label for="guanteResistenciaUso" class="control-label">Resistencia uso</label>
        <select name="guanteResistenciaUso" class="form-control" id="guanteResistenciaUso" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->guanteResistenciaUso) && $institucione->guanteResistenciaUso == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('guanteResistenciaUso', '<p class="help-block">:message</p>') !!}
    </div>
</div>    
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <h3>Guantes de Examinaci&oacuten</h3>
    <div class="form-group {{ $errors->has('guanteExaminacionElasticidad') ? 'has-error' : ''}} col-md-4">
        <label for="guanteExaminacionElasticidad" class="control-label">Elasticidad</label>
        <select name="guanteExaminacionElasticidad" class="form-control" id="guanteExaminacionElasticidad" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->guanteExaminacionElasticidad) && $institucione->guanteExaminacionElasticidad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('guanteExaminacionElasticidad', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('guanteExaminacionPresenciaTalco') ? 'has-error' : ''}} col-md-4">
        <label for="guanteExaminacionPresenciaTalco" class="control-label">Presencia de talco</label>
        <select name="guanteExaminacionPresenciaTalco" class="form-control" id="guanteExaminacionPresenciaTalco" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->guanteExaminacionPresenciaTalco) && $institucione->guanteExaminacionPresenciaTalco == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('guanteExaminacionPresenciaTalco', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('guanteExaminacionResistenciaUso') ? 'has-error' : ''}} col-md-4">
        <label for="guanteExaminacionResistenciaUso" class="control-label">Resistencia de uso</label>
        <select name="guanteExaminacionResistenciaUso" class="form-control" id="guanteExaminacionResistenciaUso" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->guanteExaminacionResistenciaUso) && $institucione->guanteExaminacionResistenciaUso == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('guanteExaminacionResistenciaUso', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <h3>Jeringas</h3>    
    <div class="form-group {{ $errors->has('jeringaEmpaquePrimario') ? 'has-error' : ''}} col">
        <label for="jeringaEmpaquePrimario" class="control-label">Empaque primario</label>
        <select name="jeringaEmpaquePrimario" class="form-control" id="jeringaEmpaquePrimario" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->jeringaEmpaquePrimario) && $institucione->jeringaEmpaquePrimario == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('jeringaEmpaquePrimario', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('jeringaFiltracionAguja') ? 'has-error' : ''}} col">
        <label for="jeringaFiltracionAguja" class="control-label">Filtraci&oacuten aguja</label>
        <select name="jeringaFiltracionAguja" class="form-control" id="jeringaFiltracionAguja" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->jeringaFiltracionAguja) && $institucione->jeringaFiltracionAguja == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('jeringaFiltracionAguja', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('jeringaFiltracionEmbolo') ? 'has-error' : ''}} col">
        <label for="jeringaFiltracionEmbolo" class="control-label">Filtraci&oacuten embolo</label>
        <select name="jeringaFiltracionEmbolo" class="form-control" id="jeringaFiltracionEmbolo" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->jeringaFiltracionEmbolo) && $institucione->jeringaFiltracionEmbolo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('jeringaFiltracionEmbolo', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('jeringaCalidadAguja') ? 'has-error' : ''}} col">
        <label for="jeringaCalidadAguja" class="control-label">Calidad aguja</label>
        <select name="jeringaCalidadAguja" class="form-control" id="jeringaCalidadAguja" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->jeringaCalidadAguja) && $institucione->jeringaCalidadAguja == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('jeringaCalidadAguja', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('jeringaImpresionEscala') ? 'has-error' : ''}} col">
        <label for="jeringaImpresionEscala" class="control-label">Impresi&oacuten escala</label>
        <select name="jeringaImpresionEscala" class="form-control" id="jeringaImpresionEscala" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->jeringaImpresionEscala) && $institucione->jeringaImpresionEscala == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('jeringaImpresionEscala', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <h3>Equipo suero</h3>    
    <div class="form-group {{ $errors->has('equipoSueroEmpaque') ? 'has-error' : ''}} col">
        <label for="equipoSueroEmpaque" class="control-label">Empaque</label>
        <select name="equipoSueroEmpaque" class="form-control" id="equipoSueroEmpaque" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->equipoSueroEmpaque) && $institucione->equipoSueroEmpaque == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('equipoSueroEmpaque', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('equipoSueroCamaraGoteo') ? 'has-error' : ''}} col">
        <label for="equipoSueroCamaraGoteo" class="control-label">C&aacutemara goteo</label>
        <select name="equipoSueroCamaraGoteo" class="form-control" id="equipoSueroCamaraGoteo" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->equipoSueroCamaraGoteo) && $institucione->equipoSueroCamaraGoteo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('equipoSueroCamaraGoteo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <h3>Venda gasa</h3>    
    <div class="form-group {{ $errors->has('vendaGasaCalidadTejido') ? 'has-error' : ''}} col">
        <label for="vendaGasaCalidadTejido" class="control-label">Calidad tejido</label>
        <select name="vendaGasaCalidadTejido" class="form-control" id="vendaGasaCalidadTejido" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->vendaGasaCalidadTejido) && $institucione->vendaGasaCalidadTejido == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('vendaGasaCalidadTejido', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('vendaGasaMemoria') ? 'has-error' : ''}} col">
        <label for="vendaGasaMemoria" class="control-label">Memoria</label>
        <select name="vendaGasaMemoria" class="form-control" id="vendaGasaMemoria" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->vendaGasaMemoria) && $institucione->vendaGasaMemoria == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('vendaGasaMemoria', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('vendaGasaBordes') ? 'has-error' : ''}} col">
        <label for="vendaGasaBordes" class="control-label">Bordes</label>
        <select name="vendaGasaBordes" class="form-control" id="vendaGasaBordes" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->vendaGasaBordes) && $institucione->vendaGasaBordes == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('vendaGasaBordes', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <h3>Venda el&aacutestica</h3>    
    <div class="form-group {{ $errors->has('vendaElasticaElasticidad') ? 'has-error' : ''}} col">
        <label for="vendaElasticaElasticidad" class="control-label">Elasticidad</label>
        <select name="vendaElasticaElasticidad" class="form-control" id="vendaElasticaElasticidad" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->vendaElasticaElasticidad) && $institucione->vendaElasticaElasticidad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('vendaElasticaElasticidad', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('vendaElasticaCapacidadDistensión') ? 'has-error' : ''}} col">
        <label for="vendaElasticaCapacidadDistensión" class="control-label">Capacidad distensi&oacuten</label>
        <select name="vendaElasticaCapacidadDistensión" class="form-control" id="vendaElasticaCapacidadDistensión" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->vendaElasticaCapacidadDistensión) && $institucione->vendaElasticaCapacidadDistensión == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('vendaElasticaCapacidadDistensión', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('vendaElasticaMemoria') ? 'has-error' : ''}} col">
        <label for="vendaElasticaMemoria" class="control-label">Memoria</label>
        <select name="vendaElasticaMemoria" class="form-control" id="vendaElasticaMemoria" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->vendaElasticaMemoria) && $institucione->vendaElasticaMemoria == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('vendaElasticaMemoria', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('vendaElasticaCalidadTejido') ? 'has-error' : ''}} col">
        <label for="vendaElasticaCalidadTejido" class="control-label">Calidad tejido</label>
        <select name="vendaElasticaCalidadTejido" class="form-control" id="vendaElasticaCalidadTejido" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->vendaElasticaCalidadTejido) && $institucione->vendaElasticaCalidadTejido == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('vendaElasticaCalidadTejido', '<p class="help-block">:message</p>') !!}
    </div>
</div>    
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <div class="form-group {{ $errors->has('cumplimiento') ? 'has-error' : ''}} col-md-4">
        <label for="cumplimiento" class="control-label" title="Cumplimiento en tiempos de entrega acordados con el distribuidor">{{ 'Cumplimiento' }}</label>
        <select name="cumplimiento" class="form-control" id="cumplimiento" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->cumplimiento) && $institucione->cumplimiento == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('cumplimiento', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('calidadProducto') ? 'has-error' : ''}} col-md-4">
        <label for="calidadProducto" class="control-label" title="La calidad de nuestros productos en comparacion con otros productos semejantes de la competencia.">Calidad del producto</label>
        <select name="calidadProducto" class="form-control" id="calidadProducto" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->calidadProducto) && $institucione->calidadProducto == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('calidadProducto', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}} col-md-4">
        <label for="precio" class="control-label">{{ 'Precio' }}</label>
        <select name="precio" class="form-control" id="precio" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->precio) && $institucione->precio == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('atencionGestionReclamos') ? 'has-error' : ''}} col">
        <label for="atencionGestionReclamos" class="control-label">Atenci&oacuten gesti&oacuten reclamos</label>
        <select name="atencionGestionReclamos" class="form-control" id="atencionGestionReclamos" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->atencionGestionReclamos) && $institucione->atencionGestionReclamos == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('atencionGestionReclamos', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('atencionAmabilidad') ? 'has-error' : ''}} col">
        <label for="atencionAmabilidad" class="control-label">Atenci&oacuten amabilidad</label>
        <select name="atencionAmabilidad" class="form-control" id="atencionAmabilidad" >
        @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($institucione->atencionAmabilidad) && $institucione->atencionAmabilidad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
        {!! $errors->first('atencionAmabilidad', '<p class="help-block">:message</p>') !!}
    </div>
</div>    
<div class="form-group {{ $errors->has('sugerencias') ? 'has-error' : ''}}">
    <label for="sugerencias" class="control-label">{{ 'Sugerencias' }}</label>
    <textarea placeholder="Sugerencias o mejoras ..." rows="4" class="form-control" name="sugerencias" id="sugerencias" value="{{ isset($institucione->sugerencias) ? $institucione->sugerencias : ''}}" >
    </textarea>
    {!! $errors->first('sugerencias', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($institucione->user_id) ? $institucione->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($institucione->email) ? $institucione->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<br/>
<div class="form-group">
    <div class="d-flex flex-column">
        <input class="btn btn-primary align-self-center" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Enviar' }}">
    </div>
</div>
