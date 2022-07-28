<label for="pago" class="control-label">{{ 'Pago' }}</label>
<div class="col-md-offset-4" >
    {!! Form::file('image', array('class' => 'image', 'multiple'=>'multiple')) !!}
    @if(isset($item))
    @if(\File::exists(public_path('pagos/'.$item->user_id.'.'.strtotime($item->created_at).'.jpg'))) 
        <a href="{{url('pagos/'.$item->user_id.'.'.strtotime($item->created_at).'.jpg')}}">
          <img src="{{url('pagos/'.$item->user_id.'.'.strtotime($item->created_at).'.jpg')}}" class="img-thumbnail" alt="Responsive image"/>
        </a>
    @endif
    @endif
</div>
<br/>
<div class="btn-group"> 
    <input class="form-control" name="pago" step="any" type="number" id="pago" value="{{ isset($item->pago) ? $item->pago : ''}}" >
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
    <button class="btn bt-sm btn-secondary">
        Pagar
    </button>
</div>