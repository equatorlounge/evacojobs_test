<!-- header starts here -->
<header class="header">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.php"><img src="assets/images/favicons/256x256.jpg" alt="Site Logo"></a>
                    </div>
                </div><!-- Header Logo End -->

                <!-- Offcanvas Toggle Start -->
                <div class="col-auto d-lg-none d-flex align-items-center">
                    <button class="offcanvas-toggle">
                        <span></span>
                    </button>
                </div>
                <!-- Offcanvas Toggle End -->

                <!-- Social networks URLs :: Start -->
                <div class="header-links col-auto order-lg-4 menu_socialnetworks">
                    <?php include ('includes/menu_socialnetworks.php'); ?>
                </div>
                <!-- Social networks URLs :: End -->

                <!-- Header Links Start -->
                <div class="header-links col-auto order-lg-3 menu_loginsignup">
                    <?php include ('includes/menu_loginsignup.php'); ?>
                </div>
                <!-- Header Links End -->

                <!-- Header Menu Start -->
                <nav id="main-menu" class="main-menu col-lg-auto order-lg-2">
                    <?php include ('includes/menu_primary.php'); ?>
                </nav>
                <!-- Header Menu End -->

            </div>

        </div>
</header>
<!-- header ends here -->