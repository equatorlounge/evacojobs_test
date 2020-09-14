<div class="section section-padding">
    <div class="container">
        <div class="row mb-n5">

            <div class="col-lg-8 col-12 mb-5 pr-lg-5">

                <!-- Company List Wrap :: Start -->
                <div class="company-list-wrap row">

                    <!-- Declare an array of values :: start -->
                    <?php
                        $job_categories = 
                        array (
                            array (
                                "job_category_bg" => "badge-primary",
                                "job_category_icon" => "flaticon-development",
                                "job_category_title" => "Development", 
                                "job_category_open_jobs" => 2
                            ),
                            array (
                                "job_category_bg" => "badge-secondary",
                                "job_category_icon" => "flaticon-design",
                                "job_category_title" => "Design", 
                                "job_category_open_jobs" => 3
                            ),
                            array (
                                "job_category_bg" => "badge-success",
                                "job_category_icon" => "flaticon-multimedia",
                                "job_category_title" => "Multimedia", 
                                "job_category_open_jobs" => 1
                            ),
                            array (
                                "job_category_bg" => "badge-danger",
                                "job_category_icon" => "flaticon-finance",
                                "job_category_title" => "Finance", 
                                "job_category_open_jobs" => 5
                            ),
                            array (
                                "job_category_bg" => "badge-warning",
                                "job_category_icon" => "flaticon-photography",
                                "job_category_title" => "Photography", 
                                "job_category_open_jobs" => 3
                            ),
                            array (
                                "job_category_bg" => "badge-info",
                                "job_category_icon" => "flaticon-education",
                                "job_category_title" => "Education", 
                                "job_category_open_jobs" => 3
                            ),
                            array (
                                "job_category_bg" => "badge-primary",
                                "job_category_icon" => "flaticon-medical",
                                "job_category_title" => "Medical", 
                                "job_category_open_jobs" => 2
                            ),
                            array (
                                "job_category_bg" => "badge-secondary",
                                "job_category_icon" => "flaticon-government",
                                "job_category_title" => "Administration", 
                                "job_category_open_jobs" => 3
                            ),
                            array (
                                "job_category_bg" => "badge-success",
                                "job_category_icon" => "flaticon-research",
                                "job_category_title" => "Research", 
                                "job_category_open_jobs" => 2
                            )
                        );
                    ?>
                    <!-- Declare an array of values :: end -->

                    <!-- Populate the job categories :: start -->
                    <?php
                        foreach ($job_categories as $job_category) {
                            # code...
                        ?>
                            <!-- Job Category List :: Start -->
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                                <a href="job-list.php" class="job-category <?php echo $job_category['job_category_bg']; ?>">
                                    <div class="inner">
                                        <!-- for wordpress, will use _e instead of echo -->
                                        <!-- for loco translate later -->
                                        <!-- ref: https://developer.wordpress.org/reference/functions/_e/ -->
                                        <i class="<?php echo $job_category['job_category_icon']; ?>"></i>
                                        <h6 class="title"><?php echo $job_category['job_category_title']; ?></h6>
                                        <span class="open-job"><?php echo $job_category['job_category_open_jobs']; ?> open
                                            position<?php if ($job_category['job_category_open_jobs'] > 1) { echo 's'; } ?></span>
                                    </div>
                                </a>
                            </div>
                            <!-- Job Category List :: End -->
                        <?php
                        }
                    ?>                   
                    <!-- Populate the job categories :: end -->

                </div>
                <!-- Company List Wrap :: End -->

                <!-- Pagination :: Start -->
                <ul class="pagination pagination-center mt-5">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- Pagination :: End -->

            </div>

            <!-- Company Sidebar Wrap :: Start -->
            <div class="col-lg-4 col-12 mb-5">
                <div class="sidebar-wrap">
                
                    <!-- Sidebar (Search) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">

                            <h6 class="title">Search Company</h6>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12 mb-3"><input type="text" placeholder="Keyword"></div>
                                    <div class="col-12 mb-3">
                                        <label>Category</label>
                                        <select>
                                            <option value="1">Any category</option>
                                            <option value="2">Web Designer</option>
                                            <option value="3">Web Developer</option>
                                            <option value="4">Graphic Designer</option>
                                            <option value="5">App Developer</option>
                                            <option value="6">UI &amp; UX Expert</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label>Location</label>
                                        <input type="text" placeholder="Location">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label>Company Sizes</label>
                                        <select>
                                            <option>All Company Size</option>
                                            <option>&lt; 10 employees</option>
                                            <option>10 ~ 50 employees</option>
                                            <option>50 ~ 200 employees</option>
                                            <option>200 ~ 500 employees</option>
                                            <option>500 ~ 2000 employees</option>
                                            <option>&gt; 2000 employees</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input class="btn btn-primary w-100" type="submit" value="Search">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- Sidebar (Search) End -->

                    <!-- Sidebar (Banner) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <a class="banner" href="https://hasthemes.com/plugins/ht-mega-pro/" target="_blank"><img
                                    src="assets/images/banner/banner-1.jpg" alt="Banner"></a>
                        </div>
                    </div>
                    <!-- Sidebar (Banner) End -->
                </div>
            </div>
            <!-- Company Sidebar Wrap :: End -->

        </div>
    </div>
</div>