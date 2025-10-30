<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <?php include $path . 'includes/css.php'; ?>
    <title>Inkmagik | Graphic Design Tool | Neointeraction Design</title>
    <meta name="description"
        content="Inkmagik DIY design tool developed by Neointeraction Team. Create marketing designs effortlessly to boost your brand's visual appeal." />
    <link rel="canonical" href="https://www.neointeraction.com/inkmagik-a-graphic-design-tool" />
    <meta property="og:title" content="Inkmagik | Graphic Design Tool | Neointeraction Design" />
    <meta property="og:description"
        content="Inkmagik DIY design tool developed by Neointeraction Team. Create marketing designs effortlessly to boost your brand's visual appeal." />
    <meta property="og:image"
        content="<?php echo $base_url; ?>assets/images/og/inkmagik-project-thumbnail.webp" />
    <meta property="og:image:width" content="2500" />
    <meta property="og:image:height" content="1330" />
    <meta property="og:url" content="https://www.neointeraction.com/inkmagik-a-graphic-design-tool" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="jDr4aVGcjUUHdNv8SD5bpXt6-kwDs5rDAbNqhXDrENY" />
    <meta name="twitter:title" content="Inkmagik | Graphic Design Tool | Neointeraction Design" />
    <meta name="twitter:description"
        content="Inkmagik DIY design tool developed by Neointeraction Team. Create marketing designs effortlessly to boost your brand's visual appeal." />
    <meta name="twitter:image"
        content="<?php echo $base_url; ?>assets/images/og/inkmagik-project-thumbnail.webp" />
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
                Inkmagik - <span class="highlight">A Graphic Design Software</span>
            </h1>
        </div>
        <!-- project-banner-img -->
      
        <div class="project-banner-img project-banner-img-block d-none d-md-block">
            <div class="pbi-layer1">
                <img src="<?php echo $path; ?>assets/images/projects/inkmagik/inkmagik-project-banner.webp"
                    alt="pbanner1" />
            </div>
            <div class="pbi-layer2">
                <img src="<?php echo $path; ?>assets/images/projects/inkmagik/inkmagik-project-banner-float.webp"
                    alt="pbanner1" />
            </div>
        </div>
        <div class="project-banner-img project-banner-img-block project-banner-mob d-block d-md-none">
            <div class="pbi-layer1">
                <img src="<?php echo $path; ?>assets/images/projects/inkmagik/inkmagik-graphic-design-tool.webp"
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
                                <img src="<?php echo $path; ?>assets/images/projects/client-logos/inkmagik-logo.webp" alt="tricog" />
                                <div class="quote-icon-right d-block d-md-none"></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="quote-icon d-none d-md-block"></div>
                            <p class="blog-quote-text">We wanted to develop a do-it-yourself design tool that helps
                                design presentations, social media posts, accessible templates, and other quick
                                projects. Our Neointeraction team worked together and created this simple tool which has
                                gained many subscribers.</p>
                        </div>
                    </div>
                </div>
                <!-- overview-block -->
                <div class="overview-block project-section-padding">
                    <div class="title-flex align-items-center">
                        <h2 class="project-section-title">Overview </h2>
                        <button class="btn btn-custom banner-btn consultation-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
                            Book A Consultation
                        </button>
                    </div>
                    <p class="p-main-text">
                    An all-in-one, intuitive graphic design tool built for individuals and businesses to create stunning visuals with ease. 
                    </p>
                    <!-- <button class="btn btn-custom case-study-mobview ">
                        Book A Consultation
                    </button> -->
                </div>
                <!-- result-block -->
                <div class="result-block project-section-padding">
                    <h2 class="project-section-title">Result </h2>
                    <div class="row ">
                        <!-- 15+ years expertise -->
                        <div class="col-4 col-md-3 count-up-item">
                            <div class="count-number" data-target="81" data-type="percent">0</div>
                            <div class="count-label">New User Engagement</div>
                        </div>
                        <!-- 150+ trusted clients -->
                        <div class="col-4 col-md-3 count-up-item">
                            <div class="count-number" data-target="90">0</div>
                            <div class="count-label">Profits</div>
                        </div>
                        <!-- 80% lives impacted -->
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
                            <h2 class="project-section-title">Objective </h2>
                            <p class="project-body-text">
                            To develop an easy-to-use graphic design tool for individuals and businesses with limited design experience and to simplify the design process, enabling users to effortlessly create and share various materials. We aim to redefine graphic design for non-designers, making it accessible and efficient for all. 
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h2 class="project-section-title ps-responsive-margin">Challenges </h2>
                            <p class="project-body-text">Challenges included creating a user-friendly tool for non-designers, simplifying complex functionalities, and using the right technology. Understanding various creative needs and developing an extensive template collection further adds variety to meet end-user needs.</p>
                        </div>
                    </div>
                </div>
                <!-- solutions-offered  -->
                <div class="solutions-offered project-section-padding">
                    <h2 class="project-section-title">Solutions we offered</h2>
                    <p class="project-body-text">We were able to provide customers with an all-in-one platform for their creative and business requirements by integrating multiple features & functions into Inkmagik.
                    </p>

                    <div class="bs-card-section project-bs-cards">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h3 class="title">Diverse Design Templates</h3>
                                    <p class="description">
                                    Access a wide range of ready-to-use templates for different occasions, industries, and creative needs.
                                    </p>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h3 class="title">Multilingual Support</h3>
                                    <p class="description">
                                    Inkmagik promotes inclusivity with multilingual support — currently available in three Indian languages, with plans to expand further.
                                    </p>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h3 class="title">Safe Stock Resources</h3>
                                    <p class="description">
                                    Ability to manage your designs by scheduling, planning, sharing, and collaborating with your team.
                                    </p>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card">
                                    <h3 class="title">AI-Powered Image Editing </h3>
                                    <p class="description">
                                    Leverage AI-driven tools like automatic background removal to simplify image editing and speed up the creative process.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="solutions-offered project-section-padding">
                    <h2 class="project-section-title">Our Approach </h2>
                    <p class="project-body-text">We tackled the challenge of simplifying design for people with different creative needs by using a strategic approach. We interviewed individuals to understand their design needs and used the latest technology to create user-friendly features, ensuring an efficient design experience.
                    </p>
                </div>
                <!-- solutions-help section -->
                <div class="solutions-help project-section-padding">
                    <div class="title-flex">
                        <h2 class="project-section-title">
                            How did our solutions help?
                        </h2>
                        <button class="btn btn-custom case-study-webview" 
                        data-service="inkmagik-graphic-design-tool" data-bs-toggle="modal"
                            data-bs-target="#downloadCaseStudyModal"
                            data-project-title="<?php echo htmlspecialchars($project_title); ?>"
                            data-case-study-url="<?php echo htmlspecialchars($case_study_download_url); ?>"
                        >
                            Download case study
                        </button>
                    </div>
                    <p class="project-body-text">
                    As Inkmagik is an all-in-one graphic design tool, its applications vary based on business and individual needs. Below are some of the key user groups that have benefited the most from Inkmagik:
                    </p>
                    <button class="btn btn-custom case-study-mobview ps-responsive-margin" 
                    data-service="inkmagik-graphic-design-tool" data-bs-toggle="modal"
                            data-bs-target="#downloadCaseStudyModal"
                            data-project-title="<?php echo htmlspecialchars($project_title); ?>"
                            data-case-study-url="<?php echo htmlspecialchars($case_study_download_url); ?>"
                    >
                        Download case study
                    </button>
                    <div class="bs-card-section project-bs-cards">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h3 class="title">Social Media Marketers</h3>
                                    <p class="description">
                                    Improved their online presence with ready-to-use, professional templates for engaging posts and campaigns.
                                    </p>

                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h3 class="title">Online Sellers</h3>
                                    <p class="description">
                                    Promoted their products effectively using visually appealing marketing materials and product visuals.
                                    </p>

                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h3 class="title">Institutions</h3>
                                    <p class="description">
                                    Simplified the creation of academic projects, presentations, and event materials with easy-to-edit templates.
                                    </p>

                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="custom-card case-study-card">
                                    <h3 class="title">
                                    Marketing Teams</h3>
                                    <p class="description">
                                    Streamlined brand communication and campaign creation with collaborative tools and consistent visual assets.
                                    </p>

                                </div>
                            </div>


                          

                        </div>
                    </div>

                </div>
                <!-- ui-update  -->
                <div class="ui-update project-section-padding">
                    <h2 class="project-section-title">Final UI </h2>
                    
                    <div class="bs-img">
                        <img src="<?php echo $path; ?>assets/images/projects/inkmagik/inkmagik-website-ui.webp" alt="ui-update" />
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
        $previous = "Intertrust - A BPM Application";
        $previousLink = "/intertrust-bpm-tool.php";
        $next = "Redesigning Cattle Tracking & Management solution";
        $nextLink ="/cattle-tracking-management-solution.php";
        include $path . 'components/navigation-footer.php';
    ?>



    <?php include $path . 'components/projects-enquiry.php'; ?>
    <div class="mb-0 mb-sm-4"></div>
    <?php include $path . 'components/registration-modal.php'; ?>
    <?php include $path . 'components/download-casestudy-modal.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
    <?php include $path . 'includes/footer-additional-scripts.php'; ?>
    <?php include $path . 'includes/js.php'; ?>>
</body>

</html>
