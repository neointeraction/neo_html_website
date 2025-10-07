<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <?php include $path . 'includes/css.php'; ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <title>Intertrust BPM Tool | Neointeraction design | Contact Now</title>
    <meta name="description"
        content="BPM tools are designed to help organizations manage and improve business processes efficiently. Contact us to design similar projects." />
    <meta name="keywords" content="BPM tool, business process management, UX design, user experience, Intertrust, promo tool redesign" />
    <link rel="canonical" href="<?php echo $base_url; ?>bpm-redesign-project" />
    <meta property="og:title" content="Intertrust BPM Tool | Neointeraction design | Contact Now" />
    <meta property="og:description"
        content="BPM tools are designed to help organizations manage and improve business processes efficiently. Contact us to design similar projects." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/intertrust-bpm-homepage-thumbnail.jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="<?php echo $base_url; ?>bpm-redesign-project" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Intertrust BPM Tool | Neointeraction design | Contact Now" />
    <meta name="twitter:description"
        content="BPM tools are designed to help organizations manage and improve business processes efficiently. Contact us to design similar projects." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/intertrust-bpm-homepage-thumbnail.jpeg" />
</head>

<body>
    <?php
  $page = 'Projects';
    // Get current page filename
    $current_page_filename = basename($_SERVER['PHP_SELF']);

    // Get case study data using the helper function
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
                Intertrust - <span class="highlight">A BPM Application</span>
            </h1>
        </div>
        <!-- project-banner-img -->
  
        <div class="project-banner-img project-banner-img-block d-none d-md-block">
            <div class="pbi-layer1">
                <img src="<?php echo $path; ?>assets/images/projects/intertrust-bpm/intertrust-bpm-project banner.jpg"
                    alt="pbanner1" />
            </div>
            <div class="pbi-layer2">
                <img src="<?php echo $path; ?>assets/images/projects/intertrust-bpm/intertrust-bpm-project banner-float.svg"
                    alt="pbanner1" />
            </div>
        </div>
        <div class="project-banner-img project-banner-img-block project-banner-mob d-block d-md-none">
            <div class="pbi-layer1">
                <img src="<?php echo $path; ?>assets/images/projects/intertrust-bpm/intertrust-bpm-tool.jpeg"
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
                                <img src="<?php echo $path; ?>assets/images/projects/client-logos/intertrust-logo.svg" alt="intertrust" />
                                <div class="quote-icon-right d-block d-md-none"></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="quote-icon d-none d-md-block"></div>
                            <p class="blog-quote-text">The visual appeal and the new banking experience led us to overcome the competition and we're very happy with the result the
                                design team delivered</p>
                        </div>
                    </div>
                </div>
                <!-- overview-block -->
                <div class="overview-block project-section-padding">
                    <div class="title-flex">
                        <h4 class="project-section-title">Overview </h4>
                        <button class="btn btn-custom  banner-btn consultation-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
                                    Book A Consultation
                        </button>
                    </div>
                    <p class="p-main-text">Intertrust BPM Tool, 'Promo' was revamped to make it more user-friendly and easy to use, improving its vital role in making
                        organizational processes better.</p>

                </div>
                <!-- result-block -->
                <div class="result-block project-section-padding">
                    <h4 class="project-section-title">Result </h4>
                    <div class="row ">
                        <!-- 81% New User Engagement -->
                        <div class="col-4 col-md-3 count-up-item">
                            <div class="count-number" data-target="81" data-type="percent">0</div>
                            <div class="count-label" >New User Engagement</div>
                        </div>
                        <!-- 40+ Profits -->
                        <div class="col-4 col-md-3 count-up-item">
                            <div class="count-number" data-target="40">0</div>
                            <div class="count-label">Profits</div>
                        </div>
                        <!-- 70% New Customer Acquisition -->
                        <div class="col-4 col-md-3 count-up-item pb-0 mt-md-0">
                            <div class="count-number" data-target="70" data-type="percent">0</div>
                            <div class="count-label">New Customer Acquisition</div>
                        </div>

                    </div>
                </div>
                <!-- objective-challenges  -->
                <div class="objective-challenges project-section-padding">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="project-section-title">Objective </h4>
                            <p class="project-body-text">The objective was to create a design tailored for Intertrust Groups, addressing the user pain points while using the tool
                                ensuring an elevated user experience</p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="project-section-title ps-responsive-margin">Challenges </h4>
                            <p class="project-body-text">Challenges included putting together a smooth design system, presenting large data, transformation of user experience,
                                easier navigation and designing for scalability.</p>
                        </div>
                    </div>
                </div>
                <!-- solutions-offered  -->
                <div class="solutions-offered project-section-padding">
                    <h4 class="project-section-title">Solutions we offered</h4>
                    <p class="project-body-text">Addressing critical issues while ensuring a seamless and effective design experience led to the digital transformation for Promo
                    </p>

                    <div class="bs-card-section project-bs-cards">
                        <div class="row ">
                            <!-- Card 1 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Holistic Tool Creation</h4>
                                    <p class="description">
                                        Crafted Promo with a holistic perspective, ensuring consistency across all workflows for a unified user experience.
                                    </p>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Scalability Emphasis</h4>
                                    <p class="description">
                                        Introduced the importance of product scalability, facilitating use with other Intertrust applications.
                                    </p>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Uniform User Experience</h4>
                                    <p class="description">
                                        Delivered a uniform experience, eliminating inconsistencies through organized UI components and unified grammar.
                                    </p>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Data Presentation Solutions</h4>
                                    <p class="description">
                                        Complex sections were redesigned by data presentation, using basic UX principles to effectively resolve intricate issues.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- brainstorming-session  -->
                <div class="brainstorming-session project-section-padding">
                    <h4 class="project-section-title">Optimized Prototyping & Data Presentation </h4>
                    <p class="project-body-text">Wireframing prototypes were meticulously created to refine the process flow and further refine the design solutions</p>

                 <div class="bs-img">
                        <img src="<?php echo $path; ?>assets/images/projects/intertrust-bpm/intertrust-bpm-website-ui.jpeg" alt="ui-update" />
                    </div>
                </div>
                <!-- solutions-help section -->
                <div class="solutions-help project-section-padding">
                    <div class="title-flex">
                        <h2 class="project-section-title">
                            How did our solutions help?
                        </h2>
                         <button class="btn btn-custom case-study-webview "
                                 data-service="intertrust-bpm-tool"
                                 data-bs-toggle="modal"
                                 data-bs-target="#downloadCaseStudyModal"
                                 data-project-title="<?php echo htmlspecialchars($project_title); ?>"
                                 data-case-study-url="<?php echo htmlspecialchars($case_study_download_url); ?>">
                          Download case study
                        </button>
                    </div>
                    <p class="project-body-text">
                        Our UX techniques revamped Promo, converting it into a user-friendly product through streamlined UI enhancements and effective design techniques.
                    </p>
                     <button class="btn btn-custom case-study-mobview ps-responsive-margin"
                                 data-service="intertrust-bpm-tool"
                                 data-bs-toggle="modal"
                                 data-bs-target="#downloadCaseStudyModal"
                                 data-project-title="<?php echo htmlspecialchars($project_title); ?>"
                                 data-case-study-url="<?php echo htmlspecialchars($case_study_download_url); ?>">
                          Download case study
                        </button>
                    <div class="bs-card-section project-bs-cards">
                        <div class="row ">
                            <!-- Card 1 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Streamlined Workflows</h4>
                                    <p class="description">
                                        Simplified processes enabled users to complete tasks faster and more successfully, enhancing overall workflow efficiency.
                                    </p>

                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Focused User Concentration</h4>
                                    <p class="description">
                                        Removal of unnecessary data reduced distractions, allowing users to maintain focus on critical and significant activities.
                                    </p>

                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Intuitive Data Interpretation</h4>
                                    <p class="description">
                                        Utilization of colors, typefaces, tooltips, and UI features improved data interpretation, making it easier for users to distinguish and
                                        understand information.
                                    </p>

                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Step-by-Step Methodology</h4>
                                    <p class="description">
                                        The majority of workflows were broken down into a step-by-step method that allowed users to feel confident in completing a difficult
                                        activity.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
            </div>
        </div>
    </section>

    <?php 
        $previous = "Redesigning Noctils Music Rights Management solution";
        $previousLink = "/music-rights-management-solution.php";
        $next = "Inkmagik - A Graphic Design Software";
        $nextLink ="/inkmagik-graphic-design-tool.php";
        include $path . 'components/navigation-footer.php';
    ?>



    <?php include $path . 'components/projects-enquiry.php'; ?>
    <?php include $path . 'components/download-casestudy-modal.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
    <?php include $path . 'includes/footer-additional-scripts.php'; ?>
    <?php include $path . 'includes/js.php'; ?>
</body>

</html>
