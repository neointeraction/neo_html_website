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
    <title>Edtech Design services in India | Edtech company | Neointeraction Design </title>
  <meta name="description" content="Are you looking for best Edtech UX/UI design services in India? Neointeraction Design is one of the best Edtech design company in India offering expert solutions."/>
  <link rel="canonical" href="https://www.neointeraction.com/edtech-design-services"/>
  <meta property="og:title" content="Best Edtech design services in India |  Neointeraction Design | Contact now"/>
  <meta property="og:description" content="Looking for top Edtech design services in India? Neointeraction Design stands out as one of the best Edtech companies in the country, providing expert solutions tailored to your needs."/>
  <meta property="og:image" content="https://static.wixstatic.com/media/380122_fbdf5a539779484da4f06f782e54f0a7%7Emv2.png/v1/fit/w_2500,h_1330,al_c/380122_fbdf5a539779484da4f06f782e54f0a7%7Emv2.png"/>
  <meta property="og:image:width" content="2500"/>
  <meta property="og:image:height" content="1330"/>
  <meta property="og:url" content="https://www.neointeraction.com/edtech-design-services"/>
  <meta property="og:site_name" content="Neointeraction Design"/>
  <meta property="og:type" content="website"/>
  <meta name="google-site-verification" content="jDr4aVGcjUUHdNv8SD5bpXt6-kwDs5rDAbNqhXDrENY"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="Best Edtech design services in India |  Neointeraction Design | Contact now"/>
  <meta name="twitter:description" content="Looking for top Edtech design services in India? Neointeraction Design stands out as one of the best Edtech companies in the country, providing expert solutions tailored to your needs."/>
  <meta name="twitter:image" content="https://static.wixstatic.com/media/380122_fbdf5a539779484da4f06f782e54f0a7%7Emv2.png/v1/fit/w_2500,h_1330,al_c/380122_fbdf5a539779484da4f06f782e54f0a7%7Emv2.png"/>
</head>

