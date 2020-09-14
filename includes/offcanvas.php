<!-- offcanvas :: start -->
<!--Offcanvas Section Start-->
<div id="offcanvas" class="offcanvas-section">
    <button class="offcanvas-close" data-target="#offcanvas">&times;</button>
    <div class="offcanvas-wrap">
        <div class="inner">

            <!-- Header Logo Start -->
            <div class="header-logo">
                <a href="index.php"><img src="assets/images/favicons/256x256.jpg" alt="Site Logo"></a>
            </div>
            <!-- Header Logo End -->

            <!-- Offcanvas Menu Start -->
            <div class="offcanvas-menu">
                <nav>
                    <?php include ('includes/menu_primary.php'); ?>
                </nav>
            </div>
            <!-- Offcanvas Menu End -->

            <!-- Social networks URLs :: Start -->
            <div class="offcanvas-user menu_socialnetworks">
                <?php include ('includes/menu_socialnetworks.php'); ?>
            </div>
            <!-- Social networks URLs :: End -->

            <!-- Offcanvas user Start -->
            <div class="offcanvas-user menu_loginsignup">
                <?php include ('includes/menu_loginsignup.php'); ?>
            </div>
            <!-- Offcanvas user End -->

        </div>
    </div>
</div>
<!--Offcanvas Section End-->

<!--OffCanvas Overlay-->
<div class="offcanvas-overlay"></div>
<!-- offcanvas :: end -->