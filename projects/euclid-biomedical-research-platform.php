<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <?php include $path . 'includes/css.php'; ?>
    <?php include $path . 'includes/case_study_helper.php'; ?>
    <title>Biomedical Research platform | Euclid | Neointeraction design</title>
    <meta name="description"
        content="Keyword extraction in medical research using UX design and React.js. Discover AI-driven text mining solutions and contact Neointeraction for innovative projects." />
    <meta name="keywords"
        content="biomedical research, UX design, healthcare platform, medical data, life sciences, research platform, euclid" />
    <link rel="canonical" href="<?php echo $base_url; ?>biomedical-research-ux-design" />
    <meta property="og:title" content="Biomedical Research platform | Euclid | Neointeraction design" />
    <meta property="og:description"
        content="Keyword extraction in medical research using UX design and React.js. Discover AI-driven text mining solutions and contact Neointeraction for innovative projects." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/euclid-homepage-thumbnail.webp" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="<?php echo $base_url; ?>biomedical-research-ux-design" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Biomedical Research platform | Euclid | Neointeraction design" />
    <meta name="twitter:description"
        content="Keyword extraction in medical research using UX design and React.js. Discover AI-driven text mining solutions and contact Neointeraction for innovative projects." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/euclid-homepage-thumbnail.webp" />
</head>

<body>
    <?php
  $page = 'Projects';
  
  ?>
    <?php include $path . 'includes/body-additional-scripts.php'; ?>
    <!-- navbar  -->
    <div class="navbar-container-block">
        <?php include $path . 'components/navigation.php'; ?>
        <?php include $path . 'components/whatsapp.php'; ?>
    </div>
    <!-- navbar  end  -->
    <!-- banner  -->
    <section class="banner section-padding">
        <div class="container">
            <h1 class="banner-title">
                UX Design for <span class="highlight">Biomedical Research Tool</span>
            </h1>
        </div>
        <!-- project-banner-img -->
        <div class="project-banner-img project-banner-img-block d-none d-md-block">
            <div class="pbi-layer1">
                <img src="<?php echo $path; ?>assets/images/projects/euclid-biomedical/euclid-project-banner.webp" alt="pbanner1" />
            </div>
            <div class="pbi-layer2">
                <img src="<?php echo $path; ?>assets/images/projects/euclid-biomedical/euclid-project-banner-float.webp"
                    alt="pbanner1" />
            </div>
        </div>
        <div class="project-banner-img project-banner-img-block project-banner-mob d-block d-md-none">
            <div class="pbi-layer1">
                <img src="<?php echo $path; ?>assets/images/projects/euclid-biomedical/euclid-biomedical-research-platform.webp"
                    alt="pbanner1" />
            </div>
        </div>
        <div class="project-content-block">
            <div class="container">
                <!-- blog-quote-block  -->
                <div class="blog-quote-block project-quote-block">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-3">
                            <div class="p-logo d-flex align-items-center justify-content-start justify-content-md-center
