
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Human Capital Management System</title>

    <?php include 'layouts/head.php'; ?>

    <link href="<?php echo base_url('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />
    <link href="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />

    
    <?php include 'layouts/head-style.php'; ?>
</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/horizontal-menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"></a>Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

               

                        <div class="row">
                            <div class="col-xl-5">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Grafik Tenaga Kerja Berdasarkan Jenis Kelamin</h5>
                                            <div class="ms-auto">
                                                <div>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        ALL
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-sm">
                                                <div id="wallet-balance" data-colors='["#e4edf5","#5156be"]' class="apex-charts"></div>
                                            </div>
                                            <div class="col-sm align-self-center">
                                                 <div class="mt-4 mt-sm-0">
                                                    <div>
                                                        <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2" style="color: #5156be"></i> Laki-laki</p>
                                                        <h6><?php echo $count_gender['male_cnt']; ?> Orang</h6>
                                                    </div>
    
                                                    <div class="mt-4 pt-2">
                                                        <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2" style="color: #e4edf5"></i> Perempuan</p>
                                                        <h6><?php echo $count_gender['female_cnt']; ?> Orang</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-7">
                                <div class="row">
                                    <div class="col-xl-8">
                                        <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Grafik Tenaga Kerja berdasarkan Pendidikan</h5>
                                            <div class="ms-auto">
                                                <div>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        ALL
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row align-items-center">
                                            <div class="col-sm">
                                                <div id="pendidikan" data-colors='["#0cb16f", "#31d392", "#8ff7cd", "#e5fff4", "#f3f3ff","#bcbff9","#7a80ff","#4b52f7","#040dc3","#050a83"]' class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                                    </div>
                                    <!-- end col -->
        
                                    <div class="col-xl-4">
                                        <!-- card -->
                                        <div class="card bg-primary text-white shadow-primary card-h-100">
                                            <!-- card body -->
                                            <div class="card-body p-0">
                                                   <div id="carouselExampleCaptions" class="carousel slide text-center widget-carousel" data-bs-ride="carousel">                                                   
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div class="text-center p-4">
                                                                <i class="mdi mdi-database-cog widget-box-1-icon"></i>
                                                                <div class="avatar-md m-auto">
                                                                    <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                        <i class="mdi mdi-database-cog"></i>
                                                                    </span>
                                                                </div>
                                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>HCMS</b></h4>
                                                                <p class="text-white-50 font-size-13"> Selamat datang di aplikasi Human Capital Manajement Sistem. </p>
                                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                        <div class="carousel-item">
                                                            <div class="text-center p-4">
                                                                <i class="mdi mdi-database-cog widget-box-1-icon"></i>
                                                                <div class="avatar-md m-auto">
                                                                    <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                        <i class="mdi mdi-database-cog"></i>
                                                                    </span>
                                                                </div>
                                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>HCMS</b></h4>
                                                                <p class="text-white-50 font-size-13"> Selamat datang di aplikasi Human Capital Manajement Sistem.. </p>
                                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                        <div class="carousel-item">
                                                            <div class="text-center p-4">
                                                                <i class="mdi mdi-database-cog widget-box-1-icon"></i>
                                                                <div class="avatar-md m-auto">
                                                                    <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                        <i class="mdi mdi-database-cog"></i>
                                                                    </span>
                                                                </div>
                                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>HCMS</b></h4>
                                                                <p class="text-white-50 font-size-13"> Selamat datang di aplikasi Human Capital Manajement Sistem. </p>
                                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                    </div>
                                                    <!-- end carousel-inner -->
                                                    
                                                    <div class="carousel-indicators carousel-indicators-rounded">
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                                                            aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <!-- end carousel-indicators -->
                                                </div>
                                                <!-- end carousel -->

                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end col -->
                        </div> <!-- end row-->

                        <div class="row">

                            <div class="col-xl-12">
                                <!-- card -->
                                <div class="card">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Posisi Tenaga Kerja Organik PT. Barata Indonesia Berdasarkan Tingkat Pendidikan</h5>
                                        </div>
                                        <div>
                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Satuan Organisasi</th>
                                            <th>SMP</th>
                                            <th>SMA</th>
                                            <th>D1</th>
                                            <th>D2</th>
                                            <th>D3</th>
                                            <th>D4</th>
                                            <th>S1</th>
                                            <th>S2</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Biro Enjiniring</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Biro Hukum</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Biro Human Capital</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Biro Keuangan & Akuntansi</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Biro Manajemen Supply Chain</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Biro Pengembangan Usaha</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Biro Sistem, Mutu & K3Lh</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr> 
                                        <tr>
                                            <td>8</td>
                                            <td>Divisi Industri Gula & Agro</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Divisi Industri Komponen & Permesinan</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Divisi Industri Komponen & Permesinan</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Divisi Industri Komponen & Permesinan</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row-->
                         <div class="row">

                            <div class="col-xl-12">
                                <!-- card -->
                                <div class="card">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Posisi Tenaga Kerja Organik PT. Barata Indonesia Berdasarkan Jenis Kelamin dan Aktivitas</h5>
                                        </div>
                                        <div>
                                <table id="datatable-kelamin" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Satuan Organisasi</th>
                                            <th>SMP</th>
                                            <th>SMA</th>
                                            <th>D1</th>
                                            <th>D2</th>
                                            <th>D3</th>
                                            <th>D4</th>
                                            <th>S1</th>
                                            <th>S2</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Biro Enjiniring</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Biro Hukum</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Biro Human Capital</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Biro Keuangan & Akuntansi</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Biro Manajemen Supply Chain</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Biro Pengembangan Usaha</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Biro Sistem, Mutu & K3Lh</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr> 
                                        <tr>
                                            <td>8</td>
                                            <td>Divisi Industri Gula & Agro</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Divisi Industri Komponen & Permesinan</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Divisi Industri Komponen & Permesinan</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Divisi Industri Komponen & Permesinan</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>

                         <div class="row">

                            <div class="col-xl-12">
                                <!-- card -->
                                <div class="card">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Posisi Tenaga Kerja Organik PT. Barata Indonesia Berdasarkan Usia</h5>
                                        </div>
                                        <div>
                                <table id="datatable-usia" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Satuan Organisasi</th>
                                            <th>SMP</th>
                                            <th>SMA</th>
                                            <th>D1</th>
                                            <th>D2</th>
                                            <th>D3</th>
                                            <th>D4</th>
                                            <th>S1</th>
                                            <th>S2</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Biro Enjiniring</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Biro Hukum</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Biro Human Capital</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Biro Keuangan & Akuntansi</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Biro Manajemen Supply Chain</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Biro Pengembangan Usaha</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Biro Sistem, Mutu & K3Lh</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr> 
                                        <tr>
                                            <td>8</td>
                                            <td>Divisi Industri Gula & Agro</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Divisi Industri Komponen & Permesinan</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Divisi Industri Komponen & Permesinan</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Divisi Industri Komponen & Permesinan</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>

                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>

