@extends('layouts.app', ['activePage' => 'acc', 'titlePage' => __('Plan de accion -> Agregar')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Agregar plan de accion</h4>
           
          </div>
          <div class="card-body">
            <div class="table-responsive">
              

            <form action="store" method="POST">
              @csrf

              <div class="form-group">
			           <input type="hidden" class="form-control" name="ejecucionid" value="{{$ejecucionid}}">
			        </div>

              
              <div class="form-group">
                <label for="exampleFormControlSelect1">Persona encargada</label>
                <select class="form-control" name="personaid">
                  @foreach($personas as $per)
                  <option value="{{$per->id}}">{{$per->name}} - {{$per->charge}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Control a asignar</label>
                <select class="form-control" name="controlid">
                  @foreach($controles as $ctr)
                  <option value="{{$ctr->id}}">{{$ctr->name}} </option>
                  @endforeach
                </select>
              </div>
              

              <div class="form-group">
      			    <label>Fecha inicio</label>
      			    <input type="text" class="form-control" name="fec_ini" placeholder="Ingresa la fecha de inicio del plan.">
      			  </div>
      			  <div class="form-group">
      			    <label>Fecha fin</label>
      			    <input type="text" class="form-control" name="fec_fin" placeholder="Ingresa la fecha estimada de finalizacion del plan.">
      			  </div>

              <div class="form-group">
                 <input type="hidden" class="form-control" name="estado" value="Activo">
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