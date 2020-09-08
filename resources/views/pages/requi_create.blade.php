@extends('layouts.app', ['activePage' => 'requi', 'titlePage' => __('Regulaciones -> Requisitos -> Agregar')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Agregar requisito</h4>
           
          </div>
          <div class="card-body">
            <div class="table-responsive">
              

            <form action="store" method="POST">
              @csrf

              <div class="form-group">
			    <input type="hidden" class="form-control" name="regulationid" value="{{$regulacion}}">
			  </div>
              <div class="form-group">
			    <label>Item</label>
			    <input type="text" class="form-control" name="item" placeholder="Ingresa la entidad emisora de la ley o regulacion.">
			  </div>
			  <div class="form-group">
			    <label>Nombre</label>
			    <input type="text" class="form-control" name="name" placeholder="Ingresa el nombre de la ley o regulacion.">
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