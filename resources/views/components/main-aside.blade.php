<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('img/pln1.png') }}" alt="Logo" class="brand-image  elevation-1" style="opacity: .8">
        <span class="brand-text font-weight-light">PLN TARAKAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('awal.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>
                            Monitoring
                        </p>
                    </a>
                </li>




                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Setting
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if(Auth::user()->level == 0 or Auth::user()->level  == 1 )
                        <li class="nav-item">
                            <a href="/masterawal" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Master Data UP3</p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="/user" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profil</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off mr-2"></i>
                        <p> Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
