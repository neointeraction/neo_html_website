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
        content="Discover the latest trends and expert insights in UI/UX designs on our blog. Stay informed and inspired with our informative articles and tips. Explore now!" />
    <meta name="keywords" content="web design, UI/UX, digital transformation, web development, neointeraction" />
    <link rel="canonical" href="https://www.neointeraction.com/blog" />
    <meta property="og:title" content="Expert UX Design Audit in India | Neointeraction Design | Contact Us" />
    <meta property="og:description"
        content="Boost your digital presence with our  UX Design Audit services in India. Uncover actionable insights for user experiences and drive business growth" />
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
        content="Boost your digital presence with our  UX Design Audit services in India. Uncover actionable insights for user experiences and drive business growth" />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/neo-home-ux-research-brand.jpeg" />
</head>

<body>
    <?php $page='blog';
    $events = [
        [
            'title' => 'Boost Banking Platform Experience with UX Audits',
            'description' => 'Comprehensive UX audit methods for banking apps to enhance security, streamline transactions, and elevate overall customer satisfaction.',
            'image' => 'micro-frontend-architecture.jpeg',
            'alt' => 'Boost Banking Platform Experience with UX Audits',
            'link' => 'micro-frontend-architecture-driving-user-experience.php'
        ],
        [
            'title' => 'Proven UX Audit Methods for Healthcare Platforms',
            'description' => 'Strategic UX audits for healthcare platforms to improve accessibility, patient engagement, and operational efficiency.',
            'image' => 'effective-methods-to-accelerate-design-decisions.jpeg',
            'alt' => 'Proven UX Audit Methods for Healthcare Platforms',
            'link' => 'effective-methods-to-accelerate-design-decisions.php'
        ],]
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
                                <p class="banner-subtext">Discover Hidden Opportunities for Big Improvements!</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">UX Audit Enquiry Form</h2>


                            <form id="contactForm">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" name="name" class="form-control custom-input" placeholder="Enter name" required>
                                    <div id="name-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="work_email" class="form-label">Work email</label>
                                    <input type="email" id="work_email" name="work_email" class="form-control custom-input" placeholder="Enter work email"
                                        pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                                    <div id="email-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="mobile_number" class="form-label">Mobile Number</label>
                                    <input type="tel" id="mobile_number" name="mobile_number" class="form-control custom-input" placeholder="Enter mobile number (e.g. +1234567890)"
                                        pattern="^\+?[0-9]{10,15}$" required oninput="this.value = this.value.replace(/[^0-9+]/g, '');">
                                    <div id="mobile-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input id="designation" name="designation" class="form-control custom-input" placeholder="Enter your designation here" required>
                                    <div id="designation-error" class="text-danger" aria-live="polite"></div>
                                </div>
                                <div id="contact-status"></div>
                                <div class="form-btn-container">
                                    <button type="button" class="btn btn-custom" id="contact-submit-btn" onclick="submitUxAuditForm()">
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


    <section class="business-success section-padding">
        <div class="container">
            <h2 class="section-title">
                Why conduct a UX Audit ?
                <div class="bs-card-section section-margin">
                    <div class="row justify-content-center">
                        <!-- Card 1 -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="custom-card">
                                <div class="icon-container">
                                    <img src="<?php echo $path; ?>assets/images/ux.svg" alt="ux" />
                                </div>
                                <h4 class="title">Get mentorship</h4>
                                <p class="description">
                                    Real user insights to understand needs and pain points.
                                </p>
                                <button class="btn btn-custom btn-custom-secondary">
                                    Hire Us
                                </button>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="custom-card">
                                <div class="icon-container">
                                    <img src="<?php echo $path; ?>assets/images/pd.svg" alt="pd" />
                                </div>
                                <h4 class="title">Cross functional team</h4>
                                <p class="description">
                                    Analyze interactions for actionable insights.
                                </p>
                                <button class="btn btn-custom btn-custom-secondary">
                                    Hire Us
                                </button>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="custom-card">
                                <div class="icon-container">
                                    <img src="<?php echo $path; ?>assets/images/dt.svg" alt="dt" />
                                </div>
                                <h4 class="title">Functional design </h4>
                                <p class="description">
                                    Enhancing aesthetics and usability.
                                </p>
                                <button class="btn btn-custom btn-custom-secondary">
                                    Hire Us
                                </button>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="custom-card">
                                <div class="icon-container">
                                    <img src="<?php echo $path; ?>assets/images/fd.svg" alt="fd" />
                                </div>
                                <h4 class="title">Ignite your Potential</h4>
                                <p class="description">
                                    Gain Practical Insights in Transformative Workshops.
                                </p>
                                <button class="btn btn-custom btn-custom-secondary">
                                    Hire Us
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>


    <section class="engagement-modal section-padding">
        <div class="container">
            <h2 class="section-title">
                UX Audit for Industries
            </h2>
            <div class="engagement-modal-block section-margin">
                <?php foreach ($events as $event) { ?>
                <div class="project-block-item">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="project-card d-lg-flex">
                                <div class="col-lg-6 p-0 project-image-container">
                                    <img src="<?php echo $path; ?>assets/images/events/<?php echo $event['image']; ?>" alt="<?php echo $event['alt']; ?>"
                                        class="img-fluid project-image" width="100%" height="auto" />
                                </div>
                                <div class="col-lg-6 d-flex flex-column justify-content-center project-content">
                                    <h2 class="project-title">
                                        <?php echo $event['title']; ?>
                                    </h2>
                                    <p class="project-description">
                                        <?php echo $event['description']; ?>
                                    </p>
                                    <button class="btn btn-custom btn-custom-secondary em-btn" onclick="location.href='#';" style="cursor: pointer;">
                                        Reach Us Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>


    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">How we conduct UX Design Audit ?</h2>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/target.svg" alt="ob" />
                            <h4 class="wwd-title">Understand Business </h4>
                            <p class="wwd-text">Neointeraction’s UX/UI experts engage with stakeholders in 1-on-1 sessions to align on business goals.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/search.svg" alt="cm" />
                            <h4 class="wwd-title">Hueristic Evaluation</h4>
                            <p class="wwd-text">We assess your website/app using design principles by tracing the user journey.</p>
                        </div>

                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/new.svg" alt="healthcare" />
                            <h4 class="wwd-title">Audit reports</h4>
                            <p class="wwd-text">We create a report highlighting hidden UX/UI gaps affecting user engagement.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/bulb.svg" alt="iot" />
                            <h4 class="wwd-title">Suggest Solutions</h4>
                            <p class="wwd-text">We provide actionable design recommendations, quick fixes, and strategic insights in a detailed report.</p>
                        </div>
                    </div>

                </div>
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
                    <?php include 'components/clients.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- clients -- end  -->

    <!-- testimonials  -->
    <?php include 'components/testimonial.php'; ?>
    <!-- testimonials -- end  -->
    <?php include $path.'components/free-consultation.php'; ?>
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
