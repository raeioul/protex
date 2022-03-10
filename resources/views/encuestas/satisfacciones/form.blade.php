<div class="row border border-default" style="margin: 5px; padding: 5px">
    <div class="row">
        <div class="col-md-8"></div>
        <div class="form-group {{ $errors->has('version') ? 'alert alert-danger' : ''}} col-md-2">
            <label for="version" class="control-label">Versi&oacuten</label>
            <input class="form-control" name="version" type="text" id="version" 
                value="{{
                    isset($institucione->version) ? $institucione->version : $version?$version:old('version')}}" >
            {!! $errors->first('version', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('codigo') ? 'alert alert-danger' : ''}} col-md-2">
            <label for="codigo" class="control-label">C&oacutedigo</label>
            <input class="form-control" name="codigo" type="text" id="codigo" value="{{ isset($institucione->codigo) ? $institucione->codigo : $codigo?$codigo:old('codigo')}}" >
            {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="row">
        <div class="form-group {{ $errors->has('distribuidor') ? 'alert alert-danger' : ''}} col-md-8">
            <label for="distribuidor" class="control-label">Distribuidor</label>
            <input class="form-control" name="distribuidor" type="text" id="distribuidor" value="{{ isset($institucione->distribuidor) ? $institucione->distribuidor : old('distribuidor')}}" >
            {!! $errors->first('distribuidor', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('fecha') ? 'alert alert-danger' : ''}} col-md-4">
            <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
            <input class="form-control" name="fecha" type="text" id="fecha" value="{{ isset($institucione->fecha) ? $institucione->fecha : Carbon\Carbon::today()->formatLocalized('%d/%B/%Y')}}" >
            {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="row">
        <div class="form-group {{ $errors->has('respondidoPor') ? 'alert alert-danger' : ''}} col-md-8" >
            <label for="respondidoPor" class="control-label">{{ 'Respondido por' }}</label>
            <input class="form-control" name="respondidoPor" type="text" id="respondidoPor" value="{{ isset($institucione->respondidoPor) ? $institucione->respondidoPor : old('respondidoPor')}}" >
            {!! $errors->first('respondidoPor', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('cargo') ? 'alert alert-danger' : ''}} col-md-4">
            <label for="cargo" class="control-label">{{ 'Cargo' }}</label>
            <input class="form-control" name="cargo" type="text" id="cargo" value="{{ isset($institucione->cargo) ? $institucione->cargo : old('cargo')}}" >
            {!! $errors->first('cargo', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <div class="form-group {{ $errors->has('algodon') ? 'has-error' : ''}} col-md-3">
        <label for="algodon" class="control-label">Algodón</label>
            <select name="algodon" class="form-control" id="algodon">
                @foreach($options as $option)
                    @if(!isset($institucione->algodon))
                        <option {{ old('algodon') == $option ? 'selected' : '' }}>{{$option}}</option>
                    @else
                        <option class="text-secondary" {{ $institucione->algodon === $option ? 'selected' : ''}}>{{$option}}</option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('algodon', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('gasa') ? 'has-error' : ''}} col-md-3">
        <label for="gasa" class="control-label">{{ 'Gasa' }}</label>
        <select name="gasa" class="form-control" id="gasa" >
            @foreach($options as $option)
                    @if(!isset($institucione->gasa))
                        <option {{ old('gasa') == $option ? 'selected' : '' }}>{{$option}}</option>
                    @else
                        <option class="text-secondary" {{ $institucione->gasa === $option ? 'selected' : ''}}>{{$option}}</option>
                    @endif
            @endforeach
        </select>
        {!! $errors->first('gasa', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('barbijo') ? 'has-error' : ''}} col-md-3">
        <label for="barbijo" class="control-label">{{ 'Barbijo' }}</label>
        <select name="barbijo" class="form-control" id="barbijo" >
            @foreach($options as $option)
                    @if(!isset($institucione->barbijo))
                        <option {{ old('barbijo') == $option ? 'selected' : '' }}>{{$option}}</option>
                    @else
                        <option class="text-secondary" {{ $institucione->barbijo === $option ? 'selected' : ''}}>{{$option}}</option>
                    @endif
            @endforeach
        </select>
        {!! $errors->first('barbijo', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('guanteExaminacion') ? 'has-error' : ''}} col-md-3">
        <label for="guanteExaminacion" class="control-label">{{ 'Guante de Examinación' }}</label>
            <select name="guanteExaminacion" class="form-control" id="guanteExaminacion" >
                @foreach($options as $option)
                    @if(!isset($institucione->guanteExaminacion))
                        <option {{ old('guanteExaminacion') == $option ? 'selected' : '' }}>{{$option}}</option>
                    @else
                        <option class="text-secondary" {{ $institucione->guanteExaminacion === $option ? 'selected' : ''}}>{{$option}}</option>
                    @endif
                @endforeach
            </select>
        {!! $errors->first('guanteExaminacion', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <div class="form-group {{ $errors->has('jeringa') ? 'has-error' : ''}} col-md-4">
        <label for="jeringa" class="control-label">{{ 'Jeringa' }}</label>
        <select name="jeringa" class="form-control" id="jeringa" >
            @foreach($options as $option)
                @if(!isset($institucione->jeringa))
                    <option {{ old('jeringa') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $institucione->jeringa === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
    </select>
        {!! $errors->first('jeringa', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('vendaGasa') ? 'has-error' : ''}} col-md-4">
        <label for="vendaGasa" class="control-label">{{ 'Vendagasa' }}</label>
        <select name="vendaGasa" class="form-control" id="vendaGasa" >
            @foreach($options as $option)
                @if(!isset($institucione->vendaGasa))
                    <option {{ old('vendaGasa') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $institucione->vendaGasa === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('vendaGasa', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('vendaElastica') ? 'has-error' : ''}} col-md-4">
        <label for="vendaElastica" class="control-label">{{ 'Vendaelastica' }}</label>
        <select name="vendaElastica" class="form-control" id="vendaElastica" >
            @foreach($options as $option)
                @if(!isset($institucione->vendaElastica))
                    <option {{ old('vendaElastica') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $institucione->vendaElastica === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('vendaElastica', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <div class="form-group {{ $errors->has('cumplimiento') ? 'has-error' : ''}} col">
        <label for="cumplimiento" class="control-label">{{ 'Cumplimiento' }}</label>
        <select name="cumplimiento" class="form-control" id="cumplimiento" >
            @foreach($options as $option)
                @if(!isset($institucione->cumplimiento))
                    <option {{ old('cumplimiento') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $institucione->cumplimiento === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
    </select>
        {!! $errors->first('cumplimiento', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('calidadEmpaque') ? 'has-error' : ''}} col">
        <label for="calidadEmpaque" class="control-label">{{ 'Calidadempaque' }}</label>
        <select name="calidadEmpaque" class="form-control" id="calidadEmpaque" >
            @foreach($options as $option)
                @if(!isset($institucione->calidadEmpaque))
                    <option {{ old('calidadEmpaque') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $institucione->calidadEmpaque === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('calidadEmpaque', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('calidadEntrega') ? 'has-error' : ''}} col">
        <label for="calidadEntrega" class="control-label">{{ 'Calidadentrega' }}</label>
        <select name="calidadEntrega" class="form-control" id="calidadEntrega" >
            @foreach($options as $option)
                @if(!isset($institucione->calidadEntrega))
                    <option {{ old('calidadEntrega') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $institucione->calidadEntrega === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('calidadEntrega', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <div class="form-group {{ $errors->has('atencionAmabilidad') ? 'has-error' : ''}} col">
        <label for="atencionAmabilidad" class="control-label">{{ 'Atencionamabilidad' }}</label>
        <select name="atencionAmabilidad" class="form-control" id="atencionAmabilidad" >
            @foreach($options as $option)
                @if(!isset($institucione->atencionAmabilidad))
                    <option {{ old('atencionAmabilidad') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $institucione->atencionAmabilidad === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('atencionAmabilidad', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}} col">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
        <select name="precio" class="form-control" id="precio" >
            @foreach($options as $option)
                @if(!isset($institucione->precio))
                    <option {{ old('precio') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $institucione->precio === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('atencionQuejas') ? 'has-error' : ''}} col">
        <label for="atencionQuejas" class="control-label">{{ 'Atencionquejas' }}</label>
        <select name="atencionQuejas" class="form-control" id="atencionQuejas" >
            @foreach($options as $option)
                @if(!isset($institucione->atencionQuejas))
                    <option {{ old('atencionQuejas') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $institucione->atencionQuejas === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('atencionQuejas', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('sugerencias') ? 'text-danger' : ''}}">
    <label for="sugerencias" class="control-label">{{ 'Sugerencias' }}</label>
    <textarea placeholder="Sugerencias o mejoras ..." rows="4" class="form-control" name="sugerencias" id="sugerencias"> {{ isset($institucione->sugerencias) ? $institucione->sugerencias : old('sugerencias')}}
    </textarea>
    {!! $errors->first('sugerencias', '<p class="help-block">:message</p>') !!}
</div>
<div class="d-none form-group {{ $errors->has('user_id') ? 'text-danger' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($institucione->user_id) ? $institucione->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('celular') ? 'alert alert-danger' : ''}}">
    <label for="celular" class="control-label"># Celular</label>
    <input class="form-control" name="celular" type="text" id="celular" value="{{ isset($institucione->celular) ? $institucione->celular : old('celular')}}" >
    {!! $errors->first('celular', '<p class="help-block">:message</p>') !!}
</div>
<br/>
<div class="form-group">
    <div class="d-flex flex-column">
        <input class="btn btn-primary align-self-center" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Enviar' }}">
    </div>
</div>
