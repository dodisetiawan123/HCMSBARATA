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

    <!-- choices css -->
    <link href="<?php echo base_url('assets/libs/choices.js/public/assets/styles/choices.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- datepicker css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.css') ?>">
    <!-- Sweet Alert-->
    <link href="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css" />

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
                            <h4 class="mb-sm-0 font-size-18">Laporan Kehadiran</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data karyawan</a></li>
                                    <li class="breadcrumb-item active">Profil karyawan</li>
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
                                <div class="mt-2">
                                    <h5 class="font-size-14 mb-4">Data Kehadiran : <?php echo $personaldata['nama'] ?></h5>

                                    <div class="row gx-3 gy-2 align-items-center">

                                         <div class="col-sm-4">
                                            <label class="visually-hidden" for="specificSizeInputGroupUsername">Bulan</label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    Range tanggal
                                                </div>
                                                <input type="datetime-local" type="text" class="form-control" id="datepicker-range" placeholder="Pilih range tanggal">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-primary" onclick="search()">Cari data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NPK/No Absen</th>
                                            <th>Nama Pegawai</th>
                                            <th>Nama Department</th>
                                            <th>Jejak Waktu</th>
                                            <th>Type Jejak</th>
                                            <th>Mesin Finger</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                           
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
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
<!-- choices js -->
<script src="<?php echo base_url('assets/libs/choices.js/public/assets/scripts/choices.min.js') ?>"></script>

<!-- Sweet Alerts js -->
<script src="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.js') ?>"></script>

<!-- Datatable init js -->
<script src="<?php echo base_url('assets/js/pages/datatables.init.js') ?>"></script>

<!-- datepicker js -->
<script src="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.js') ?>"></script>

<!-- form wizard init -->
<script src="<?php echo base_url('assets/js/pages/form-wizard.init.js') ?>"></script>

<!-- init js -->


<script src="<?php echo base_url('assets/js/app.js') ?>"></script>



<script type="text/javascript">
    let valnpk = <?php echo $personaldata['npk']; ?>;
    let startdate = '<?php echo date('Y-m-d', strtotime('-30 days')); ?>';
    let enddate = '<?php echo date('Y-m-d', strtotime('+1 days')); ?>';
    $('#datatable').DataTable({
        "processing": true,
        "serverSide": false,
        "ajax": {
            "url": "http://192.168.3.135/API/index.php/karyawan/getdata/"+valnpk,
            "type": "POST",
            'data': {
               startdate: startdate,
               enddate: enddate,
            },
        },
        "columns": [
            {
                "data": null, "sortable": false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { "data": "BADGENUMBER" }, 
            { "data": "NAME" }, 
            { "data": "DEPTNAME" }, 
            { "data": "CHECKTIME" },
            { "data": "CHECKTYPE" },
            { "data": "MachineAlias" }
        ]
    });

   // $("#datepicker-range").flatpickr({
   //      mode: 'range',
   //      dateFormat: "Y-m-d"
   //  });
   let start;
   let end;
   $("#datepicker-range").flatpickr({
        mode: 'range',
        dateFormat: "Y-m-d",
        onClose: function(selectedDates){
            const dateArr = selectedDates.map(date => this.formatDate(date, "Y-m-d"));
            start = dateArr[0];
            var date = new Date(new Date(dateArr[1]).setDate(new Date(dateArr[1]).getDate() + 1));
            end = date.toISOString().substr(0, 10);
            


        }
    });

    function search() {

        $('#datatable').DataTable().clear().destroy();
        $('#datatable').DataTable({
        "processing": true,
        "serverSide": false,
        "ajax": {
            "url": "http://192.168.3.135/API/index.php/karyawan/getdata/"+valnpk,
            "type": "POST",
            'data': {
               startdate: start,
               enddate: end,
            },
        },
        "columns": [
            {
                "data": null, "sortable": false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { "data": "BADGENUMBER" }, 
            { "data": "NAME" }, 
            { "data": "DEPTNAME" }, 
            { "data": "CHECKTIME" },
            { "data": "CHECKTYPE" },
            { "data": "MachineAlias" }
        ]
    });
    }
    
    


    
</script>

</body>

</html>