<body class="hold-transition sidebar-mini">
    <div class="wrapper">
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
                <!-- Navbar Search -->
                <li class="nav-item">
                    <!-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a> -->
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- Notifications -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <?php echo $this->session->userdata('username'); ?>
                        <i class="far fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu">
                        <div href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url() ?>assets/uploads/<?php echo $user ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        <?php echo $this->session->userdata('nama_user'); ?>
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <a href="<?php echo base_url() ?>pelajar/ubah_foto" class="btn btn-sm">
                                        <i class="fas fa-upload"></i>Change Photo
                                </div>
                            </div>
                            <!-- Message End -->
                        </div>
                        <!-- <div class="dropdown-divider"></div> -->

                        <div class="dropdown-item">
                            <div class="float-sm-right">
                                <a href="<?php echo base_url() ?>auth/logout" class="btn btn-sm"> Sign Out
                                    <i class="fas fa-sign-out-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
                <!-- End Notifications -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <!-- <i class="fas fa-th-large"></i> -->
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->