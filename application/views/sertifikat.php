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
                                <h1 class="title">Sertifikat HKI</h1>
                                <h6 class="subtitle op-8">Sistem Rekapitulasi Sertifkat Hak Kekayaan Intelektual Perguruan Tinggi Keagamaan Islam</h6>
                            </div>
                            <!-- Column -->
                        </div>
                    </div>
                </div>

                <div class="bg-light">
                    <section>
                        <div id="banner3" class="banner" >
                            <div class="banner-content">
                                <div class="container">
                                    <form action="<?php echo base_url('hasil');?>" method = "post">
                                    <div class="row justify-content-center" style="margin-bottom: 50px;">
                                        <div class="col-lg-9 p-0" data-aos="fade-down" data-aos-duration="1500">
                                            <h2 class="title text-white text-center font-bold m-b-40"><p class="text-dark">Cari Data Sertifikat</p></h2>
                                            <div class="row">
                                                    <div class="form-group col-md-10 m-t-20">
                                                        <select class="form-control itemName" name="itemName" id="itemName">
                                                        
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2 m-t-20">
                                                        <input type="submit" class="btn btn-success btn-sm" value="Cari">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
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
<script type="text/javascript">
      $('.itemName').select2({
        placeholder: '--- Cari Nama ---',
        minimumInputLength: 1,
        ajax: {
          url: "<?php echo base_url('ambil_nama');?>",
          dataType: 'json',
          delay: 250,
          data: function(params){
            return{
                dosen : params.term
            };
          },
          processResults: function (data) {
            var results = [];
            $.each(data, function(index, item){
                results.push({
                    id : item.id,
                    text : item.nama
                });
            });
            return {
              results: results
            };
          },
          cache: true
        }
      });
</script> 

</body>

</html>