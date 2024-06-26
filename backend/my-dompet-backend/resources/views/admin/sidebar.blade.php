{{-- <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <div class="sidebar" style="height: 100vh; overflow-y: auto;">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/"
                        class="nav-link d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <i class="fas fa-home" width="40" height="32">
                        </i> <span class="fs-4"> MyDompet</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <i class="fas fa-tachometer" width="16" height="16"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark">
                        <i class="fas fa-dollar-sign" width="16" height="16"></i>
                        Income
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Spending
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark">
                        <i class="fas fa-bank" width="16" height="16"></i> Saving
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Saving Plans
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        History
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown dropdown-menu-bottom">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                    id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                        class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
@csrf
<a href="#" class="nav-link" onclick="event.preventDefault(); confirmLogout();">
    <p>Sign Out</p>
</a>
</form>
</li>
</ul>
</div>
</nav>
</div>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid"> --}}

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #189A46">
                <!-- Brand Logo -->
                <a href="/dashboard" class="brand-link">
                    <img src="{{URL::asset('img/wallet2.svg')}}" alt="Wallet Icon" class="wallet-img" style="margin-left:1em; filter: invert(100%);">
                    <span class="brand-text" style="color:white;">MyDompet</span>
                </a>
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link{{ $active === 'dashboard' ? ' active' : '' }}">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/income') }}" class="nav-link{{ $active === 'income' ? ' active' : '' }}">
                                        <img src="{{URL::asset('img/database-fill-add.svg')}}" alt="History Icon" class="nav-icon fas icon-nav">
                                        <p>
                                            Income
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url ('/spending') }}" class="nav-link{{ $active === 'spending' ? ' active' : '' }}">
                                        <img src="{{URL::asset('img/database-fill-dash.svg')}}" alt="History Icon" class="nav-icon fas icon-nav">
                                        <p>
                                            Spending
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/savingdashboard" class="nav-link{{ $active === 'savingplan' ? ' active' : '' }}">
                                        <img src="{{URL::asset('img/piggy-bank-fill.svg')}}" alt="History Icon" class="nav-icon fas icon-nav">
                                        <p>
                                            Saving Plans
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/history" class="nav-link{{ $active === 'history' ? ' active' : '' }}">
                                        <img src="{{URL::asset('img/calendar-minus-fill.svg')}}" alt="History Icon" class="nav-icon fas icon-nav">
                                        <p>
                                            History
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a href="#" class="nav-link" onclick="event.preventDefault(); confirmLogout();">
                                            <img src="{{URL::asset('img/door-open-fill.svg')}}" alt="History Icon" class="nav-icon fas icon-nav">
                                            <p>Sign Out</p>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">


                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        @include('sweetalert::alert')