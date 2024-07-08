<!-- app/Views/templates/admin_header.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <?= $this->include('templates/head') ?>
    <style>
        .navbar-custom, .app-menu {
            background-color: #012535;
            color: #fff;
        }
        .navbar-custom a, .app-menu a {
            color: #fff;
        }
        .navbar-custom .logo-lg, .navbar-custom .logo-sm {
            width: 100px;
        }
        .app-menu .logo-lg {
            width: 120px;
            height: auto;
            padding: 20px;
            margin-top: 20px;
        }
        .app-menu .menu-item a {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .app-menu .menu-item .menu-icon {
            width: 24px;
        }
    </style>
</head>
<body>
    <div class="navbar-custom">
        <div class="topbar" style="background-color:#012535;">
            <div class="topbar-menu d-flex align-items-center gap-1">
                <div class="logo-box">
                    <a href="index.html" class="logo-light">
                        <img src="assets/images/logosolo.png" alt="logo" class="logo-lg">
                        <img src="assets/images/logosolo.png" alt="small logo" class="logo-sm">
                    </a>
                    <a href="?c=products&m=index" class="logo-dark">
                        <img src="assets/images/logo.png" alt="dark logo" class="logo-lg">
                        <img src="assets/images/logo.png" alt="small logo" class="logo-sm">
                    </a>
                </div>
                <button class="button-toggle-menu">
                    <i class="mdi mdi-menu"></i>
                </button>
            </div>
            <ul class="topbar-menu d-flex align-items-center">
                <li class="app-search dropdown me-3 d-none d-lg-block">
                    <form>
                        <input type="search" class="form-control rounded-pill" placeholder="Search..." id="top-search">
                        <span class="fe-search search-icon font-16"></span>
                    </form>
                </li>
                <li class="d-none d-md-inline-block">
                    <a class="nav-link waves-effect waves-light" href="" data-toggle="fullscreen">
                        <i class="fe-maximize font-22"></i>
                    </a>
                </li>
                <li class="dropdown d-lg-none">
                    <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ri-search-line font-22"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                        <form class="p-3">
                            <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                        </form>
                    </div>
                </li>
                <li class="d-none d-sm-inline-block">
                    <div class="nav-link waves-effect waves-light" id="light-dark-mode">
                        <i class="ri-moon-line font-22"></i>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/logosolo.png" alt="user-image" class="rounded-circle">
                        <span class="ms-1 d-none d-md-inline-block">
                            Construhogar <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>
                        <a href="http://localhost:8080" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Tienda</span>
                        </a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="app-menu" style="background-color: #012535;">
        <div class="logo-box">
            <a href="" class="">
                <img src="assets/images/logopru.png" alt="logo" class="logo-lg">
            </a>
        </div>
        <div class="scrollbar">
            <ul class="menu">
                <li class="menu-title">Panel de administracion</li>
                <li class="menu-item">
                    <a href="?c=dashboard&m=dashboard" class="menu-link">
                        <span class="menu-icon"><i data-feather="monitor"></i></span>
                        <span class="menu-text"> Escritorio </span>
                    </a>
                </li>
                <li class="menu-item">
                    <div class="collapse" id="menuEcommerce">
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="?c=providers&m=index" class="menu-link">
                                    <span class="menu-text">Listar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item">
                    <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                        <span class="menu-icon"><i data-feather="briefcase"></i></span>
                        <span class="menu-text"> Usuarios </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="menuEcommerce">
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="?c=users&m=index" class="menu-link">
                                    <span class="menu-text">Listar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item">
                    <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                        <span class="menu-icon"><i data-feather="briefcase"></i></span>
                        <span class="menu-text"> Productos </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="menuEcommerce">
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="?c=products&m=index" class="menu-link">
                                    <span class="menu-text">Listar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</body>
</html>
