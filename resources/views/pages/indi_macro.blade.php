@extends('layouts.app', ['activePage' => 'indi', 'titlePage' => __('Indicadores')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-info">
        <h3 class="card-title">Resultados de evaluacion</h3>
        <p class="card-category"> En esta sección se muestran los resultados de la evaluacion.</p>
        </p>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
          
          <div class="row">

              <div class="col-4">
                <h3>Evaluacion id: {{$evaluacion->id}}</h3>  
              </div>

              <div class="col-4 text-center">
                <h3> {{$entidad->name}} </h3>
              </div>

              <div class="col-4 text-right">
                  <h3> {{$regulacion->name}} </h3>
              </div>

           </div> 

           <br>

           <div class="row">
            <div class="col-12 text-center">
            <div class="progress-container">
                
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: {{$porcentaje}}%;">
                    </div>
                </div>
            </div>
           </div>
           </div>

           <br>

            <div class="row">

              <div class="col-6 text-center">
                <h3> Cumplimiento general: {{$porcentaje}}% </h3>
              </div>

              <div class="col-6 text-center">
                  <h3> Nivel de madurez promedio: {{$madu}} </h3>
              </div>

           </div> 

           <br>
           <br>



          
          </div>
        </div>
      </div>
    </div>

    <div class="row">


      @foreach($indicadores as $indi)
      <div class="col-md-3">
      <div class="card">
        @if ($indi->madurez <=2 )
          <div class="card-header card-header-icon card-header-danger">
            <div class="card-icon">
              <i class="material-icons">highlight_off</i>
        @else
           <div class="card-header card-header-icon card-header-success">
            <div class="card-icon">
              <i class="material-icons">favorite_border</i>
        @endif  
            </div>
          </div>
          <div class="card-body">
              <h4 class="card-title">{{$indi->item}}</h4>
                 Nivel de madurez: {{$indi->madurez}}
                 <br>
                 Procesos: {{$indi->procesos}} 
                 <br>
                 Cumplimiento general: {{$indi->completado}}%
                 <br>
                 <br>
                 <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: {{$indi->completado}}%;">
                    </div>
                </div>
          </div>
      </div>
      </div>
      @endforeach

 
    </div>



  </div>
</div>


@endsection
