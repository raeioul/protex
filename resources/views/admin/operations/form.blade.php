<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Nombre Operación' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($operation->name) ? $operation->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<br/>
<div class="form-group col-md-offset-4">
  {!! Form::label('image', 'Foto Factura:', ['class' => 'col-md-4 control-label']) !!}
  <div class="col-md-offset-4" >
    {!! Form::file('image', array('class' => 'image')) !!}
  </div>
  @if(isset($operation))
  @if(\File::exists(public_path('facturas/'.$operation->user_id.'.'.strtotime($operation->created_at).'.jpg'))) 
  	<a href="{{url('facturas/'.$operation->user_id.'.'.strtotime($operation->created_at).'.jpg')}}">
  		<img src="{{url('facturas/'.$operation->user_id.'.'.strtotime($operation->created_at).'.jpg')}}" class="img-thumbnail" alt="Responsive image"/>
  	</a>
  @endif
  @endif
</div>
<br/>
<div class="row">
		<div class="form-group {{ $errors->has('productos') ? 'has-error' : ''}} col-md-6">
		 	<label for="proveedor" class="control-label">{{ 'Proveedor' }}</label>
			<select class="form-control" name="proveedor" id="proveedor">
		  		@foreach($providers as $key => $provider)
	        		<option value="{{ $key }}"> {{ $provider }} </option>
	    		@endforeach 
    		</select>
			<a href="#" onclick='window.open("{{url('admin/providers')}}");return false;' title="Agregar">
	      		<button class="btn btn-basic btn-xs">
			        <i class="fa fa-plus" aria-hidden="true">
			        </i> Agregar
	      		</button>
	    	</a>
		</div>
		<div class="form-group {{ $errors->has('producto') ? 'has-error' : ''}} col-md-6">
			{!! Form::label('productos', 'Productos:', ['class' => 'control-label']) !!}
		  	<select class="productos form-control" name="productos[]" multiple="multiple">
		  		@if(isset($productos))
			  		@foreach($productos as $key => $producto)
	        			<option value="{{ $producto }}" selected="true"> {{ $producto }} </option>
	    			@endforeach 
    			@endif
		    </select>
		    <a href="#" onclick='window.open("{{url('/admin/productos')}}");return false;' title="Agregar">
		      	<button class="btn btn-basic btn-xs">
			        <i class="fa fa-plus" aria-hidden="true">
			        </i> Agregar
		      	</button>
	    	</a>
		</div>
</div>
<div class="row">
	<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}} col-md-6">
    	<label for="precio" class="control-label">{{ 'Precio' }}</label>
    	<input class="form-control" name="precio" type="number" id="precio" value="{{ isset($operation->precio) ? $operation->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
	</div>
	<div class="form-group {{ $errors->has('currency') ? 'has-error' : ''}} col-md-3">
		<label for="currency" class="control-label">{{ 'Moneda' }}</label>
		{{  Form::select('currency', array('$US'=>'$US', 'Bs.'=>'Bs.'), 
		isset($operation)?
			$operation->currency?
				   $operation->currency:null
			:null, ['class' => 'required form-control select2','name'=>'currency',  'id' => 'currency']) }}
	</div>
	<div class="form-group {{ $errors->has('etd') ? 'has-error' : ''}} col-md-3">
	    <label for="etd" class="control-label">{{ 'Etd' }}</label>
	    <input class="form-control" name="etd" type="date" id="etd" value="{{ isset($operation->etd) ? $operation->etd : ''}}" >
	    {!! $errors->first('etd', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{Auth::user()->id}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<br/>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
<script type="text/javascript">
	
  var proveedor= document.getElementById('proveedor').value;
  $('#proveedor').change(function(){
  	proveedor= document.getElementById('proveedor').value;
  	$('.productos').val(null).trigger('change');
  });


  
  $('.productos').select2({
    placeholder: 'Seleccione...',
    ajax: 
    {
      url: '{{url('admin/token')}}',
      dataType: 'json',
      delay: 250,
      data: function (params) {
      return {
      q: $.trim(params.term),
      proveedor: proveedor
    };
  }
                          ,          
                          processResults: function (data) {
    return {
      results: data
    };
  }
  ,
    cache: true
  }
  }
  );
</script>