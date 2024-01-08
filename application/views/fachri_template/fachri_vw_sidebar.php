<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('fachri_ctrl_dashboard')?>" class="nav-link">Home</a>
                </li>
            </ul>


        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('fachri_ctrl_dashboard')?>" class="brand-link">
                <img src="<?= base_url('assets/templates/')?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Web Enterprise</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/templates/')?>dist/img/avatar5.png"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Universitas Mercu Buana</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <p>
                                    Menu Hitung
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('fachri_ctrl_dashboard/fachri_perkalian')?>"
                                        <?=$this->uri->segment(2) == 'fachri_perkalian' ? 'class="nav-link active"' : 'class="nav-link"' ?>>

                                        <p>Perkalian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('fachri_ctrl_dashboard/fachri_pembagian')?>"
                                        <?=$this->uri->segment(2) == 'fachri_pembagian' ? 'class="nav-link active"' : 'class="nav-link"' ?>>

                                        <p>Pembagian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('fachri_ctrl_dashboard/fachri_ujian')?>"
                                        <?=$this->uri->segment(2) == 'fachri_ujian' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                        <p>Ujian</p>
                                    </a>
                                </li>
                                </a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">