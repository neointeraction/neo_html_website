<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <?php include $path . 'includes/css.php'; ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <title>UX for livestock tracker | Cattle Tracking & Management solution | Neointeraction Design</title>
    <meta name="description"
        content="Livestock Tracker app consolidates inventory, saving ranchers time and ensuring accurate tracking with a seamless web and mobile experience." />
    <link rel="canonical" href="<?php echo $base_url; ?>cattle-tracking-management-solution" />
    <meta property="og:title"
        content="UX for livestock tracker | Cattle Tracking & Management solution | Neointeraction Design" />
    <meta property="og:description"
        content="Livestock Tracker app consolidates inventory, saving ranchers time and ensuring accurate tracking with a seamless web and mobile experience." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/herdx-project-thumbnail.jpeg" />
    <meta property="og:image:width" content="2500" />
    <meta property="og:image:height" content="1330" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:title"
        content="UX for livestock tracker | Cattle Tracking & Management solution | Neointeraction Design" />
    <meta name="twitter:description"
        content="Livestock Tracker app consolidates inventory, saving ranchers time and ensuring accurate tracking with a seamless web and mobile experience." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/herdx-project-thumbnail.jpeg" />
    <meta name="twitter:card" content="summary" />
</head>

<body>
    <?php
  $page = 'Projects';
  include $path . 'includes/case_study_helper.php';
  ?>
    <?php include $path . 'includes/body-additional-scripts.php'; ?>
    <!-- navbar  -->
    <div class="navbar-container-block">
        <?php include $path . 'components/navigation.php'; ?>
        <?php include $path . 'components/whatsapp.php'; ?>
    </div>
    <!-- navbar -- end  -->
    <!-- banner  -->
    <section class="banner section-padding">
        <div class="container">
            <h1 class="banner-title">
                Redesigning <span class="highlight">Cattle Tracking & Management solution</span>
            </h1>
        </div>
   
        <div class="project-banner-img project-banner-img-block d-none d-md-block">
            <div class="pbi-layer1">
                <img src="<?php echo $path; ?>assets/images/projects/cattle-tracking-management/herdx-project-banner.jpg"
                    alt="pbanner1" />
            </div>
            <div class="pbi-layer2">
                <img src="<?php echo $path; ?>assets/images/projects/cattle-tracking-management/herdx-project-banner-float.svg"
                    alt="pbanner1" />
            </div>
        </div>

        <div class="project-banner-img project-banner-img-block project-banner-mob d-block d-md-none">
            <div class="pbi-layer1">
                <img src="<?php echo $path; ?>assets/images/projects/cattle-tracking-management/herdx-project-homepage-banner.jpeg"
                    alt="pbanner1" />
            </div>
        </div>

        <div class="project-content-block">
            <div class="container">
                <!-- blog-quote-block  -->
                <div class="blog-quote-block project-quote-block">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-3">
                            <div class="p-logo d-flex align-items-center justify-content-start justify-content-md-center">
                                <img src="<?php echo $path; ?>assets/images/projects/client-logos/herdx-logo.svg" alt="herdx" />
                                <div class="quote-icon-right d-block d-md-none"></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="quote-icon d-none d-md-block"></div>
                            <p class="blog-quote-text">
                                Spending the majority of our time on outmoded supply chain systems was challenging. New
                                user experience design were straightforward, efficient, and most importantly, reliable.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- overview-block -->
                <div class="overview-block project-section-padding">
                    <div class="title-flex">
                        <h4 class="project-section-title">Overview </h4>
                        <button class="btn btn-custom banner-btn consultation-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
                            Book A Consultation
                        </button>
                    </div>
                    <p class="p-main-text">Revolutionizing cattle farm management by streamlining tasks, promoting
                        healthier livestock, and increasing profitability</p>
                    <!-- <button class="btn btn-custom case-study-mobview ">
                        Book A Consultation
                    </button> -->
                </div>
                <!-- result-block -->
                <div class="result-block project-section-padding">
                    <h4 class="project-section-title">Result </h4>
                    <div class="row ">
                        <!-- 15+ years expertise -->
                        <div class="col-4 col-md-3 count-up-item">
                            <div class="count-number" data-target="90" data-type="percent">0</div>
                            <div class="count-label">New User Engagement</div>
                        </div>
                        <!-- 150+ trusted clients -->
                        <div class="col-4 col-md-3 count-up-item">
                            <div class="count-number" data-target="85">0</div>
                            <div class="count-label">Profits</div>
                        </div>
                        <!-- 80% lives impacted -->
                        <div class="col-4 col-md-3 count-up-item pb-0 mt-md-0">
                            <div class="count-number" data-target="77" data-type="percent">0</div>
                            <div class="count-label">New Customer Acquisition</div>
                        </div>

                    </div>
                </div>
                <!-- objective-challenges  -->
                <div class="objective-challenges project-section-padding">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="project-section-title">Objective </h4>
                            <p class="project-body-text">Revamping herd management technology for cow/calf producers and
                                stockers to boost efficiency and promote healthier cattle. The redesign aims for a
                                modern look, improved usability, and a consistent visual style for a streamlined and
                                effective user experience.</p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="project-section-title ps-responsive-margin">Challenges </h4>
                            <p class="project-body-text">Simplifying the manual work to make cattle tracking and
                                management digitally accessible needed key attention to details. Considering the
                                complexity and the users, crafting a seamless user experience across websites and
                                mobiles was challenging.</p>
                        </div>
                    </div>
                </div>
                <!-- solutions-offered  -->
                <div class="solutions-offered project-section-padding">
                    <h4 class="project-section-title">Solutions we offered</h4>
                    <p class="project-body-text">With a fresh consistent visual style the new design streamlined an
                        effective guided user experience to boost efficiency and promote healthier cattle</p>

                    <div class="bs-card-section project-bs-cards">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Unified Design Language</h4>
                                    <p class="description">
                                        Fully revamped the design language, preserving the company's branding and
                                        usability while ensuring consistency across both web and mobile platforms.
                                    </p>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Digitalization of Manual Data Handling</h4>
                                    <p class="description">
                                        Transformed the manual data handling process into a digitalized system for
                                        optimal performance.
                                    </p>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">
                                        Iterative Design Process</h4>
                                    <p class="description">
                                        Created interactive designs leading to prototypes to provide a comprehensive
                                        understanding of the product.
                                    </p>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Foundation </h4>
                                    <p class="description">
                                        Wireframing , prototyping and micro interaction
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- solutions-help section -->
                <div class="solutions-help project-section-padding">
                    <div class="title-flex">
                        <h2 class="project-section-title">
                            How did our solutions help?
                        </h2>
                        <button class="btn btn-custom case-study-webview" data-case="all" id="case-study-btn">
                            Download case study
                        </button>
                    </div>
                    <p class="project-body-text">
                        We made things easier for farmers by improving how they handle data. This means less manual work
                        for them, making their work more efficient. By keeping a constant eye on things, we also helped
                        reduce health problems with the animals on the farm.
                    </p>
                    <button class="btn btn-custom case-study-mobview ps-responsive-margin" data-case="all"
                        id="case-study-btn">
                        Download case study
                    </button>
                    <div class="bs-card-section project-bs-cards">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h4 class="title">
                                        Enhanced User Experience</h4>
                                    <p class="description">
                                        Users found the redesigned solution notably easier to use and the increase
                                        overall user engagement.
                                    </p>

                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h4 class="title">Reduced Manual Workload</h4>
                                    <p class="description">
                                        The digitalization of manual data processes led to a significant decrease in
                                        manual work for Ranchers.
                                    </p>

                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h4 class="title">Increased Operational Efficiency</h4>
                                    <p class="description">
                                        The solution resulted in improved efficiency for cow/calf producers and stockers
                                    </p>

                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h4 class="title">Health Monitoring Advancement</h4>
                                    <p class="description">
                                        Continuous herd monitoring through the application contributed to a notable
                                        reduction in illnesses and fatalities.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ui-update  -->
                <div class="ui-update project-section-padding">
                    <h4 class="project-section-title">Mobile-Centric Digital Integration </h4>
                    <p class="project-body-text">Made it easy for users to seamlessly use both the website and mobile
                        application without doing the same data entry twice thereby making it easier and faster for
                        users to complete their task.</p>
                    <div class="bs-img">
                        <img src="<?php echo $path; ?>assets/images/projects/cattle-tracking/herdx-website-ui.jpg"
                            alt="ui-update" />
                    </div>
                    <!-- <div class="bs-img">
                        <img src="<?php echo $path; ?>assets/images/projects/cattle-tracking/herdx-mobile-ui.jpg"
                            alt="ui-update" />
                    </div> -->
                </div>
                <!-- <div class="view-all-blogs-btn">
                    <button class="btn btn-custom btn-custom-secondary">
                        View More Projects
                    </button>
                </div> -->
            </div>
        </div>
    </section>




    <!-- Case Study Download Modal -->
    <div class="modal fade" id="caseStudyModal" tabindex="-1" role="dialog" aria-labelledby="caseStudyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="caseStudyModalLabel">Download Case Study</h5>
                    <!-- Change this line in your modal -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-3 mt-3">Enter your email to download the case study and stay updated with our latest
                        insights.</p>
                    <form id="caseStudyForm">
                        <div class="mb-3">
                            <input type="email" id="case-study-email" class="form-control"
                                placeholder="Enter your work email" required>
                        </div>
                        <div id="case-study-status" class="mb-3 text-center"></div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-custom" id="case-study-submit">
                                Download Case Study
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php 
        $previous = "Inkmagik - A Graphic Design Software";
        $previousLink = "/inkmagik-graphic-design-tool.php";
        $next = "UX Design for Biomedical Reserach Platform";
        $nextLink ="/euclid-biomedical-research-platform.php";
        include $path . 'components/navigation-footer.php';
    ?>


    <?php include $path . 'components/projects-enquiry.php'; ?>
    <?php include $path . 'components/registration-modal.php'; ?>
    <?php include $path . 'components/download-casestudy-modal.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
    <?php include $path . 'includes/footer-additional-scripts.php'; ?>
    <?php include $path . 'includes/js.php'; ?>
</body>

</html>