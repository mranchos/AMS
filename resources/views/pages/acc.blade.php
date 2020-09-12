@extends('layouts.app', ['activePage' => 'acc', 'titlePage' => __('Plan de accion')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h3 class="card-title ">Definición de areas de oportunidad</h3>
            <p class="card-category"> En esta sección se listan las areas de oportunidad para mejora.</p>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Evaluacion ID
                  </th>
                  <th>
                    Regulacion
                  </th>
                  <th>
                    Entidad
                  </th>
                  <th>
                    Item
                  </th>
                  <th>
                    Proceso
                  </th>
                  <th>
                    Madurez 
                  </th>
                  <th>
                    Acciones
                  </th>
                </thead>
                <tbody>

                  @foreach($oportunidades as $op)
                  <tr>
                    <td>
                      {{$op->evaluacion}}
                    </td>
                    <td>
                      {{$op->regulacion}}
                    </td>
                    <td>
                      {{$op->entidad}}
                    </td>
                    <td>
                      {{$op->requisito}}
                    </td>
                    <td>
                      {{$op->pregunta}}
                    </td>
                    <td>
                      {{$op->madurez}}
                    </td>

                    <td>
                             
                             @if ($op->accion == 0)
                                <a href="acc/{{$op->ejecucion}}">
                                <button class="btn btn-success btn-round btn-sm"> 
                                  <i class="material-icons">queue</i>  
                                </button>
                                </a>

                                <button class="btn btn-default btn-round btn-sm"> 
                                <i class="material-icons">launch</i>  
                                </button>

                            @else 
                                <button class="btn btn-default btn-round btn-sm"> 
                                <i class="material-icons">queue</i>  
                                </button>

                                <a href="show/{{$op->accion}}">
                                <button class="btn btn-primary btn-round btn-sm"> 
                                  <i class="material-icons">launch</i>  
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