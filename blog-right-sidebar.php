<!DOCTYPE html>
<html class="no-js" lang="en">

<?php include ('includes/head.php'); ?>

<body>    

    <!-- Start :: Header -->
    <?php include ('includes/header.php'); ?>
    <!-- End :: Header -->

    <!-- Start :: Off Canvas -->
    <?php include ('includes/offcanvas.php'); ?>
    <!-- End :: Off Canvas -->

    <!-- Start :: Login Sign Up -->
    <?php include ('includes/widget_loginsignup.php'); ?>
    <!-- End :: Login Sign Up -->

    <!-- Start :: Breadcrumb -->
    <?php include ('includes/breadcrumb.php'); ?>
    <!-- End :: Breadcrumb -->



    <!-- Blog Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row mb-n5">

                <div class="col-lg-8 col-12 mb-5 pr-lg-5">

                    <?php include ('includes/list_blog.php'); ?>

                </div>

                <!-- Blog Sidebar Wrap Start -->
                <div class="col-lg-4 col-12 mb-5">

                    <?php include ('includes/sidebar_blog.php'); ?>

                </div>
                <!-- Blog Sidebar Wrap End -->

            </div>

        </div>
    </div>
    <!-- Blog Section End -->



    <!-- Start :: Footer Top -->
    <?php include ('includes/footer_top.php'); ?>
    <!-- End :: Footer Top -->

    <!-- Start :: Footer Bottom -->
    <?php include ('includes/footer_bottom.php'); ?>
    <!-- End :: Footer Bottom -->

    <!-- JS ============================================ -->

    <!-- Google Map API JS -->
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.min.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/jquery.parallax.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/jquery.scrollUp.min.js"></script>

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>