<input name="cancelar" 
    value="{{$item->isCancel()?0:1}}" class="d-none">
<div class="form-group {{ $errors->has('operation_id') ? 'has-error' : ''}} d-none">
    <label for="operation_id" class="control-label">{{ 'Operation Id' }}</label>
    <input class="form-control" name="operation_id" type="number" id="operation_id" value="{{ isset($cancelacione->operation_id) ? $cancelacione->operation_id : $item->id}}" >
    {!! $errors->first('operation_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}} d-none">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($cancelacione->user_id) ? $cancelacione->user_id : Auth::user()->id}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn {{$item->isCancel()?'btn-success':'btn-danger'}}
        btn-sm" type="submit" value="{{$item->isCancel()?'¿Reestablecer?':'¿Cancelar?'}}" onclick="return confirm(&quot;¿Está seguro?&quot;)">
</div>
