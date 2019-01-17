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
                                <h1 class="title">Lapor HKI</h1>
                                <h6 class="subtitle op-8">Sistem Rekapitulasi Sertifkat Hak Kekayaan Intelektual Perguruan Tinggi Keagamaan Islam</h6>
                            </div>
                            <!-- Column -->
                        </div>
                    </div>
                </div>
                <div class="form6 spacer">
                    <!-- Row  -->
                    <div class="row">
                        <div class="container">
                            <?php if($this->session->flashdata('success')){ ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success') ?>
                                </div>
                            <?php } ?>
                            <div class="col-lg-12 align-justify-center p-r-40 p-l-0 contact-form">
                                <div class="" data-aos="fade-right" data-aos-duration="1200">
                                    <h1 class="title font-light">Identitas Hak Kekayaan Intelektual</h1>
                                    <h6 class="subtitle">Lengkapi Kolom Isian dibawah ini</h6>
                                    <div style="color:red">
                                        <?php echo validation_errors(); ?>
                                      <?php if(isset($error)){print $error;}?>
                                    </div>
                                    <form class="m-t-30" data-aos="fade-right" data-aos-duration="1200" action="<?php echo base_url('upload') ?>" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label"><b>*Nama Lengkap</b></label>
                                                    <input class="form-control" type="text" placeholder="nama lengkap" name="nama" value="<?= set_value('nama') ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label"><b>*Institusi</b></label>
                                                    <input class="form-control" type="text" name="institusi" value="UIN Sunan Gunung Djati Bandung">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label"><b>*Fakultas</b></label>

                                                        <select class="col-12 fakultas" name="fakultas" id="fakultas">
                                                        
                                                        </select>
                                                    </div>
                                            </div>
                                             <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label"><b>*Program Studi</b></label>

                                                        <select class="col-12 prodi" name="prodi" id="prodi" disabled="">
                                                        
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label"><b>*Jenis Ciptaan</b></label>
                                                    <select <select class="col-12 jenis" id="inlineFormCustomSelect1" name="ciptaan">>
                                                      <?php 
                                                        $ciptaan_values = array(
                                                            'copyright'=>'Hak Cipta (copyright)',
                                                            'karya_tulis'=>'Karya Tulis (Desertasi)',
                                                        );

                                                        foreach($ciptaan_values as $value => $display_text)
                                                        {
                                                            $selected = ($value == $this->input->post('ciptaan')) ? ' selected="selected"' : "";

                                                            echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                                        } 
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label"><b>*Judul</b></label>
                                                    <input class="form-control" type="text" placeholder="judul" name="judul" value="<?= set_value('judul') ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label"><b>*Deskripsi</b></label>
                                                    <textarea class="form-control" rows="5" name="deskripsi"><?= set_value('deskripsi') ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label"><b>*Unggah File</b></label>
                                                    <input type="file" class="form-control" id="exampleInputFile" name="file" accept=".jpg, .png, .pdf, .jpeg">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-md btn-block btn-danger-gradiant btn-arrow"><span> Submit <i class="ti-arrow-right"></i></span></button>
                                                <!--  -->
                                            </div>
                                        </div>
                                    </form>  
                                </div>
                            </div>
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
<script type="text/javascript">
      $('.fakultas').select2({
        placeholder: '--- Cari Fakultas ---',
        minimumInputLength: 1,
        ajax: {
          url: "<?php echo base_url('get_fakultas');?>",
          dataType: 'json',
          delay: 250,
          data: function(params){
            return{
                fakultas : params.term
            };
          },
          processResults: function (data) {
            var results = [];
            $.each(data, function(index, item){
                results.push({
                    id : item.id,
                    text : item.nm_fakultas
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
<script type="text/javascript">
    $(function() {
        $("#fakultas").change(function() {
            if ($(this).val() == false) {
                $("#prodi").prop("disabled", true);
                $("#prodi").select2("val", " ");
            }
            else
                $("#prodi").prop("disabled", false);
        });
    });
    $('.prodi').select2({
        placeholder: '--- Cari Prodi ---',
        minimumInputLength: 1,
        ajax: {
          url: "<?php echo base_url('get_prodi');?>",
          dataType: 'json',
          delay: 250,
          data: function(params){
            return{
                prodi : params.term
            };
          },
          processResults: function (data) {
            var results = [];
            $.each(data, function(index, item){
                results.push({
                    id : item.id,
                    text : item.nm_prodi
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
<script type="text/javascript">
      $(document).ready(function() {
    $('.jenis').select2();
});
</script> 
</html>