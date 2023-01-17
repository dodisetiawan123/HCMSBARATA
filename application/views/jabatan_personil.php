<?php include 'layouts/head-main.php'; ?>
<?php 
function get_interval($date){
    if ($date=='0000-00-00') {
       return ' ';
    }else{
        $datetime1 = new DateTime(date('d F Y'));
        $datetime2 = new DateTime(date('d F Y', strtotime($date)));
        $interval = $datetime1->diff($datetime2);
        return $interval->format('%y tahun %m bulan %d hari');   
    }
    
}
 ?>
<head>

    <title>Human Capital Management System</title>
    <?php include 'layouts/head.php'; ?>

    <!-- DataTables -->
    <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />
    <link href="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />

    <!-- Sweet Alert-->
    <link href="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css" />
    
    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/prettify.css') ?>">

    <!-- choices css -->
    <link href="<?php echo base_url('assets/libs/choices.js/public/assets/styles/choices.min.css') ?>" rel="stylesheet" type="text/css" />

    <?php include 'layouts/head-style.php'; ?>
    <style type="text/css">
        .table-bordered, .table-bordered td, .table-bordered th {
                border: 1px solid #bbbbbb;
            }
    </style>

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
                            <h4 class="mb-sm-0 font-size-18">Daftar Personil Jabatan</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Struktur Organisasi</a></li>
                                    <li class="breadcrumb-item ">Jabatan Organisasi</li>
                                    <li class="breadcrumb-item active">Personil Jabatan</li>
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
                                <table class="table table-borderless mb-0">
                                    <thead>
                                        <th width="170" style="padding: 0;"><p class="text-muted font-size-13 mb-1"><strong>NAMA JABATAN </strong></p></th>
                                        <td style="padding: 0;">: <strong><?php echo $jabatan['namajabatan']?></strong> </td>
                                     </thead>
                                  <tbody>
                                    <tr>
                                      <th width="170" style="padding: 0;"><p class="text-muted font-size-13 mb-1"><strong>KODE JABATAN</strong></p></th>
                                      <td style="padding: 0;">: <strong><?php echo $jabatan['kodeorganisasi'].' '.$jabatan['kodebidang'].' '.$jabatan['kodejabatan'];?></strong> </td>
                                    </tr>
                                    <tr>
                                      <th width="170" style="padding: 0;"><p class="text-muted font-size-13 mb-1"><strong>BIDANG</strong></p></th>
                                      <td style="padding: 0;">: <strong><?php echo $jabatan['namabidang'];?></strong> </td>
                                    </tr>
                                    <tr>
                                      <th style="padding: 0;"><p class="text-muted font-size-13 mb-1"><strong>SATUAN ORGANISASI</strong></p></th>
                                      <td style="padding: 0;">: <strong><?php echo $jabatan['namaorganisasi'];?></strong></td>
                                    </tr>
                                  </tbody>
                                </table>
                                
                            </div>
                    </div> <!-- end col -->
                        <div class="card">
                            <div class="card-header">
                                
                                <button type="button" class="btn btn-primary waves-effect btn-label waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="bx bx-user-circle label-icon"></i> Tambah Karyawan</button>
                                
                                
                            </div>
                            <div>
                                    
                            <div class="card-body">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-editable table-striped table-bordered text-nowrap table-edits">
                                            <thead class="text-center">
                                                
                                                <tr>
                                                    <th colspan="10" style="text-align: center;">PERSONAL BACKGROUND</th>
                                                    <th colspan="3" style="text-align: center;">CONTACT PERSON</th>
                                                    <th colspan="4" style="text-align: center;">EDUCATIONAL BACKGROUND</th>
                                                    <th colspan="10" style="text-align: center;">CAREER</th>
                                                    <th colspan="1" style="text-align: center;">UMUR PEKERJA</th>
                                                    <th colspan="2" style="text-align: center;">LAMA KERJA</th>
                                                </tr>
                                                <tr class="table-striped">
                                                    <th>No</th>
                                                    <th>Aksi</th>
                                                    <th style="min-width: 152px;">Nama Karyawan</th>
                                                    <th style="min-width: 152px;">NPK</th>
                                                    <th style="min-width: 152px;">Tempat Lahir</th>
                                                    <th style="min-width: 152px;">Tanggal Lahir</th>
                                                    <th style="min-width: 152px;">Jenis Kelamin</th>
                                                    <th style="min-width: 152px;">Agama</th>
                                                    <th style="min-width: 152px;">Status</th>
                                                    <th style="min-width: 152px;">NIK</th>
                                                    <th style="min-width: 152px;">Alamat</th>
                                                    <th style="min-width: 152px;">No. Hp</th>
                                                    <th style="min-width: 152px;">E-Mail</th>
                                                    <th style="min-width: 152px;">Tingkat Pendidikan</th>
                                                    <th style="min-width: 152px;">Fakultas/Jurusan</th>
                                                    <th style="min-width: 152px;">Institusi</th>
                                                    <th style="min-width: 152px;">Tahun Lulus</th>
                                                    <th style="min-width: 152px;">Mulai Bekerja</th>
                                                    <th style="min-width: 152px;">Jadi Karyawan tetap</th>
                                                    <th style="min-width: 152px;">Status Jabatan</th>
                                                    <th style="min-width: 152px;">Nama Jabatan</th>
                                                    <th style="min-width: 152px;">Status+Jabatan</th>
                                                    <th style="min-width: 152px;">TMT Jabatan</th>
                                                    <th style="min-width: 152px;">Bidang/Bagian</th>
                                                    <th style="min-width: 152px;">Satuan Organisasi</th>
                                                    <th style="min-width: 152px;">Kategori Fungsi</th>
                                                    <th style="min-width: 152px;">Level Jabatan</th>
                                                    <th style="min-width: 152px;">Umur</th>
                                                    <th style="min-width: 152px;">Dari Mulai Kerja</th>
                                                    <th style="min-width: 152px;">Dari Menjadi Karyawan Tetap</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 0; foreach ($personaldata as $data) {?>
                                                <tr data-id="<?php echo $data->npk ?>">
                                                    <td><?php $no = $no+1; echo $no; ?></td>
                                                    <td>
                                                        <div>
                                                            <div>
                                                                 <button type="button" class="btn btn-soft-primary waves-effect waves-light edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="bx bx-edit-alt font-size-17 align-middle"></i></button>
                                                                <button onclick="location.href='<?php echo site_url('admin/detail_karyawan/'.$data->npk) ?>'" type="button" class="btn btn-soft-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Detail"><i class="bx bx-detail font-size-17 align-middle"></i></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-field="nama"><?php echo $data->nama; ?></td>
                                                    <td ><?php echo $data->npk; ?></td>
                                                    <td data-field="tempatlahir"><?php echo $data->tempatlahir; ?></td>
                                                    <td data-field="tgllahir"><?php echo $data->tgllahir; ?></td>
                                                    <td data-field="jeniskelamin"><?php echo $data->jeniskelamin; ?></td>
                                                    <td data-field="agama"><?php echo $data->agama; ?></td>
                                                    <td data-field="idmd_marital"><?php echo $data->idmd_marital; ?></td>
                                                    <td data-field="nik"><?php echo $data->nik; ?></td>
                                                    <td data-field="alamatsekarang"><?php echo $data->alamatsekarang; ?></td>
                                                    <td data-field="nohp"><?php echo $data->nohp; ?></td>
                                                    <td data-field="email"><?php echo $data->email; ?></td>
                                                    <td data-field="levelpendidikan"><?php echo $data->levelpendidikan; ?></td>
                                                    <td data-field="jurusan"><?php echo $data->jurusan; ?></td>
                                                    <td data-field="institusi"><?php echo $data->institusi; ?></td>
                                                    <td data-field="tahunlulus"><?php echo $data->tahunlulus; ?></td>
                                                    <td data-field="mulaibekerja"><?php echo $data->mulaibekerja; ?></td>
                                                    <td data-field="tgldiangkat"><?php echo $data->tgldiangkat; ?></td>
                                                    <td data-field="statusjabatan"><?php echo $data->statusjabatan; ?></td>
                                                    <td ><?php echo $data->namajabatan; ?></td>
                                                    <td><?php if ($data->statusjabatan != "Def.") {
                                                        echo $data->statusjabatan;
                                                    } ?> <?php echo $data->namajabatan; ?></td>
                                                    <td ><?php echo $data->tmt_jabatan; ?></td>
                                                    <td><?php echo $data->namabidang; ?></td>
                                                    <td><?php echo $data->namaorganisasi; ?></td>
                                                    <td><?php echo $data->kategorifungsi; ?></td>
                                                    <td><?php echo $data->level.' - '.$data->namalevel; ?></td>
                                                    <td><?php echo get_interval($data->tgllahir); ?></td>
                                                    <td><?php echo get_interval($data->mulaibekerja); ?></td>
                                                    <td><?php echo get_interval($data->tgldiangkat); ?></td>
                                                </tr>
                                                <?php   } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

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

