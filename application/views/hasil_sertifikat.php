<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/header.php') ?>
</head>

<body class="">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">HKI</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <?php $this->load->view('_partials/nav.php') ?>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Static Slider 10  -->
                <!-- ============================================================== -->
                <div class="banner-innerpage" style="background-image:url(assets/images/innerpage/banner-bg2.jpg)">
                    <div class="container">
                        <!-- Row  -->
                        <div class="row justify-content-center ">
                            <!-- Column -->
                            <div class="col-md-6 align-self-center text-center" data-aos="fade-down" data-aos-duration="1200">
                                <h1 class="title">Hasil Pencarian</h1>
                                <h6 class="subtitle op-8">Sistem Rekapitulasi Sertifkat Hak Kekayaan Intelektual Perguruan Tinggi Keagamaan Islam</h6>
                            </div>
                            <!-- Column -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Static Slider 10  -->
                <!-- ============================================================== -->
                <div class="container">
                <div class="row m-t-40">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><b>Nama Lengkap</b></label>
                                        <div class="col-10">
                                            <label for="" class="col-10 col-form-label"><?php echo $results[0]->nama ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><b>Institusi</b></label>
                                        <div class="col-10">
                                            <label for="" class="col-10 col-form-label"><?php echo $results[0]->institusi ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><b>Fakultas</b></label>
                                        <div class="col-10">
                                            <label for="" class="col-10 col-form-label"><?php echo $results[0]->nm_fakultas ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><b>Program Studi</b></label>
                                        <div class="col-10">
                                            <label for="" class="col-10 col-form-label"><?php echo $results[0]->nm_prodi ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><b>Jenis Ciptaan</b></label>
                                        <div class="col-10">
                                            <label for="" class="col-10 col-form-label"><?php echo $results[0]->ciptaan ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><b>Judul</b></label>
                                        <div class="col-10">
                                            <label for="" class="col-10 col-form-label"><?php echo $results[0]->judul ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><b>Deskripsi</b></label>
                                        <div class="col-10">
                                            <label for="" class="col-10 col-form-label"><?php echo $results[0]->deskripsi ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><b>File</b></label>
                                        <div class="col-10">
                                            <?php if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') { ?>
                                                <img src="<?php echo base_url().'/assets/uploads/'.$results[0]->file ?>" alt="" style="height: auto; width: 50%;; display: block;">
                                                <br>
                                            <?php } else if ($ext == 'pdf') { ?>
                                                <iframe src="<?php echo base_url().'assets/uploads/'.$results[0]->file ?>" frameborder="1" style="width: 700px; height: 900px;"></iframe>
                                            <?php } ?>
                                             <br>
                                             
                                            <button type="button" class="btn waves-effect waves-light btn-rounded btn-success "><a href="<?php echo base_url('download/').$results[0]->file ?>" style="color: white;">Unduh File Sertifikat</a></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <!-- Back to top -->
        <!-- ============================================================== -->
        <a class="bt-top btn btn-circle btn-lg btn-info" href="#top"><i class="ti-arrow-up"></i></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <?php $this->load->view('_partials/footer.php') ?>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php $this->load->view('_partials/js.php') ?>
<!--      <script type="text/javascript">
            $(function () {
                $('.media').media({width: 868});
            });
    </script> -->
</body>

</html>