<?php
// Remove PHP form handling since we're using Google Forms
$show_thank_you = false; // Always show the main form
?>

<?php
// Include tracking functions
include_once 'includes/tracking-functions.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path.'includes/favicon.php'; ?>
    <?php include $path.'includes/css.php'; ?>
    <?php include $path.'includes/head-additional-scripts.php'; ?>
    <title>Expert UX Design Audit in India | Neointeraction Design | Contact Us</title>
    <meta name="description"
        content="Boost your digital presence with our UX Design Audit services in India. Uncover actionable insights for user experiences and drive business growth." />
    <meta name="keywords" content="UX Design Audit in India" />
    <link rel="canonical" href="https://www.neointeraction.com/blog" />
    <meta property="og:title" content="Expert UX Design Audit in India | Neointeraction Design | Contact Us" />
    <meta property="og:description"
        content="Boost your digital presence with our UX Design Audit services in India. Uncover actionable insights for user experiences and drive business growth." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/neo-home-ux-research-brand.jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Expert UX Design Audit in India | Neointeraction Design | Contact Us" />
    <meta name="twitter:description"
        content="Boost your digital presence with our UX Design Audit services in India. Uncover actionable insights for user experiences and drive business growth." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/neo-home-ux-research-brand.jpeg" />
</head>

