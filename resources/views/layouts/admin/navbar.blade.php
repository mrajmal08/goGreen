 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown d-sm-inline-block text-right">
            <!-- Notifications Dropdown Menu -->
            <a class="nav-link" data-toggle="dropdown" href="#">
                @if (auth()->user()->photo)
                    <img src="{{ asset('assets/userImages') . '/' . auth()->user()->photo }}" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8;margin-top: -7px; width: 5%">
                @else
                    <img src="{{ asset('assets/dist/img/product1.jpg') }}" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8;margin-top: -7px; width:40px;">
                @endif



                {{-- <i class="far fa-bell"></i>
               <span class="badge badge-warning navbar-badge">15</span> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              
                <div class="dropdown-divider"></div>
                <form action="/logout" method="post">
                    @csrf
                    <a class="dropdown-item">
                    <i class="nav-icon fas fa-user"></i>
                    <button class="btn" type="submit">Logout</button>
                    </a>
                </form>

                <div class="dropdown-divider"></div>

            </div>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link"> {{ Auth::user()->name }}</a>
        </li>



        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
