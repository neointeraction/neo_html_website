<!DOCTYPE html>
<html lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <?php include $path . 'includes/css.php'; ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <title>UI UX Design Agency in India | UI UX Design Company | Neointeraction Design</title>
    <meta name="description" content="Are you looking for a best UI UX design agency in India? Neointeraction Design is one of the best UI UX Design company in india offering Expert Solutions." />
    <meta name="keywords" content=" UI UX design agency in India , ui ux design company in India,web design, UI/UX, digital transformation, web development, neointeraction" />
    <link rel="canonical" href="<?php echo $base_url; ?>blog" />
    <meta property="og:title" content="UI UX Design Agency in India | UI UX Design Company | Neointeraction Design" />
    <meta property="og:description" content="Craft your brand identity with the expertise of Neointeraction Design  best branding studio in India." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/neo-home-ux-research-brand.jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="<?php echo $base_url; ?>blog" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations" />
    <meta name="twitter:description" content="Craft your brand identity with the expertise of Neointeraction Design  best branding studio in India." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/neo-home-ux-research-brand.jpeg" />
</head>

<body>
    <?php
    $page = 'Home';
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
        <div class="banner-slider">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="banner-content">
                                <h4 class="banner-supertext">research-to-design process that differentiates professional UX work</h4>
                                <h1 class="banner-title">
                                    Award winning <span class="highlight">Ux Agency</span>
                                </h1>
                                <button class="btn btn-custom btn-custom-secondary banner-btn consultation-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
                                    Book A Consultation
                                </button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="banner-img-block">
                                <img src="<?php echo $path; ?>assets/images/banner/globe.jpg" alt="banner" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="banner-content">
                                <h4 class="banner-supertext">business impact and ROI-driven design</h4>
                                <h1 class="banner-title">
                                    Make tech products <span class="highlight">more human</span>
                                </h1>
                                <button class="btn btn-custom btn-custom-secondary banner-btn consultation-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
                                    Book A Consultation
                                </button>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="banner-img-block">
                                <img src="<?php echo $path; ?>assets/images/banner/oldage.jpeg" alt="Make tech products more human" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="banner-content">
                                <h4 class="banner-supertext">research-to-design process that differentiates professional UX work</h4>
                                <h1 class="banner-title">
                                    AI-Powered Design. <span class="highlight">Human-Centered</span> Results.
                                </h1>
                                <button class="btn btn-custom btn-custom-secondary banner-btn consultation-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
                                    Book A Consultation
                                </button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="banner-img-block">
                                <img src="<?php echo $path; ?>assets/images/banner/lady.jpg" alt="banner" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="banner-content">
                                <h4 class="banner-supertext">business impact and ROI-driven design</h4>
                                <h1 class="banner-title">
                                    Design With Purpose. <span class="highlight">Build With Precision</span>.
                                </h1>
                                <button class="btn btn-custom btn-custom-secondary banner-btn consultation-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
                                    Book A Consultation
                                </button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="banner-img-block">
                                <img src="<?php echo $path; ?>assets/images/banner/watch.jpeg" alt="banner" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner -- end  -->
    <!-- business-success  -->
    <section class="business-success section-padding">
        <div class="container">
            <h2 class="section-title">
                Crafting business success through Digital Experience
            </h2>
            <div class="bs-card-section section-margin">
                <div class="row justify-content-center">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/ux.svg" alt="ux" />
                            </div>
                            <h4 class="title">UX Design</h4>
                            <p class="description">
                                Delivering seamless experiences that speak louder than words.
                            </p>
                            <button class="btn btn-custom btn-custom-secondary hire-us-btn" data-service="UX Design" data-bs-toggle="modal" data-bs-target="#registerModal">
                                Hire Us
                            </button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/pd.svg" alt="pd" />
                            </div>
                            <h4 class="title">Product Design</h4>
                            <p class="description">
                                Shaping ideas into tangible user centric design solutions
                            </p>
                            <button class="btn btn-custom btn-custom-secondary hire-us-btn" data-service="Product Design" data-bs-toggle="modal" data-bs-target="#registerModal">
                                Hire Us
                            </button>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/dt.svg" alt="dt" />
                            </div>
                            <h4 class="title">Digital Transformation</h4>
                            <p class="description">
                                Crafting revolutionary aesthetics that redefine user
                                interaction.
                            </p>
                            <button class="btn btn-custom btn-custom-secondary hire-us-btn" data-service="Digital Transformation" data-bs-toggle="modal" data-bs-target="#registerModal">
                                Hire Us
                            </button>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/fd.svg" alt="fd" />
                            </div>
                            <h4 class="title">Frontend Development</h4>
                            <p class="description">
                                Bridging creativity and code for pixel-perfect user
                                interfaces.
                            </p>
                            <button class="btn btn-custom btn-custom-secondary hire-us-btn" data-service="Frontend Development" data-bs-toggle="modal" data-bs-target="#registerModal">
                                Hire Us
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- business-success -- end  -->
    <!-- our-impact  -->
    <section class="our-impact section-padding">
        <div class="container">
            <h2 class="section-title">Our Impact</h2>

            <div class="row w-100">
                <!-- 15+ years expertise -->
                <div class="col-6 col-md-3 count-up-item">
                    <div class="count-number" data-target="15">0</div>
                    <div class="count-label">years expertise</div>
                </div>
                <!-- 150+ trusted clients -->
                <div class="col-6 col-md-3 count-up-item">
                    <div class="count-number" data-target="150">0</div>
                    <div class="count-label">trusted clients</div>
                </div>
                <!-- 1b+ lives impacted -->
                <div class="col-6 col-md-3 count-up-item  mt-md-0">
                    <div class="count-number" data-target="1">0</div>
                    <div class="count-label">billion+ lives impacted</div>
                </div>
                <!-- 10+ countries impacted -->
                <div class="col-6 col-md-3 count-up-item mt-md-0">
                    <div class="count-number" data-target="10">0</div>
                    <div class="count-label">countries impacted</div>
                </div>
            </div>
        </div>
    </section>

    <!-- our-impact -- end  -->
    <!-- clients  -->
    <section class="clients section-padding">
        <div class="container">
            <h2 class="section-title">
                Clients we've partnered with
            </h2>
            <div class="scroll-container section-margin">
                <div class="scrolling-logos">
                    <?php $client_tag = 'home'; include 'components/clients.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- clients -- end  -->
    <!-- testimonials  -->
    <?php include 'components/testimonial.php'; ?>
    <!-- testimonials -- end  -->
    <!-- browse-project  -->
    <section class="browse-project section-padding">
        <div class="container">
            <div class="title-flex">
                <h2 class="section-title">Browse Projects</h2>
                <a href="<?php echo $path; ?>projects.php" class="section-links">View All</a>
            </div>
            <div class="project-block section-margin">
                <?php
                $limit = 3; // Number of projects to display
                include $path . 'projects/project-listing.php';
                ?>
            </div>
        </div>
    </section>
    <!-- browse-project -- end -->
    <!-- demo-video  -->
    <section class="demo-video section-padding">
        <div class="container">
            <h2 class="section-title">Demo Video</h2>
            <div class="video-container section-margin">
                <iframe class="video-iframe" width="100%" height="650" src="https://www.youtube.com/embed/S-gxMxp6tDU?si=3JEtJ7rMe15mKX8f" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="border-radius: 0;"></iframe>
            </div>
        </div>
    </section>

    <!-- design-events  -->
    <section class="design-events section-padding">
        <div class="container">

         <div class="title-flex">
                <h2 class="section-title">Design Events</h2>
                <a href="<?php echo $path; ?>events.php" class="section-links">View All</a>
            </div>
            
            <div class="project-block section-margin">
                <div class="project-block-item">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="project-card d-lg-flex">
                                <div class="col-lg-6 p-0 project-image-container">
                                    <img
                                        src="assets/images/events/workshop-on-accelerating design-decisions.jpeg"
                                        alt="Project Image"
                                        class="img-fluid project-image" />
                                </div>
                                <div
                                    class="col-lg-6 d-flex flex-column justify-content-center project-content">
                                    <h2 class="project-title">
                                        Workshop on Accelerating Design decisions
                                    </h2>
                                    <p class="project-description">
                                        A one-day deep dive into the world of UX, where we had the
                                        opportunity to enrich UX Leads and Product Designers to
                                        elevate their product experiences and uplift their design
                                        career path.
                                    </p>

                                    <button class="btn btn-custom read-more-btn" onclick="window.location.href='ux-design-audit.php'">
                                        Read More
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- design-events -- end -->

    <!-- our-team  -->
    <section class="our-team section-padding">
        <div class="container">
            <div class="title-flex">
                <h2 class="section-title">Our Team</h2>
                <a href="<?php echo $path; ?>team.php" class="section-links">View All</a>
            </div>
            <?php
            $team_tag = 'home';
            $team_limit = 4;
            include $path . 'components/teams-listing.php';
            ?>
        </div>
    </section>
    <!-- our-team -- end  -->

    <!-- recent-blogs  -->
    <section class="recent-blogs section-padding">
        <div class="container">
            <div class="title-flex">
                <h2 class="section-title">Recent Blogs</h2>
                <a href="<?php echo $path; ?>blogs.php" class="section-links">View All</a>
            </div>
            <div class="blog-container-block section-margin">
                <div class="row g-4 justify-content-center">
                    <!-- Card 1 -->
                    <?php include $path . 'blogs/blogs-listing.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- recent-blogs - end  -->
    
    <?php include $path . 'components/submit-enquiry.php'; ?>
    <?php include $path . 'components/registration-modal.php'; ?>
    <?php $faq_tag = 'home'; include $path . 'components/faq.php'; ?>
    <?php include $path . 'components/join-our-team.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
    <?php include $path . 'includes/footer-additional-scripts.php'; ?>
    <?php include $path . 'includes/js.php'; ?>

    <!-- Button tracking script - loads only once -->
    <script>
    (function() {
        'use strict';
        
        let buttonTrackingInitialized = false;

        function initializeButtonTracking() {
            if (buttonTrackingInitialized) {
                return;
            }
            
            buttonTrackingInitialized = true;

            // Handle "Book A Consultation" buttons
            const consultationBtns = document.querySelectorAll('.consultation-btn');
            consultationBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    localStorage.setItem('enquiryType', 'Book A Consultation');
                    console.log('Set enquiry type: Book A Consultation');
                });
            });

            // Handle "Hire Us" buttons
            const hireUsBtns = document.querySelectorAll('.hire-us-btn');
            hireUsBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const service = this.getAttribute('data-service') || 'General Service';
                    localStorage.setItem('enquiryType', `Hire Us - ${service}`);
                    console.log(`Set enquiry type: Hire Us - ${service}`);
                });
            });
        }

        // Initialize when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initializeButtonTracking);
        } else {
            initializeButtonTracking();
        }
    })();
    </script>
</body>

</html>
