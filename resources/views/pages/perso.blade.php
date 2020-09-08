@extends('layouts.app', ['activePage' => 'perso', 'titlePage' => __('Personas')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-info">
        <h3 class="card-title">Listado de personas</h3>
        <p class="card-category"> En esta sección se listan las personas que colaboran en una entidad.</p>
     
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
          
          <div class="row">

              <div class="col-4">
                  
              </div>

              <div class="col-4 text-center">
                <h2>{{$entidad->name}}</h2>
              </div>

              <div class="col-4 text-right">
                <a href="create/{{$entidad->id}}">
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
                    Nombre
                  </th>
                  <th>
                    Area
                  </th>
                  <th>
                    Cargo
                  </th>
                  <th>
                    Correo
                  </th>
                  <th>
                    Telefono
                  </th>
                  <th>
                    Ubicacion
                  </th>
                  <th>
                    Acciones
                  </th>
                </thead>
                <tbody>

                  @foreach($persona as $pe)
                  <tr>
                    <td>
                      {{$pe->id}}
                    </td>
                    <td>
                      {{$pe->name}}
                    </td>
                    <td>
                      {{$pe->area}}
                    </td>
                    <td>
                      {{$pe->charge}}
                    </td>
                    <td>
                      {{$pe->email}}
                    </td>
                    <td>
                      {{$pe->phone}}
                    </td>
                    <td>
                      {{$pe->address}}
                    </td>

                    <td>
                         
                            <a href="destroy/{{$pe->id}}">
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
