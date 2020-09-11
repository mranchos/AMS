@extends('layouts.app', ['activePage' => 'eva', 'titlePage' => __('Evaluacion ->  Agregar')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Agregar evaluacion</h4>
           
          </div>
          <div class="card-body">
            <div class="table-responsive">
              

            <form action="store" method="POST">
              @csrf

                <div class="form-group col-md-4">
                  <label for="inputState1">Entidad</label>
                  <select id="inputState1" name="entidad" class="form-control">
                    <option selected>Seleccionar</option>
                    @foreach($entidades as $enti)
                    <option value="{{$enti->id}}">{{$enti->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label for="inputState2">Regulacion</label>
                  <select id="inputState2" name="regulacion" class="form-control">
                    <option selected>Seleccionar</option>
                    @foreach($regulaciones as $regu)
                    <option value="{{$regu->id}}">{{$regu->name}}</option>
                    @endforeach
                  </select>
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