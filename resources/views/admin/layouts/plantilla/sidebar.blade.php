<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/storage/{{ auth()->user()->imagen }}" class="img-circle"
                alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('usuarios.show', Auth::user()->id) }}" class="d-block">{{ Auth::user()->nombre }} {{ Auth::user()->ap_paterno }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item has-treeview">
                <a href="/home" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        INICIO
                    </p>
                </a>
            </li>

            @if (auth()->user()->tieneRol(['admin']))
            <li class="nav-item">
                <a href="{{ route('usuarios.index') }}"
                    class="nav-link {{ request()->is('usuarios') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Usuarios
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('medicos.index') }}"
                    class="nav-link {{ request()->is('medicos') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-md"></i>
                    <p>
                        Médicos
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('pacientes.index') }}"
                    class="nav-link {{ request()->is('pacientes') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-injured"></i>
                    <p>
                        Pacientes
                    </p>
                </a>
            </li>
            <div class="border border-primary"></div>
            <li class="nav-item">
                <a href="{{ route('especialidad.index') }}"
                    class="nav-link {{ request()->is('especialidad') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-hand-holding-medical"></i>
                    <p>
                        Especialidades
                    </p>
                </a>
            </li>
            @endif
            @if (auth()->user()->tieneRol(['medico']))
            <li class="nav-item">
                <a href="{{ route('horarios.edit', auth()->user()->id) }}"
                    class="nav-link {{ request()->is('horarios*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-clock"></i>
                    <p>
                        Horarios
                    </p>
                </a>
            </li>
            <div class="border border-primary"></div>
            @endif
            <li class="nav-item has-treeview {{ request()->is('citas*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ request()->is('citas*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-clock"></i>
                    <p>
                        CITAS
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('citas.pendientes') }}"
                            class="nav-link {{ request()->is('citas/pendientes') ? 'active' : '' }}">
                            <i class="fas fa-arrow-right nav-icon"></i>
                            <p>Pendientes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('citas.confirmadas') }}"
                            class="nav-link {{ request()->is('citas/confirmadas') ? 'active' : '' }}">
                            <i class="fas fa-arrow-right nav-icon"></i>
                            <p>Confirmadas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('citas.historial') }}"
                            class="nav-link {{ request()->is('citas/historial') ? 'active' : '' }}">
                            <i class="fas fa-arrow-right nav-icon"></i>
                            <p>Historial</p>
                        </a>
                    </li>
                </ul>
            </li>

            @if (auth()->user()->tieneRol(['admin']))
            <div class="border border-primary"></div>
            <li class="nav-item has-treeview {{ request()->is('reportes*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ request()->is('reportes*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-chart-bar"></i>
                    <p>
                        Reportes
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('reportes.pacientes') }}"
                            class="nav-link {{ request()->is('reportes/pacientes') ? 'active' : '' }}">
                            <i class="fas fa-caret-right nav-icon"></i>
                            <p>Pacientes registrados</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('reportes.estadocitas') }}"
                            class="nav-link {{ request()->is('reportes/estado/citas') ? 'active' : '' }}">
                            <i class="fas fa-caret-right nav-icon"></i>
                            <p>Estado de citas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('reportes.especialidadcitas') }}"
                            class="nav-link {{ request()->is('reportes/especialidad/citas') ? 'active' : '' }}">
                            <i class="fas fa-caret-right nav-icon"></i>
                            <p>Citas por especialidad</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('reportes.citasmedico') }}"
                            class="nav-link {{ request()->is('reportes/citas/medico') ? 'active' : '' }}">
                            <i class="fas fa-caret-right nav-icon"></i>
                            <p>Citas por Médico</p>
                        </a>
                    </li>
                </ul>
            </li>
            @endif

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
