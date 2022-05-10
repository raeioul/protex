<div class="form-group {{ $errors->has('product_id') ? 'has-error' : ''}}">
    {{  Form::select('product_id',$productos,null,['class' => 'required form-control select2','id'=>'product_id']) }}
</div>
<div class="form-group {{ $errors->has('operation_id') ? 'has-error' : ''}}">
    <label for="operation_id" class="control-label">{{ 'Operation Id' }}</label>
    <input class="form-control" name="operation_id" type="number" id="operation_id" value="{{$item->id}}" >
    {!! $errors->first('operation_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{Auth::user()->id}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
