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

      <li class="nav-item{{ $activePage == 'perso' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('perso') }}">
          <i class="material-icons">emoji_people</i>
            <p>{{ __('Personas') }}</p>
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

      <li class="nav-item{{ $activePage == 'ctr' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('ctr') }}">
          <i class="material-icons">games</i>
            <p>{{ __('Controles') }}</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="material-icons">dynamic_form</i>
            <p>{{ __('Plan de accion') }}</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="material-icons">timeline</i>
            <p>{{ __('Indicadores') }}</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="material-icons">analytics</i>
            <p>{{ __('Reportes') }}</p>
        </a>
      </li>

  <!--

      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>


      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>


      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>


      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>


      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>


      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
      


      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

-->

    </ul>
  </div>
</div>