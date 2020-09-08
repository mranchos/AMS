@extends('layouts.app', ['activePage' => 'requi', 'titlePage' => __('Regulaciones -> Requisitos')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-info">
        <h3 class="card-title">Definicion de items</h3>
        <p class="card-category"> En esta sección se validan los requerimientos a detalle de las regulaciones.</p>
        </p>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
          
          <div class="row">

              <div class="col-4">
                  
              </div>

              <div class="col-4 text-center">
                <h2>{{$regulacion->name}}</h2>
              </div>

              <div class="col-4 text-right">
                <a href="create/{{$regulacion->id}}">
                      <button class="btn btn-success btn-round"> 
                        <i class="material-icons">queue</i>  
                      </button>
                </a>  
              </div>

           </div>    

          <div class="d-flex justify-content-around">
           
          @foreach($requisito as $requi)
          <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h4 class="card-title">{{$requi->item}}</h4>
              <h6 class="card-subtitle mb-2 text-muted">{{$requi->name}}</h6>
              <p class="card-text">{{$requi->description}}</p>
              <a href="destroy/{{$requi->id}}" class="card-link">Eliminar</a>
              <a href="#" class="card-link">Editar</a>
              <!-- 
              <a href="#" class="card-link">Crear control</a>
              -->
            </div>
          </div>  
          @endforeach
          
          </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
