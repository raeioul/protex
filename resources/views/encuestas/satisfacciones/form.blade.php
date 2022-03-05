<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="text" id="fecha" value="{{ isset($satisfaccione->fecha) ? $satisfaccione->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('distribuidor') ? 'has-error' : ''}}">
    <label for="distribuidor" class="control-label">{{ 'Distribuidor' }}</label>
    <input class="form-control" name="distribuidor" type="text" id="distribuidor" value="{{ isset($satisfaccione->distribuidor) ? $satisfaccione->distribuidor : ''}}" >
    {!! $errors->first('distribuidor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('version') ? 'has-error' : ''}}">
    <label for="version" class="control-label">{{ 'Version' }}</label>
    <input class="form-control" name="version" type="text" id="version" value="{{ isset($satisfaccione->version) ? $satisfaccione->version : $version}}" >
    {!! $errors->first('version', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
    <label for="codigo" class="control-label">{{ 'Codigo' }}</label>
    <input class="form-control" name="codigo" type="text" id="codigo" value="{{ isset($satisfaccione->codigo) ? $satisfaccione->codigo : $codigo}}" >
    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('respondidoPor') ? 'has-error' : ''}}">
    <label for="respondidoPor" class="control-label">{{ 'Respondidopor' }}</label>
    <input class="form-control" name="respondidoPor" type="text" id="respondidoPor" value="{{ isset($satisfaccione->respondidoPor) ? $satisfaccione->respondidoPor : ''}}" >
    {!! $errors->first('respondidoPor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargo') ? 'has-error' : ''}}">
    <label for="cargo" class="control-label">{{ 'Cargo' }}</label>
    <input class="form-control" name="cargo" type="text" id="cargo" value="{{ isset($satisfaccione->cargo) ? $satisfaccione->cargo : ''}}" >
    {!! $errors->first('cargo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('algodon') ? 'has-error' : ''}}">
    <label for="algodon" class="control-label">{{ 'Algodon' }}</label>
    <select name="algodon" class="form-control" id="algodon" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($satisfaccione->algodon) && $satisfaccione->algodon == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('algodon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gasa') ? 'has-error' : ''}}">
    <label for="gasa" class="control-label">{{ 'Gasa' }}</label>
    <select name="gasa" class="form-control" id="gasa" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($satisfaccione->gasa) && $satisfaccione->gasa == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('gasa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('barbijo') ? 'has-error' : ''}}">
    <label for="barbijo" class="control-label">{{ 'Barbijo' }}</label>
    <select name="barbijo" class="form-control" id="barbijo" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($satisfaccione->barbijo) && $satisfaccione->barbijo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('barbijo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('guanteExaminacion') ? 'has-error' : ''}}">
    <label for="guanteExaminacion" class="control-label">{{ 'Guanteexaminacion' }}</label>
    <select name="guanteExaminacion" class="form-control" id="guanteExaminacion" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($satisfaccione->guanteExaminacion) && $satisfaccione->guanteExaminacion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('guanteExaminacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jeringa') ? 'has-error' : ''}}">
    <label for="jeringa" class="control-label">{{ 'Jeringa' }}</label>
    <select name="jeringa" class="form-control" id="jeringa" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($satisfaccione->jeringa) && $satisfaccione->jeringa == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('jeringa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vendaGasa') ? 'has-error' : ''}}">
    <label for="vendaGasa" class="control-label">{{ 'Vendagasa' }}</label>
    <select name="vendaGasa" class="form-control" id="vendaGasa" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($satisfaccione->vendaGasa) && $satisfaccione->vendaGasa == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('vendaGasa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vendaElastica') ? 'has-error' : ''}}">
    <label for="vendaElastica" class="control-label">{{ 'Vendaelastica' }}</label>
    <select name="vendaElastica" class="form-control" id="vendaElastica" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($satisfaccione->vendaElastica) && $satisfaccione->vendaElastica == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('vendaElastica', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cumplimiento') ? 'has-error' : ''}}">
    <label for="cumplimiento" class="control-label">{{ 'Cumplimiento' }}</label>
    <select name="cumplimiento" class="form-control" id="cumplimiento" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($satisfaccione->cumplimiento) && $satisfaccione->cumplimiento == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('cumplimiento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('calidadEmpaque') ? 'has-error' : ''}}">
    <label for="calidadEmpaque" class="control-label">{{ 'Calidadempaque' }}</label>
    <select name="calidadEmpaque" class="form-control" id="calidadEmpaque" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($satisfaccione->calidadEmpaque) && $satisfaccione->calidadEmpaque == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('calidadEmpaque', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('calidadEntrega') ? 'has-error' : ''}}">
    <label for="calidadEntrega" class="control-label">{{ 'Calidadentrega' }}</label>
    <select name="calidadEntrega" class="form-control" id="calidadEntrega" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($satisfaccione->calidadEntrega) && $satisfaccione->calidadEntrega == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('calidadEntrega', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('atencionAmabilidad') ? 'has-error' : ''}}">
    <label for="atencionAmabilidad" class="control-label">{{ 'Atencionamabilidad' }}</label>
    <select name="atencionAmabilidad" class="form-control" id="atencionAmabilidad" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($satisfaccione->atencionAmabilidad) && $satisfaccione->atencionAmabilidad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('atencionAmabilidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <select name="precio" class="form-control" id="precio" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($satisfaccione->precio) && $satisfaccione->precio == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('atencionQuejas') ? 'has-error' : ''}}">
    <label for="atencionQuejas" class="control-label">{{ 'Atencionquejas' }}</label>
    <select name="atencionQuejas" class="form-control" id="atencionQuejas" >
    @foreach (json_decode('["Malo (1)","Regular (2)","Bueno (3)","N\/A"]', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($satisfaccione->atencionQuejas) && $satisfaccione->atencionQuejas == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('atencionQuejas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sugerencias') ? 'has-error' : ''}}">
    <label for="sugerencias" class="control-label">{{ 'Sugerencias' }}</label>
    <input class="form-control" name="sugerencias" type="text" id="sugerencias" value="{{ isset($satisfaccione->sugerencias) ? $satisfaccione->sugerencias : ''}}" >
    {!! $errors->first('sugerencias', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($satisfaccione->user_id) ? $satisfaccione->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="email" id="user_id" value="{{ isset($satisfaccione->email) ? $satisfaccione->emaill : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<br/>
<div class="form-group">
    <div class="d-flex flex-column">
        <input class="btn btn-primary align-self-center" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Enviar' }}">
    </div>
</div>
