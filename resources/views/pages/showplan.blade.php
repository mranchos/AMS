@extends('layouts.app', ['activePage' => 'acc', 'titlePage' => __('Plan de accion -> Plan personalizado')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-info">
        <h3 class="card-title">Plan de accion</h3>
        </p>
      </div>

      

      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
          
            <div class="row">
                <div class="col-4">
                  <h3>{{$plan->regulacion}}</h3>  
                </div>
                <div class="col-4 text-center">
                  <h3>{{$plan->item}}</h3>
                </div>
                <div class="col-4 text-right">
                  <h3>{{$plan->entidad}}</h3>
                </div>
            </div> 
            <br>
            <div class="row">
                <div class="col-12 text-center">
                  <h3> {{$plan->question}} </h3>
                </div>
            </div> 
            <br>

          </div>
        </div>
      </div>

    </div>

        <div class="row">
        
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">games</i>
              </div>
              <p class="card-category">{{$plan->control}}</p>
              <h3 class="card-title">{{$plan->code}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> actualizado ahora 
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">support</i>
              </div>
              <p class="card-category">Recursos</p>
              <h3 class="card-title">{{$plan->resourses}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> actualizado ahora 
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">attach_money</i>
              </div>
              <p class="card-category">Presupuesto</p>
              <h3 class="card-title">{{$plan->budget}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> actualizado ahora
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">hourglass_full</i>
              </div>
              <p class="card-category">Horas hombre</p>
              <h3 class="card-title">{{$plan->hours}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> actualizado ahora 
              </div>
            </div>
          </div>
        </div>

      </div>


      <div class="row">
        
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">face</i>
              </div>
              <p class="card-category">Persona asignada</p>
              <h3 class="card-title">{{$plan->persona}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> actualizado ahora 
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">event_busy</i>
              </div>
              <p class="card-category">Fecha inicio</p>
              <h3 class="card-title">{{$plan->fec_ini}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> actualizado ahora 
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">event_available</i>
              </div>
              <p class="card-category">Fecha fin</p>
              <h3 class="card-title">{{$plan->fec_fin}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> actualizado ahora
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">bubble_chart</i>
              </div>
              <p class="card-category">Estado</p>
              <h3 class="card-title">{{$plan->estado}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> actualizado ahora 
              </div>
            </div>
          </div>
        </div>

      </div>


      <div class="row">
              <div class="col-4">
              </div>
              <div class="col-4 text-center">
                  <a href="finish/{{$plan->id}}">
                      <button class="btn btn-success btn-round"> 
                        <i class="material-icons">check_circle</i> Marcar como completado 
                      </button>
                </a>  
              </div>
              <div class="col-4">
              </div>
      </div> 



  </div>
</div>


@endsection