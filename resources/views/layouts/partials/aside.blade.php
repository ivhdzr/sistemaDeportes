<aside class="main-sidebar sidebar-light-secondary elevation-4">
<!--<aside class="main-sidebar sidebar-dark-primary elevation-4">-->
    <span class="brand-link logo-switch">
        
        <!--<img src="" alt="AdminLTE Docs Logo Small" class="brand-image-xl logo-xs">>-->
        <img src="{{URL::asset('img/logo.jpg')}}" alt="AHJI Sport Logo" class="brand-image-xs logo-xl" style="left: 12px">
    </span>
    <div class="sidebar">
        <!--<div class="form-inline mt-2">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>-->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-walking"></i>
                        <p>Jugadores</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-portrait"></i>
                        <p>Árbitros</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Equipos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('deportes.index')}}" class="nav-link active">
                        <i class="nav-icon fas fa-futbol"></i>
                        <p>Deportes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-map-marked-alt"></i>
                        <p>Sedes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-trophy"></i>
                        <p>Torneos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-people-arrows"></i>
                        <p>Partidos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-flag-checkered"></i>
                        <p>Resultados</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link mt-1">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>Centro de control<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-check-double"></i>
                                <p>Aprobación de equipos y jugadores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-shield"></i>
                                <p>Administradores del sistema</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </nav>
    </div>
</aside>