<body>
    <?php $page='blog';
    $events = [
        [
            'title' => 'UX Audit for a Health and Wellness Brand',
            'description' => 'Health and wellness site redesigned through UX audit to enhance user engagement, accessibility, and brand reach.',
            'image' => 'projects/digital-experience/mega-we-care-homepage-banner-listing.jpg',
            'alt' => 'UX Audit for a Health and Wellness Brand',
            'link' => 'digital-health-wellness.php'
        ]]
    ?>
    <?php include $path.'includes/body-additional-scripts.php'; ?>
    <!-- navbar  -->
    <div class="navbar-container-block">
        <?php include $path.'components/navigation.php'; ?>
        <?php include $path.'components/whatsapp.php'; ?>
    </div>
    <!-- navbar -- end  -->
    <!-- banner  -->
    <section class="contact-section section-padding">
        <div class="container">
            <div class="contact-container">
                <div class="row g-0">
                    <!-- Left Side -->
                    <div class="col-lg-6">
                        <div class="contact-left">
                            <h1 class="banner-title">
                                Unlock Full Potential <br>with Free <span class="highlight">UX Audit
                            </h1>

                            <div class="contact-info">
                                <p class="banner-subtext">Unlock your web and mobile apps’ potential with expert UX
                                    design audits. Identify issues, optimize experiences, and drive growth with
                                    data-driven insights.</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Book your Free UX Audit</h2>


                            <form id="contactForm">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" name="name" class="form-control custom-input"
                                        placeholder="Enter name" required>
                                    <div id="name-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="work_email" class="form-label">Work email</label>
                                    <input type="email" id="work_email" name="work_email"
                                        class="form-control custom-input" placeholder="Enter work email"
                                        pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                                    <div id="email-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="mobile_number" class="form-label">Mobile Number</label>
                                    <input type="tel" id="mobile_number" name="mobile_number"
                                        class="form-control custom-input"
                                        placeholder="Enter mobile number (e.g. +1234567890)" pattern="^\+?[0-9]{10,15}$"
                                        required oninput="this.value = this.value.replace(/[^0-9+]/g, '');">
                                    <div id="mobile-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input id="designation" name="designation" class="form-control custom-input"
                                        placeholder="Enter your designation here" required>
                                    <div id="designation-error" class="text-danger" aria-live="polite"></div>
                                </div>
                                <div id="contact-status"></div>
                                <div class="form-btn-container">
                                    <button type="button" class="btn btn-custom" id="contact-submit-btn"
                                        onclick="submitUxAuditForm()">
                                        Get Started Now
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner -- end  -->




    <!-- clients  -->
    <section class="clients section-padding">
        <div class="container">
            <h2 class="section-title">
                Clients we’ve partnered with
            </h2>
            <div class="scroll-container section-margin">
                <div class="scrolling-logos">
                    <?php include 'components/clients.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- clients -- end  -->

    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">Why Companies chose us for their UX Design Audit ?</h2>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/target.svg" alt="ob" />
                            <h4 class="wwd-title">Understand Business </h4>
                            <p class="wwd-text">Neointeraction’s UX/UI experts engage with stakeholders in 1-on-1
                                sessions to align on business goals.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/search.svg" alt="cm" />
                            <h4 class="wwd-title">Hueristic Evaluation</h4>
                            <p class="wwd-text">We assess your website/app using design principles by tracing the user
                                journey.</p>
                        </div>

                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/new.svg" alt="healthcare" />
                            <h4 class="wwd-title">Audit reports</h4>
                            <p class="wwd-text">We create a report highlighting hidden UX/UI gaps affecting user
                                engagement.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/bulb.svg" alt="iot" />
                            <h4 class="wwd-title">Suggest Solutions</h4>
                            <p class="wwd-text">We provide actionable design recommendations, quick fixes, and strategic
                                insights in a detailed report.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="business-success section-padding">
        <div class="container">
            <h2 class="section-title">
                Why conduct a UX Audit ?
                <div class="bs-card-section section-margin">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="custom-card">
                                <div class="icon-container">
                                    <img src="<?php echo $path; ?>assets/images/funnel.svg" alt="Low conversion" />
                                </div>
                                <h4 class="title">Low conversion rates</h4>
                                <p class="description">
                                    Enhance user journey to boost conversion rates effectively.
                                </p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="custom-card">
                                <div class="icon-container">
                                    <img src="<?php echo $path; ?>assets/images/hand-pointer.svg"
                                        alt="Uncover Usability" />
                                </div>
                                <h4 class="title">Uncover Usability Issues</h4>
                                <p class="description">
                                    Identify design flaws to improve usability and user satisfaction.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="custom-card">
                                <div class="icon-container">
                                    <img src="<?php echo $path; ?>assets/images/a11y.svg" alt="Accessibility" />
                                </div>
                                <h4 class="title">Ensure Accessibility</h4>
                                <p class="description">
                                    Design inclusively to provide equal access for every user.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="custom-card">
                                <div class="icon-container">
                                    <img src="<?php echo $path; ?>assets/images/file.svg" alt="Data-Driven" />
                                </div>
                                <h4 class="title">Data-Driven Decisions</h4>
                                <p class="description">
                                    Leverage insights to optimize strategies and outcomes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>


    <section class="engagement-modal section-padding">
        <div class="container">
            <h2 class="section-title">
                Recent Ux Project
            </h2>
            <div class="engagement-modal-block section-margin">
                <?php foreach ($events as $event) { ?>
                <div class="project-block-item">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="project-card d-lg-flex">
                                <div class="col-lg-6 p-0 project-image-container">
                                    <img src="<?php echo $path; ?>assets/images/<?php echo $event['image']; ?>"
                                        alt="<?php echo $event['alt']; ?>" class="img-fluid project-image" width="100%"
                                        height="auto" />
                                </div>
                                <div class="col-lg-6 d-flex flex-column justify-content-center project-content">
                                    <h2 class="project-title">
                                        <?php echo $event['title']; ?>
                                    </h2>
                                    <p class="project-description">
                                        <?php echo $event['description']; ?>
                                    </p>

                                    <div class="pb-action-btn mt-2">
                                        <button class="btn btn-custom">
                                            Download Case Study
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="blog-quote-block project-quote-block">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-3">
                        <div class="p-logo d-flex align-items-center justify-content-start justify-content-md-center">
                            <img src="<?php echo $path; ?>assets/images/projects/client-logos/megawecare-logo.svg" alt="mega" />
                            <div class="quote-icon-right d-block d-md-none"></div>
                        </div>
                    </div>
                    <div class="col-md-9">
                    <div class="quote-icon d-none d-md-block"></div>
                        <p class="blog-quote-text">Everything related to project management was good.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="demo-video section-padding">
        <div class="container">
            <h2 class="section-title">Our Process</h2>
            <div class="video-container section-margin">
                <iframe class="video-iframe" width="100%" height="650"
                    src="https://www.youtube.com/embed/AbRHZ6M6gwM?si=yP7lOJJA_2PAnzTh" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="border-radius: 0;"></iframe>
            </div>
        </div>
    </section>

    <section class="industry-experience section-padding mb-5">
        <div class="container">
            <h2 class="section-title">Industry Experience</h2>
            <p class="body-text">Neointeraction Design is an expert frontend development company in India that specialize in implementing pixel-perfect UI designs across diverse industries, driving successful outcomes for enterprise solutions, startup ventures, and B2C products enhancing user experiences and boosts business performance.</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/ob.svg" alt="ob" />
                            <h4 class="wwd-title">Online Banking</h4>
                            <p class="wwd-text">Revolutionizing financial interactions with intuitive interfaces and secure transactions.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/cm.svg" alt="cm" />
                            <h4 class="wwd-title">Capital Market</h4>
                            <p class="wwd-text">Empowering investors with data-driven insights and intuitive trading platforms.</p>
                        </div>

                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/healthcare.svg" alt="healthcare" />
                            <h4 class="wwd-title">Healthcare</h4>
                            <p class="wwd-text">Redefining patient care through user-centric healthcare platforms, enhancing wellness journeys. </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/iot.svg" alt="iot" />
                            <h4 class="wwd-title">IoT</h4>
                            <p class="wwd-text">Connecting the world through seamless digital ecosystems, powering smarter user experiences.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/th.svg" alt="th" />
                            <h4 class="wwd-title">Travel and Hospitality</h4>
                            <p class="wwd-text">Crafting memorable customer digital journeys, from booking to exploration, for unforgettable experiences.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/es.svg" alt="es" />
                            <h4 class="wwd-title">Enterprise Solutions</h4>
                            <p class="wwd-text">Tailored digital solutions that streamline operations and drive scalable growth.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/ob.svg" alt="ob" />
                            <h4 class="wwd-title">Startup Ventures</h4>
                            <p class="wwd-text">Driving digital innovation with agile solutions that disrupt markets and fuel rapid growth.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/es.svg" alt="es" />
                            <h4 class="wwd-title">B2C</h4>
                            <p class="wwd-text">Enhancing consumer experiences with engaging and intuitive digital platforms</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>




    <?php 
        $title = "Start Your Consultation";
        $desc = "Igniting success through passion-fueled collaboration.Igniting success through passion-fueled collaboration. ";
        $buttonName = "Get a Free consultation";
        include $path.'components/enquiry-modal.php';
     ?>
    <!-- testimonials  -->
    <?php $faq_tag = 'ux-audit'; include 'components/faq.php'; ?>
    <!-- testimonials -- end  -->
    <?php include $path . 'components/registration-modal.php'; ?>
    <?php include $path.'components/footer.php'; ?>
    <?php include $path.'includes/footer-additional-scripts.php'; ?>
    <?php include $path.'includes/js.php'; ?>
    <script src="<?php echo $path; ?>assets/js/events.js"></script>

    <script>
    // Get tracking data from PHP and pass to events.js
    const trackingData = <?php echo getTrackingDataJson(); ?>;
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof window.trackingData !== 'undefined') {
            window.trackingData = trackingData;
        }
    });
    </script>
</body>

</html>
