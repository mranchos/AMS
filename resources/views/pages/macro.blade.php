@extends('layouts.app', ['activePage' => 'macro', 'titlePage' => __('Regulaciones -> Macro')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h3 class="card-title ">Definición de la regulación</h3>
            <p class="card-category"> En esta sección se validan las definiciones macro de las regulaciones en el sistema.</p>
          </div>
          <div class="card-body">

            <div class="col-12 text-right">
            <a href="macro/create">
                  <button class="btn btn-success btn-round"> 
                    <i class="material-icons">queue</i>  
                  </button>
            </a>  
            </div>

            <div class="table-responsive">
              <table class="table">
                <thead class=" text-info">
                  <th>
                    ID
                  </th>
                  <th>
                    Nombre
                  </th>
                  <th>
                    Ente emisor
                  </th>
                  <th>
                    Fecha emisión
                  </th>
                  <th>
                    Descripción
                  </th>
                  <th>
                    Acciones
                  </th>
                </thead>
                <tbody>

                  @foreach($regulaciones as $re)
                  <tr>
                    <td>
                      {{$re->id}}
                    </td>
                    <td>
                      {{$re->name}}
                    </td>
                    <td>
                      {{$re->emisor}}
                    </td>
                    <td>
                      {{$re->date}}
                    </td>
                    <td>
                      <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#ley{{$re->id}}"> <i class="material-icons">height</i></button>

                      <div class="modal fade" id="ley{{$re->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">{{$re->name}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                    {{$re->description}}
                                </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              </div>
                            </div>
                          </div>
                        </div>

                    </td>

                    <td>
                          <form method="POST" action="{{ url ("macro/destroy/{$re->id}")}} ">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-round btn-sm"> 
                              <i class="material-icons">delete_forever</i>    
                            </button>
                          </form>
                    
                          
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