<body>
    <?php $page='landing';
 
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

                            User-centric<br> Edtech Design <span class="highlight">Services in India</span>
                            </h1>

                            <div class="contact-info">
                                <p class="banner-subtext">need content hereneed content hereneed content hereneed content hereneed content hereneed content hereneed content hereneed content hereneed content hereneed content hereneed content hereneed content here</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Edtech Design Enquiry</h2>


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
                                    <label for="designation" class="form-label">Which service would you like to
                                        request?*</label>
                                    <input id="designation" name="designation" class="form-control custom-input"
                                        placeholder="Enter your service request here" required>
                                    <div id="designation-error" class="text-danger" aria-live="polite"></div>
                                </div>
                                <div id="contact-status"></div>
                                <div class="form-btn-container">
                                    <button type="button" class="btn btn-custom" id="contact-submit-btn"
                                        onclick="submitUxAuditForm()">
                                        Submit Enquiry
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

    <section class="section-padding">
        <div class="container">
            <div class="contact-info">
            <p class="banner-subtext">Neointeraction Design is a leading Edtech design company in India, revolutionizing education technology sector through cutting-edge UX/UI design. Our tailored solutions empower educators and learners alike, fostering engagement and driving results. With a focus on simplicity and innovation, we're shaping the future of education, one digital experience at a time.
            </p>
    </div>
        </div>
    </section>


    <section class="contact-section section-padding">
        <div class="container">
            <div class="row w-100">
                <div class="col-6 col-md-3 count-up-item">
                    <h3 class="percent__total">82%</h3> 
                    <p class="count-label">years expertise</p>
                </div>
                <div class="col-6 col-md-3 count-up-item">
                    <h3 class="percent__total">90+</h3>
                    <p class="count-label">Profits</p>
                </div>
                <div class="col-6 col-md-3 count-up-item">
                    <h3 class="percent__total">96%</h3>
                    <p class="count-label">New Customer Acquisition
                    </p>
                </div>
                <div class="col-6 col-md-3 count-up-item">
                    <h3 class="percent__total">4.2</h3>
                    <p class="count-label">Rated on playstore
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>  


    <section class="engagement-modal section-padding">
        <div class="container">
            <div class="project__header">
                <h2 class="section-title">
                Ed tech products we have worked on
                </h2>
                <a href="<?php echo $path; ?>projects.php">
                    View All
                </a>
            </div>
            <div class="engagement-modal-block section-margin">
                <?php 
                $limit = 2;

                $selectedTag = 'Ed Tech';

                include $path . include 'projects/project-listing.php'; ?>
            </div>
        </div>
    </section>

    

    <!-- clients  -->
    <section class="clients section-padding">
        <div class="container">
            <h2 class="section-title">
            Clients we collaborated with
            </h2>
            <div class="scroll-container section-margin">
                <div class="scrolling-logos">
                    <?php include 'components/clients.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- clients -- end  -->

        <!-- testimonials  -->
        <?php include 'components/testimonial.php'; ?>
    <!-- testimonials -- end  -->


    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">Why Choose Us for Your Edtech Product?</h2>
            <p class="body-text">At Neointeraction Design, we understand that your SaaS app or digital product is the cornerstone of your business. That's why we're committed to delivering the best product design services in India that not only meet but exceed your expectations. Here's why you should choose us to design your product:</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/engineering.svg" alt="qa" />
                            <h4 class="wwd-title">Design-based solutions</h4>
                            <p class="wwd-text">We're reshaping the landscape of education technology by integrating innovative design approaches that enhance user experiences and drive meaningful learning outcomes.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/pointer.svg" alt="value" />
                            <h4 class="wwd-title">Enabling a complete digital immersion</h4>
                            <p class="wwd-text">Our immersive digital solutions create an engaging learning environment where students can fully immerse themselves in interactive educational experiences, fostering deeper understanding and retention</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/a11y.svg" alt="optimise" />
                            <h4 class="wwd-title">Increasing accessibility and usability</h4>
                            <p class="wwd-text">We prioritize accessibility and usability in our designs to ensure that learners of all abilities can easily navigate and engage with educational content, promoting inclusivity and equal opportunities for learning</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/graduate.svg" alt="data" />
                            <h4 class="wwd-title">Designing an engaging simulation of a classroom</h4>
                            <p class="wwd-text">Through captivating design elements and interactive features, we simulate the classroom experience in a digital environment, fostering collaboration, communication, and active learning among students</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/atom.svg" alt="plane" />
                            <h4 class="wwd-title">Democratizing education</h4>
                            <p class="wwd-text">Our goal is to make quality education accessible to all, regardless of geographical location or socioeconomic status, by leveraging technology to break down barriers and expand access to learning resources</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/plane.svg" alt="team" />
                            <h4 class="wwd-title">Impactful solutions provided to our clients</h4>
                            <p class="wwd-text">We deliver tangible results by providing our clients with actionable insights and innovative solutions that align with their goals, driving measurable improvements in student engagement, satisfaction, and academic performance.</p>
                        </div>
                    </div>
                 


                </div>
            </div>
        </div>
    </section>

    <section class="business-success section-padding">
        <div class="container">
            <h2 class="section-title">
                Our Services
            </h2>
            <div class="bs-card-section section-margin our-services">
                <div class="row justify-content-center">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-6 col-lg-6 pb-4">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="<?php echo $path; ?>assets/images/services/ux-design.svg" alt="ux" />
                            </div>
                            <h4 class="title">UX Design</h4>
                            <p class="description">
                            Shape tomorrow's digital experiences with our UX design services, crafting seamless interactions that align with your brand and business goals.
                            </p>
                            <div class="project-tags mb-2">
                                <span class="badge">User Journey Mapping</span>
                                <span class="badge">Persona Development</span>
                                <span class="badge">IA Validation</span>
                                <span class="badge">Heuristic Evaluation</span>
                                <span class="badge">User Research</span>
                                <span class="badge">Wireframing</span>
                            </div>
                            <button class="btn btn-custom btn-custom-secondary hire-us-btn" data-service="UX Design" data-bs-toggle="modal" data-bs-target="#registerModal">
                                Hire Us
                            </button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-md-6 col-lg-6 pb-4">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="<?php echo $path; ?>assets/images/services/product-design.svg" alt="ux" />
                            </div>
                            <h4 class="title">Product Design</h4>
                            <p class="description">
                            Revamp your product with our concise Product Design services, seamlessly blending innovative aesthetics and functionality for standout, user-centric solutions.
                            </p>
                            <div class="project-tags mb-2">
                                <span class="badge">Product Vision</span>
                                <span class="badge">Product Research</span>
                                <span class="badge">Structure Ideas</span>
                                <span class="badge">Agile Design Sprints</span>
                                <span class="badge">Rapid Prototyping</span>
                            </div>
                            <button class="btn btn-custom btn-custom-secondary hire-us-btn" data-service="Product Design" data-bs-toggle="modal" data-bs-target="#registerModal">
                                Hire Us
                            </button>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="<?php echo $path; ?>assets/images/services/ux-audit.svg" alt="ux" />
                            </div>
                            <h4 class="title">UX Audit</h4>
                            <p class="description">
                            Revolutionizing design through a seamless blend of creativity and strategic innovation, enhancing overall aesthetic and functionality.
                            </p>
                            <div class="project-tags mb-2">
                                <span class="badge">Achieving Human-Centric UX Heuristic Evaluation</span>
                                <span class="badge">Setting a Design Foundation </span>
                                <span class="badge">Design Strategy Building</span>
                                <span class="badge">Design Documentation</span>
                                <span class="badge">UX and UI Mastery</span>
                            </div>
                            <button class="btn btn-custom btn-custom-secondary hire-us-btn" data-service="Digital Transformation" data-bs-toggle="modal"
                                data-bs-target="#registerModal">
                                Hire Us
                            </button>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="<?php echo $path; ?>assets/images/services/ui-engineering.svg" alt="ux" />
                            </div>
                            <h4 class="title">UI Engineering</h4>
                            <p class="description">
                            Merging design and technology for dynamic and precise user interfaces, optimizing the digital experience.
                            </p>
                            <div class="project-tags mb-2">
                                <span class="badge">Dev-Ready UI Transition</span>
                                <span class="badge">Business Flow Validation</span>
                                <span class="badge">Dynamic React Component Construction</span>
                                <span class="badge">Crafting Interactive User Journeys</span>
                            </div>
                            <button class="btn btn-custom btn-custom-secondary hire-us-btn" data-service="Frontend Development" data-bs-toggle="modal"
                                data-bs-target="#registerModal">
                                Hire Us
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include $path.'components/hire-designers-engineers.php'; ?>
    <!-- testimonials  -->
    <?php $faq_tag = 'edutech'; include 'components/faq.php'; ?>
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