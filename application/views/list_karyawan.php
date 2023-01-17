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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/4.2.1/css/fixedColumns.dataTables.min.css">
    
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
                            <h4 class="mb-sm-0 font-size-18">List Karyawan Organik</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data karyawan</a></li>
                                    <li class="breadcrumb-item active">List karyawan organik</li>
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
                                <button type="button" class="btn btn-primary waves-effect btn-label waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="bx bx-user-circle label-icon"></i> Tambah Karyawan</button>
                                <button type="button" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-save label-icon"></i> Export Excell</button>
                            </div>
                            <div>
                                    <!--  Extra Large modal example -->
                                    <div class="modal fade bs-example-modal-xl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Form Input Data Karyawan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form enctype="multipart/form-data" name="karyawan" accept-charset="utf-8" method="post" action="<?php echo site_url('admin/insertdata') ?>" onsubmit="return validateForm()">
                                                     <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div id="progrss-wizard" class="twitter-bs-wizard">
                                                                        <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                                                                            <li class="nav-item">
                                                                                <a href="#progress-personal-background" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Personal Background">
                                                                                        <i class="bx bx-user"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#progress-educational-background" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Educational Background">
                                                                                        <i class="bx bx-book-bookmark"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#progress-career" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Career">
                                                                                        <i class="bx bx-briefcase-alt-2"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <!-- <li class="nav-item">
                                                                                <a href="#progress-grade" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Grade">
                                                                                        <i class="bx bx-user-pin"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li> -->

                                                                            <!-- <li class="nav-item">
                                                                                <a href="#progress-upah-berlaku" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Upah Berlaku">
                                                                                        <i class="bx bx-money"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li> -->

                                                                            <!-- <li class="nav-item">
                                                                                <a href="#progress-upah-efisiensi" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Upah Efisiensi">
                                                                                        <i class="bx bx-bar-chart-square"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li> -->

                                                                            <!-- <li class="nav-item">
                                                                                <a href="#progress-efisiensi" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Efisiensi">
                                                                                        <i class="bx bx-bar-chart"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        <!-- wizard-nav -->

                                                                        <div id="bar" class="progress mt-4">
                                                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                                                                        </div>
                                                                        <div class="tab-content twitter-bs-wizard-tab-content">
                                                                            <div class="tab-pane" id="progress-personal-background">
                                                                                <div class="text-center mb-4">
                                                                                    <h5>PERSONAL BACKGROUND</h5>
                                                                                    <p class="card-title-desc">Isi informasi identitas karyawan</p>
                                                                                </div>
                                                                                
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-nama-karyawan">Nama Karyawan</label>
                                                                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama karyawan">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-npk">NPK</label>
                                                                                                <input type="text" class="form-control" id="npk" name="npk" placeholder="NPK" maxlength="8">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-tempat-lahir">Tempat Lahir</label>
                                                                                                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Tempat lahir">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label class="form-label">Tanggal Lahir</label>
                                                                                                <input type="text" class="form-control" id="datepicker-datetime-tanggallahir" name="tgllahir" placeholder="Tanggal lahir karyawan">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                                  <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Jenis Kelamin</label>
                                                                                                    <select class="form-control" name="jeniskelamin" id="jenis-kelamin" placeholder="Jenis kelamin">
                                                                                                        <option value="">Pilih jenis kelamin</option>
                                                                                                        <option value="LK">Laki-Laki</option>
                                                                                                        <option value="PR">Perempuan</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        <div class="col-lg-6">
                                                                                             <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label">Agama</label>
                                                                                                    <select class="form-control" name="agama" id="agama" placeholder="Pilih agama karyawan">
                                                                                                        <option value="">Pilih agama karyawan</option>
                                                                                                        <option value="ISLAM">ISLAM </option>
                                                                                                        <option value="HINDU">HINDU</option>
                                                                                                        <option value="KRISTEN">KRISTEN</option>
                                                                                                        <option value="KATOLIK">KATOLIK</option>
                                                                                                        <option value="BUDHA">BUDHA</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                         <div class="col-lg-6">
                                                                                                  <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Status Marital</label>
                                                                                                    <select class="form-control" name="idmd_marital" id="status" placeholder="Jenis kelamin">
                                                                                                        <option value="">Pilih status karyawan</option>
                                                                                                        <option value="BK">BK - Belum Kawin </option>
                                                                                                        <option value="TK">TK - Cerai Hidup / Cerai Mati</option>
                                                                                                        <option value="BS">BS - Bersuami (Orang Barata)</option>
                                                                                                        <option value="K">K - Kawin</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-nik-input">NIK</label>
                                                                                                <input type="number" class="form-control" placeholder="NIK" name="nik">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-address-input">Alamat Sekarang</label>
                                                                                                <textarea id="progresspill-address-input" name="alamatsekarang" class="form-control" rows="2" placeholder="Alamat sekarang"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-phoneno-input">No Hp</label>
                                                                                                <input type="number" name="nohp" class="form-control" id="" placeholder="No Hp">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-email-input">Email</label>
                                                                                                <input type="email" name="email" class="form-control" placeholder="Alamat email">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                    <li class="next"><a class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="tab-pane" id="progress-educational-background">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>EDUCATIONAL BACKGROUND</h5>
                                                                                        <p class="card-title-desc">Isi informasi pendidikan karyawan</p>
                                                                                    </div>
                                                                                    <form>
                                                                                        <div class="row">
                                                                                             <div class="col-lg-4">
                                                                                                  <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label">Tingkat Pendidikan</label>
                                                                                                    <select class="form-control" name="levelpendidikan" id="pilih-pendidikan" placeholder="Pilih tingkat pendidikan">
                                                                                                        <option value="">Pilih tingkat pendidikan</option>
                                                                                                        <option value="SD">SD</option>
                                                                                                        <option value="SMP">SMP</option>
                                                                                                        <option value="SMA">SMA</option>
                                                                                                        <option value="SMK">SMK</option>
                                                                                                        <option value="Diploma 1">Diploma 1</option>
                                                                                                        <option value="Diploma 2">Diploma 2</option>
                                                                                                        <option value="Diploma 3">Diploma 3</option>
                                                                                                        <option value="Diploma 4">Diploma 4</option>
                                                                                                        <option value="Sarjana 1">Sarjana 1</option>
                                                                                                        <option value="Sarjana 2">Sarjana 2</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Golongan Pendidikan</label>
                                                                                                    <input type="text" class="form-control" id="golpend" name="golpend" placeholder="Golongan Pendidikan" readonly>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-fakultas" class="form-label">Fakultas/Jurusan</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-vatno-input" name="jurusan" placeholder="Fakultas/Jurusan">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-institusi" class="form-label">Institusi</label>
                                                                                                    <input type="text" class="form-control" name="institusi" id="progresspill-cstno-input" placeholder="Institusi">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                <label class="form-label">Tahun Lulus</label>
                                                                                                <input type="text" class="form-control" id="datepicker-datetime-lulus" name="tahunlulus" placeholder="Tahun Lulus">
                                                                                            </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="progress-career">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>CAREER</h5>
                                                                                        <p class="card-title-desc">Isi informasi karir karyawan</p>
                                                                                    </div>  
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-tanggalmasuk">Mulai Bekerja</label>
                                                                                                    <input type="text" class="form-control" name="mulaibekerja" id="datepicker-datetime-tanggalmasuk" placeholder="Tanggal Masuk">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-4">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-tanggalmasuk">Lama Kerja</label>
                                                                                                    <input type="text" class="form-control" id="lamakerja" 
                                                                                                     name="lamakerja"  placeholder="Lama Kerja" readonly>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-4">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-pengangkatan">Jadi Karyawan Tetap</label>
                                                                                                    <input type="text" class="form-control" name="tgldiangkat" id="datepicker-datetime-tanggalangkat" placeholder="Tanggal Pengangkatan">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label">Satuan Organisasi</label>
                                                                                                    <input id="NmSatminkal" name="NmSatminkal" type="hidden" class="form-control">
                                                                                                    <select class="form-control" name="idmd_organisasi" id="idmd_organisasi" placeholder="Pilih satuan organisasi">
                                                                                                        
                                                                                                        <option value="">Pilih Satuan Organisasi</option>
                                                                                                        <?php foreach ($organisasi as $data) {?>
                                                                                                        <option value="<?php echo $data->idmd_organisasi; ?>"><?php echo $data->namaorganisasi; ?></option>
                                                                                                        <?php } ?>

                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-4">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label">Bidang Organisasi</label>
                                                                                                    <select class="form-control" name="idmd_bidang" id="idmd_bidang" placeholder="Pilih bagian">
                                                                                                        <option value="">Pilih bagian</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>


                                                                                            <div class="col-lg-4">
                                                                                                 <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label">Jabatan Organisasi</label>
                                                                                                    <input id="NmBidang" name="NmBidang" type="hidden" class="form-control">
                                                                                                    <select class="form-control" name="idmd_jabatan" id="idmd_jabatan" placeholder="Pilih jabatan">
                                                                                                        <option value="">Pilih jabatan</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Level Jabatan</label>
                                                                                                    <select class="form-control" name="idmd_level" id="pilih-level" placeholder="Pilih level jabatan">

                                                                                                        <option value="">Pilih level jabatan</option>
                                                                                                        <?php foreach ($level as $data) {?>
                                                                                                        <option value="<?php echo $data->level ?>"><?php echo $data->level ?> - <?php echo $data->namalevel ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                 <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Status Jabatan</label>
                                                                                                    <select class="form-control" name="statusjabatan" id="statusjabatan" placeholder="Status Jabatan">
                                                                                                        <option value="">Pilih status jabatan karyawan</option>
                                                                                                        <option value="Def.">Def. - Definitif</option>
                                                                                                        <option value="Pgs.">Pgs. - Penganti Sementara</option>
                                                                                                        <option value="Pjs.">Pjs. - Pejabat Sementara</option>
                                                                                                        <option value="Plt.">Plt. - Pelaksana Tugas</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                             
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">TMT Jabatan</label>
                                                                                                    <input type="text" class="form-control" id="datepicker-datetime-tmtjabatan" name="tglmulai" placeholder="TMT Jabatan">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Kategori Fungsi</label>
                                                                                                    <select class="form-control" name="kategorifungsi" id="fungsi" placeholder="Pilih satuan organisasi">
                                                                                                        <option value="">Pilih kategori fungsi</option>
                                                                                                        <option value="Core">Core</option>
                                                                                                        <option value="Support">Support</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="float-end"><button id="submit" type="submit" class="btn btn-primary">Save Changes</button></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <!-- <div class="tab-pane" id="progress-grade">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>GRADE</h5>
                                                                                        <p class="card-title-desc">Isi informasi Grade karyawan</p>
                                                                                    </div>
                                                                                        <div class="row">
                                                                                             <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Konversi Baru</label>
                                                                                                    <select class="form-control" name="idmd_grade" id="grade" placeholder="Grade">
                                                                                                        <option value="">Pilih grade</option>
                                                                                                        <?php foreach ($grade as $data) {?>
                                                                                                        <option value="<?php echo $data->idmd_grade ?>"><?php echo $data->grade ?> - <?php echo $data->gajipokok ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-tanggalmasuk">TMT Grade</label>
                                                                                                    <input type="text" class="form-control" id="tgldiangkat" placeholder="TMT Grade" name="tgldiangkatgrade">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div> -->
                                                                            <!-- <div class="tab-pane" id="progress-upah-berlaku">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>UPAH BERLAKU</h5>
                                                                                        <p class="card-title-desc">Isi informasi upah berlaku karyawan</p>
                                                                                    </div>

                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-cstno-input" class="form-label">Gaji Pokok Konversi(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="currency-gaji-pokok" name="ub_gajipokokkonversi" placeholder="Isi gaji pokok konversi">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-servicetax-input" class="form-label">Tunjangan Kesejahteraan Konversi(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="currency-tunjangan-kesejahteraan-konversi" name="ub_tunjkesejahteraankonversi" placeholder="Isi tunjangan kesejahteraan konversi">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-companyuin-input" class="form-label">Tunjangan Peralihan Upah Pokok(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="currency-tunjangan-peralihan" name="ub_tunjperalihanupahpokok" placeholder="Isi tunjangan peralihan upah pokok">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Peralihan Jabatan(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="currency-tunjangan-peralihan-jabatan" name="ub_tunjperalihanjabatan" placeholder="Isi tunjangan peralihan jabatan">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Peralihan(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="tunjangan-peralihan" name="ub_tunjperalihan" placeholder="Isi tunjangan peralihan">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Jabatan(Rp)</label>
                                                                                                    <input type="text" class="form-control" name="ub_tunjjabatan" id="tunjangan-jabatan" placeholder="Isi tunjangan jabatan">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Upah Pokok Berlaku(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="upah-pokok-berlaku" name="ub_upahpokokberlaku" placeholder="Isi upah pokok berlaku">
                                                                                                </div>
                                                                                            </div>
                                                                                           
                                                                                           
                                                                                        </div>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div> -->
                                                                           <!--  <div class="tab-pane" id="progress-upah-efisiensi">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>UPAH EFISIENSI</h5>
                                                                                        <p class="card-title-desc">Isi informasi upah efisiensi karyawan</p>
                                                                                    </div>
                                                                                        <div class="row">
                                                                                           <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Gaji Pokok Konversi(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-gaji-pokok-konversi" name="uf_gajipokokkonversi" placeholder="Isi gaji pokok konversi">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Kesejahteraan Konversi(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-tunjangan-kesejahteraan-konversi" name="uf_tunjkesejahteraankonversi" placeholder="Isi tunjangan kesejahteraan konversi">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjngan Peralihan Upah Pokok(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-tunjangan-peralihan-upah-pokok" name="uf_tunjperalihanupahpokok" placeholder="Isi tunjangan peralihan upah pokok">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Peralihan Jabatan(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-tunjangan-peralihan-jabatan" name="uf_tunjperalihanjabatan" placeholder="Isi tunjangan peralihan jabatan">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Peralihan(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-tunjangan-peralihan" name="uf_tunjperalihan" placeholder="Isi tunjangan peralihan">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Jabatan(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-tunjangan-jabatan" name="uf_tunjjabatan" placeholder="Isi tunjangan jabatan">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Upah Pokok Efisiensi(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-upah-pokok-efisiensi" name="uf_upahpokokberlaku" placeholder="Isi upah pokok efisiensi">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Penyesuaian(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-tunjangan-penyesuaian" name="uf_tunjpenyesuaian" placeholder="isi tunjangan penyesuaian">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div> -->

                                                                            <!-- <div class="tab-pane" id="progress-efisiensi">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>EFISIENSI</h5>
                                                                                        <p class="card-title-desc">Isi informasi efisiensi karyawan</p>
                                                                                    </div>

                                                                                        <div class="row">
                                                                                           <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Status Keaktifan</label>
                                                                                                    <select class="form-control" name="statuskeaktifan" id="status-keaktifan" name="statuskeaktifan" placeholder="Pilih status keaktifan">
                                                                                                        <option value="">Pilih status keaktifan</option>
                                                                                                        <option value="A">A - Aktif</option>
                                                                                                        <option value="NA">NA - Non Aktif</option>
                                                                                                        
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Status Dirumahkan</label>
                                                                                                    <select class="form-control" name="statusdirumahkan" id="status-dirumahkan" placeholder="Pilih status dirumahkan">
                                                                                                        <option value="">Pilih status dirumahkan</option>
                                                                                                        <option value="-">-</option>
                                                                                                        <option value="H">H</option>
                                                                                                        
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Batch Dirumahkan</label>
                                                                                                    <select class="form-control" name="batchdirumahkan" id="status-batch" placeholder="Pilih batch dirumahkan">
                                                                                                        <option value="">Pilih batch dirumahkan</option>
                                                                                                        <option value="I">I</option>
                                                                                                        <option value="II">II</option>
                                                                                                        <option value="III">III</option>
                                                                                                        <option value="IIII">IIII</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-pengangkatan">Tanggal Dirumahkan atau Aktif Kembali</label>
                                                                                                    <input type="text" class="form-control" id="tanggal-dirumahkan" name="tgldirumahkan" placeholder="Isi tanggal di rumahkan atau Aktif kembali">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Aktifitas (Obsolete)</label>
                                                                                                    <select class="form-control" name="aktivitasobsolete" id="aktifitasobsolete" placeholder="Pilih aktifitas">
                                                                                                        <option value="">Pilih aktifitas</option>
                                                                                                        <option value="TL">TL</option>
                                                                                                        <option value="TTL">TTL</option>
                                                                                                        <option value="TPEM">TPEM</option>
                                                                                                        <option value="TADM">TADM</option>
                                                                                                        
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Aktifitas 2022</label>
                                                                                                    <select class="form-control" name="aktivitas2022" id="aktifitas2022" placeholder="Pilih aktifitas">
                                                                                                        <option value="">Pilih aktifitas</option>
                                                                                                        <option value="TL">TL</option>
                                                                                                        <option value="TTL">TTL</option>
                                                                                                        <option value="TPEM">TPEM</option>
                                                                                                        <option value="TADM">TADM</option>
                                                                                                        
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Sub Aktifitas</label>
                                                                                                    <select class="form-control" name="subaktivitas" id="subaktifitas" placeholder="Pilih sub aktifitas">
                                                                                                        <option value="">Pilih sub aktifitas</option>
                                                                                                        <option value="BP">BP</option>
                                                                                                        <option value="BPP">BPP</option>
                                                                                                        
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Status Kepegawaian</label>
                                                                                                    <select class="form-control" name="statuskepegawaian" id="statuskepegawaian" placeholder="Pilih status kepegawaian">
                                                                                                        <option value="">Pilih status kepegawaian</option>
                                                                                                        <option value="KT">KT</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Teknik atau Non Teknik</label>
                                                                                                    <select class="form-control" name="tekniknonteknik" id="tekniknonteknik" placeholder="Pilih status kepegawaian">
                                                                                                        <option value="">Pilih teknik atau non Teknik</option>
                                                                                                        <option value="Teknik">Teknik</option>
                                                                                                        <option value="Non Teknik">Non Teknik</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="float-end"><button id="submit" type="submit" class="btn btn-primary">Save Changes</button></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    </form>
                                                    <!-- end row -->
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div>
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
                                                    <th style="min-width: 90px;">Aksi</th>
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
                                                <?php $no = 0; foreach ($karyawan as $data) {?>
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



<!-- twitter-bootstrap-wizard js -->
<script src="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/prettify.js') ?>"></script>

<!-- form mask -->
<!-- <script src="<?php  //echo base_url('assets/libs/imask/imask.min.js') ?>"></script> -->

<!-- form mask init -->
<!-- <script src="<?php  //echo base_url('assets/js/pages/form-mask.init.js') ?>"></script> -->

<!-- choices js -->
<script src="<?php echo base_url('assets/libs/choices.js/public/assets/scripts/choices.min.js') ?>"></script>

<!-- Sweet Alerts js -->
<script src="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.js') ?>"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/fixedcolumns/4.2.1/js/dataTables.fixedColumns.min.js"></script>


<!-- datepicker js -->
<script src="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.js') ?>"></script>

<!-- form wizard init -->
<script src="<?php echo base_url('assets/js/pages/form-wizard.init.js') ?>"></script>

<!-- init js -->
<script src="<?php echo base_url('assets/js/pages/form-advanced-list.init.js') ?>"></script>

<script src="<?php echo base_url('assets/libs/table-edits/build/table-edits.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/pages/table-editable.int.js') ?>"></script>

<script src="<?php echo base_url('assets/js/app.js') ?>"></script>
<script>
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
<script type="text/javascript">
    function checknpk(handleData){
           var npk = $('#npk').val();
           var urlnpk = '<?php echo site_url('data/ceknpk/') ?>'
            $.ajax({
                url: urlnpk,
                method: "POST",
                data: { npk: npk },
                async: false,
                dataType: 'json',
                success: function (data) {
                   handleData(data);
                },
                    error: function() {
                        alert('Error occured');
                    }
            }

            );

    }
    
    function validateForm() {
          let x = document.forms["karyawan"]["npk"].value;
          if (x == "") {
            alert("Formulir NPK harus di isi..!!");
            return false;
          }else{
            checknpk(function(output){
                if (!$.trim(output)){   
                    
                    return data = confirm("Simpan ke database?");
                }
                else{   
                    alert("NPK sudah ada di database silahkan gunakan yang lain!! ");
                    return data = false;
                }
            });
            return data;
          }

        }
</script>
<script>
    function dateAgo(date) {
    var startDate = new Date(date);
    var diffDate = new Date(new Date() - startDate);
    return ((diffDate.toISOString().slice(0, 4) - 1970) + " Tahun " +
        diffDate.getMonth() + " Bulan " + (diffDate.getDate()-1) + " Hari");
    }

    $('#datepicker-datetime-tanggalmasuk').change(function () {
        var tgl = $('#datepicker-datetime-tanggalmasuk').val();
        $('#lamakerja').val(dateAgo(tgl));

    });

    const isEmpty = str => !str.trim().length;

    document.getElementById("datepicker-datetime-tanggalmasuk").addEventListener("input", function() {
      if( isEmpty(this.value) ) {
        $('#lamakerja').val('');
      }
    });
</script>
        
<script>
    $('#pilih-pendidikan').change(function () {
        var pendidikan = $('#pilih-pendidikan').find('option:selected').val();
        if (pendidikan=='SD') {
            var value = 'A'
        } else if (pendidikan=='SMP') {
            var value = 'B'
        } else if (pendidikan=='SMA') {
            var value = 'C'
        } else if (pendidikan=='SMK') {
            var value = 'C'
        } else if (pendidikan=='Diploma 1') {
            var value = 'C'
        } else if (pendidikan=='Diploma 2') {
            var value = 'C'
        } else if (pendidikan=='Diploma 3') {
            var value = 'D'
        } else if (pendidikan=='Diploma 4') {
            var value = 'E'
        } else if (pendidikan=='Sarjana 1') {
            var value = 'F'
        } else if (pendidikan=='Sarjana 2') {
            var value = 'G'
        } 
        $('#golpend').val(value);

    });
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

    const bidang = new Choices('#idmd_bidang', {
    shouldSort: false,placeholder: true
    });
    
    const jabatan = new Choices('#idmd_jabatan', {
    shouldSort: false,placeholder: true
    });


    var urlbidang = '<?php echo site_url('data/getbidang') ?>';
    var urljabatan = '<?php echo site_url('data/getjabatan') ?>';

    $('#idmd_organisasi').change(function () {
        bidang.clearChoices();
        jabatan.clearChoices();
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
                jabatan.setChoices([{
                          value: '',
                          label: 'Pilih bagian',
                          selected:true,
                          disabled: true
                        }]);
                var i;
                for (i = 0; i < data.length; i++) {
                    bidang.setChoices([{
                          value: data[i].idmd_bidang,
                          label: data[i].namabidang
                        }]);



                }

            }
        });
    });

     $('#idmd_bidang').change(function () {
        jabatan.clearChoices();
        var id = $('#idmd_bidang').find('option:selected').val();
        $('#NmBidang').val(id);
        $.ajax({
            url: urljabatan,
            method: "POST",
            data: { id: id },
            async: false,
            dataType: 'json',
            success: function (data) {
                jabatan.setChoices([{
                          value: '',
                          label: 'Pilih jabatan',
                          selected:true,
                          disabled: true
                        }]);
                var i;
                for (i = 0; i < data.length; i++) {
                    jabatan.setChoices([{
                          value: data[i].idmd_jabatan,
                          label: data[i].namajabatan
                        }]);

                }

            }
        });
    });


    
</script>

</body>

</html>