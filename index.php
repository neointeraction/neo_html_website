<!DOCTYPE html>
<html lang="en">
<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="<?php echo $path; ?>assets/css/fonts.css" rel="stylesheet">
    <?php include $path . 'includes/css.php'; ?>
    <title>UI UX Design Agency in India | UI UX Design Company | Neointeraction Design</title>
    <meta name="description" content="Looking for the best UI UX design agency in India? Neointeraction Design is a trusted UI UX design company in India, creating innovative digital products and solutions." >
    <meta name="keywords" content=" UI UX design agency in India , ui ux design company in India,web design, UI/UX, digital transformation, web development, neointeraction" >
    <link rel="canonical" href="<?php echo $base_url; ?>blog" >
    <meta property="og:title" content="UI UX Design Agency in India | UI UX Design Company | Neointeraction Design" >
    <meta property="og:description" content="Looking for the best UI UX design agency in India? Neointeraction Design is a trusted UI UX design company in India, creating innovative digital products and solutions." >
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/neointeraction-home-og.webp" >
    <meta property="og:image:width" content="1200" >
    <meta property="og:image:height" content="630" >
    <meta property="og:url" content="<?php echo $base_url; ?>blog" >
    <meta property="og:site_name" content="Neointeraction Design" >
    <meta property="og:type" content="website" >
    <meta name="google-site-verification" content="" >
    <meta name="twitter:card" content="summary_large_image" >
    <meta name="twitter:title" content="Neointeraction UX Designs & Front-End Development Blogs | Insights & Innovations" >
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/neointeraction-home-og.webp" >
    <meta name="twitter:description" content="Looking for the best UI UX design agency in India? Neointeraction Design is a trusted UI UX design company in India, creating innovative digital products and solutions." >
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/neointeraction-home-og.webp" >
</head>

<body>
    <?php
    $page = 'Home';
    ?>
    <?php include $path . 'includes/body-additional-scripts.php'; ?>
    <div class="navbar-container-block">
        <?php include $path . 'components/navigation.php'; ?>
        <?php include $path . 'components/whatsapp.php'; ?>
    </div>
    <main role="main">
 <?php include $path . 'components/banner.php'; ?>
    <section class="business-success">
        <div class="container">
            <h2 class="section-title pt-0">
                Our Services
            </h2>
            <div class="bs-card-section section-margin">
                <div class="row justify-content-center">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/ux.svg" alt="UX design icon" width="64" height="64">
                            </div>
                            <h3 class="title">UX Design</h3>
                            <p class="description">
                                Delivering seamless experiences that speak louder than words.
                            </p>
                            <button class="btn btn-custom btn-custom-secondary hire-us-btn" data-service="Home page" data-bs-toggle="modal" data-bs-target="#registerModal">
                                Hire Us
                            </button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/pd.svg" alt="Product design icon" width="64" height="64">
                            </div>
                            <h3 class="title">Product Design</h3>
                            <p class="description">
                                Shaping ideas into tangible user centric design solutions
                            </p>
                            <button class="btn btn-custom btn-custom-secondary hire-us-btn" data-service="Home page" data-bs-toggle="modal" data-bs-target="#registerModal">
                                Hire Us
                            </button>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/dt.svg" alt="UX audit icon" width="64" height="64">
                            </div>
                            <h3 class="title">UX Audit</h3>
                            <p class="description">
                                Crafting revolutionary aesthetics that redefine user interaction.
                            </p>
                            <button class="btn btn-custom btn-custom-secondary hire-us-btn" data-service="Home page" data-bs-toggle="modal"
                                data-bs-target="#registerModal">
                                Hire Us
                            </button>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/fd.svg" alt="Frontend development icon" width="64" height="64">
                            </div>
                            <h3 class="title">Frontend Development</h3>
                            <p class="description">
                                Bridging creativity and code for pixel-perfect user
                                interfaces.
                            </p>
                            <button class="btn btn-custom btn-custom-secondary hire-us-btn" data-service="Home page" data-bs-toggle="modal"
                                data-bs-target="#registerModal">
                                Hire Us
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    <div class="count-number" data-target="1" data-type="b">0</div>
                    <div class="count-label"> lives impacted</div>
                </div>
                <!-- 10+ countries impacted -->
                <div class="col-6 col-md-3 count-up-item mt-md-0">
                    <div class="count-number" data-target="10">0</div>
                    <div class="count-label">countries impacted</div>
                </div>
            </div>
        </div>
    </section>
    <section class="clients section-padding">
        <div class="container">
            <h2 class="section-title">
                Clients we've partnered with
            </h2>
            <div class="scroll-container section-margin">
                <div class="scrolling-logos">
                    <?php $client_tag = 'home';
                    include 'components/clients.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- clients end  -->
    <!-- testimonials  -->
    <?php include 'components/testimonial.php'; ?>
    <!-- testimonials end  -->
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
    <!-- browse-project end -->
    <!-- demo-video  -->
    <section class="demo-video section-padding">
        <div class="container">
            <h2 class="section-title">Get to know us and what we do</h2>
            <div class="video-container section-margin">
                <iframe class="video-iframe" height="650" style="width:100%;border:0;border-radius: 0;" src="https://www.youtube-nocookie.com/embed/S-gxMxp6tDU?si=3JEtJ7rMe15mKX8f" title="YouTube video player"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
            </div>
        </div>
    </section>


    <?php $faq_tag = 'home'; include $path . 'components/faq.php'; ?>

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
                                    <img src="assets/images/events/workshop-on-accelerating-design-decisions.webp" alt="UX design workshop by Neointeraction Design" class="img-fluid project-image" width="580" height="284">
                                </div>
                                <div class="col-lg-6 d-flex flex-column justify-content-center project-content">
                                    <h2 class="project-title">
                                        Workshop on Accelerating Design decisions
                                    </h2>
                                    <p class="project-description">
                                        A one-day deep dive into the world of UX, where we had the
                                        opportunity to enrich UX Leads and Product Designers to
                                        elevate their product experiences and uplift their design
                                        career path.
                                    </p>

                                    <button class="btn btn-custom read-more-btn" onclick="window.location.href='blogs/takeaways-from-our-1-day-ux-design-workshop'">
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
    <!-- design-events end -->



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
    <!-- recent-blogs end  -->


    <?php 
        $title = 'Submit Enquiry'; 
        $desc = 'Excited to connect! Share what you’re looking for and we’ll guide you every step of the way!';
        $buttonName = 'Contact Us';
        $imageLink = "assets/images/homepage-contact-us.jpg";
        $imageAlt = "Contact us";
        include $path . 'components/hire-designers-engineers.php'; 
    ?>
    </main>
    <?php include $path . 'components/footer.php'; ?>
    <?php include $path . 'includes/footer-additional-scripts.php'; ?>
    <?php include $path . 'includes/js.php'; ?>
    <?php include $path . 'components/registration-modal.php'; ?>


</body>

</html>
