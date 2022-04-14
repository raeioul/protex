<div class="col-md-2">
  @if (Auth::guest())
  @else
  <div class="card card-default card-flush">
    <div class="card-header">
    	@if (!Auth::guest())
	    	@if (Auth::user()->hasRole('admin'))            
	        	<i class="fa fa-user-secret" aria-hidden="true"></i> Administrador
	        @endif   
	        @if (Auth::user()->hasRole('user'))            
	        	<i class="fa fa-superpowers" aria-hidden="true"></i> User
	        @endif
	        @if (Auth::user()->hasRole('pollster'))            
	        	<i class="fa fa-user-secret" aria-hidden="true"></i> Encuestas
	        @endif
	    @else
	    @endif       
    </div>
    <div class="card-body">
    	@if (!Auth::guest())
			@if (Auth::user()->hasRole('pollster'))
			
			  <ul class="navbar-nav">
			    <li class="nav-item">
			      <a class="dropdown-item" href="{{ url('encuestas/instituciones') }}" title="Instituciones">
			      	<i class="fa fa-hospital" aria-hidden="true"></i>
Instituciones
			  	  </a>
			    </li>
			    <li class="nav-item">
			       <a class="dropdown-item" href="{{ url('encuestas/satisfacciones') }}" title="Distribuidores">
			       	<i class="fa fa-truck" aria-hidden="true"></i>
Distribuidores
			       </a>
			    </li>
			  </ul>
			
			@endif
		@else
		@endif
    </div>
  </div>
  @endif
</div>
