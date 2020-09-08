@extends('layouts.app', ['activePage' => 'perso', 'titlePage' => __('Personas -> Agregar')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Agregar persona</h4>
           
          </div>
          <div class="card-body">
            <div class="table-responsive">
              

            <form action="store" method="POST">
              @csrf

              <div class="form-group">
			           <input type="hidden" class="form-control" name="entidadid" value="{{$entidad}}">
			        </div>

              <div class="form-group">
      			    <label>Nombre</label>
      			    <input type="text" class="form-control" name="name" placeholder="Ingresa el nombre de la persona">
      			  </div>
      			  <div class="form-group">
      			    <label>Area</label>
      			    <input type="text" class="form-control" name="area" placeholder="Ingresa el area donde labora la persona">
      			  </div>

              <div class="form-group">
                <label>Cargo</label>
                <input type="text" class="form-control" name="charge" placeholder="Ingresa el cargo que tiene la persona">
              </div>

              <div class="form-group">
                <label>Correo</label>
                <input type="text" class="form-control" name="email" placeholder="Ingresa el correo de la persona">
              </div>
      			  
      			  <div class="form-group">
                <label>Telefono</label>
                <input type="text" class="form-control" name="phone" placeholder="Ingresa el telefono de la persona">
              </div>

              <div class="form-group">
                <label>Ubicacion</label>
                <input type="text" class="form-control" name="address" placeholder="Ingresa la direccion laboral de la persona">
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