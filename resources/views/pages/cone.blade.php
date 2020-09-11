@extends('layouts.app', ['activePage' => 'cone', 'titlePage' => __('Conexion')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h3 class="card-title">Listado de preguntas</h3>
        <p class="card-category"> En esta sección se listan las preguntas relacionadas a un requisito.</p>
     
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
          
          <div class="row">

              <div class="col-4">
                
                <h4>{{$regulacion->name}}</h4>
              </div>

              <div class="col-4">
                <h4>{{$requisito->item}}</h4>
              </div>

              <div class="col-4 text-right">
                <a href="create/{{$requisito->id}}">
                      <button class="btn btn-success btn-round"> 
                        <i class="material-icons">queue</i>  
                      </button>
                </a>  
              </div>

          </div> 

          <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Pregunta
                  </th>
                  <th>
                    Acciones
                  </th>
                </thead>
                <tbody>

                  @foreach($conexion as $co)
                  <tr>
                    <td>
                      {{$co->id}}
                    </td>
                    <td>
                      {{$co->question}}
                    </td>
                    <td>
                         
                            <a href="destroy/{{$co->id}}">
                            <button class="btn btn-danger btn-round btn-sm"> 
                              <i class="material-icons">delete_forever</i>    
                            </button>
                            </a>
                          
                    
                            <button class="btn btn-info btn-round btn-sm"> 
                              <i class="material-icons">rule</i>  
                            </button>
                          

                    </td>
                  </tr>
                 @endforeach

                </tbody>
              </table>
            </div>   




          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
