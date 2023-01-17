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
                            <h4 class="mb-sm-0 font-size-18">Bagian Organisasi</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Struktur Organisasi</a></li>
                                    <li class="breadcrumb-item active">Bagian Organisasi</li>
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
                                <button type="button" class="btn btn-primary waves-effect btn-label waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="bx bx-user-circle label-icon"></i> Tambah Bagian Organisasi</button>
                                
                            </div>
                            <div>
                                    <!--  Extra Large modal example -->
                                    <div class="modal fade bs-example-modal-xl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-m">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Form Input Data Bagian Organisasi</h5>
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
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Informasi Organisasi">
                                                                                        <i class=" bx bx-git-merge"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                           
                                                                        </ul>
                                                                        <!-- wizard-nav -->

                                                                        <div class="tab-content twitter-bs-wizard-tab-content">
                                                                            <div class="tab-pane" id="progress-grade">
                                                                                <div class="text-center mb-4">
                                                                                    <h5>Bagian Organisasi</h5>
                                                                                    <p class="card-title-desc">Isi informasi bagian organisasi</p>
                                                                                </div>
                                                                                 <form class="needs-validation" enctype="multipart/form-data" accept-charset="utf-8" method="post" action="<?php echo site_url('admin/insertbagian') ?>" novalidate>
                                                                                    <div class="row">
                                                                                       <div class="col-lg-12">
                                                                                            <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label">Pilih Satuan Organisasi</label>
                                                                                                    <input id="NmSatminkal" name="NmSatminkal" type="hidden" class="form-control">
                                                                                                    <select class="form-control" name="idmd_organisasi" id="idmd_organisasi" placeholder="Pilih Satuan Organisasi" required>
                                                                                                        <option value="">Pilih Satuan Organisasi</option>
                                                                                                        <?php foreach ($organisasi as $data) {?>
                                                                                                        <option value="<?php echo $data->idmd_organisasi; ?>"><?php echo $data->kodeorganisasi.' - '.$data->namaorganisasi; ?></option>
                                                                                                        <?php } ?>

                                                                                                    </select>
                                                                                                    <div class="invalid-feedback">
                                                                                                        Isi nama organisasi yang valid.
                                                                                                    </div>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                       <div class="col-lg-12">
                                                                                            <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label">Pilih Bidang Organisasi</label>
                                                                                                    <select class="form-control" name="idmd_bidang" id="idmd_bidang" placeholder="Pilih Bidang Organisasi" required>
                                                                                                       <option value="">Pilih bidang</option>
                                                                                                        

                                                                                                    </select>
                                                                                                    <div class="invalid-feedback">
                                                                                                        Isi nama organisasi yang valid.
                                                                                                    </div>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="validationTooltip03">Kode Bagian</label>
                                                                                                <input type="text" class="form-control" name="kodebagian" placeholder="Kode" style="text-transform: uppercase" id="validationTooltip03" required>
                                                                                                 <div class="invalid-feedback">
                                                                                                    Isi kode bidang organisasi yang valid.
                                                                                                 </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="validationTooltip03">Nama Bagian</label>
                                                                                                <input type="text" class="form-control" name="namabagian" placeholder="Nama bagian" style="text-transform: capitalize" id="validationTooltip03" required>
                                                                                                 <div class="invalid-feedback">
                                                                                                    Isi nama bidang organisasi yang valid.
                                                                                                 </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    

                                                                                  
                                                                                
                                                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        
                                                                                        <li class="float-end"><input type="submit" value="Simpan" class="btn btn-primary" /></li>
                                                                                </ul>
                                                                                </form>
                                                                          
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
                                            <th>Kode Bagian</th>
                                            <th>Nama Bagian</th>
                                            <th>Bidang Organisasi</th>
                                            <th>Satuan Organisasi</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                       <?php $no = 0; foreach ($bagian as $data) {?>
                                        <tr>
                                            <td width="50"><?php echo $no=$no+1; ?></td>
                                            <td><?php echo $data->kodebagian; ?></td>
                                            <td><?php echo $data->namabagian; ?></td>
                                            <td><?php echo $data->namabidang; ?></td>
                                            <td><?php echo $data->namaorganisasi; ?></td>
                                            <td><span class="badge bg-primary">Approved</span></td>
                                            <td width="50"> 
                                                <div>
                                                    <div class="btn-group btn-group-example" role="group">
                                                        <button type="button" class="btn btn-sm btn-info w-xs">Detail</i></button>
                                                        <button onclick="location.href='<?php echo site_url('admin/detail_karyawan') ?>'" type="button" class="btn btn-sm btn-danger w-xs">Hapus</i></button>
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

<!-- choices js -->
<script src="<?php echo base_url('assets/libs/choices.js/public/assets/scripts/choices.min.js') ?>"></script>

<!-- init js -->
<script src="<?php echo base_url('assets/js/pages/form-advanced-bagian.init.js') ?>"></script>

<!-- form wizard init -->
<script src="<?php echo base_url('assets/js/pages/form-wizard.init.js') ?>"></script>

<!-- form validation -->
<script src="<?php echo base_url('assets/js/pages/form-validation.init.js') ?>"></script>

<script src="<?php echo base_url('assets/js/app.js') ?>"></script>

<script type="text/javascript">
    $(function () {
    const bidang = new Choices('#idmd_bidang', {
    shouldSort: false,placeholder: true

  });


    

    var url = '<?php echo site_url('data/getbidang') ?>';
    $('#idmd_organisasi').change(function () {
        bidang.clearChoices();
        var id = $('#idmd_organisasi').find('option:selected').val();
        $('#NmSatminkal').val(id);
        $.ajax({
            url: url,
            method: "POST",
            data: { id: id },
            async: false,
            dataType: 'json',
            success: function (data) {
                bidang.setChoices([{
                          value: '',
                          label: 'Pilih bidang',
                          selected:true,
                          disabled: true
                        }]);
                var i;
                for (i = 0; i < data.length; i++) {
                    bidang.setChoices([{
                          value: data[i].idmd_bidang,
                          label: data[i].kodebidang+' - '+data[i].namabidang
                        }]);



                }

            }
        });
    });
});
</script>

</body>

</html>