">
                                <img src="<?php echo $path; ?>assets/images/projects/client-logos/euclid.svg"
                                    alt="euclid" />
                                <div class="quote-icon-right d-block d-md-none"></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="quote-icon d-none d-md-block"></div>
                            <p class="blog-quote-text">
                                We beat the competition thanks to the aesthetic appeal, and we are pleased with the
                                outcome the design team produced.</p>
                        </div>
                    </div>
                </div>
                <!-- overview-block -->
                <div class="overview-block project-section-padding">
                    <div class="title-flex">
                        <h4 class="project-section-title">Overview </h4>
                        <button class="btn btn-custom banner-btn consultation-btn" data-bs-toggle="modal"
                            data-bs-target="#registerModal">
                            Book A Consultation
                        </button>

                    </div>
                    <p class="p-main-text">Euclid simplifies the management of complex biomedical data by providing a systematic platform that leverages big data and interactive dashboards. It supports diverse users—researchers, data scientists, and bioinformaticians—by offering infrastructure and collaborative tools that accelerate biomedical research, foster innovation, and translate discoveries into practical health solutions.
                    </p>
                </div>
                <!-- result-block -->
                <div class="result-block project-section-padding">
                    <h4 class="project-section-title">Result </h4>
                    <div class="row ">
                        <!-- 87% New User Engagement -->
                        <div class="col-4 col-md-3 count-up-item">
                            <div class="count-number" data-target="87" data-type="percent">0</div>
                            <div class="count-label">New User Engagement</div>
                        </div>
                        <!-- 98+ Profits -->
                        <div class="col-4 col-md-3 count-up-item">
                            <div class="count-number" data-target="98">0</div>
                            <div class="count-label">Profits</div>
                        </div>
                        <!-- 79% New Customer Acquisition -->
                        <div class="col-4 col-md-3 count-up-item pb-0 mt-md-0">
                            <div class="count-number" data-target="79" data-type="percent">0</div>
                            <div class="count-label">New Customer Acquisition</div>
                        </div>

                    </div>
                </div>
                <!-- objective-challenges  -->
                <div class="objective-challenges project-section-padding">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="project-section-title">Objective </h4>
                            <p class="project-body-text">To build a platform that streamlines biomedical data management and enables easy access to vital life sciences information, emphasizing seamless data gathering and communication while addressing challenges in areas with limited approved treatments.</p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="project-section-title ps-responsive-margin">Challenges </h4>
                            <p class="project-body-text">Managing vast and complex biomedical datasets while ensuring user-friendly comprehension is challenging. This requires a cohesive user-centered design approach to integrate, visualize, and simplify big data efficiently.</p>
                        </div>
                    </div>
                </div>
                <!-- solutions-offered  -->
                <div class="solutions-offered project-section-padding">
                    <h4 class="project-section-title">Solutions we offered</h4>
                    <p class="project-body-text">We created an application that contextualizes biomedical knowledge with cause-and-effect relationships, utilizing live dashboards and data visualization tools. The design focuses on clarity and intuitiveness, transforming complex biomedical data into actionable insights through an engaging, user-centered interface.</p>

                    <div class="bs-card-section project-bs-cards">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">User Stories for Event Identification</h4>
                                    <p class="description">
                                    Developed user stories helped detect complex biological events, refining platform responsiveness and user experience.
                                    </p>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Digitalization of Manual Data Handling</h4>
                                    <p class="description">
                                    Through prototyping and testing, we transitioned manual processes to digital, improving interaction and workflow efficiency.
                                    </p>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Early Developer Engagement</h4>
                                    <p class="description">
                                    Engaging developers from the initial stages fostered better communication between design and development teams, helping prevent rework, accelerate implementation, and improve overall solution quality.
                                    </p>
                                </div>
                            </div>
                            <!-- Card 4 -->

                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Interactive Data Visualization</h4>
                                    <p class="description">
                                    Implemented live dashboards and intuitive visuals, allowing users to explore complex data effortlessly.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="solutions-offered project-section-padding">
                    <h4 class="project-section-title">Our Approach</h4>
                    <p class="project-body-text">We carried out extensive research and requirement analysis, iterated through prototypes, and refined the product to ensure it met user needs at every stage.</p>
                </div>
                <!-- brainstorming-session  -->

                <!-- solutions-help section -->
                <div class="solutions-help project-section-padding">
                    <div class="title-flex">
                        <h2 class="project-section-title">
                            How did our solutions help?
                        </h2>
                        <button class="btn btn-custom case-study-webview"
                            data-service="euclid-biomedical-research-platform" data-bs-toggle="modal"
                            data-bs-target="#downloadCaseStudyModal"
                            data-project-title="<?php echo htmlspecialchars($project_title); ?>"
                            data-case-study-url="<?php echo htmlspecialchars($case_study_download_url); ?>">
                            Download case study
                        </button>
                    </div>
                    <p class="project-body-text">
                    Through thoughtful design and collaboration, we transformed complex workflows into a smooth, intuitive experience that resonated with users and elevated their everyday interactions with the platform.
                    </p>
                    <button class="btn btn-custom case-study-mobview ps-responsive-margin"
                        data-service="euclid-biomedical-research-platform" data-bs-toggle="modal"
                        data-bs-target="#downloadCaseStudyModal"
                        data-project-title="<?php echo htmlspecialchars($project_title); ?>"
                        data-case-study-url="<?php echo htmlspecialchars($case_study_download_url); ?>">
                        Download case study
                    </button>
                    <div class="bs-card-section project-bs-cards">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h4 class="title">Refined Usability</h4>
                                    <p class="description">
                                    Users benefited from a sleek, easy-to-navigate interface, improving workflow fluidity.
                                    </p>

                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h4 class="title">Simplified Accessibility</h4>
                                    <p class="description">
                                    Consistent design language ensured accessibility for users across skill levels.
                                    </p>

                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h4 class="title">Positive User Feedback</h4>
                                    <p class="description">
                                    The redesign garnered strong approval for its intuitive and user-friendly interface.
                                    </p>

                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h4 class="title">Increased Engagement</h4>
                                    <p class="description">
                                    Improved usability and visualization increased user engagement with the platform.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ui-update  -->
                <div class="ui-update project-section-padding">
                    <h4 class="project-section-title">Final UI </h4>
                    <div class="bs-img">
                        <img src="<?php echo $path; ?>assets/images/projects/euclid-biomedical/euclid-website-ui.webp"
                            alt="ui-update" />
                    </div>
                </div>
                <!-- <div class="view-all-blogs-btn">
                    <button class="btn btn-custom btn-custom-secondary">
                        View More Projects
                    </button>
                </div> -->
            </div>
        </div>
    </section>

    <?php 
        $previous = "Redesigning Cattle Tracking & Management solution";
        $previousLink = "/cattle-tracking-management-solution.php";
        $next = "Healtcare ERP System Boost for Cashless TPA";
        $nextLink ="/vidal-cashless-tpa.php";
        include $path . 'components/navigation-footer.php';
    ?>



    <?php include $path . 'components/projects-enquiry.php'; ?>
    <div class="mb-0 mb-sm-4"></div>
    <?php include $path . 'components/registration-modal.php'; ?>
    <?php include $path . 'components/download-casestudy-modal.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
    <?php include $path . 'includes/footer-additional-scripts.php'; ?>
    <?php include $path . 'includes/js.php'; ?>

</body>

</html>