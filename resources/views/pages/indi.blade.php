@extends('layouts.app', ['activePage' => 'indi', 'titlePage' => __('Indicadores')])

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
      	 <div class="col-md-12">
			
      		<div class="card card-nav-tabs text-center">
				  <div class="card-header card-header-danger">
				    Evaluacion
				  </div>
				  <div class="card-body">
				    <div class="dropdown">
	                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                      Seleccione
	                    </button>
	                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	                      @foreach($datos as $eva)
	                      <a class="dropdown-item" href="indi/{{$eva->id}}">{{$eva->id}}  {{$eva->entidad}} {{$eva->regulacion}}</a>
	                      @endforeach
	                    </div>
                  	</div>
                  </div>
				 
			</div>

		  </div>	
		</div>
	</div>
</div>		

@endsection