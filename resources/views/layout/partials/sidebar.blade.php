<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route ('home') }}" class="brand-link bg-info logo-sidebar">
        <span class="d-hidden-mini">The</span>
        <span><b>CRUD</b></span>
        <span class="d-hidden-mini">Project</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @if (Auth::check())
                    <li class="nav-item user-panel mt-1 pb-2 mb-3">
                        <a href="{{ route('profile') }}" class="nav-link {{ Request::is('profile*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>{{ Auth::user()->name }}</p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('courses.index') }}" class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-university"></i>
                        <p>Cursos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('students.index') }}" class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Alunos</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>