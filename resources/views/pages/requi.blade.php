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
           
          
          <div class="row">
            
            @foreach($requisito as $requi)
            
              <div class="card bg-success">
                  <div class="card-body ">
                        <h4 class="card-category">
                            <i class="material-icons">code</i> {{$requi->item}}
                        </h4>
                        <h2 class="card-title">
                           {{$requi->name}}
                        </h2>
                          {{$requi->description}}
                  </div>
                  <div class="card-footer ">
                            <div class="author">
                                <a href="destroy/{{$requi->id}}">
                                      <span>Eliminar</span>
                                </a>  
                            </div>

                            <a href="cone/regu/requi/create/{{$requi->id}}">
                                       <i class="material-icons" class="text-danger">extension</i> Crear proceso
                            </a> 
                            
                            <!--
                           <div class="stats ml-auto">
                                 <a href="#">
                                       <i class="material-icons" class="text-danger">extension</i> Crear proceso
                                </a>
                           </div>
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
</div>


@endsection
