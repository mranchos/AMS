@extends('layouts.app', ['activePage' => 'eva', 'titlePage' => __('Evaluacion')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h3 class="card-title ">Listado de evaluaciones</h3>
            <p class="card-category"> En esta sección se listan las evaluaciones del sistema.</p>
          </div>
          <div class="card-body">

            <div class="col-12 text-right">
            <a href="eva/create">
                  <button class="btn btn-success btn-round"> 
                    <i class="material-icons">queue</i>  
                  </button>
            </a>  
            </div>

            <div class="table-responsive">
              <table class="table">
                <thead class=" text-warning">
                  <th>
                    ID
                  </th>
                  <th>
                    Entidad
                  </th>
                  <th>
                    Regulacion
                  </th>
                  <th>
                    Completado
                  </th>
                  <th>
                    Acciones
                  </th>
                </thead>
                <tbody>

                  @foreach($datos as $da)
                  <tr>
                    <td>
                      {{$da->id}}
                    </td>
                    <td>
                      {{$da->entidad}}
                    </td>
                    <td>
                      {{$da->regulacion}}
                    </td>
                    <td>
                      {{$da->porcentaje}} %
                    </td>
                    <td>
                         
                            <a href="eva/destroy/{{$da->id}}">
                            <button class="btn btn-danger btn-round btn-sm"> 
                              <i class="material-icons">delete_forever</i>    
                            </button>
                            </a>
                          
                    
                            <button class="btn btn-info btn-round btn-sm"> 
                              <i class="material-icons">rule</i>  
                            </button>

                            @if ($da->porcentaje === 100)
                                <button class="btn btn-default btn-round btn-sm"> 
                                <i class="material-icons">done_all</i>  
                                </button>
                            @else 
                                <a href="eva/ejecucion/{{$da->id}}">
                                <button class="btn btn-primary btn-round btn-sm"> 
                                  <i class="material-icons">done_all</i>  
                                </button>
                                </a>
                            @endif
                          

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