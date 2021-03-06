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
	        @if (Auth::user()->hasRole('accountant'))            
	        	<i class="fa fa-user-secret" aria-hidden="true"></i> Contador
	        @endif
	        @if (Auth::user()->hasRole('importer'))            
	        	<i class="fa fa-user-secret" aria-hidden="true"></i> Importador
	        @endif
	    @else
	    @endif       
    </div>
    <div class="card-body">
    	@if (!Auth::guest())
			<ul class="navbar-nav">
			@if (Auth::user()->hasRole('pollster'))
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
			@endif
			@if (Auth::user()->hasRole('admin')||Auth::user()->hasRole('importer')||Auth::user()->hasRole('accountant'))
				<li class="nav-item">
			       <a class="dropdown-item" href="{{ url('admin/operations') }}" title="Distribuidores">
			       	<i class="fas fa-glasses" aria-hidden="true"></i>
						Operaciones
			       </a>
			    </li>
			    <li class="nav-item">
			       <a class="dropdown-item" href="{{ url('admin/providers') }}" title="Distribuidores">
			       	<i class="fas fa-cog" aria-hidden="true"></i>
						Proveedores
			       </a>
			    </li>
			    <li class="nav-item">
			       <a class="dropdown-item" href="{{ url('admin/productos') }}" title="Distribuidores">
			       	<i class="fas fa-tags" aria-hidden="true"></i>
						Productos
			       </a>
			    </li>
			@endif
			@if (Auth::user()->hasRole('importer'))
				<li class="nav-item">
			       <a class="dropdown-item" href="{{ url('admin/status') }}" title="Distribuidores">
			       	<i class="fas fa-rss" aria-hidden="true"></i>
						Status
			       </a>
			    </li>
			@endif
			@if (Auth::user()->hasRole('CEO'))
				<li class="nav-item">
			       <a class="dropdown-item" href="{{ url('admin/operations') }}" title="Distribuidores">
			       	<i class="fas fa-glasses" aria-hidden="true"></i>
						Operaciones
			       </a>
			    </li>
			@endif
			</ul>
		@else
		@endif
    </div>
  </div>
  @endif
</div>
