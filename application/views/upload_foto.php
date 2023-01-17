<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Human Capital Management System</title>
    <?php include 'layouts/head.php'; ?>


    <link href="<?php echo base_url('assets/libs/dropzone/min/dropzone.min.css') ?>" rel="stylesheet" type="text/css" />

    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/horizontal-menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    
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
                            <h4 class="mb-sm-0 font-size-18">Upload File Foto</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Upload Foto</li>
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
                                <h4 class="card-title">Upload Foto <?php echo $personaldata['nama']; ?></h4>
                                <p class="card-title-desc">Silahkan lakukan drag atau tekan upload untuk memulai upload foto karyawan setelah itu tekan tombol "Simpan" <br>
                                        Syarat file foto yang bisa di upload di system HCMS<br>
                                        1. Ukuran file tidak lebih dari 5 Mb <br>
                                        2. File memiliki ekstensi jpg/jpeg <br>
                                </p>
                            </div>
                            <div class="card-body">

                                <div>
                                    <form action="upload.php" enctype="multipart/form-data" method="POST">
                                        <input type="text" id ="firstname" name ="firstname" />
                                        <input type="text" id ="lastname" name ="lastname" />
                                        <div class="dropzone" id="myDropzone"></div>
                                        <button type="submit" id="submit-all"> upload </button>
                                    </form>
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

<script src="<?php echo base_url('assets/libs/dropzone/min/dropzone.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/app.js') ?>"></script>

<script type="text/javascript">
   Dropzone.options.myDropzone= {
    url: '<?php echo site_url('admin/uploadfile/'.$personaldata['npk']) ?>',
    autoProcessQueue: false,
    uploadMultiple: true,
    parallelUploads: 5,
    maxFiles: 5,
    maxFilesize: 1,
    acceptedFiles: 'image/*',
    addRemoveLinks: true,
    init: function() {
        dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

        // for Dropzone to process the queue (instead of default form behavior):
        document.getElementById("submit-all").addEventListener("click", function(e) {
            // Make sure that the form isn't actually being sent.
            e.preventDefault();
            e.stopPropagation();
            dzClosure.processQueue();
        });

        //send all the form data along with the files:
        this.on("sendingmultiple", function(data, xhr, formData) {
            formData.append("firstname", jQuery("#firstname").val());
            formData.append("lastname", jQuery("#lastname").val());
        });
    }
}
</script>


</body>

</html>