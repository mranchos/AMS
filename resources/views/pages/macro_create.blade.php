@extends('layouts.app', ['activePage' => 'macro', 'titlePage' => __('Regulaciones -> Macro -> Agregar')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Agregar regulación</h4>
           
          </div>
          <div class="card-body">
            <div class="table-responsive">
              

            <form action="store" method="POST">
              @csrf
			  <div class="form-group">
			    <label>Nombre</label>
			    <input type="text" class="form-control" name="name" placeholder="Ingresa el nombre de la ley o regulacion.">
			  </div>
			  <div class="form-group">
			    <label>Emisor</label>
			    <input type="text" class="form-control" name="emisor" placeholder="Ingresa la entidad emisora de la ley o regulacion.">
			  </div>
			  <div class="form-group">
			    <label>Fecha</label>
			    <input type="text" class="form-control" name="date" placeholder="Ingresa la fecha de emision.">
			  </div>
			  <div class="form-group">
			    <label>Descripcion</label>
			    <textarea class="form-control" name="description" placeholder="Ingresa la descripcion de la ley o regulacion." rows="10"></textarea>
			  </div>

			  <button type="submit" class="btn btn-success">Agregar</button>
			</form>


            </div>
          </div>

        </div>
      </div>
      

    </div>
  </div>
</div>




@endsection