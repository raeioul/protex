<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="text" id="fecha" value="{{ isset($institucione->fecha) ? $institucione->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('distribuidor') ? 'has-error' : ''}}">
    <label for="distribuidor" class="control-label">{{ 'Distribuidor' }}</label>
    <input class="form-control" name="distribuidor" type="text" id="distribuidor" value="{{ isset($institucione->distribuidor) ? $institucione->distribuidor : ''}}" >
    {!! $errors->first('distribuidor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('version') ? 'has-error' : ''}}">
    <label for="version" class="control-label">{{ 'Version' }}</label>
    <input class="form-control" name="version" type="text" id="version" value="{{ isset($institucione->version) ? $institucione->version : ''}}" >
    {!! $errors->first('version', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
    <label for="codigo" class="control-label">{{ 'Codigo' }}</label>
    <input class="form-control" name="codigo" type="text" id="codigo" value="{{ isset($institucione->codigo) ? $institucione->codigo : ''}}" >
    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('respondidoPor') ? 'has-error' : ''}}">
    <label for="respondidoPor" class="control-label">{{ 'Respondidopor' }}</label>
    <input class="form-control" name="respondidoPor" type="text" id="respondidoPor" value="{{ isset($institucione->respondidoPor) ? $institucione->respondidoPor : ''}}" >
    {!! $errors->first('respondidoPor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargo') ? 'has-error' : ''}}">
    <label for="cargo" class="control-label">{{ 'Cargo' }}</label>
    <input class="form-control" name="cargo" type="text" id="cargo" value="{{ isset($institucione->cargo) ? $institucione->cargo : ''}}" >
    {!! $errors->first('cargo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('algodonSuavidad') ? 'has-error' : ''}}">
    <label for="algodonSuavidad" class="control-label">{{ 'Algodonsuavidad' }}</label>
    <select name="algodonSuavidad" class="form-control" id="algodonSuavidad" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->algodonSuavidad) && $institucione->algodonSuavidad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('algodonSuavidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('algodonAbsorcion') ? 'has-error' : ''}}">
    <label for="algodonAbsorcion" class="control-label">{{ 'Algodonabsorcion' }}</label>
    <select name="algodonAbsorcion" class="form-control" id="algodonAbsorcion" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->algodonAbsorcion) && $institucione->algodonAbsorcion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('algodonAbsorcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('algodonLaminado') ? 'has-error' : ''}}">
    <label for="algodonLaminado" class="control-label">{{ 'Algodonlaminado' }}</label>
    <select name="algodonLaminado" class="form-control" id="algodonLaminado" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->algodonLaminado) && $institucione->algodonLaminado == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('algodonLaminado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('algodonLibreImpurezas') ? 'has-error' : ''}}">
    <label for="algodonLibreImpurezas" class="control-label">{{ 'Algodonlibreimpurezas' }}</label>
    <select name="algodonLibreImpurezas" class="form-control" id="algodonLibreImpurezas" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->algodonLibreImpurezas) && $institucione->algodonLibreImpurezas == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('algodonLibreImpurezas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gasaSuavidad') ? 'has-error' : ''}}">
    <label for="gasaSuavidad" class="control-label">{{ 'Gasasuavidad' }}</label>
    <select name="gasaSuavidad" class="form-control" id="gasaSuavidad" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->gasaSuavidad) && $institucione->gasaSuavidad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('gasaSuavidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gasaAbsorcion') ? 'has-error' : ''}}">
    <label for="gasaAbsorcion" class="control-label">{{ 'Gasaabsorcion' }}</label>
    <select name="gasaAbsorcion" class="form-control" id="gasaAbsorcion" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->gasaAbsorcion) && $institucione->gasaAbsorcion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('gasaAbsorcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gasaLibreImpurezas') ? 'has-error' : ''}}">
    <label for="gasaLibreImpurezas" class="control-label">{{ 'Gasalibreimpurezas' }}</label>
    <select name="gasaLibreImpurezas" class="form-control" id="gasaLibreImpurezas" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->gasaLibreImpurezas) && $institucione->gasaLibreImpurezas == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('gasaLibreImpurezas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gasaLibreServicioCortadoDoblado') ? 'has-error' : ''}}">
    <label for="gasaLibreServicioCortadoDoblado" class="control-label">{{ 'Gasalibreserviciocortadodoblado' }}</label>
    <select name="gasaLibreServicioCortadoDoblado" class="form-control" id="gasaLibreServicioCortadoDoblado" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->gasaLibreServicioCortadoDoblado) && $institucione->gasaLibreServicioCortadoDoblado == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('gasaLibreServicioCortadoDoblado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('barbijoComodidadRostro') ? 'has-error' : ''}}">
    <label for="barbijoComodidadRostro" class="control-label">{{ 'Barbijocomodidadrostro' }}</label>
    <select name="barbijoComodidadRostro" class="form-control" id="barbijoComodidadRostro" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->barbijoComodidadRostro) && $institucione->barbijoComodidadRostro == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('barbijoComodidadRostro', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('barbijoFacilRespiracion') ? 'has-error' : ''}}">
    <label for="barbijoFacilRespiracion" class="control-label">{{ 'Barbijofacilrespiracion' }}</label>
    <select name="barbijoFacilRespiracion" class="form-control" id="barbijoFacilRespiracion" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->barbijoFacilRespiracion) && $institucione->barbijoFacilRespiracion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('barbijoFacilRespiracion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('barbijoHipoalergenico') ? 'has-error' : ''}}">
    <label for="barbijoHipoalergenico" class="control-label">{{ 'Barbijohipoalergenico' }}</label>
    <select name="barbijoHipoalergenico" class="form-control" id="barbijoHipoalergenico" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->barbijoHipoalergenico) && $institucione->barbijoHipoalergenico == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('barbijoHipoalergenico', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('barbijoBarraFijacionNariz') ? 'has-error' : ''}}">
    <label for="barbijoBarraFijacionNariz" class="control-label">{{ 'Barbijobarrafijacionnariz' }}</label>
    <select name="barbijoBarraFijacionNariz" class="form-control" id="barbijoBarraFijacionNariz" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->barbijoBarraFijacionNariz) && $institucione->barbijoBarraFijacionNariz == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('barbijoBarraFijacionNariz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('guanteElasticidad') ? 'has-error' : ''}}">
    <label for="guanteElasticidad" class="control-label">{{ 'Guanteelasticidad' }}</label>
    <select name="guanteElasticidad" class="form-control" id="guanteElasticidad" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->guanteElasticidad) && $institucione->guanteElasticidad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('guanteElasticidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('guantePresenciaTalco') ? 'has-error' : ''}}">
    <label for="guantePresenciaTalco" class="control-label">{{ 'Guantepresenciatalco' }}</label>
    <select name="guantePresenciaTalco" class="form-control" id="guantePresenciaTalco" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->guantePresenciaTalco) && $institucione->guantePresenciaTalco == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('guantePresenciaTalco', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('guanteSuperficieRugosa') ? 'has-error' : ''}}">
    <label for="guanteSuperficieRugosa" class="control-label">{{ 'Guantesuperficierugosa' }}</label>
    <select name="guanteSuperficieRugosa" class="form-control" id="guanteSuperficieRugosa" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->guanteSuperficieRugosa) && $institucione->guanteSuperficieRugosa == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('guanteSuperficieRugosa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('guanteResistenciaUso') ? 'has-error' : ''}}">
    <label for="guanteResistenciaUso" class="control-label">{{ 'Guanteresistenciauso' }}</label>
    <select name="guanteResistenciaUso" class="form-control" id="guanteResistenciaUso" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->guanteResistenciaUso) && $institucione->guanteResistenciaUso == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('guanteResistenciaUso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('guanteExaminacionElasticidad') ? 'has-error' : ''}}">
    <label for="guanteExaminacionElasticidad" class="control-label">{{ 'Guanteexaminacionelasticidad' }}</label>
    <select name="guanteExaminacionElasticidad" class="form-control" id="guanteExaminacionElasticidad" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->guanteExaminacionElasticidad) && $institucione->guanteExaminacionElasticidad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('guanteExaminacionElasticidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('guanteExaminacionPresenciaTalco') ? 'has-error' : ''}}">
    <label for="guanteExaminacionPresenciaTalco" class="control-label">{{ 'Guanteexaminacionpresenciatalco' }}</label>
    <select name="guanteExaminacionPresenciaTalco" class="form-control" id="guanteExaminacionPresenciaTalco" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->guanteExaminacionPresenciaTalco) && $institucione->guanteExaminacionPresenciaTalco == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('guanteExaminacionPresenciaTalco', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('guanteExaminacionResistenciaUso') ? 'has-error' : ''}}">
    <label for="guanteExaminacionResistenciaUso" class="control-label">{{ 'Guanteexaminacionresistenciauso' }}</label>
    <select name="guanteExaminacionResistenciaUso" class="form-control" id="guanteExaminacionResistenciaUso" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->guanteExaminacionResistenciaUso) && $institucione->guanteExaminacionResistenciaUso == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('guanteExaminacionResistenciaUso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jeringaEmpaquePrimario') ? 'has-error' : ''}}">
    <label for="jeringaEmpaquePrimario" class="control-label">{{ 'Jeringaempaqueprimario' }}</label>
    <select name="jeringaEmpaquePrimario" class="form-control" id="jeringaEmpaquePrimario" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->jeringaEmpaquePrimario) && $institucione->jeringaEmpaquePrimario == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('jeringaEmpaquePrimario', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jeringaFiltracionAguja') ? 'has-error' : ''}}">
    <label for="jeringaFiltracionAguja" class="control-label">{{ 'Jeringafiltracionaguja' }}</label>
    <select name="jeringaFiltracionAguja" class="form-control" id="jeringaFiltracionAguja" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->jeringaFiltracionAguja) && $institucione->jeringaFiltracionAguja == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('jeringaFiltracionAguja', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jeringaFiltracionEmbolo') ? 'has-error' : ''}}">
    <label for="jeringaFiltracionEmbolo" class="control-label">{{ 'Jeringafiltracionembolo' }}</label>
    <select name="jeringaFiltracionEmbolo" class="form-control" id="jeringaFiltracionEmbolo" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->jeringaFiltracionEmbolo) && $institucione->jeringaFiltracionEmbolo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('jeringaFiltracionEmbolo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jeringaCalidadAguja') ? 'has-error' : ''}}">
    <label for="jeringaCalidadAguja" class="control-label">{{ 'Jeringacalidadaguja' }}</label>
    <select name="jeringaCalidadAguja" class="form-control" id="jeringaCalidadAguja" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->jeringaCalidadAguja) && $institucione->jeringaCalidadAguja == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('jeringaCalidadAguja', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jeringaImpresionEscala') ? 'has-error' : ''}}">
    <label for="jeringaImpresionEscala" class="control-label">{{ 'Jeringaimpresionescala' }}</label>
    <select name="jeringaImpresionEscala" class="form-control" id="jeringaImpresionEscala" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->jeringaImpresionEscala) && $institucione->jeringaImpresionEscala == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('jeringaImpresionEscala', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('equipoSueroEmpaque') ? 'has-error' : ''}}">
    <label for="equipoSueroEmpaque" class="control-label">{{ 'Equiposueroempaque' }}</label>
    <select name="equipoSueroEmpaque" class="form-control" id="equipoSueroEmpaque" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->equipoSueroEmpaque) && $institucione->equipoSueroEmpaque == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('equipoSueroEmpaque', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('equipoSueroCamaraGoteo') ? 'has-error' : ''}}">
    <label for="equipoSueroCamaraGoteo" class="control-label">{{ 'Equiposuerocamaragoteo' }}</label>
    <select name="equipoSueroCamaraGoteo" class="form-control" id="equipoSueroCamaraGoteo" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->equipoSueroCamaraGoteo) && $institucione->equipoSueroCamaraGoteo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('equipoSueroCamaraGoteo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vendaGasaCalidadTejido') ? 'has-error' : ''}}">
    <label for="vendaGasaCalidadTejido" class="control-label">{{ 'Vendagasacalidadtejido' }}</label>
    <select name="vendaGasaCalidadTejido" class="form-control" id="vendaGasaCalidadTejido" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->vendaGasaCalidadTejido) && $institucione->vendaGasaCalidadTejido == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('vendaGasaCalidadTejido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vendaGasaMemoria') ? 'has-error' : ''}}">
    <label for="vendaGasaMemoria" class="control-label">{{ 'Vendagasamemoria' }}</label>
    <select name="vendaGasaMemoria" class="form-control" id="vendaGasaMemoria" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->vendaGasaMemoria) && $institucione->vendaGasaMemoria == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('vendaGasaMemoria', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vendaGasaBordes') ? 'has-error' : ''}}">
    <label for="vendaGasaBordes" class="control-label">{{ 'Vendagasabordes' }}</label>
    <select name="vendaGasaBordes" class="form-control" id="vendaGasaBordes" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->vendaGasaBordes) && $institucione->vendaGasaBordes == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('vendaGasaBordes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vendaElasticaElasticidad') ? 'has-error' : ''}}">
    <label for="vendaElasticaElasticidad" class="control-label">{{ 'Vendaelasticaelasticidad' }}</label>
    <select name="vendaElasticaElasticidad" class="form-control" id="vendaElasticaElasticidad" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->vendaElasticaElasticidad) && $institucione->vendaElasticaElasticidad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('vendaElasticaElasticidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vendaElasticaCapacidadDistensi贸n') ? 'has-error' : ''}}">
    <label for="vendaElasticaCapacidadDistensi贸n" class="control-label">{{ 'Vendaelasticacapacidaddistensi愠n' }}</label>
    <select name="vendaElasticaCapacidadDistensi贸n" class="form-control" id="vendaElasticaCapacidadDistensi贸n" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->vendaElasticaCapacidadDistensi贸n) && $institucione->vendaElasticaCapacidadDistensi贸n == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('vendaElasticaCapacidadDistensi贸n', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vendaElasticaMemoria') ? 'has-error' : ''}}">
    <label for="vendaElasticaMemoria" class="control-label">{{ 'Vendaelasticamemoria' }}</label>
    <select name="vendaElasticaMemoria" class="form-control" id="vendaElasticaMemoria" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->vendaElasticaMemoria) && $institucione->vendaElasticaMemoria == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('vendaElasticaMemoria', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vendaElasticaCalidadTejido') ? 'has-error' : ''}}">
    <label for="vendaElasticaCalidadTejido" class="control-label">{{ 'Vendaelasticacalidadtejido' }}</label>
    <select name="vendaElasticaCalidadTejido" class="form-control" id="vendaElasticaCalidadTejido" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->vendaElasticaCalidadTejido) && $institucione->vendaElasticaCalidadTejido == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('vendaElasticaCalidadTejido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cumplimiento') ? 'has-error' : ''}}">
    <label for="cumplimiento" class="control-label">{{ 'Cumplimiento' }}</label>
    <select name="cumplimiento" class="form-control" id="cumplimiento" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->cumplimiento) && $institucione->cumplimiento == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('cumplimiento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('calidadProducto') ? 'has-error' : ''}}">
    <label for="calidadProducto" class="control-label">{{ 'Calidadproducto' }}</label>
    <select name="calidadProducto" class="form-control" id="calidadProducto" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->calidadProducto) && $institucione->calidadProducto == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('calidadProducto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <select name="precio" class="form-control" id="precio" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->precio) && $institucione->precio == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('atencionGestionReclamos') ? 'has-error' : ''}}">
    <label for="atencionGestionReclamos" class="control-label">{{ 'Atenciongestionreclamos' }}</label>
    <select name="atencionGestionReclamos" class="form-control" id="atencionGestionReclamos" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->atencionGestionReclamos) && $institucione->atencionGestionReclamos == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('atencionGestionReclamos', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('atencionAmabilidad') ? 'has-error' : ''}}">
    <label for="atencionAmabilidad" class="control-label">{{ 'Atencionamabilidad' }}</label>
    <select name="atencionAmabilidad" class="form-control" id="atencionAmabilidad" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($institucione->atencionAmabilidad) && $institucione->atencionAmabilidad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('atencionAmabilidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sugerencias') ? 'has-error' : ''}}">
    <label for="sugerencias" class="control-label">{{ 'Sugerencias' }}</label>
    <input class="form-control" name="sugerencias" type="text" id="sugerencias" value="{{ isset($institucione->sugerencias) ? $institucione->sugerencias : ''}}" >
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
