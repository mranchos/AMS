@extends('layouts.app', ['activePage' => 'enti', 'titlePage' => __('Entidades ->  Agregar')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Agregar entidad</h4>
           
          </div>
          <div class="card-body">
            <div class="table-responsive">
              

            <form action="store" method="POST">
              @csrf

              <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="name" placeholder="Ingresa el nombre entidad.">
              </div>

              
              <div class="form-check form-check-radio">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="type" value="Institucion bancaria" checked>
                      Institucion bancaria
                      <span class="circle">
                          <span class="check"></span>
                      </span>
                  </label>
              </div>
              <div class="form-check form-check-radio">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="type" value="Sociedad financiera" >
                      Sociedad financiera
                      <span class="circle">
                          <span class="check"></span>
                      </span>
                  </label>
              </div>
              <div class="form-check form-check-radio">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="type" value="Compañia almacenadora" >
                      Compañia almacenadora
                      <span class="circle">
                          <span class="check"></span>
                      </span>
                  </label>
              </div>
              <div class="form-check form-check-radio">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="type" value="Compañia de seguros" >
                      Compañia de seguros
                      <span class="circle">
                          <span class="check"></span>
                      </span>
                  </label>
              </div>
              <div class="form-check form-check-radio">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="type" value="Casa de cambio" >
                      Casa de cambio
                      <span class="circle">
                          <span class="check"></span>
                      </span>
                  </label>
              </div>
              <div class="form-check form-check-radio">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="type" value="Casa de bolsa" >
                      Casa de bolsa
                      <span class="circle">
                          <span class="check"></span>
                      </span>
                  </label>
              </div>
              <div class="form-check form-check-radio">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="type" value="Off Shore" >
                      Off Shore
                      <span class="circle">
                          <span class="check"></span>
                      </span>
                  </label>
              </div>
              <div class="form-check form-check-radio">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="type" value="Tarjetas de credito" >
                      Tarjetas de credito
                      <span class="circle">
                          <span class="check"></span>
                      </span>
                  </label>
              </div>
              <div class="form-check form-check-radio">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="type" value="Otras instituciones" >
                      Otras instituciones
                      <span class="circle">
                          <span class="check"></span>
                      </span>
                  </label>
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