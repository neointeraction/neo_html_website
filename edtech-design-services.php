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
    <?php include $path.'includes/head-additional-scripts.php'; ?>
    <?php include $path.'includes/favicon.php'; ?>
    <?php include $path.'includes/css.php'; ?>
    <title>Edtech Design services in India | Edtech company | Neointeraction Design</title>
    <meta name="description"
        content="Are you looking for best Edtech UX/UI design services in India? Neointeraction Design is one of the best Edtech design company in India offering expert solutions." />
    <meta name="keywords" content="best Edtech UX/UI design services in India, Edtech design company" />
    <link rel="canonical" href="https://www.neointeraction.com/edtech-design-services" />
    <meta property="og:title" content="Edtech Design services in India | Edtech company | Neointeraction Design" />
    <meta property="og:description"
        content="Are you looking for best Edtech UX/UI design services in India? Neointeraction Design is one of the best Edtech design company in India offering expert solutions." />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="2500" />
    <meta property="og:image:height" content="1330" />
    <meta property="og:url" content="https://www.neointeraction.com/edtech-design-services" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="jDr4aVGcjUUHdNv8SD5bpXt6-kwDs5rDAbNqhXDrENY" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Edtech Design services in India | Edtech company | Neointeraction Design" />
    <meta name="twitter:description"
        content="Are you looking for best Edtech UX/UI design services in India? Neointeraction Design is one of the best Edtech design company in India offering expert solutions." />
    <meta name="twitter:image" content="" />
</head>

