<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box" style="width: 171px!important">
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="" height="24" width="160">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="" height="24" width="160">
                    </span>
                </a>

                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="" height="24" width="160">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="" height="24" width="160">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="search" class="icon-lg"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="<?php echo $language["Search"]; ?>" aria-label="Search Result">

                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

          

            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item" id="mode-setting-btn">
                    <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                    <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                </button>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="grid" class="icon-lg"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="p-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo base_url('assets/images/brands/github.png') ?>" alt="Github">
                                    <span>Database</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo base_url('assets/images/brands/bitbucket.png') ?>" alt="bitbucket">
                                    <span>Payroll</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo base_url('assets/images/brands/dribbble.png') ?>" alt="dribbble">
                                    <span>Attendance</span>
                                </a>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo base_url('assets/images/brands/github.png') ?>" alt="Github">
                                    <span>Aset Komputer/Laptop</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="bell" class="icon-lg"></i>
                    <!-- <span class="badge bg-danger rounded-pill">0</span> -->
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> <?php echo $language["Notifications"]; ?> </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small text-reset text-decoration-underline"> <?php echo $language["Unread"]; ?> (0)</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                       
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span><?php echo $language["View_More"]; ?></span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?php echo base_url('assets/images/users/avatar-1.jpg') ?>" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium"><?php echo $this->ion_auth->user()->row()->first_name  ?></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="apps-contacts-profile.php"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> <?php echo $language["Profile"]; ?></a>
                   <a class="dropdown-item" href="auth-lock-screen.php"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> <?php echo $language["Lock_screen"]; ?></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo site_url('auth/logout') ?>"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> <?php echo $language["Logout"]; ?></a>
                </div>
            </div>

        </div>
    </div>
</header>

<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo site_url('admin/dashboard') ?>" id="topnav-dashboard" role="button">
                            <i data-feather="home"></i><span data-key="t-dashboards"><?php echo $language["Dashboard"]; ?></span>
                        </a>
                    </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                            <i data-feather="file-text"></i><span data-key="t-extra-pages">Data Karyawan</span>
                            <div class="arrow-down"></div>
                        </a>
                         <div class="dropdown-menu" aria-labelledby="topnav-pages">

                            <a href="<?php echo site_url('admin/data_karyawan') ?>" class="dropdown-item" data-key="t-calendar">List Karyawan Organik</a>
                           
                        </div>
                    </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                            <i data-feather="users"></i><span data-key="t-apps">Struktur Organisasi</span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">

                            <a href="<?php echo site_url('admin/satuan_organisasi') ?>" class="dropdown-item" data-key="t-calendar">Satuan Organisasi</a>
                            <a href="<?php echo site_url('admin/bidang') ?>" class="dropdown-item" data-key="t-chat">Bidang</a>
                            <a href="<?php echo site_url('admin/jabatan') ?>" class="dropdown-item" data-key="t-chat">Jabatan</a>
                            <a href="<?php echo site_url('admin/struktur') ?>" class="dropdown-item" data-key="t-chat">Struktur</a>
                           
                        </div>
                    </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" id="topnav-renumerasi" role="button">
                            <i data-feather="grid"></i><span data-key="t-apps">Matrik Renumerasi</span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">

                            <a href="<?php echo site_url('admin/renumerasi') ?>" class="dropdown-item" data-key="t-calendar">Matrik Grade</a>
                        </div>
                    </li>


                   


                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                            <i data-feather="settings"></i><span data-key="t-extra-pages">Control Panel</span>
                            <div class="arrow-down"></div>
                        </a>
                         <div class="dropdown-menu" aria-labelledby="topnav-pages">

                            <a href="apps-calendar.php" class="dropdown-item" data-key="t-calendar">User Manager</a>
                            <a href="apps-calendar.php" class="dropdown-item" data-key="t-calendar">Group User</a>
                            <a href="apps-calendar.php" class="dropdown-item" data-key="t-calendar">Setting</a>
                           
                        </div>
                    </li>
                     <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                            <i data-feather="check-circle"></i><span data-key="t-extra-pages">Approval</span>
                            <div class="arrow-down"></div>
                        </a>
                         <div class="dropdown-menu" aria-labelledby="topnav-pages">

                            <a href="apps-calendar.php" class="dropdown-item" data-key="t-calendar">Karyawan Organik</a>
                            <a href="apps-calendar.php" class="dropdown-item" data-key="t-calendar">Satuan Organisasi</a>
                            <a href="apps-calendar.php" class="dropdown-item" data-key="t-calendar">Bidang</a>
                            <a href="apps-calendar.php" class="dropdown-item" data-key="t-calendar">Bagian</a>
                            <a href="apps-calendar.php" class="dropdown-item" data-key="t-calendar">jabatan</a>
                            <a href="apps-calendar.php" class="dropdown-item" data-key="t-calendar">Struktur</a>
                        </div>
                    </li> -->


                </ul>
            </div>
        </nav>
    </div>
</div>