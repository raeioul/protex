<div class="row border border-default" style="margin: 5px; padding: 5px">
    <div class="row">
        <div class="col-md-8"></div>
        <div class="form-group {{ $errors->has('version') ? 'alert alert-danger' : ''}} col-md-2">
            <label for="version" class="control-label">Versi&oacuten</label>
            <input class="form-control" name="version" type="text" id="version" 
                value="{{
                    isset($satisfaccione->version) ? $satisfaccione->version : $version?$version:old('version')}}" >
            {!! $errors->first('version', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('codigo') ? 'alert alert-danger' : ''}} col-md-2">
            <label for="codigo" class="control-label">C&oacutedigo</label>
            <input class="form-control" name="codigo" type="text" id="codigo" value="{{ isset($satisfaccione->codigo) ? $satisfaccione->codigo : $codigo?$codigo:old('codigo')}}" >
            {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="row">
        <div class="form-group {{ $errors->has('distribuidor') ? 'alert alert-danger' : ''}} col-md-8">
            <label for="distribuidor" class="control-label">Distribuidor</label>
            <input class="form-control" name="distribuidor" type="text" id="distribuidor" value="{{ isset($satisfaccione->distribuidor) ? $satisfaccione->distribuidor : old('distribuidor')}}" >
            {!! $errors->first('distribuidor', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('fecha') ? 'alert alert-danger' : ''}} col-md-4">
            <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
            <input class="form-control" name="fecha" type="text" id="fecha" value="{{ isset($satisfaccione->fecha) ? $satisfaccione->fecha : Carbon\Carbon::today()->formatLocalized('%d/%B/%Y')}}" >
            {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="row">
        <div class="form-group {{ $errors->has('respondidoPor') ? 'alert alert-danger' : ''}} col-md-8" >
            <label for="respondidoPor" class="control-label">{{ 'Respondido por' }}</label>
            <input class="form-control" name="respondidoPor" type="text" id="respondidoPor" value="{{ isset($satisfaccione->respondidoPor) ? $satisfaccione->respondidoPor : old('respondidoPor')}}" >
            {!! $errors->first('respondidoPor', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('cargo') ? 'alert alert-danger' : ''}} col-md-4">
            <label for="cargo" class="control-label">{{ 'Cargo' }}</label>
            <input class="form-control" name="cargo" type="text" id="cargo" value="{{ isset($satisfaccione->cargo) ? $satisfaccione->cargo : old('cargo')}}" >
            {!! $errors->first('cargo', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div style="margin: 5px; padding: 5px" class="row">
    <h4>Califique los siguientes aspectos de acuerdo a los siguientes criterios de valoración:</h4>
    <div class="col d-flex flex-column align-items-center">Malo<strong>(1)</strong></div>
    <div class="col d-flex flex-column align-items-center">Regular<strong>(2)</strong></div>
    <div class="col d-flex flex-column align-items-center">Bueno<strong>(3)</strong></div>
</div>
<div style="margin: 5px; padding: 5px" class="row text-center">
    <h4>Percepción de la calidad de los productos, con los clientes que usted trabaja:</h4>
    <p class="d-flex flex-column align-items-end">Nota.- Colocar N/A si no utiliza este producto.</p>
</div>    
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <div class="form-group {{ $errors->has('algodon') ? 'has-error' : ''}} col-md-3">
        <label for="algodon" class="control-label">Algodón</label>
            <select name="algodon" class="form-control" id="algodon">
                @foreach($options as $option)
                    @if(!isset($satisfaccione->algodon))
                        <option {{ old('algodon') == $option ? 'selected' : '' }}>{{$option}}</option>
                    @else
                        <option class="text-secondary" {{ $satisfaccione->algodon === $option ? 'selected' : ''}}>{{$option}}</option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('algodon', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('gasa') ? 'has-error' : ''}} col-md-3">
        <label for="gasa" class="control-label">{{ 'Gasa' }}</label>
        <select name="gasa" class="form-control" id="gasa" >
            @foreach($options as $option)
                    @if(!isset($satisfaccione->gasa))
                        <option {{ old('gasa') == $option ? 'selected' : '' }}>{{$option}}</option>
                    @else
                        <option class="text-secondary" {{ $satisfaccione->gasa === $option ? 'selected' : ''}}>{{$option}}</option>
                    @endif
            @endforeach
        </select>
        {!! $errors->first('gasa', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('barbijo') ? 'has-error' : ''}} col-md-3">
        <label for="barbijo" class="control-label">{{ 'Barbijo' }}</label>
        <select name="barbijo" class="form-control" id="barbijo" >
            @foreach($options as $option)
                    @if(!isset($satisfaccione->barbijo))
                        <option {{ old('barbijo') == $option ? 'selected' : '' }}>{{$option}}</option>
                    @else
                        <option class="text-secondary" {{ $satisfaccione->barbijo === $option ? 'selected' : ''}}>{{$option}}</option>
                    @endif
            @endforeach
        </select>
        {!! $errors->first('barbijo', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('guanteExaminacion') ? 'has-error' : ''}} col-md-3">
        <label for="guanteExaminacion" class="control-label">{{ 'Guantes de Examinación' }}</label>
            <select name="guanteExaminacion" class="form-control" id="guanteExaminacion" >
                @foreach($options as $option)
                    @if(!isset($satisfaccione->guanteExaminacion))
                        <option {{ old('guanteExaminacion') == $option ? 'selected' : '' }}>{{$option}}</option>
                    @else
                        <option class="text-secondary" {{ $satisfaccione->guanteExaminacion === $option ? 'selected' : ''}}>{{$option}}</option>
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
                @if(!isset($satisfaccione->jeringa))
                    <option {{ old('jeringa') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $satisfaccione->jeringa === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
    </select>
        {!! $errors->first('jeringa', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('vendaGasa') ? 'has-error' : ''}} col-md-4">
        <label for="vendaGasa" class="control-label">{{ 'Vendas de Gasa' }}</label>
        <select name="vendaGasa" class="form-control" id="vendaGasa" >
            @foreach($options as $option)
                @if(!isset($satisfaccione->vendaGasa))
                    <option {{ old('vendaGasa') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $satisfaccione->vendaGasa === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('vendaGasa', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('vendaElastica') ? 'has-error' : ''}} col-md-4">
        <label for="vendaElastica" class="control-label">{{ 'Vendas Elásticas' }}</label>
        <select name="vendaElastica" class="form-control" id="vendaElastica" >
            @foreach($options as $option)
                @if(!isset($satisfaccione->vendaElastica))
                    <option {{ old('vendaElastica') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $satisfaccione->vendaElastica === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('vendaElastica', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <div class="form-group {{ $errors->has('cumplimiento') ? 'has-error' : ''}} col">
        <label for="cumplimiento" class="control-label"> <strong>Cumplimiento</strong> del plazo de entrega de producto </label>
        <select name="cumplimiento" class="form-control" id="cumplimiento" >
            @foreach($options as $option)
                @if(!isset($satisfaccione->cumplimiento))
                    <option {{ old('cumplimiento') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $satisfaccione->cumplimiento === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
    </select>
        {!! $errors->first('cumplimiento', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('calidadEmpaque') ? 'has-error' : ''}} col">
        <label for="calidadEmpaque" class="control-label"><strong>Calidad</strong> de empaque (Diseño de empaque, presentación, consistencia de empaque, sellado de la bolsa)</label>
        <select name="calidadEmpaque" class="form-control" id="calidadEmpaque" >
            @foreach($options as $option)
                @if(!isset($satisfaccione->calidadEmpaque))
                    <option {{ old('calidadEmpaque') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $satisfaccione->calidadEmpaque === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('calidadEmpaque', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('calidadEntrega') ? 'has-error' : ''}} col">
        <label for="calidadEntrega" class="control-label"><strong>Calidad</strong> en el servicio de entrega (cordialidad, atención, proactividad del personal  que entrega producto)</label>
        <select name="calidadEntrega" class="form-control" id="calidadEntrega" >
            @foreach($options as $option)
                @if(!isset($satisfaccione->calidadEntrega))
                    <option {{ old('calidadEntrega') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $satisfaccione->calidadEntrega === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('calidadEntrega', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row border border-default" style="margin: 5px; padding: 5px">
    <div class="form-group {{ $errors->has('atencionAmabilidad') ? 'has-error' : ''}} col">
        <label for="atencionAmabilidad" class="control-label"><strong>Atención y amabilidad</strong> del personal de Protex (vendedor,cobrador)</label>
        <select name="atencionAmabilidad" class="form-control" id="atencionAmabilidad" >
            @foreach($options as $option)
                @if(!isset($satisfaccione->atencionAmabilidad))
                    <option {{ old('atencionAmabilidad') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $satisfaccione->atencionAmabilidad === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('atencionAmabilidad', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}} col">
    <label for="precio" class="control-label"><strong>Precio</strong> respecto al precio de la competencia</label>
        <select name="precio" class="form-control" id="precio" >
            @foreach($options as $option)
                @if(!isset($satisfaccione->precio))
                    <option {{ old('precio') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $satisfaccione->precio === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('atencionQuejas') ? 'has-error' : ''}} col">
        <label for="atencionQuejas" class="control-label"><strong>Atención</strong> y gestion de sus quejas (si las ha tenido)</label>
        <select name="atencionQuejas" class="form-control" id="atencionQuejas" >
            @foreach($options as $option)
                @if(!isset($satisfaccione->atencionQuejas))
                    <option {{ old('atencionQuejas') == $option ? 'selected' : '' }}>{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $satisfaccione->atencionQuejas === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('atencionQuejas', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('sugerencias') ? 'text-danger' : ''}}">
    <label for="sugerencias" class="control-label">{{ 'Sugerencias' }}</label>
    <textarea placeholder="Sugerencias o mejoras ..." rows="4" class="form-control" name="sugerencias" id="sugerencias"> {{ isset($satisfaccione->sugerencias) ? $satisfaccione->sugerencias : old('sugerencias')}}
    </textarea>
    {!! $errors->first('sugerencias', '<p class="help-block">:message</p>') !!}
</div>
<div class="d-none form-group {{ $errors->has('user_id') ? 'text-danger' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($satisfaccione->user_id) ? $satisfaccione->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('celular') ? 'alert alert-danger' : ''}}">
    <label for="celular" class="control-label"># Celular</label>
    <input class="form-control" name="celular" type="text" id="celular" value="{{ isset($satisfaccione->celular) ? $satisfaccione->celular : old('celular')}}" >
    {!! $errors->first('celular', '<p class="help-block">:message</p>') !!}
</div>
<br/>
<div class="form-group">
    <div class="d-flex flex-column">
        <input class="btn btn-primary align-self-center" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Enviar' }}">
    </div>
</div>
