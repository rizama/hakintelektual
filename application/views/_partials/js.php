<!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/select2.min.js') ?>" type="text/javascript"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?php echo base_url('assets/node_modules/popper/dist/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- This is for    the animation -->
    <script src="<?php echo base_url('assets/node_modules/aos/dist/aos.js') ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/js/custom.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/prism/prism.js') ?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/js/type.js') ?>"></script>
    <script>
    // This is for the static slider 6
    $('.video-img').on('click', function() {
        $(this).addClass('hide');
        $('.embed-responsive').show()
            .removeClass('hide');
        $("video").each(function() {
            this.play()
        });
    });
    $('.pre-scroll').perfectScrollbar();
    </script>
    <!-- <script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.itemName').select2();
    });
    </script> -->
    