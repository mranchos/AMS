@extends('layouts.app', ['activePage' => 'cone', 'titlePage' => __('Conexion -> Agregar')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Agregar conexion</h4>
           
          </div>
          <div class="card-body">
            <div class="table-responsive">
              

            <form action="store" method="POST">
              @csrf

              <div class="form-group">
			           <input type="hidden" class="form-control" name="requisitodid" value="{{$requisito}}">
			        </div>

              <div class="form-group">
                <label>Pregunta</label>
                <textarea class="form-control" name="question" placeholder="Ingresa la pregunta asociada al requisito." rows="10"></textarea>
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