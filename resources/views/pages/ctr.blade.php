@extends('layouts.app', ['activePage' => 'ctr', 'titlePage' => __('Controles')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">

        @foreach($controles as $ctr)
        <div class="card">
          <div class="card-body ">
                <h4 class="card-category text-info">
                    <i class="material-icons">build_circle</i> {{$ctr->code}}
                </h4>
                <h2 class="card-title">
                   {{$ctr->name}}
                </h2>
                Descripcion: {{$ctr->description}}
                <br>
                Recursos: {{$ctr->resourses}}
                <br> 
                Presupuesto: {{$ctr->budget}}
                <br>  
            </div>
            <div class="card-footer ">
                    <div class="author">
                        
                          @if ($ctr->impact === 1)
                              <img src="https://i.ytimg.com/vi/iNk9yNYIdOw/maxresdefault.jpg" alt="..." class="avatar img-raised">
                              <span>Impacto Bajo</span>
                           @elseif ($ctr->impact === 2)
                              <img src="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-golden-yellow-solid-color-background.jpg" alt="..." class="avatar img-raised">
                              <span>Impacto Medio</span>
                           @else 
                              <img src="https://biblioteca.acropolis.org/wp-content/uploads/2014/12/rojo-1200x839.png" alt="..." class="avatar img-raised">
                              <span>Impacto Alto</span>
                           @endif

                   </div>
                   <div class="stats ml-auto">
                        <i class="material-icons">access_time</i> {{$ctr->lastupdate}}
                   </div>
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </div>


@endsection