<body>
    <?php $page='landing';
 $events = [
    [
        'title' => '90+ Tuition App - Online Tutoring Platform',
        'description' => 'Enhancing the usability of a platform that delivers tuition to your doorstep for easy learning',
        'image' => 'projects/online-tutoring-app/tutoring-platform-homepage-banner-listing.jpg',
        'alt' => '90+ Tuition App - Online Tutoring Platform',
        'link' => 'online-tutoring-platform.php'
    ]]


    ?>
    <?php include $path.'includes/body-additional-scripts.php'; ?>
    <!-- navbar  -->
    <div class="navbar-container-block">
        <?php include $path.'components/navigation.php'; ?>
        <?php include $path.'components/whatsapp.php'; ?>
    </div>
    <!-- navbar  end  -->
    <!-- banner  -->
    <section class="contact-section section-padding">
        <div class="container">
            <div class="contact-container">
                <div class="row g-0">
                    <!-- Left Side -->
                    <div class="col-lg-6">
                        <div class="contact-left">
                            <h1 class="banner-title">

                                User-centric<br> Edtech Design <span class="highlight">Services in India</span>
                            </h1>

                            <div class="contact-info d-none d-md-block">
                                <p class="banner-subtext">We craft user-centric Edtech design solutions that make
                                    learning engaging and intuitive. From UX/UI design to product strategy, we help
                                    educational platforms deliver impactful digital experiences</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Edtech Design Enquiry</h2>


                            <form id="contactForm">
                                <div class="form-group">
                                    <label for="lp_name" class="form-label">Name</label>
                                    <input type="text" id="lp_name" name="lp_name" class="form-control custom-input"
                                        placeholder="Enter name" required>
                                    <div id="lp_name-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="lp_work_email" class="form-label">Work email</label>
                                    <input type="email" id="lp_work_email" name="lp_work_email"
                                        class="form-control custom-input" placeholder="Enter work email"
                                        pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                                    <div id="lp_email-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="lp_mobile_number" class="form-label">Mobile Number</label>
                                    <input type="tel" id="lp_mobile_number" name="lp_mobile_number"
                                        class="form-control custom-input"
                                        placeholder="Enter mobile number (e.g. +1234567890)" pattern="^\+?[0-9]{10,15}$"
                                        required oninput="this.value = this.value.replace(/[^0-9+]/g, '');">
                                    <div id="lp_mobile-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="lp_designation" class="form-label">Which service would you like to
                                        request?*</label>
                                    <input id="lp_designation" name="lp_designation" class="form-control custom-input"
                                        placeholder="Enter your service request here" required>
                                    <div id="lp_designation-error" class="text-danger" aria-live="polite"></div>
                                </div>
                                <div id="lp_contact-status"></div>
                                <div class="form-btn-container">
                                    <button type="button" class="btn btn-custom" id="lp_contact-submit-btn"
                                        onclick="submitLPForm()">
                                        Submit Enquiry
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="contact-info d-flex d-md-none">
                        <p class="banner-subtext">We craft user-centric Edtech design solutions that make learning
                            engaging and intuitive. From UX/UI design to product strategy, we help educational platforms
                            deliver impactful digital experiences</p>

                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- clients  -->
    <section class="clients section-padding">
        <div class="container">
            <h2 class="section-title">
                Clients we collaborated with
            </h2>
            <div class="scroll-client-container section-margin">
                <div class="d-flex flex-column flex-md-row scrolling-client-logos">
                    <?php 
                        $client_tag = 'edtech';
                    include 'components/clients.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- clients -- end  -->



    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">Why Choose Us for Your Edtech Product?</h2>
            <p class="body-text">At Neointeraction Design, we understand that your SaaS app or digital product is the
                cornerstone of your business. That's why we're committed to delivering the best product design services
                in India that not only meet but exceed your expectations. Here's why you should choose us to design your
                product:</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/engineering.svg" alt="qa" />
                            <h4 class="wwd-title">Design-based solutions</h4>
                            <p class="wwd-text">We're reshaping the landscape of education technology by integrating
                                innovative design approaches that enhance user experiences and drive meaningful learning
                                outcomes.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/pointer.svg" alt="value" />
                            <h4 class="wwd-title">Enabling a complete digital immersion</h4>
                            <p class="wwd-text">Our immersive digital solutions create an engaging learning environment
                                where students can fully immerse themselves in interactive educational experiences,
                                fostering deeper understanding and retention</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/a11y.svg" alt="optimise" />
                            <h4 class="wwd-title">Increasing accessibility and usability</h4>
                            <p class="wwd-text">We prioritize accessibility and usability in our designs to ensure that
                                learners of all abilities can easily navigate and engage with educational content,
                                promoting inclusivity and equal opportunities for learning</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/graduate.svg" alt="data" />
                            <h4 class="wwd-title">Designing an engaging simulation of a classroom</h4>
                            <p class="wwd-text">Through captivating design elements and interactive features, we
                                simulate the classroom experience in a digital environment, fostering collaboration,
                                communication, and active learning among students</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/atom.svg" alt="plane" />
                            <h4 class="wwd-title">Democratizing education</h4>
                            <p class="wwd-text">Our goal is to make quality education accessible to all, regardless of
                                geographical location or socioeconomic status, by leveraging technology to break down
                                barriers and expand access to learning resources</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/plane.svg" alt="team" />
                            <h4 class="wwd-title">Impactful solutions provided to our clients</h4>
                            <p class="wwd-text">We deliver tangible results by providing our clients with actionable
                                insights and innovative solutions that align with their goals, driving measurable
                                improvements in student engagement, satisfaction, and academic performance.</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

    <section class="business-success section-padding">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-end mb-2">
                <h2 class="section-title">
                    Our Services
                </h2>
                <button class="btn btn-custom mb-4" data-service="Edtech" data-bs-toggle="modal"
                    data-bs-target="#registerModal" style="width:fit-content;">
                    Start your project
                </button>
            </div>
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
                                Shape tomorrow's digital experiences with our UX design services, crafting seamless
                                interactions that align with your brand and business goals.
                            </p>
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
                                Revamp your product with our concise Product Design services, seamlessly blending
                                innovative aesthetics and functionality for standout, user-centric solutions.
                            </p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/dt.svg" alt="dt" />
                            </div>
                            <h4 class="title">UX Audit</h4>
                            <p class="description">
                                Revolutionizing design through a seamless blend of creativity and strategic innovation,
                                enhancing overall aesthetic and functionality.
                            </p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/fd.svg" alt="fd" />
                            </div>
                            <h4 class="title">UI Engineering</h4>
                            <p class="description">
                                Merging design and technology for dynamic and precise user interfaces, optimizing the
                                digital experience.
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
                Recent Edtech Design Project
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
                            <img src="<?php echo $path; ?>assets/images/projects/client-logos/90-logo.svg" alt="mega" />
                            <div class="quote-icon-right d-block d-md-none"></div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="quote-icon d-none d-md-block"></div>
                        <p class="blog-quote-text">The visual appeal and the new tutoring experience led us to overcome
                            the usability issues and we’re very happy with the result the design team delivered.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- demo-video  -->
    <section class="demo-video section-padding">
        <div class="container">
            <h2 class="section-title">Our Process</h2>
            <div class="video-container section-margin">

                <iframe width="100%" height="650" src="https://www.youtube.com/embed/SSTsj85MzGU?si=_lPo5JZDsP3tnIZR"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="border-radius: 0;"></iframe>
            </div>
        </div>
    </section>


    <?php include $path.'components/hire-designers-engineers.php'; ?>
    <!-- testimonials  -->
    <?php $faq_tag = 'edutech'; include 'components/faq.php'; ?>
    <!-- testimonials -- end  -->
    <div class="mb-4 mb-md-0"></div>
    <?php include $path . 'components/registration-modal.php'; ?>
    <script src="<?php echo $path; ?>assets/js/lp-enquiry.js"></script>

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