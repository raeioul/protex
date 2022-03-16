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
        <div class="form-group {{ $errors->has('institucion') ? 'alert alert-danger' : ''}} col-md-8">
            <label for="institucion" class="control-label">Instituci&oacuten</label>
            <input class="form-control" name="institucion" type="text" id="institucion" value="{{ isset($institucione->institucion) ? $institucione->institucion : old('institucion')}}" >
            {!! $errors->first('institucion', '<p class="help-block">:message</p>') !!}
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
<div style="margin: 5px; padding: 5px" class="row">
    <h4>Seleccione entre siguientes valores, de acuerdo al producto que usted utiliza:</h4>
    <div class="col d-flex flex-column align-items-center">Bueno<strong>(3)</strong></div>
    <div class="col d-flex flex-column align-items-center">Regular<strong>(2)</strong></div>
    <div class="col d-flex flex-column align-items-center">Malo<strong>(1)</strong></div>
    <div class="col d-flex flex-column align-items-center">N/A</div>
</div>
    <p class="d-flex flex-column align-items-end">Nota.- Colocar N/A si no utiliza este producto.</p>
<div class="card">
    <div class="card-header p-3 mb-2 bg-info text-white">
        <h4><span class="text-primary">1.-</span> Valoración de calidad de producto(s):</h4>
    </div>
    <div class="card-body">
        <div class="row border border-default" style="margin: 5px; padding: 5px">
            <h3>Algod&oacuten</h3>
            <div class="form-group {{ $errors->has('algodonSuavidad') ? 'text-danger' : ''}} col-md-3">
                <label for="algodonSuavidad" class="control-label">Suavidad</label>
                <select name="algodonSuavidad" class="form-control" id="algodonSuavidad">
                    @foreach($options as $option)
                        @if(!isset($institucione->algodonSuavidad))
                            <option {{ old('algodonSuavidad') == $option ? 'selected' : '' }}>{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->algodonSuavidad === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('algodonSuavidad', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('algodonAbsorcion') ? 'text-danger' : ''}} col-md-3">
                <label for="algodonAbsorcion" class="control-label">Absorci&oacuten</label>
                <select name="algodonAbsorcion" class="form-control" id="algodonAbsorcion" >
                    @foreach($options as $option)
                        @if(!isset($institucione->algodonAbsorcion))
                            <option {{ old('algodonAbsorcion') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->algodonAbsorcion === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
            </select>
                {!! $errors->first('algodonAbsorcion', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('algodonLaminado') ? 'text-danger' : ''}} col-md-3">
                <label for="algodonLaminado" class="control-label">Laminado</label>
                <select name="algodonLaminado" class="form-control" id="algodonLaminado" >
                    @foreach($options as $option)
                        @if(!isset($institucione->algodonLaminado))
                            <option {{ old('algodonLaminado') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->algodonLaminado === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('algodonLaminado', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('algodonLibreImpurezas') ? 'text-danger' : ''}} col-md-3">
                <label for="algodonLibreImpurezas" class="control-label">Libre impurezas</label>
                <select name="algodonLibreImpurezas" class="form-control" id="algodonLibreImpurezas" >
                    @foreach($options as $option)
                        @if(!isset($institucione->algodonLibreImpurezas))
                            <option {{ old('algodonLibreImpurezas') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->algodonLibreImpurezas === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach    
                </select>
                {!! $errors->first('algodonLibreImpurezas', '<p class="help-block">:message</p>') !!}
            </div>
            <br/>
            <br/>
        </div>
        <div class="row border border-default" style="margin: 5px; padding: 5px">
            <h3>Gasa</h3>
            <div class="form-group {{ $errors->has('gasaSuavidad') ? 'text-danger' : ''}} col-md-4">
                <label for="gasaSuavidad" class="control-label">Suavidad</label>
                <select name="gasaSuavidad" class="form-control" id="gasaSuavidad" >
                    @foreach($options as $option)
                        @if(!isset($institucione->gasaSuavidad))
                            <option {{ old('gasaSuavidad') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->gasaSuavidad === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('gasaSuavidad', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('gasaAbsorcion') ? 'text-danger' : ''}} col-md-4">
                <label for="gasaAbsorcion" class="control-label">Absorci&oacuten</label>
                <select name="gasaAbsorcion" class="form-control" id="gasaAbsorcion" >
                    @foreach($options as $option)
                        @if(!isset($institucione->gasaAbsorcion))
                            <option {{ old('gasaAbsorcion') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->gasaAbsorcion === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('gasaAbsorcion', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('gasaLibreImpurezas') ? 'text-danger' : ''}} col-md-4">
                <label for="gasaLibreImpurezas" class="control-label">Libre de impurezas</label>
                <select name="gasaLibreImpurezas" class="form-control" id="gasaLibreImpurezas" >
                    @foreach($options as $option)
                        @if(!isset($institucione->gasaLibreImpurezas))
                            <option {{ old('gasaLibreImpurezas') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->gasaLibreImpurezas === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('gasaLibreImpurezas', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col-md-4"></div>
            <div class="form-group {{ $errors->has('gasaLibreServicioCortadoDoblado') ? 'text-danger' : ''}} col-md-4">
                <label for="gasaLibreServicioCortadoDoblado" class="control-label">Servicio de cortado y doblado</label>
                <select name="gasaLibreServicioCortadoDoblado" class="form-control" id="gasaLibreServicioCortadoDoblado" >
                    @foreach($options as $option)
                        @if(!isset($institucione->gasaLibreServicioCortadoDoblado))
                            <option {{ old('gasaLibreServicioCortadoDoblado') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->gasaLibreServicioCortadoDoblado === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('gasaLibreServicioCortadoDoblado', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row border border-default" style="margin: 5px; padding: 5px">
            <h3>Barbijo</h3>   
            <div class="form-group {{ $errors->has('barbijoComodidadRostro') ? 'text-danger' : ''}} col-md-3">
                <label for="barbijoComodidadRostro" class="control-label">Comodidad en el rostro</label>
                <select name="barbijoComodidadRostro" class="form-control" id="barbijoComodidadRostro" >
                    @foreach($options as $option)
                        @if(!isset($institucione->barbijoComodidadRostro))
                            <option {{ old('barbijoComodidadRostro') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->barbijoComodidadRostro === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('barbijoComodidadRostro', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('barbijoFacilRespiracion') ? 'text-danger' : ''}} col-md-3">
                <label for="barbijoFacilRespiracion" class="control-label">F&aacutecil respiraci&oacuten</label>
                <select name="barbijoFacilRespiracion" class="form-control" id="barbijoFacilRespiracion" >
                    @foreach($options as $option)
                        @if(!isset($institucione->barbijoFacilRespiracion))
                            <option {{ old('barbijoFacilRespiracion') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->barbijoFacilRespiracion === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('barbijoFacilRespiracion', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('barbijoHipoalergenico') ? 'text-danger' : ''}} col-md-3">
                <label for="barbijoHipoalergenico" class="control-label">Hipoalerg&eacutenico</label>
                <select name="barbijoHipoalergenico" class="form-control" id="barbijoHipoalergenico" >
                    @foreach($options as $option)
                        @if(!isset($institucione->barbijoHipoalergenico))
                            <option {{ old('barbijoHipoalergenico') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->barbijoHipoalergenico === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('barbijoHipoalergenico', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('barbijoBarraFijacionNariz') ? 'text-danger' : ''}} col-md-3">
                <label for="barbijoBarraFijacionNariz" class="control-label">Barra fijaci&oacuten en la nariz</label>
                <select name="barbijoBarraFijacionNariz" class="form-control" id="barbijoBarraFijacionNariz" >
                    @foreach($options as $option)
                        @if(!isset($institucione->barbijoBarraFijacionNariz))
                            <option {{ old('barbijoBarraFijacionNariz') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->barbijoBarraFijacionNariz === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('barbijoBarraFijacionNariz', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="row border border-default" style="margin: 5px; padding: 5px">
            <h3>Guantes Quir&uacutergicos</h3>   
            <div class="form-group {{ $errors->has('guanteElasticidad') ? 'text-danger' : ''}} col-md-3">
                <label for="guanteElasticidad" class="control-label">Elasticidad</label>
                <select name="guanteElasticidad" class="form-control" id="guanteElasticidad" >
                    @foreach($options as $option)
                        @if(!isset($institucione->guanteElasticidad))
                            <option {{ old('guanteElasticidad') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->guanteElasticidad === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('guanteElasticidad', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('guantePresenciaTalco') ? 'text-danger' : ''}} col-md-3">
                <label for="guantePresenciaTalco" class="control-label">Presencia de talco</label>
                <select name="guantePresenciaTalco" class="form-control" id="guantePresenciaTalco" >
                    @foreach($options as $option)
                        @if(!isset($institucione->guantePresenciaTalco))
                            <option {{ old('guantePresenciaTalco') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->guantePresenciaTalco === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('guantePresenciaTalco', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('guanteSuperficieRugosa') ? 'text-danger' : ''}} col-md-3">
                <label for="guanteSuperficieRugosa" class="control-label">Superficie Rugosa</label>
                <select name="guanteSuperficieRugosa" class="form-control" id="guanteSuperficieRugosa" >
                    @foreach($options as $option)
                        @if(!isset($institucione->guanteSuperficieRugosa))
                            <option {{ old('guanteSuperficieRugosa') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->guanteSuperficieRugosa === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('guanteSuperficieRugosa', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('guanteResistenciaUso') ? 'text-danger' : ''}} col-md-3">
                <label for="guanteResistenciaUso" class="control-label">Resistencia uso</label>
                <select name="guanteResistenciaUso" class="form-control" id="guanteResistenciaUso" >
                    @foreach($options as $option)
                        @if(!isset($institucione->guanteResistenciaUso))
                            <option {{ old('guanteResistenciaUso') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->guanteResistenciaUso === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('guanteResistenciaUso', '<p class="help-block">:message</p>') !!}
            </div>
        </div>    
        <div class="row border border-default" style="margin: 5px; padding: 5px">
            <h3>Guantes de Examinaci&oacuten</h3>
            <div class="form-group {{ $errors->has('guanteExaminacionElasticidad') ? 'text-danger' : ''}} col-md-4">
                <label for="guanteExaminacionElasticidad" class="control-label">Elasticidad</label>
                <select name="guanteExaminacionElasticidad" class="form-control" id="guanteExaminacionElasticidad" >
                    @foreach($options as $option)
                        @if(!isset($institucione->guanteExaminacionElasticidad))
                            <option {{ old('guanteExaminacionElasticidad') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->guanteExaminacionElasticidad === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('guanteExaminacionElasticidad', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('guanteExaminacionPresenciaTalco') ? 'text-danger' : ''}} col-md-4">
                <label for="guanteExaminacionPresenciaTalco" class="control-label">Presencia de talco</label>
                <select name="guanteExaminacionPresenciaTalco" class="form-control" id="guanteExaminacionPresenciaTalco" >
                    @foreach($options as $option)
                        @if(!isset($institucione->guanteExaminacionPresenciaTalco))
                            <option {{ old('guanteExaminacionPresenciaTalco') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->guanteExaminacionPresenciaTalco === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('guanteExaminacionPresenciaTalco', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('guanteExaminacionResistenciaUso') ? 'text-danger' : ''}} col-md-4">
                <label for="guanteExaminacionResistenciaUso" class="control-label">Resistencia de uso</label>
                <select name="guanteExaminacionResistenciaUso" class="form-control" id="guanteExaminacionResistenciaUso" >
                    @foreach($options as $option)
                        @if(!isset($institucione->guanteExaminacionResistenciaUso))
                            <option {{ old('guanteExaminacionResistenciaUso') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->guanteExaminacionResistenciaUso === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('guanteExaminacionResistenciaUso', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="row border border-default" style="margin: 5px; padding: 5px">
            <h3>Jeringas</h3>    
            <div class="form-group {{ $errors->has('jeringaEmpaquePrimario') ? 'text-danger' : ''}} col">
                <label for="jeringaEmpaquePrimario" class="control-label">Empaque primario hermético</label>
                <select name="jeringaEmpaquePrimario" class="form-control" id="jeringaEmpaquePrimario" >
                    @foreach($options as $option)
                        @if(!isset($institucione->jeringaEmpaquePrimario))
                            <option {{ old('jeringaEmpaquePrimario') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->jeringaEmpaquePrimario === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('jeringaEmpaquePrimario', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('jeringaFiltracionAguja') ? 'text-danger' : ''}} col">
                <label for="jeringaFiltracionAguja" class="control-label">Filtraci&oacuten aguja</label>
                <select name="jeringaFiltracionAguja" class="form-control" id="jeringaFiltracionAguja" >
                    @foreach($options as $option)
                        @if(!isset($institucione->jeringaFiltracionAguja))
                            <option {{ old('jeringaFiltracionAguja') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->jeringaFiltracionAguja === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('jeringaFiltracionAguja', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('jeringaFiltracionEmbolo') ? 'text-danger' : ''}} col">
                <label for="jeringaFiltracionEmbolo" class="control-label">Filtraci&oacuten embolo</label>
                <select name="jeringaFiltracionEmbolo" class="form-control" id="jeringaFiltracionEmbolo" >
                    @foreach($options as $option)
                        @if(!isset($institucione->jeringaFiltracionEmbolo))
                            <option {{ old('jeringaFiltracionEmbolo') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->jeringaFiltracionEmbolo === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('jeringaFiltracionEmbolo', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('jeringaCalidadAguja') ? 'text-danger' : ''}} col">
                <label for="jeringaCalidadAguja" class="control-label">Calidad de aguja</label>
                <select name="jeringaCalidadAguja" class="form-control" id="jeringaCalidadAguja" >
                    @foreach($options as $option)
                        @if(!isset($institucione->jeringaCalidadAguja))
                            <option {{ old('jeringaCalidadAguja') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->jeringaCalidadAguja === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('jeringaCalidadAguja', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('jeringaImpresionEscala') ? 'text-danger' : ''}} col">
                <label for="jeringaImpresionEscala" class="control-label">Impresi&oacuten escala</label>
                <select name="jeringaImpresionEscala" class="form-control" id="jeringaImpresionEscala" >
                    @foreach($options as $option)
                        @if(!isset($institucione->jeringaImpresionEscala))
                            <option {{ old('jeringaImpresionEscala') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->jeringaImpresionEscala === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('jeringaImpresionEscala', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="row border border-default" style="margin: 5px; padding: 5px">
            <h3>Equipos de suero</h3>    
            <div class="form-group {{ $errors->has('equipoSueroEmpaque') ? 'text-danger' : ''}} col">
                <label for="equipoSueroEmpaque" class="control-label">Empaque primario hermético</label>
                <select name="equipoSueroEmpaque" class="form-control" id="equipoSueroEmpaque" >
                    @foreach($options as $option)
                        @if(!isset($institucione->equipoSueroEmpaque))
                            <option {{ old('equipoSueroEmpaque') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->equipoSueroEmpaque === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('equipoSueroEmpaque', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('equipoSueroCamaraGoteo') ? 'text-danger' : ''}} col">
                <label for="equipoSueroCamaraGoteo" class="control-label">C&aacutemara goteo</label>
                <select name="equipoSueroCamaraGoteo" class="form-control" id="equipoSueroCamaraGoteo" >
                    @foreach($options as $option)
                        @if(!isset($institucione->equipoSueroCamaraGoteo))
                            <option {{ old('equipoSueroCamaraGoteo') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->equipoSueroCamaraGoteo === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('equipoSueroCamaraGoteo', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="row border border-default" style="margin: 5px; padding: 5px">
            <h3>Venda gasa</h3>    
            <div class="form-group {{ $errors->has('vendaGasaCalidadTejido') ? 'text-danger' : ''}} col">
                <label for="vendaGasaCalidadTejido" class="control-label">Calidad del tejido homogéneo</label>
                <select name="vendaGasaCalidadTejido" class="form-control" id="vendaGasaCalidadTejido" >
                    @foreach($options as $option)
                        @if(!isset($institucione->vendaGasaCalidadTejido))
                            <option {{ old('vendaGasaCalidadTejido') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->vendaGasaCalidadTejido === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('vendaGasaCalidadTejido', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('vendaGasaMemoria') ? 'text-danger' : ''}} col">
                <label for="vendaGasaMemoria" class="control-label">Memoria</label>
                <select name="vendaGasaMemoria" class="form-control" id="vendaGasaMemoria" >
                    @foreach($options as $option)
                        @if(!isset($institucione->vendaGasaMemoria))
                            <option {{ old('vendaGasaMemoria') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->vendaGasaMemoria === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('vendaGasaMemoria', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('vendaGasaBordes') ? 'text-danger' : ''}} col">
                <label for="vendaGasaBordes" class="control-label">Bordes reforzados</label>
                <select name="vendaGasaBordes" class="form-control" id="vendaGasaBordes" >
                    @foreach($options as $option)
                        @if(!isset($institucione->vendaGasaBordes))
                            <option {{ old('vendaGasaBordes') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->vendaGasaBordes === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('vendaGasaBordes', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="row border border-default" style="margin: 5px; padding: 5px">
            <h3>Venda el&aacutestica</h3>    
            <div class="form-group {{ $errors->has('vendaElasticaElasticidad') ? 'text-danger' : ''}} col">
                <label for="vendaElasticaElasticidad" class="control-label">Elasticidad</label>
                <select name="vendaElasticaElasticidad" class="form-control" id="vendaElasticaElasticidad" >
                    @foreach($options as $option)
                        @if(!isset($institucione->vendaElasticaElasticidad))
                            <option {{ old('vendaElasticaElasticidad') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->vendaElasticaElasticidad === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('vendaElasticaElasticidad', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('vendaElasticaCapacidadDistensión') ? 'text-danger' : ''}} col">
                <label for="vendaElasticaCapacidadDistensión" class="control-label">Capacidad de distensi&oacuten sin deformarse</label>
                <select name="vendaElasticaCapacidadDistensión" class="form-control" id="vendaElasticaCapacidadDistensión" >
                    @foreach($options as $option)
                        @if(!isset($institucione->vendaElasticaCapacidadDistensión))
                            <option {{ old('vendaElasticaCapacidadDistensión') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->vendaElasticaCapacidadDistensión === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('vendaElasticaCapacidadDistensión', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('vendaElasticaMemoria') ? 'text-danger' : ''}} col">
                <label for="vendaElasticaMemoria" class="control-label">Memoria</label>
                <select name="vendaElasticaMemoria" class="form-control" id="vendaElasticaMemoria" >
                    @foreach($options as $option)
                        @if(!isset($institucione->vendaElasticaMemoria))
                            <option {{ old('vendaElasticaMemoria') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->vendaElasticaMemoria === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('vendaElasticaMemoria', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('vendaElasticaCalidadTejido') ? 'text-danger' : ''}} col">
                <label for="vendaElasticaCalidadTejido" class="control-label">Calidad tejido</label>
                <select name="vendaElasticaCalidadTejido" class="form-control" id="vendaElasticaCalidadTejido" >
                    @foreach($options as $option)
                        @if(!isset($institucione->vendaElasticaCalidadTejido))
                            <option {{ old('vendaElasticaCalidadTejido') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->vendaElasticaCalidadTejido === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
                </select>
                {!! $errors->first('vendaElasticaCalidadTejido', '<p class="help-block">:message</p>') !!}
            </div>
        </div>   
    </div>
</div> 
<div class="card">
    <div class="card-header p-3 mb-2 bg-info text-white">
        <h4><span class="text-primary">2.-</span> Cumplimiento de tiempos de entrega acordados con el vendedor</h4>
    </div>
    <div class="card-body d-flex flex-column">
        <div class="form-group {{ $errors->has('cumplimiento') ? 'text-danger' : ''}} col-md-3 align-self-center">
            <select name="cumplimiento" class="form-control" id="cumplimiento" >
                @foreach($options as $option)
                    @if(!isset($institucione->cumplimiento))
                        <option {{ old('cumplimiento') == $option ? 'selected' : '' }} >{{$option}}</option>
                    @else
                        <option class="text-secondary" {{ $institucione->cumplimiento === $option ? 'selected' : ''}}>{{$option}}</option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('cumplimiento', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header p-3 mb-2 bg-info text-white">
        <h4><span class="text-primary">3.-</span> La <strong>calidad</strong> de nuestros productos en comparación con otros productos semejantes de la competencia
    </div>
    <div class="card-body d-flex flex-column">    
    <div class="form-group {{ $errors->has('calidadProducto') ? 'text-danger' : ''}} col-md-3 align-self-center">
        <select name="calidadProducto" class="form-control" id="calidadProducto" >
            @foreach($options as $option)
                @if(!isset($institucione->calidadProducto))
                    <option {{ old('calidadProducto') == $option ? 'selected' : '' }} >{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $institucione->calidadProducto === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('calidadProducto', '<p class="help-block">:message</p>') !!}
    </div>
    </div>
</div>
<div class="card">
    <div class="card-header p-3 mb-2 bg-info text-white">
        <h4><span class="text-primary">4.-</span> <strong>Precio</strong> respecto al precio de la competencia.
    </div>
    <div class="card-body d-flex flex-column">
    <div class="form-group {{ $errors->has('precio') ? 'text-danger' : ''}} col-md-3 align-self-center">
        <select name="precio" class="form-control" id="precio" >
            @foreach($options as $option)
                @if(!isset($institucione->precio))
                    <option {{ old('precio') == $option ? 'selected' : '' }} >{{$option}}</option>
                @else
                    <option class="text-secondary" {{ $institucione->precio === $option ? 'selected' : ''}}>{{$option}}</option>
                @endif
            @endforeach
        </select>
        {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
    </div>
    </div>
</div>
<div class="card">
    <div class="card-header p-3 mb-2 bg-info text-white">
        <h4><span class="text-primary">5.-</span> <strong>Atención y gestión</strong> ante sus reclamos (si los ha tenido)
    </div>
    <div class="card-body d-flex flex-column">    
        <div class="d-flex form-group {{ $errors->has('atencionGestionReclamos') ? 'text-danger' : ''}} col-md-3 align-self-center" style="margin:5px">
            <select name="atencionGestionReclamos" class="form-control" id="atencionGestionReclamos" >
                    @foreach($options as $option)
                        @if(!isset($institucione->atencionGestionReclamos))
                            <option {{ old('atencionGestionReclamos') == $option ? 'selected' : '' }} >{{$option}}</option>
                        @else
                            <option class="text-secondary" {{ $institucione->atencionGestionReclamos === $option ? 'selected' : ''}}>{{$option}}</option>
                        @endif
                    @endforeach
            </select>
            {!! $errors->first('atencionGestionReclamos', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header p-3 mb-2 bg-info text-white">
        <h4><span class="text-primary">6.- </span><strong>Atención y amabilidad</strong> del personal de Protex
 (vendedor, personal  de almacen, cobrador)
    </div>
    <div class="card-body d-flex flex-column">    
    <div class="d-flex form-group {{ $errors->has('atencionAmabilidad') ? 'text-danger' : ''}} col-md-3 align-self-center" style="margin:5px">
        <select name="atencionAmabilidad" class="form-control" id="atencionAmabilidad" >
                @foreach($options as $option)
                    @if(!isset($institucione->atencionAmabilidad))
                        <option {{ old('atencionAmabilidad') == $option ? 'selected' : '' }} >{{$option}}</option>
                    @else
                        <option class="text-secondary" {{ $institucione->atencionAmabilidad === $option ? 'selected' : ''}}>{{$option}}</option>
                    @endif
                @endforeach
        </select>
        </div>
        {!! $errors->first('atencionAmabilidad', '<p class="help-block">:message</p>') !!}
    </div>
    </div>
</div>
<div class="form-group {{ $errors->has('sugerencias') ? 'text-danger' : ''}}" style="margin: 15px; padding: 5px>
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
<div class="form-group {{ $errors->has('celular') ? 'alert alert-danger' : ''}}" style="margin: 15px; padding: 5px>
    <label for="celular" class="control-label">Favor de suministrarnos su # de Celular para podernos comunicar con usted</label>
    <input class="form-control" name="celular" type="text" id="celular" value="{{ isset($institucione->celular) ? $institucione->celular : old('celular')}}" >
    {!! $errors->first('celular', '<p class="help-block">:message</p>') !!}
</div>
<br/>
<div class="form-group" style="margin: 15px; padding: 5px">
    <div class="d-flex flex-column">
        <input class="btn btn-primary align-self-center" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Enviar' }}">
    </div>
</div>
