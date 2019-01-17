<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Head -->
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
       <!-- NAVIGASI -->
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
                                <h1 class="title">Informasi HKI</h1>
                                <h6 class="subtitle op-8">Sistem Rekapitulasi Sertifkat Hak Kekayaan Intelektual Perguruan Tinggi Keagamaan Islam</h6>
                            </div>
                            <!-- Column -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Static Slider 10  -->
                <!-- ============================================================== -->
                <div class="spacer feature26">
                    <div class="container">
                        <div class="row wrap-feature-26">
                            <div class="col-md-7 align-self-center">
                                <div class="max-box">
                                    <h2 class="title m-t-20">Hak Kekayaan Intelektual </h2>
                                    <p class="m-t-30"><b>Hak Kekayaan Intelektual, disingkat “HKI” atau adalah padanan kata yang biasa digunakan untuk Intellectual Property Rights (IPR), yakni hak yang timbul bagi hasil olah pikir yang menghasikan suatu produk atau proses yang berguna untuk manusia pada intinya HKI adalah hak untuk menikmati secara ekonomis hasil dari suatu kreativitas intelektual. Objek yang diatur dalam HKI adalah karya-karya yang timbul atau lahir karena kemampuan intelektual manusia.</b></p>
                                    <p>Secara garis besar HKI dibagi dalam 2 (dua) bagian, yaitu:</p>
                                    <p><ol>
                                        <li>Hak Cipta (copyright)</li>
                                        <li>Hak kekayaan industri (industrial property rights)
                                            <ul style="list-style-type:square">
                                              <li>Paten (patent)</li>
                                              <li>Desain industri (industrial design)</li>
                                              <li>Merek (trademark)</li>
                                              <li>Penanggulangan praktek persaingan curang (repression of unfair competition)</li>
                                              <li>Desain tata letak sirkuit terpadu (layout design of integrated circuit)</li>
                                              <li>Rahasia dagang (trade secret)</li>
                                            </ul>
                                        </li>
                                    </ol></p>
                                    <!-- <a href="javascript:void(0)" class="linking">Learn More <i class="ti-arrow-right"></i></a> -->
                                </div>
                            </div>
                            <div class="col-md-5 col-md-5"> <img src="assets/images/science.png" class="img-responsive" /> </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
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
</body>

</html>