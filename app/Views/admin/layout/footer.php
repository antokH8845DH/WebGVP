</div>
<!-- footer area start-->
<footer>
    <div class="footer-area">
        <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
    </div>
</footer>
<!-- footer area end-->
</div>
<!-- jquery latest version -->
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/popper.min.js"></script>
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/metisMenu.min.js"></script>
<!-- <script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/metismenujs.min.js"></script> -->
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/jquery.slimscroll.min.js"></script>
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/jquery.slicknav.min.js"></script>
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/adminlte.min.js"></script>
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/bootstrap.bundle.min.js"></script>
<!-- DataTables JavaScript -->
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/dataTables/dataTables.bootstrap.min.js"></script>

<!-- start chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<!-- start highcharts js -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- start zingchart js -->
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
</script>
<!-- all line chart activation -->
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/line-chart.js"></script>
<!-- all pie chart -->
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/pie-chart.js"></script>
<!-- others plugins -->
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/plugins.js"></script>
<script src="<?= base_url(); ?>/BackEnd/srtdash/assets/js/scripts.js"></script>
<?= $this->renderSection('script'); ?>
</body>

</html>