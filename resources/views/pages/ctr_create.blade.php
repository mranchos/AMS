@extends('layouts.app', ['activePage' => 'ctr', 'titlePage' => __('Controles -> Agregar')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Agregar control</h4>
           
          </div>
          <div class="card-body">
            <div class="table-responsive">
              

            <form action="store" method="POST">
              @csrf

              <div class="form-group">
      			    <label>Codigo</label>
      			    <input type="text" class="form-control" name="code" placeholder="Ingresa el codigo del control.">
      			  </div>
      			  <div class="form-group">
      			    <label>Nombre</label>
      			    <input type="text" class="form-control" name="name" placeholder="Ingresa el nombre del control.">
      			  </div>

              <div class="form-group">
                <label>Descripcion</label>
                <textarea class="form-control" name="description" placeholder="Ingresa la descripcion del control." rows="10"></textarea>
              </div>

              <div class="form-group">
                <label>Recursos</label>
                <input type="text" class="form-control" name="resourses" placeholder="Ingresa los recursos separados por guiones.">
              </div>

              <div class="form-group">
                <label>Presupuesto</label>
                <input type="text" class="form-control" name="budget" placeholder="Ingresa el presupuesto.">
              </div>
      			  
      			  <div class="form-group">
                <label>Horas hombre</label>
                <input type="text" class="form-control" name="hours" placeholder="Ingresa la cantidad de horas hombre para cumplir con el control.">
              </div>

              <div class="form-group">
                <label>Ultima actualizacion</label>
                <input type="text" class="form-control" name="lastupdate" placeholder="Ingresa la fecha de creacion del control.">
              </div>

              <div class="form-group">
                <label>Prioridad</label>
                <input type="text" class="form-control" name="impact" placeholder="Ingresa la prioridad para el control 1-bajo 2-medio 3-alto.">
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