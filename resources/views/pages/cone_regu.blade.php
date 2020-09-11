@extends('layouts.app', ['activePage' => 'cone', 'titlePage' => __('Conexion')])

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
      	 <div class="col-md-12">
			
      		<div class="card card-nav-tabs text-center">
				  <div class="card-header card-header-success">
				    Requisito 
				  </div>
				  <div class="card-body">
				  	<h4 class="card-title">{{$regulacion->name}}</h4>
				    <div class="dropdown">
	                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                      Seleccione
	                    </button>
	                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	                      @foreach($requisito as $requi)
	                      <a class="dropdown-item" href="requi/{{$requi->id}}">{{$requi->item}}</a>
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