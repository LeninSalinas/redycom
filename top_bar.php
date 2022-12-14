<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
            <b>
                <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
            </b>
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="d-none d-md-block d-lg-block">
                    <a href="javascript:void(0)" class="p-l-15">
                        <img src="../assets/images/logo-light-text.png" alt="home" class="light-logo" alt="home" />
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown u-pro">
                <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">Mark &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                <div class="dropdown-menu dropdown-menu-right animated flipInY">
                    <a href="suario_perfil.php<?php  echo $_SESSION['id_usr'];?>" class="dropdown-item"><i class="ti-user"></i> Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a href="php/logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Cerrar Sesion</a>
                </div>
                </li>
                <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-arrow-right ti-arrow-left"></i></a></li>
            </ul>
        </div>
    </nav>
</header>