<label for="name" class="text-center">{{ '¿Agregar Status?' }}</label>
<div class="btn-group">	
	{{  Form::select('name',$status,isset($item->name)?$item->name:null,['class' => 'required form-control select2','id'=>'provider_id']) }}
	<div class="form-group {{ $errors->has('operation_id') ? 'has-error' : ''}} d-none">
	    <label for="operation_id" class="control-label">{{ 'Operation Id' }}</label>
	    <input class="form-control" name="operation_id" type="number" id="operation_id" value="{{isset($item->operation_id)?$item->operation_id:$item->id}}" >
	    {!! $errors->first('operation_id', '<p class="help-block">:message</p>') !!}
	</div>
	<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}} d-none">
	    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
	    <input class="form-control" name="user_id" type="number" id="user_id" value="{{Auth::user()->id}}" >
	    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
	</div>
	<button>
		<i class="fa fa-plus" aria-hidden="true"></i>
	</button>
</div>