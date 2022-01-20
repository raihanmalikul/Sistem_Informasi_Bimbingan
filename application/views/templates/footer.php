</div>
<!-- ============================================================== -->
<!-- end main wrapper -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script>
    $('.custom-file-input').no('change', function() {
        let filename = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(filename);
    });
</script>
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="<?= base_url('assets/') ?>vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="<?= base_url('assets/') ?>libs/js/main-js.js"></script>
</body>

</html>