<!-- Required datatable js -->
<script src="<?php echo base_url('assets/libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<!-- Buttons examples -->
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/jszip/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/pdfmake/build/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/pdfmake/build/vfs_fonts.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') ?>"></script>

<!-- Responsive examples -->
<script src="<?php echo base_url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') ?>"></script>

<!-- Datatable init js -->
<script src="<?php echo base_url('assets/js/pages/datatables.init.js') ?>"></script>

<!-- apexcharts -->
<script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js') ?>"></script>

<!-- Plugins js-->
<script src="<?php echo base_url('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') ?>"></script>

<!-- dashboard init -->
<script src="<?php echo base_url('assets/js/pages/dashboard.init.js') ?>"></script>

<!-- App js -->
<script src="<?php echo base_url('assets/js/app.js') ?>"></script>

<script type="text/javascript">

// 
// Wallet Balance
//
var piechartColors = getChartColorsArray("#wallet-balance");
var options = {
    series: [<?php echo $count_gender['female_cnt']; ?>,<?php echo $count_gender['male_cnt']; ?>],
    chart: {
        width: 227,
        height: 227,
        type: 'pie',
    },
    labels: ['Perempuan','Laki-laki'],
    colors: piechartColors,
    stroke: {
        width: 0,
    },
    legend: {
        show: false
    },
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
        }
    }]
};

var chart = new ApexCharts(document.querySelector("#wallet-balance"), options);
chart.render();

var piechartColors = getChartColorsArray("#pendidikan");
var options = {
    series: [<?php echo $count_pendidikan['sd_cnt']; ?>,<?php echo $count_pendidikan['smp_cnt']; ?>, <?php echo $count_pendidikan['sma_cnt']; ?>,<?php echo $count_pendidikan['smk_cnt']; ?>,<?php echo $count_pendidikan['d1_cnt']; ?>,<?php echo $count_pendidikan['d2_cnt']; ?>,<?php echo $count_pendidikan['d3_cnt']; ?>,<?php echo $count_pendidikan['d4_cnt']; ?>,<?php echo $count_pendidikan['s1_cnt']; ?>,<?php echo $count_pendidikan['s2_cnt']; ?>],
    chart: {
        height: 300,
        type: 'pie',
    },
    labels: ['SD','SMP','SMA','SMK','D1','D2','D3','D4','S1','S2'],
    colors: piechartColors,
    stroke: {
        width: 0,
    },
    legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      verticalAlign: 'middle',
      floating: false,
      fontSize: '14px',
      offsetX: 0,
  },
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
        }
    }]
};

var chart = new ApexCharts(document.querySelector("#pendidikan"), options);
chart.render();
</script>

</body>

</html>