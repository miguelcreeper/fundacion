<div class="main-sidebar sidebar-style-2">
<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href=""> <img alt="image" src="{{asset("assets/img/logo01.png")}}" class="header-logo" /> <span
        class="logo-name"></span>
    </a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Administrador</li>
    <li class="dropdown active">
      <a href="{{route('profesor')}}" class="nav-link"><i data-feather="user-check"></i><span>Gestionar Profesor</span></a>
      <a href="{{route('register')}}" class="nav-link"><i data-feather="user-check"></i><span>Gestionar Usuario</span></a>
   
    </li>

    <li class="menu-header">Secretaria</li>
    <li class="dropdown active">
      <a href="{{route('acudiente')}}" class="nav-link"><i data-feather="user"></i><span>Gestionar Acudiente</span></a>
    </li>
    
    <li class="dropdown active">
      <a href="{{route('estudiante')}}" class="nav-link"><i data-feather="users"></i><span>Gestionar Estudiante</span></a>
    </li>

    <li class="dropdown active">
      <a href="{{route('curso')}}" class="nav-link"><i data-feather="book"></i><span>Gestionar Curso</span></a>
    </li>

    <li class="dropdown active">
      <a href="{{route('matricula')}}" class="nav-link"><i data-feather="clipboard"></i><span>Gestionar Matricula</span></a>
    </li>

    <li class="dropdown active">
      <a href="{{route('mensualidad')}}" class="nav-link"><i data-feather="dollar-sign"></i><span>Gestionar Mensualidad</span></a>
    </li>

    <li class="dropdown active">
      <a href="{{route('jornada')}}" class="nav-link"><i data-feather="clock"></i><span>Gestionar Jornada</span></a>
    </li>

    <li class="dropdown active">
      <a href="{{route('tipo_curso')}}" class="nav-link"><i data-feather="folder"></i><span>Gestionar Tipo Curso </span></a>
    </li>

    <li class="dropdown active">
      <a href="{{route('estado_curso')}}" class="nav-link"><i data-feather="folder-plus"></i><span>Gestionar Estado Curso </span></a>
    </li>   
    </div>

</aside>