<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Nombre Operación' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($operation->name) ? $operation->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="row">
  <div class="form-group {{ $errors->has('numeroOperacion') ? 'has-error' : ''}} col-md-6">
      <label for="numeroOperacion" class="control-label">{{ 'Número Operación' }}</label>
      <input class="form-control" name="numeroOperacion" type="text" id="numeroOperacion" value="{{ isset($operation->numeroOperacion) ? $operation->numeroOperacion : ''}}" >
      {!! $errors->first('numeroOperacion', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="form-group {{ $errors->has('numeroFactura') ? 'has-error' : ''}} col-md-6">
      <label for="numeroFactura" class="control-label">{{ 'Número Factura' }}</label>
      <input class="form-control" name="numeroFactura" type="text" id="numeroFactura" value="{{ isset($operation->numeroFactura) ? $operation->numeroFactura : ''}}" >
      {!! $errors->first('numeroFactura', '<p class="help-block">:message</p>') !!}
  </div>
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
    <div class="form-group {{ $errors->has('proveedor') ? 'has-error' : ''}} col-md-4">
      <label for="proveedor" class="control-label">{{ 'Proveedor' }}</label>
        <select class="form-control" name="proveedor" id="proveedor">
          
          @foreach($providers as $key => $provider)
              <option value="{{ $key }}" {{isset($operation->proveedor)?
                                            $operation->proveedor==$key?
                                              'selected':''
                                              :''}}> {{ $provider }} </option>
          @endforeach 
        </select>
    </div>
    <div class="form-group wrapper {{ $errors->has('producto') ? 'has-error' : ''}} col-md-8">
      <label for="productos" class="control-label">{{ 'Productos' }}</label>
      <div class="col-md-3 form-group">
        <button class="add_field_button form-group" style="margin-left: 0px;"><i class="fa fa-plus" aria-hidden="true"></i> Agregar
        </button>
        <br/>
        <br/>
      </div>
    </div>
</div>
<div class="row">
  <div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}} col-md-6">
      <label for="precio" class="control-label">{{ 'Costo' }}</label>
      <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($operation->precio) ? $operation->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="form-group {{ $errors->has('etd') ? 'has-error' : ''}} col-md-3">
      <label for="etd" class="control-label">{{ 'Etd' }}</label>
      <input class="form-control" name="etd" type="date" id="etd" value="{{ isset($operation->etd) ? $operation->etd : ''}}" >
      {!! $errors->first('etd', '<p class="help-block">:message</p>') !!}
  </div>
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}} d-none">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{Auth::user()->id}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<br/>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

<script type="text/javascript">
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".wrapper"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    var proveedor= document.getElementById('proveedor').value;
    $('#proveedor').change(function(){
      $('.productos').val(null).trigger('change');
      $('.productos').empty().trigger('change')
      proveedor= document.getElementById('proveedor').value;
    });
    $('.productos').select2({
      placeholder: 'Seleccione un producto...',
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
        },          
      processResults: function (data) {
        return {
          results: data
      };
      },
      cache: true
      }
    });
    $(document).ready(function() {
      var cantidades = '{{isset($operation->cantidades)?$operation->cantidades:null}}';
      var productos = '{{isset($operation->productos)?$operation->productos:null}}';
      if(cantidades.length>0) {
        cantidades = cantidades.split(',');
        productos = productos.split(',');
        for (let i=0; i<cantidades.length;i++) {
          $(wrapper).append('<div class="row productos-parent form-group"><div class="col-6 input-group mb-3">'+
            '<select class="productos form-select" name="productos[]">'
            +`<option selected>${productos[i]}</option>`
            +'</select>'
            +`<input placeholder="¿Cantidad?" name="cantidades[]" class="cantidad form-control" style="margin:0 5px 0 5px" value="${cantidades[i]}">`
            +'<a href="#" class="remove_field"><i class="fa fa-window-close" aria-hidden="true"></i></a></div></div>'); //add input box
        }
      }
      $('.productos').select2({
      placeholder: 'Seleccione un producto...',
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
        },          
      processResults: function (data) {
        return {
          results: data
      };
      },
      cache: true
      }
    });   
    });
   
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row productos-parent form-group"><div class="col-6 input-group mb-3">'+

            '<select class="productos form-select" name="productos[]" style="vertical-align: bottom;"></select>'

            +'<input placeholder="¿Cantidad?" name="cantidades[]" class="cantidad form-control" style="margin:0 5px 0 5px"><a href="#" class="remove_field"><i class="fa fa-window-close" aria-hidden="true"></i></a></div></div>'); //add input box
            
            $('.productos').select2({
              placeholder: 'Seleccione un producto...',
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
            },          
                processResults: function (data) {
                return {
                  results: data
                };
            },
              cache: true
            }
            });
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parents('.productos-parent').remove(); x--;
    })
</script>
