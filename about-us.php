<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <?php include $path . 'includes/css.php'; ?>
    <title>About Neointeraction Design | Leading UI UX Design Agency in India</title>
    <meta name="description"
        content="Discover Neointeraction Design – a leading UI UX design company in India, building user-friendly digital experiences through innovation, research, and expertise.">
    <link rel="canonical" href="https://www.neointeraction.com/about-us">
    <meta property="og:title" content="Top UI UX Designer Developer in India | Expert UI UX Services">
    <meta property="og:description"
        content="Discover Neointeraction Design – a leading UI UX design company in India, building user-friendly digital experiences through innovation, research, and expertise.">
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/neointeraction-about-us-og.webp">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">
    <meta property="og:url" content="https://www.neointeraction.com/about-us">
    <meta property="og:site_name" content="About Neointeraction Design">
    <meta property="og:type" content="website">
    <meta name="google-site-verification" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Top UI UX Designer Developer in India | Expert UI UX Services">
    <meta name="twitter:description"
        content="Discover Neointeraction Design – a leading UI UX design company in India, building user-friendly digital experiences through innovation, research, and expertise.">
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/neointeraction-about-us-og.webp">
</head>

<body>
    <?php 
     $page = 'About Us'; 
     $projectsData = file_get_contents(__DIR__ . '/data/projects_data.json');
     $projects = json_decode($projectsData, true);
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
        <div>
            <div class="container">
                <h1 class="banner-title">
                    Passionately crafting <span class="highlight">digital experiences</span>
                </h1>
                <div class="experience-block">
                    <button class="btn btn-custom btn-custom-secondary banner-btn" data-bs-toggle="modal"
                        data-service="about us" data-bs-target="#registerModal">
                        Book A Consultation
                    </button>
                    <p class="banner-subtext">With over 15 years of experience, we've consistently worked with clients
                        from diverse domains and delivered top-tier design solutions
                        aligned with business goals for success.</p>
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
                            <div class="count-number" data-target="1" data-type="b">0</div>
                            <div class="count-label">lives impacted</div>
                        </div>
                        <!-- 10+ countries impacted -->
                        <div class="col-6 col-md-3 count-up-item mt-md-0">
                            <div class="count-number" data-target="10">0</div>
                            <div class="count-label">countries impacted</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- banner  end  -->
    <!-- demo-video  -->
    <section class="demo-video section-padding">
        <div class="container">
            <h2 class="section-title">Get to know us and what we do</h2>
            <div class="video-container section-margin">

                    <iframe height="650" src="https://www.youtube-nocookie.com/embed/S-gxMxp6tDU?si=ttdaZa1uTlcsq5z_"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen  loading="lazy" style="width:100%;border:0;border-radius: 0;"></iframe>
            </div>
        </div>
    </section>
    <!-- clients  -->
    <section class="clients section-padding">
        <div class="container">
            <h2 class="section-title">
                Clients we’ve partnered with
            </h2>
            <div class="scroll-container section-margin">
                <div class="scrolling-logos">
                    <!-- First set of logos -->
                    <?php include 'components/clients.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- clients  end  -->
    <!-- browse-project  -->
    <section class="browse-project section-padding">
        <div class="container">
            <div class="title-flex">
                <h2 class="section-title">Browse Projects</h2>
                <a href="<?php echo $path; ?>projects.php" class="section-links">View All</a>
            </div>
            <div class="project-slider-wrapper section-margin">
                <div class="project-block about-project-block">
                    <?php foreach ($projects as $project) { ?>
                    <div class="project-block-item">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="project-card d-lg-flex">
                                    <!-- Image container with fixed height and object-fit for consistent appearance -->
                                    <div class="col-lg-6 p-0 project-image-container">
                                        <img src="<?php echo $path; ?>assets/images/projects/<?php echo $project['image']; ?>"
                                            alt="<?php echo $project['alt']; ?>"
                                            class="img-fluid project-image d-none d-md-block" width="584" height="280">
                                        <img src="<?php echo $path; ?>assets/images/projects/<?php echo $project['mobileImage']; ?>"
                                            alt="<?php echo $project['alt']; ?>"
                                            class="img-fluid project-image d-flex d-md-none" width="438" height="126">
                                    </div>
                                    <div class="col-lg-6 d-flex flex-column justify-content-center project-content">
                                        <div class="project-tags">
                                            <?php foreach ($project['tags'] as $tag) { ?>
                                            <span class="badge"><?php echo $tag; ?></span>
                                            <?php } ?>
                                        </div>
                                        <h2 class="project-title"><?php echo $project['title']; ?></h2>
                                        <p class="project-description">
                                            <?php echo $project['description']; ?>
                                        </p>


                                        <div class="pb-action-btn">
                                            <button class="btn btn-custom read-more-btn"
                                                onclick="window.location.href='<?php echo $path; ?>projects/<?php echo $project['link']; ?>'">
                                                Read More
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="slick-navigation">
                    <button class="btn btn-custom btn-custom-secondary slick-btn slick-prev-custom"
                        aria-label="Previous">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="svg" fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.292787 7.70734C0.105316 7.51981 0 7.26551 0 7.00034C0 6.73518 0.105316 6.48087 0.292787 6.29334L5.94979 0.636343C6.04203 0.540833 6.15238 0.464651 6.27438 0.412242C6.39639 0.359833 6.52761 0.332246 6.66039 0.331092C6.79316 0.329939 6.92484 0.355241 7.04774 0.405521C7.17064 0.455802 7.28229 0.530055 7.37618 0.623948C7.47007 0.717841 7.54433 0.829492 7.59461 0.952389C7.64489 1.07529 7.67019 1.20696 7.66904 1.33974C7.66788 1.47252 7.6403 1.60374 7.58789 1.72575C7.53548 1.84775 7.4593 1.9581 7.36379 2.05034L2.41379 7.00034L7.36379 11.9503C7.54594 12.1389 7.64674 12.3915 7.64446 12.6537C7.64218 12.9159 7.53701 13.1668 7.35161 13.3522C7.1662 13.5376 6.91538 13.6427 6.65319 13.645C6.39099 13.6473 6.13839 13.5465 5.94979 13.3643L0.292787 7.70734Z"
                                fill="#2B2828" />
                        </svg>

                    </button>
                    <button class="btn btn-custom btn-custom-secondary slick-btn slick-next-custom" aria-label="Next">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="svg" fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.70832 6.29318C7.89579 6.48071 8.00111 6.73502 8.00111 7.00018C8.00111 7.26534 7.89579 7.51965 7.70832 7.70718L2.05132 13.3642C1.95907 13.4597 1.84873 13.5359 1.72672 13.5883C1.60472 13.6407 1.4735 13.6683 1.34072 13.6694C1.20794 13.6706 1.07626 13.6453 0.953366 13.595C0.83047 13.5447 0.718817 13.4705 0.624924 13.3766C0.531032 13.2827 0.456778 13.171 0.406498 13.0481C0.356217 12.9252 0.330915 12.7936 0.332069 12.6608C0.333223 12.528 0.360809 12.3968 0.413218 12.2748C0.465627 12.1528 0.541809 12.0424 0.637319 11.9502L5.58732 7.00018L0.637319 2.05018C0.455161 1.86158 0.354367 1.60898 0.356645 1.34678C0.358924 1.08458 0.464092 0.83377 0.6495 0.648362C0.834909 0.462954 1.08572 0.357785 1.34792 0.355507C1.61011 0.353228 1.86272 0.454022 2.05132 0.636181L7.70832 6.29318Z"
                                fill="#2B2828" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- browse-project end -->
    <!-- what-we-do  -->
    <section class="what-we-do section-padding">
        <div class="container">
            <h2 class="section-title">What We Do</h2>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/star.svg" alt="Design thinking icon"
                                height="40px" width="40px" />
                            <p class="wwd-text">Design Thinking is our Gene factor</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/check.svg" alt="Impactful design icon"
                                height="40px" width="40px" />
                            <p class="wwd-text">Design for meaningful impact in lives</p>
                        </div>

                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/doc.svg" alt="Business model design icon"
                                height="40px" width="40px" />
                            <p class="wwd-text">Business friendly engaging models </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/like.svg" alt="Functional design icon"
                                height="40px" width="40px" />
                            <p class="wwd-text">Focused on functional designs</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/money.svg" alt="ROI design icon" height="40px"
                                width="40px" />
                            <p class="wwd-text">Designs with measurable ROI</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/click.svg" alt="design services icon"
                                height="40px" width="40px" />
                            <p class="wwd-text">Provides end to end design services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- what-we-do end -->
    <!-- our-team  -->
    <section class="our-team section-padding">
        <div class="container">
            <div class="title-flex">
                <h2 class="section-title">Our Team</h2>
                <a href="teams.php" class="section-links">View Our Team</a>
            </div>
            <div class="blog-container-block section-margin">
                <div class="row g-4 justify-content-center">
                    <?php $team_tag = 'home'; include $path . 'components/teams-listing.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- our-team end  -->

    <!-- life-at-neo  -->
    <section class="life-at-neo section-padding">
        <div class="container">
            <h2 class="section-title">Life at Neointeraction</h2>
            <div class="project-slider-wrapper section-margin">
                <div class="project-block life-at-neo-block">
                    <?php include $path . 'components/life-at-neo.php'; ?>
                </div>
                <div class="slick-navigation life-at-neo-navigation">
                    <button class="btn btn-custom btn-custom-secondary slick-btn slick-prev-custom"
                        aria-label="Previous">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="svg" fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.292787 7.70734C0.105316 7.51981 0 7.26551 0 7.00034C0 6.73518 0.105316 6.48087 0.292787 6.29334L5.94979 0.636343C6.04203 0.540833 6.15238 0.464651 6.27438 0.412242C6.39639 0.359833 6.52761 0.332246 6.66039 0.331092C6.79316 0.329939 6.92484 0.355241 7.04774 0.405521C7.17064 0.455802 7.28229 0.530055 7.37618 0.623948C7.47007 0.717841 7.54433 0.829492 7.59461 0.952389C7.64489 1.07529 7.67019 1.20696 7.66904 1.33974C7.66788 1.47252 7.6403 1.60374 7.58789 1.72575C7.53548 1.84775 7.4593 1.9581 7.36379 2.05034L2.41379 7.00034L7.36379 11.9503C7.54594 12.1389 7.64674 12.3915 7.64446 12.6537C7.64218 12.9159 7.53701 13.1668 7.35161 13.3522C7.1662 13.5376 6.91538 13.6427 6.65319 13.645C6.39099 13.6473 6.13839 13.5465 5.94979 13.3643L0.292787 7.70734Z"
                                fill="#2B2828" />
                        </svg>
                    </button>
                    <button class="btn btn-custom btn-custom-secondary slick-btn slick-next-custom" aria-label="Next">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="svg" fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.70832 6.29318C7.89579 6.48071 8.00111 6.73502 8.00111 7.00018C8.00111 7.26534 7.89579 7.51965 7.70832 7.70718L2.05132 13.3642C1.95907 13.4597 1.84873 13.5359 1.72672 13.5883C1.60472 13.6407 1.4735 13.6683 1.34072 13.6694C1.20794 13.6706 1.07626 13.6453 0.953366 13.595C0.83047 13.5447 0.718817 13.4705 0.624924 13.3766C0.531032 13.2827 0.456778 13.171 0.406498 13.0481C0.356217 12.9252 0.330915 12.7936 0.332069 12.6608C0.333223 12.528 0.360809 12.3968 0.413218 12.2748C0.465627 12.1528 0.541809 12.0424 0.637319 11.9502L5.58732 7.00018L0.637319 2.05018C0.455161 1.86158 0.354367 1.60898 0.356645 1.34678C0.358924 1.08458 0.464092 0.83377 0.6495 0.648362C0.834909 0.462954 1.08572 0.357785 1.34792 0.355507C1.61011 0.353228 1.86272 0.454022 2.05132 0.636181L7.70832 6.29318Z"
                                fill="#2B2828" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- browse-project  end -->
    <?php 
        $title = 'Hire Designers/Front-end Engineers'; 
        $desc = 'Transform your ideas into pixel-perfect digital experiences with our expert designers and front-end engineers. ';
        $buttonName = 'Request a Quote';
        $imageLink = "assets/images/about-us/hire-coder.webp";
        $imageAlt = "Request a Quote";
        include $path . 'components/hire-designers-engineers.php'; 
    ?>
    <?php $faq_tag = "about-us"; include $path . 'components/faq.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
    <?php include $path . 'includes/footer-additional-scripts.php'; ?>
    <?php include $path . 'includes/js.php'; ?>
    <?php include $path . 'components/registration-modal.php'; ?>
</body>

</html>