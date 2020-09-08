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
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Regulacion macro
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      @foreach($regulaciones as $regu)
                      <a class="dropdown-item" href="requi/{{$regu->id}}">{{$regu->name}}</a>
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
