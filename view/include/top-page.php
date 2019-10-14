<!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../images/thumbnail.png" width="48" height="48" alt="Mplify"></div>
            <p>Por favor, espere...</p>        
        </div>
    </div>
    <!-- Page Loader -->

    <div class="overlay" style="display: none;"></div>

    <div id="wrapper">
        <!-- Menu Horizontal -->
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">

                <!-- Logo -->
                <div class="navbar-brand">
                    <a href="">
                        <img src="../images/logo-icon.svg" alt="Mplify Logo" class="img-responsive logo">
                        <span class="name">IGBUS MI</span>
                    </a>
                </div>
                <!-- Logo -->
                
                <div class="navbar-right">
                    <ul class="list-unstyled clearfix mb-0">

                        <!-- Hamburguer -->
                        <li>
                            <div class="navbar-btn btn-toggle-show">
                                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu icon-list"></i></button>
                            </div>                        
                            <a href="javascript:void(0);" class="btn-toggle-fullwidth btn-toggle-hide"><i class="icon-list"></i></a>
                        </li>
                        <!-- Hamburguer -->

                        <!-- Search -->
                        <li>
                            <form id="navbar-search" class="navbar-form search-form">
                                <input value="" class="form-control" placeholder="Pesquisar" type="text">
                                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                            </form>
                        </li>
                        <!-- Search -->

                        <!-- Avatar -->
                        <li>
                            <div id="navbar-menu">
                                <ul class="nav navbar-nav">
                                                                
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                            <img class="rounded-circle" src="../images/user-small.png" width="30" alt="">
                                        </a>
                                        <div class="dropdown-menu animated flipInY user-profile">
                                            <div class="d-flex p-3 align-items-center">
                                                <div class="drop-left m-r-10">
                                                    <img src="../images/user-small.png" class="rounded" width="50" alt="">
                                                </div>
                                                <div class="drop-right">
                                                    <h4>Igor Nicoletti</h4>
                                                    <p class="user-name">igornicoletti@outlook.com</p>
                                                </div>
                                            </div>
                                            <div class="m-t-10 p-3 drop-list">
                                                <ul class="list-unstyled">
                                                    <li><a href="page-profile.html"><i class="icon-user"></i>Perfil</a></li>
                                                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Mensagens</a></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Configurações</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="page-login.html"><i class="icon-power"></i>Sair</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0);" class="icon-menu js-right-sidebar"><i class="icon-equalizer"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <!-- Avatar -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Menu Horizontal -->


        <!-- Menu Vertical -->
        <div id="leftsidebar" class="sidebar">
            <div class="sidebar-scroll">

                <nav id="leftsidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">

                        <li class="heading">Principal</li>
                        <li class="active"><a href=""><i class="icon-home"></i><span>Painel de controle</span></a></li>

                        <li class="heading">Formulários</li>
                        <li class="middle">
                            <a href="" class="has-arrow"><i class="icon-note"></i><span>Cadastros</span></a>
                            <ul>
                                <li><a href="cadastro-motorista.php">Motoristas</a></li>
                                <li><a href="cadastro-veiculo.php">Veículos</a></li>
                                <li><a href="cadastro-rota.php">Rotas</a></li>
                            </ul>
                        </li> 

                    </ul>
                </nav>

            </div>
        </div>
        <!-- Menu Vertical -->
    </div>