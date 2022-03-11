@extends('layouts.encuestas')
@section('content')
	<div class="jumbotron text-center">
	  <h1 class="display-3">¡Gracias!</h1>
	  <p class="lead"><strong>Si tiene algún problema</strong></p>
	  <p> No dude en contactarse con nosotros.</p>
	  
	  <p class="lead">
	    <a class="btn btn-primary btn-sm" href="{{ url('/') }}">
	        {{ config('app.name', 'Laravel') }}
		</a>
	  </p>
	</div>
@endsection
