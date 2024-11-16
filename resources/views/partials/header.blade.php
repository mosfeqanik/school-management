<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">School Management System</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
        @if(Auth::guard('admin')->check())
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item no-arrow mx-1">
                <a class="nav-link" href="{{route('admin.logout')}}" >
                    <h6>Logout</h6>
                </a>
            </li>
        </ul>
        @elseif(Auth::guard('teacher')->check())
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item no-arrow mx-1">
                    <a class="nav-link" href="{{route('teacher.logout')}}" >
                        <h6>Logout</h6>
                    </a>
                </li>
            </ul>
        @elseif(Auth::guard('guardian')->check())
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item no-arrow mx-1">
                    <a class="nav-link" href="{{route('guardian.logout')}}" >
                        <h6>Logout</h6>
                    </a>
                </li>
            </ul>
        @elseif(Auth::check())
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item no-arrow mx-1">
                    <a class="nav-link" href="{{route('student.logout')}}" >
                        <h6>Logout</h6>
                    </a>
                </li>
            </ul>
        @else
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item no-arrow mx-1">
                    <a class="nav-link" href="#">
                        <h6>Have a good day</h6>
                    </a>
                </li>
            </ul>
        @endif
    </ul>
</nav>
