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
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Entidad
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      @foreach($entidades as $ent)
                      <a class="dropdown-item" href="perso/{{$ent->id}}">{{$ent->name}}</a>
                      @endforeach
                    </div>
                  </div>
              </div>

              <div class="col-4 text-center">
                <h2></h2>
              </div>

              <div class="col-4 text-right">

                      <button class="btn btn btn-round"> 
                        <i class="material-icons">queue</i>  
                      </button>

              </div>

           </div>    
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