<!-- Sweet Alerts js -->
<script src="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.js') ?>"></script>

<!-- Datatable init js -->
<!-- <script src="<?php echo base_url('assets/js/pages/datatables.init.js') ?>"></script> -->

<!-- twitter-bootstrap-wizard js -->
<script src="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/prettify.js') ?>"></script>

<script src="<?php echo base_url('assets/libs/choices.js/public/assets/scripts/choices.min.js') ?>"></script>

<!-- init js -->
<script src="<?php echo base_url('assets/js/pages/form-advanced-jabatan.init.js') ?>"></script>

<!-- form wizard init -->
<script src="<?php echo base_url('assets/js/pages/form-wizard.init.js') ?>"></script>

<!-- form validation -->
<script src="<?php echo base_url('assets/js/pages/form-validation.init.js') ?>"></script>


<script src="<?php echo base_url('assets/js/app.js') ?>"></script>
<script type="text/javascript">
 $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#tech-companies-1').DataTable({
        fixedHeader: false,
        order: [[1, 'asc']],
        scrollY:        "500px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   {
            left: 3
        }
    });
    } );
</script>
<script>
     <?php if ($this->session->flashdata('done')) {?>
       $(window).on('load', function() {
            Swal.fire({
            position: 'top-midle',
            icon: 'success',
            title: 'Data berhasil di simpan',
            showConfirmButton: false,
            timer: 1500
            })
        });
    <?php } ?>
</script>

<script type="text/javascript">
    $(function () {
    const bidang = new Choices('#idmd_bidang', {
    shouldSort: false,placeholder: true
    });


    var urlbidang = '<?php echo site_url('data/getbidang') ?>';

    $('#idmd_organisasi').change(function () {
        bidang.clearChoices();
        var id = $('#idmd_organisasi').find('option:selected').val();
        $('#NmSatminkal').val(id);
        $.ajax({
            url: urlbidang,
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


    function deletejabatan(data){
        var result = confirm("Apakah anda yakin?");
        if (result) {
             window.location.href = '<?php echo site_url('admin/hapus_jabatan/') ?>'+data;
        }
    }
</script>

</body>

</html>