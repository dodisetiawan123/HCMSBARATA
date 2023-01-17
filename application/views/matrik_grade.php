<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Human Capital Management System</title>
    <?php include 'layouts/head.php'; ?>

    <!-- DataTables -->
    <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />
    <link href="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />

    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/prettify.css') ?>">

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
                            <h4 class="mb-sm-0 font-size-18">Matrik Grade</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Matrik Renumerasi</a></li>
                                    <li class="breadcrumb-item active">Matrik grade</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary waves-effect btn-label waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="bx bx-user-circle label-icon"></i> Tambah Grade</button>
                                
                            </div>
                            <div>
                                    <!--  Extra Large modal example -->
                                    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-m">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Form Input Data Renumerasi Grade</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                     <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div id="progrss-wizard" class="twitter-bs-wizard">
                                                                        <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                                                                            <li class="nav-item">
                                                                                <a href="#progress-grade" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Informasi Grade">
                                                                                        <i class="bx bx-money"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                           
                                                                        </ul>
                                                                        <!-- wizard-nav -->

                                                                        <div class="tab-content twitter-bs-wizard-tab-content">
                                                                            <div class="tab-pane" id="progress-grade">
                                                                                <div class="text-center mb-4">
                                                                                    <h5>Informasi Grade</h5>
                                                                                    <p class="card-title-desc">Isi informasi grade gaji karyawan</p>
                                                                                </div>
                                                                                <form>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-firstname-input">Grade</label>
                                                                                                <input type="text" class="form-control" id="progresspill-firstname-input">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-lastname-input">Gaji Pokok</label>
                                                                                                <input type="text" class="form-control" id="progresspill-lastname-input">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                  
                                                                                </form>
                                                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        
                                                                                        <li class="float-end"><a href="javascript: void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".confirmModal">Save
                                                                                                Changes</a></li>
                                                                                </ul>
                                                                          
                                                                        </div>
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
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div>
                            <div class="card-body">

                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Grade</th>
                                            <th>Gaji Pokok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                       <?php $no = 0; foreach ($grade as $data) {$no=$no+1;?>
                                        <tr>
                                            <td width="50"><?php echo $no; ?></td>
                                            <td><?php echo $data->grade ?></td>
                                            <td><?php echo $data->gajipokok ?></td>
                                            <td width="50"> 
                                                <div>
                                                    <div class="btn-group btn-group-example" role="group">
                                                        <button type="button" class="btn btn-sm btn-info w-xs">Edit</i></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
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

<!-- twitter-bootstrap-wizard js -->
<script src="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/prettify.js') ?>"></script>

<!-- form wizard init -->
<script src="<?php echo base_url('assets/js/pages/form-wizard.init.js') ?>"></script>


<script src="<?php echo base_url('assets/js/app.js') ?>"></script>

</body>

</html>