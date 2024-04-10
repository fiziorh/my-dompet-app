<aside class="main-sidebar sidebar elevation-4">
    <div class="sidebar" style="height: 100vh; overflow-y; auto;">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <i class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap"></use>
                        </i>
                        <span class="fs-4">MyDompet</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
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
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Saving
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
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Settings
                    </a>
                </li>
            </ul>
            <hr style="margin-top:36vh;">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="#" class="nav-link" onclick="event.preventDefault(); confirmLogout();">
                                <i class="nav-icon fas fa-power-off"></i>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hello, {{ session('name') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
