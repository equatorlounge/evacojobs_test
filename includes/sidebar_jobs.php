<div class="sidebar-wrap">
    <!-- Sidebar (Search) Start -->
    <div class="sidebar-widget">
        <div class="inner">
            <h6 class="title">Search Keywords</h6>
            <form action="#">
                <input type="text" placeholder="e.g. web design">
            </form>
        </div>
    </div>
    <!-- Sidebar (Search) End -->

    <!-- Sidebar (Category) Start -->
    <div class="sidebar-widget">
        <div class="inner">
            <h6 class="title">Category</h6>
            <form action="#">

                <!-- Declare array of values here :: start -->
                <?php
                    $job_categories =                         
                        array (
                            array (
                                "job_category_id" => 1,
                                "job_category_title" => "Development"
                            ),
                            array (
                                "job_category_id" => 2,
                                "job_category_title" => "Design"
                            ),
                            array (
                                "job_category_id" => 3,
                                "job_category_title" => "Multimedia"
                            ),
                            array (
                                "job_category_id" => 4,
                                "job_category_title" => "Finance"
                            ),
                            array (
                                "job_category_id" => 5,
                                "job_category_title" => "Photography"
                            ),
                            array (
                                "job_category_id" => 6,
                                "job_category_title" => "Education"
                            ),
                            array (
                                "job_category_id" => 7,
                                "job_category_title" => "Medical"
                            ),
                            array (
                                "job_category_id" => 8,
                                "job_category_title" => "Administration"
                            ),
                            array (
                                "job_category_id" => 9,
                                "job_category_title" => "Research"
                            )
                        );
                ?>
                <!-- Declare array of values here :: end -->

                <select>
                    <!-- Populate array here :: start -->
                    <option value="999">All categories</option>
                    <?php
                        foreach ($job_categories as $job_category) {
                            # code...
                            ?>
                            <option value="<?php echo $job_category['job_category_id']; ?>"><?php echo $job_category['job_category_title']; ?></option>
                            <?php
                        }
                    ?>
                    <!-- Populate array here :: end -->
                </select>
                
            </form>
        </div>
    </div>
    <!-- Sidebar (Category) End -->

    <!-- Sidebar (Location) Start -->
    <div class="sidebar-widget">
        <div class="inner">
            <h6 class="title">Location</h6>
            <form action="#">
                <input type="text" placeholder="Location">
            </form>
        </div>
    </div>
    <!-- Sidebar (Location) End -->

    <!-- Sidebar (Job Type) Start -->
    <div class="sidebar-widget">
        <div class="inner">
            <h6 class="title">Job Type</h6>
            <form action="#" class="mb-n1">
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input" id="jobtype0">
                    <label class="custom-control-label" for="jobtype0">All type</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input" id="jobtype1">
                    <label class="custom-control-label" for="jobtype1">Full Time</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input" id="jobtype2">
                    <label class="custom-control-label" for="jobtype2">Part Time</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input" id="jobtype3">
                    <label class="custom-control-label" for="jobtype3">Freelance</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input" id="jobtype4">
                    <label class="custom-control-label" for="jobtype4">Internship</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input" id="jobtype5">
                    <label class="custom-control-label" for="jobtype5">Temporary</label>
                </div>
            </form>
        </div>
    </div>
    <!-- Sidebar (Job Type) End -->

    <!-- Sidebar (Salary Range) Start -->
    <div class="sidebar-widget">
        <div class="inner">
            <h6 class="title">Salary Range</h6>
            <form action="#">
                <input type="text" id="salary-range" name="salary-range" class="range-slider" value="" />
            </form>
        </div>
    </div>
    <!-- Sidebar (Salary Range) End -->

    <!-- Sidebar (Experience) Start -->
    <div class="sidebar-widget">
        <div class="inner">
            <h6 class="title">Experince</h6>
            <form action="#" class="mb-n1">
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince0">
                    <label class="custom-control-label" for="jobExperince0">Any Experince</label>
                </div>
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince1">
                    <label class="custom-control-label" for="jobExperince1">1 Year to 2 Year</label>
                </div>
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince2">
                    <label class="custom-control-label" for="jobExperince2">2 Year to 3 Year</label>
                </div>
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince3">
                    <label class="custom-control-label" for="jobExperince3">3 Year to 4 Year</label>
                </div>
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince4">
                    <label class="custom-control-label" for="jobExperince4">4 Year to 5 Year</label>
                </div>
            </form>
        </div>
    </div>
    <!-- Sidebar (Experience) End -->

    <!-- Sidebar (Date Posted) Start -->
    <div class="sidebar-widget">
        <div class="inner">
            <h6 class="title">Date Posted</h6>
            <form action="#" class="mb-n1">
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted0">
                    <label class="custom-control-label" for="jobDatePosted0">Any Date</label>
                </div>
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted1">
                    <label class="custom-control-label" for="jobDatePosted1">Last Hour</label>
                </div>
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted2">
                    <label class="custom-control-label" for="jobDatePosted2">Last 24 Hours</label>
                </div>
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted3">
                    <label class="custom-control-label" for="jobDatePosted3">Last 7 Days</label>
                </div>
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted4">
                    <label class="custom-control-label" for="jobDatePosted4">Last 14 days</label>
                </div>
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted5">
                    <label class="custom-control-label" for="jobDatePosted5">Last 30 days</label>
                </div>
            </form>
        </div>
    </div>
    <!-- Sidebar (Date Posted) End -->

    <!-- Sidebar (Qualification) Start -->
    <div class="sidebar-widget">
        <div class="inner">
            <h6 class="title">Qualification</h6>
            <form action="#" class="mb-n1">
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobQualification" id="jobQualification0">
                    <label class="custom-control-label" for="jobQualification0">Matriculation</label>
                </div>
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobQualification" id="jobQualification1">
                    <label class="custom-control-label" for="jobQualification1">Intermidiate</label>
                </div>
                <div class="custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input" name="jobQualification" id="jobQualification2">
                    <label class="custom-control-label" for="jobQualification2">Gradute</label>
                </div>
            </form>
        </div>
    </div>
    <!-- Sidebar (Qualification) End -->
</div>