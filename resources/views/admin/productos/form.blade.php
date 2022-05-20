<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($producto->name) ? $producto->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}} d-none">
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{Auth::user()->id}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('provider_id') ? 'has-error' : ''}}">
    <label for="provider_id" class="control-label">{{ 'Proveedor' }}</label>
    {{  Form::select('provider_id',$providers,null,['class' => 'required form-control select2','id'=>'provider_id']) }}
</div>

<br/>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Guardar' }}">
</div>
