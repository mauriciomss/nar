<?php $uri  = service('uri'); ?>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        
            <!-- Brand Logo -->
            <a href="<?=base_url('dashboard');?>" class="brand-link">
                <img src="<?=base_url('assets/admin/img/logo.png');?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">NAR Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?=base_url('assets/admin/'.session('imagen'));?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="usuarios/yo" class="d-block"><?php echo session('nombre') ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a class="nav-link <?=($uri->getSegment(1) == 'dashboard' ? 'active' : '')?>" href="<?=base_url('admin/dashboard');?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?=($uri->getSegment(1) == 'admin/propiedades' ? 'active' : '')?>" href="<?=base_url('admin/propiedades');?>">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Propiedades</p>
                            </a>
                        </li>


                        <?php /* ?>
                        <li class="nav-item">
                            <a class="nav-link <?=($uri->getSegment(1) == 'ayuda' ? 'active' : '')?>" href="<?=base_url('dashboard');?>">
                                <i class="nav-icon fas fa-info-circle"></i>
                                <p>Ayuda sistema</p>
                            </a>
                        </li>
                        <?php */ ?>

                    </ul>
                </nav>

            <!-- /.sidebar-menu -->
            </div>

        <!-- /.sidebar -->
        </aside>