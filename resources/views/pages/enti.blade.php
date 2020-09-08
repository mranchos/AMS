@extends('layouts.app', ['activePage' => 'enti', 'titlePage' => __('Entidades')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h3 class="card-title ">Definición de entidades</h3>
            <p class="card-category"> En esta sección se listan las entidades del sistema.</p>
          </div>
          <div class="card-body">

            <div class="col-12 text-right">
            <a href="enti/create">
                  <button class="btn btn-success btn-round"> 
                    <i class="material-icons">queue</i>  
                  </button>
            </a>  
            </div>

            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Tipo
                  </th>
                  <th>
                    Nombre
                  </th>
                  <th>
                    Acciones
                  </th>
                </thead>
                <tbody>

                  @foreach($entitodas as $en)
                  <tr>
                    <td>
                      {{$en->id}}
                    </td>
                    <td>
                      {{$en->type}}
                    </td>
                    <td>
                      {{$en->name}}
                    </td>
                    
                    <td>
                         
                            <a href="enti/destroy/{{$en->id}}">
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