<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <?php include $path . 'includes/css.php'; ?>
    <title>Crew Mobility Management in a Cruise | Neointeraction Design</title>
    <meta name="description"
        content="Streamline onboarding for 1,500 cruise ship employees with our new mobile solution, enhancing UX/UI to reduce operational tasks and team calls." />
    <link rel="canonical" href="<?php echo $base_url; ?>projects/crew-mobility-management-in-a-cruise.php" />
    <meta property="og:title" content="Crew Mobility Management in a Cruise | Neointeraction Design" />
    <meta property="og:description"
        content="Streamline onboarding for 1,500 cruise ship employees with our new mobile solution, enhancing UX/UI to reduce operational tasks and team calls." />
    <meta property="og:image"
        content="<?php echo $base_url; ?>assets/images/og/crew-mobility-management-thumbnail.jpeg" />
    <meta property="og:image:width" content="2500" />
    <meta property="og:image:height" content="1330" />
    <meta property="og:url" content="<?php echo $base_url; ?>projects/crew-mobility-management-in-a-cruise.php" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:title" content="Crew Mobility Management in a Cruise | Neointeraction Design" />
    <meta name="twitter:description"
        content="Streamline onboarding for 1,500 cruise ship employees with our new mobile solution, enhancing UX/UI to reduce operational tasks and team calls." />
    <meta name="twitter:image"
        content="<?php echo $base_url; ?>assets/images/og/crew-mobility-management-thumbnail.jpeg" />
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
    <!-- navbar  end  -->
    <!-- banner  -->
    <section class="banner section-padding">
        <div class="container">
            <h1 class="banner-title">
                Mobility Platform for <span class="highlight">Crew Ship workforce management</span>
            </h1>
        </div>
        <!-- project-banner-img -->
        <div class="project-banner-img project-banner-img-block d-none d-md-block">
            <div class="pbi-layer1">
                <img src="<?php echo $path; ?>assets/images/projects/crew-mobility-management-in-a-cruise/crew-mobility-management-banner.jpg"
                    alt="pbanner1" />
            </div>
            <div class="pbi-layer2">
                <img src="<?php echo $path; ?>assets/images/projects/crew-mobility-management-in-a-cruise/crew-mobility-management-banner-2.png"
                    alt="pbanner1" />
            </div>
        </div>
        <div class="project-banner-img project-banner-img-block project-banner-mob d-block d-md-none">
            <div class="pbi-layer1">
                <img src="<?php echo $path; ?>assets/images/projects/crew-mobility-management-in-a-cruise.jpeg"
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
                                <img src="<?php echo $path; ?>assets/images/projects/client-logos/carnival-logo.svg" alt="carnival" />
                                <div class="quote-icon-right d-block d-md-none"></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="quote-icon d-none d-md-block"></div>
                            <p class="blog-quote-text">
                            A well designed product, we are impressed with design quality and User experience. Detailed wireframe & prototypes helped us to understand the UX better.</p>
                        </div>
                    </div>
                </div>
                <!-- overview-block -->
                <div class="overview-block project-section-padding">
                    <div class="title-flex">
                        <h4 class="project-section-title">Overview </h4>
                        <a href="#" class="btn btn-custom banner-btn consultation-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
                            Book A Consultation
                        </a>
                    </div>
                    <p class="p-main-text">TM hub is an application used by the staff members aboard the Carnival ship
                        to organize their daily activities, tasks, and information about their journey</p>
                    <!-- <button class="btn btn-custom case-study-mobview" >
                        Book A Consultation
                    </button> -->
                </div>
                <!-- result-block -->
                <div class="result-block project-section-padding">
                    <h4 class="project-section-title">Result </h4>
                    <div class="row ">
                        <!-- 15+ years expertise -->
                        <div class="col-4 col-md-3 count-up-item">
                            <div class="count-number" data-target="90" >0</div>
                            <div class="count-label">New User Engagement</div>
                        </div>
                        <!-- 150+ trusted clients -->
                        <div class="col-4 col-md-3 count-up-item">
                            <div class="count-number" data-target="85">0</div>
                            <div class="count-label">Profits</div>
                        </div>
                        <!-- 80% lives impacted -->
                        <div class="col-4 col-md-3  count-up-item pb-0 mt-md-0">
                            <div class="count-number" data-target="80"  data-type="percent">0</div>
                            <div class="count-label">New Customer Acquisition</div>
                        </div>

                    </div>
                </div>
                <!-- objective-challenges  -->
                <div class="objective-challenges project-section-padding">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="project-section-title">Objective </h4>
                            <p class="project-body-text">The aim is to enhance the daily user experience by revamping
                                the app's interface, making it more user-friendly. The focus is on simplifying the
                                crews' daily activities, tasks, and get information about their journey seamlessly all
                                in one place.</p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="project-section-title ps-responsive-margin">Challenges </h4>
                            <p class="project-body-text">Considering the app was created by tech first approach where in
                                it was built from the utility point of view, no significant design considerations or
                                user research were used when creating the app for various user personas </p>
                        </div>
                    </div>
                </div>
                <!-- solutions-offered  -->
                <div class="solutions-offered project-section-padding">
                    <h4 class="project-section-title">Solutions we offered</h4>
                    <p class="project-body-text">We revamped the app to benefit the target user by simplifying and
                        streamlining their daily tasks, which was accomplished through,</p>

                    <div class="bs-card-section project-bs-cards">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Brainstorming</h4>
                                    <p class="description">
                                        Brainstorming sessions with the client and the creation of rough sketches served
                                        as the project's inspiration
                                    </p>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Identifying Key flows and user pain points</h4>
                                    <p class="description">
                                        Identifying key user flow and its pain point in the existing app
                                    </p>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h4 class="title">Collaborative decision making</h4>
                                    <p class="description">
                                        Presentation of the refined key flow to the stakeholders to make impactful
                                        design decisions
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
                <!-- brainstorming-session  -->
                <div class="brainstorming-session project-section-padding">
                    <h4 class="project-section-title">Brainstorming Session </h4>
                    <p class="project-body-text">Brainstorming sessions with the client and the iterative sketches
                        served as the project's inspiration</p>
                    <div class="bs-img">
                        <img src="<?php echo $path; ?>assets/images/projects/crew-mobility-management-in-a-cruise/crew-mobility-brainstorming-session.jpg"
                            alt="crew-mobility-brainstorming" />
                    </div>
                </div>
                <!-- solutions-help section -->
                <div class="solutions-help project-section-padding">
                    <div class="title-flex">
                        <h2 class="project-section-title">
                            How did our solutions help?
                        </h2>
                            <a href="#" class="btn btn-custom case-study-webview "
                                 data-service="crew-mobility-management-in-a-cruise"
                                 data-bs-toggle="modal"
                                 data-bs-target="#downloadCaseStudyModal"
                                 data-project-title="<?php echo htmlspecialchars($project_title); ?>"
                                 data-case-study-url="<?php echo htmlspecialchars($case_study_download_url); ?>">
                          Download case study
                        </a>
                    </div>
                    <p class="project-body-text">
                        Our user task-focused design empowers crew members, ensuring seamless goal achievement and
                        enhanced productivity. Beyond technical improvements, it transforms daily routines for a more
                        enjoyable and manageable experience.
                    </p>
                
                     <a href="#" class="btn btn-custom case-study-mobview ps-responsive-margin"
                                 data-service="crew-mobility-management-in-a-cruise"
                                 data-bs-toggle="modal"
                                 data-bs-target="#downloadCaseStudyModal"
                                 data-project-title="<?php echo htmlspecialchars($project_title); ?>"
                                 data-case-study-url="<?php echo htmlspecialchars($case_study_download_url); ?>">
                          Download case study
                        </a>
                    <div class="bs-card-section project-bs-cards">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h4 class="title">Improved Usability</h4>
                                    <p class="description">
                                        Our design significantly enhances the system's usability, offering a more
                                        user-friendly and accessible interface.
                                    </p>

                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h4 class="title">User Centric UI</h4>
                                    <p class="description">
                                        Prioritizing crew well-being and mobility managment, our UI design ensures both
                                        functionality and ergonomic comfort, enhancing the overall user experience.
                                    </p>

                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h4 class="title">Streamlined User Flow</h4>
                                    <p class="description">
                                        The new user flows made it easier to get tasks done quickly, reducing challenges
                                        and ensured a smooth transition for different user throughout their navigation
                                    </p>

                                </div>
                            </div>

                               <!-- Card 3 -->
                               <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h4 class="title">Better Engagement and Efficiency</h4>
                                    <p class="description">
                                    By simplifying key interactions and making navigation intuitive, the redesigned app encouraged active participation among crew members and improved overall efficiency in completing their daily tasks.

                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- ui-update  -->
                <div class="ui-update project-section-padding">
                    <h4 class="project-section-title">Interactive UI Upgrade </h4>
                    <p class="project-body-text">With dynamic micro interactions and illustrations, our redesign was
                        driven by practical functionality for a more engaging and user-friendly experience.</p>
                    <div class="bs-img">
                        <img src="<?php echo $path; ?>assets/images/projects/crew-mobility-management-in-a-cruise/crew-mobility-mobile-ui.jpg"
                            alt="crew mobility mobile ui" />
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
        $previous = "Construction Management Platform";
        $previousLink = "/construction-management-platform.php";
        $next = "Redesigning Noctils Music Rights Management solution";
        $nextLink ="/music-rights-management-solution.php";
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
