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
                <div class="banner-innerpage" style="background-image:url(<?php echo base_url('assets/images/innerpage/banner-bg2.jpg') ?>)">
                    <div class="container">
                        <!-- Row  -->
                        <div class="row justify-content-center ">
                            <!-- Column -->
                            <div class="col-md-6 align-self-center text-center" data-aos="fade-down" data-aos-duration="1200">
                                <h1 class="title">Beranda</h1>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="collapse m-t-20" id="b3">
                                <div class="card card-body card-shadow">
                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="html-tab2" data-toggle="tab" href="#html3" role="tab" aria-controls="html" aria-expanded="true">HTML</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="css-tab2" data-toggle="tab" href="#css3" role="tab" aria-controls="css">CSS</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent2">
                                        <div class="tab-pane fade show active" id="html3" role="tabpanel" aria-labelledby="html-tab2">
                                            <pre class="pre-scroll">
                                                <code class="language-html">
                                                    &lt;div class=&quot;static-slider3&quot;&gt;
                                                        &lt;div class=&quot;container&quot;&gt;
                                                            &lt;!-- Row  --&gt;
                                                            &lt;div class=&quot;row justify-content-center &quot;&gt;
                                                                &lt;!-- Column --&gt;
                                                                &lt;div class=&quot;col-md-8 align-self-center text-center&quot; data-aos=&quot;fade-right&quot; data-aos-duration=&quot;1200&quot;&gt;
                                                                    &lt;h1 class=&quot;title&quot;&gt;I&rsquo;m Johanthan Doe, an &lt;b class=&quot;font-bold&quot;&gt;Entreprenuer, Designer &amp; Front-end Developer&lt;/b&gt;, Making &lt;span class=&quot;text-success-gradiant font-bold typewrite&quot; data-period=&quot;2000&quot; data-type='[ &quot;Photoshop&quot;, &quot;Web Application&quot;, &quot;Web Designing&quot;, &quot;Web Development&quot; ]'&gt;&lt;/span&gt;&lt;/h1&gt;
                                                                    &lt;a class=&quot;btn btn-success-gradiant btn-md btn-arrow m-t-20&quot; data-toggle=&quot;collapse&quot; href=&quot;&quot;&gt;&lt;span&gt;Checkout My Work &lt;i class=&quot;ti-arrow-right&quot;&gt;&lt;/i&gt;&lt;/span&gt;&lt;/a&gt;
                                                                &lt;/div&gt;
                                                                &lt;!-- Column --&gt;    
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;                                                       
                                                </code>
                                            </pre>
                                        </div>
                                        <div class="tab-pane fade" id="css3" role="tabpanel" aria-labelledby="css-tab">
                                            <pre class="pre-scroll">
                                                <code class="language-css">
                                                    .static-slider3{
                                                        padding: 10% 0;
                                                        h1{
                                                            font-weight: 300;
                                                            line-height: 50px;
                                                            span{
                                                                border-bottom:3px solid $success;
                                                            }
                                                        }

                                                    }
                                                    @media(max-width:767px) {
                                                    .static-slider3{    
                                                            h1{
                                                                line-height: 30px;
                                                                font-size:24px;
                                                            } 
                                                        }
                                                    }
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Static Slider 3  -->
                <!-- ============================================================== -->
                <div class="static-slider3">
                    <div class="container">
                        <!-- Row  -->
                        <div class="row justify-content-center ">
                            <!-- Column -->
                            <div class="col-md-8 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
                                <h1 class="title"><span class="text-success-gradiant font-bold typewrite" data-period="2000" data-type='[ "Selamat Datang"]'></span> <br>ini adalah Sistem Informasi yang Menyimpan Informasi <b class="font-bold">Hak Kekayaan Intelektual Dosen / Peneliti di Lingkungan Perguruan Tinggi Keagamaan Islam</b> </h1>
                                
                            </div>
                            <!-- Column -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Static Slider 3  -->
                <!-- ============================================================== -->
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