<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      {{ __('AMS') }}
    </a>
  </div>

  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#regula" aria-expanded="false">
          <i class="material-icons">addchart</i>
          <p>{{ __('Regulaciones') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="regula">
          <ul class="nav">
             <li class="nav-item{{ $activePage == 'macro' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('macro') }}">
                 <i class="material-icons">gavel</i>
                <span class="sidebar-normal">{{ __('Macro') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'requi' ? ' active' : '' }} ">
              <a class="nav-link" href="{{ route('requi') }}">
                <i class="material-icons">list</i>
                <span class="sidebar-normal"> {{ __('Requisitos') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>


      <li class="nav-item{{ $activePage == 'enti' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('enti') }}">
          <i class="material-icons">account_balance</i>
            <p>{{ __('Entidades') }}</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#proc" aria-expanded="false">
          <i class="material-icons">api</i>
          <p>{{ __('Procesos') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="proc">
          <ul class="nav">
             <li class="nav-item {{ $activePage == 'cone' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('cone') }}">
                 <i class="material-icons">extension</i>
                <span class="sidebar-normal">{{ __('Conexion') }} </span>
              </a>
            </li>
            <li class="nav-item {{ $activePage == 'eva' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('eva') }}">
                <i class="material-icons">flaky</i>
                <span class="sidebar-normal"> {{ __('Evaluacion') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ $activePage == 'indi' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('indi') }}">
          <i class="material-icons">timeline</i>
            <p>{{ __('Indicadores') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'perso' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('perso') }}">
          <i class="material-icons">emoji_people</i>
            <p>{{ __('Personas') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'ctr' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('ctr') }}">
          <i class="material-icons">games</i>
            <p>{{ __('Controles') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'acc' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('acc') }}">
          <i class="material-icons">dynamic_form</i>
            <p>{{ __('Plan de accion') }}</p>
        </a>
      </li>

 
    </ul>
  </div>
</div>