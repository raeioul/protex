<label for="pago" class="control-label">{{ 'Pago' }}</label>
<div class="btn-group"> 
    <input class="form-control" name="pago" type="number" id="pago" value="{{ isset($item->pago) ? $item->pago : ''}}" >
    {!! $errors->first('pago', '<p class="help-block">:message</p>') !!}
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}} d-none">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{Auth::user()->id}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('operation_id') ? 'has-error' : ''}} d-none">
    <label for="operation_id" class="control-label">{{ 'Operation Id' }}</label>
    <input class="form-control" name="operation_id" type="number" id="operation_id" value="{{isset($item->operation_id)?$item->operation_id:$item->id}}" >
    {!! $errors->first('operation_id', '<p class="help-block">:message</p>') !!}
</div>
    <button>
        <i class="fa fa-plus" aria-hidden="true"></i>
    </button>
</div>