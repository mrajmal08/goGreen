<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" target="_blank" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Go Green</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                @if (auth()->user()->role_id == '1')
                    <li class="nav-item menu-open">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Cutomers
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Plants
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('plants.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pants</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('season.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Plants by Season</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('flower.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Flowering Plants</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Seeds
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('seeds.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Seeds</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                Soil and Fertilizer
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('fertilizer.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>OFertilizer</p>
                                </a>
                            </li>   
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Accessories
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/mailbox/mailbox.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Gardening Tools</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/mailbox/compose.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Seed Starter</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Pots
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/mailbox/mailbox.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Types Of Pots</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/mailbox/compose.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Growing Bags</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/mailbox/compose.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Steel Pots</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Deals
                            </p>
                        </a>
                    </li>
                @else

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            My Orders
                        </p>
                    </a>
                </li>
                @endif
                <div class="dropdown-divider"></div>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
