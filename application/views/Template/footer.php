<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->

<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

<!--End Back To Top Button-->
<footer class="page-footer">
    <p class="mb-0">Copyright © 2021. All right reserved.</p>
</footer>

</div>
<!--end wrapper-->

<!-- Bootstrap JS -->
<script src="<?= base_url() ?>assets/admin/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="<?= base_url() ?>assets/admin/assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/plugins/highcharts/js/highcharts.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/plugins/highcharts/js/exporting.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/plugins/highcharts/js/variable-pie.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/plugins/highcharts/js/export-data.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/plugins/highcharts/js/accessibility.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/js/index2.js"></script>
<!--app JS-->
<script src="<?= base_url() ?>assets/admin/assets/js/app.js"></script>
<script>
    new PerfectScrollbar('.customers-list');
    new PerfectScrollbar('.store-metrics');
    new PerfectScrollbar('.product-list');
</script>

<!-- Datatables -->
<script src="<?= base_url() ?>assets/admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
</script>

</body>



</html>