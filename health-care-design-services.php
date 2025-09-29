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
    <title>Healthcare Design India | Health care design services | Neointeraction Design </title>
  <meta name="description" content="Expert Healthcare Design India: Innovative solutions for modern medical facilities. Contact us for best UX/UI design  solutions."/>
  <link rel="canonical" href="https://www.neointeraction.com/health-care-design-services"/>
  <meta property="og:title" content="Best Healthcare Design India | Neointeraction Design | Contact Us"/>
  <meta property="og:description" content="Expert Healthcare UX Design in India: Pioneering solutions for modern medical facilities. Get in touch for optimal solutions."/>
  <meta property="og:image" content="https://static.wixstatic.com/media/380122_fbdf5a539779484da4f06f782e54f0a7%7Emv2.png/v1/fit/w_2500,h_1330,al_c/380122_fbdf5a539779484da4f06f782e54f0a7%7Emv2.png"/>
  <meta property="og:image:width" content="2500"/>
  <meta property="og:image:height" content="1330"/>
  <meta property="og:url" content="https://www.neointeraction.com/health-care-design-services"/>
  <meta property="og:site_name" content="Neointeraction Design"/>
  <meta property="og:type" content="website"/>
  <meta name="google-site-verification" content="jDr4aVGcjUUHdNv8SD5bpXt6-kwDs5rDAbNqhXDrENY"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="Best Healthcare Design India | Neointeraction Design | Contact Us"/>
  <meta name="twitter:description" content="Expert Healthcare UX Design in India: Pioneering solutions for modern medical facilities. Get in touch for optimal solutions."/>
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
                            Transforming <br>Healthcare <span class="highlight">UX Design in India</span>
                            </h1>

                            <div class="contact-info">
                                <p class="banner-subtext">need content hereneed content hereneed content hereneed content hereneed content hereneed content hereneed content hereneed content hereneed content hereneed content hereneed content hereneed content here</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Healthcare Design Enquiry</h2>


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
            <p class="banner-subtext">We are a top UX/UI design agency, collaborating with healthcare professionals to enhance user experiences in the healthcare industry. With a dedicated team of UX designers and frontend developers, we're passionate about improving healthcare industry by making data accessible to doctors and patients for life-saving interventions. Our mission is to empower Clinicians and stakeholders to elevate the holistic patient experience.
            </p>
    </div>
        </div>
    </section>




    <section class="contact-section section-padding">
        <div class="container">
        <h4 class="project-section-title">Our Design Impact </h4>
        <p class="body-text">Maximizing the Impact of Healthcare through UI/UX Best Practices, We Strive for Bringing Meaningful Change</p>
            <div class="row w-100">
                <div class="col-6 col-md-3 count-up-item">
                    <h3 class="percent__total">10M</h3> 
                    <p class="count-label">global lives impacted</p>
                </div>
                <div class="col-6 col-md-3 count-up-item">
                    <h3 class="percent__total">550K+</h3>
                    <p class="count-label">lives saved</p>
                </div>
                <div class="col-6 col-md-3 count-up-item">
                    <h3 class="percent__total">5K+</h3>
                    <p class="count-label">Implementation at hospitals and clinics
                    </p>
                </div>
                <div class="col-6 col-md-3 count-up-item">
                    <h3 class="percent__total">70Cr</h3>
                    <p class="count-label">Funds raised from Omron and Sony
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
                Heathcare products we have worked on
                </h2>
                <a href="<?php echo $path; ?>projects.php">
                    View All
                </a>
            </div>
            <div class="engagement-modal-block section-margin">
                <?php 
                $limit = 2;

                $selectedTag = 'Healthcare';

                include $path . include 'projects/project-listing.php'; ?>
            </div>
        </div>
    </section>

    

    <!-- clients  -->
    <section class="clients section-padding">
        <div class="container">
            <h2 class="section-title">
            Our Healthcare Clients
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
            <h2 class="section-title">Why Choose Us to Design Your Healthcare Product?</h2>
            <p class="body-text">At Neointeraction Design, we understand that your healthcare product is the cornerstone of your business. That's why we're committed to delivering design solutions that not only meet but exceed your expectations. Here's why you should choose us to design your product:</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/building.svg" alt="qa" />
                            <h4 class="wwd-title">Quality Design</h4>
                            <p class="wwd-text">With over 15 years of experience, we've established ourselves as a leader in the industry, delivering top-notch UX design solutions that drive success.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/chart.svg" alt="value" />
                            <h4 class="wwd-title">Data-Driven Solutions</h4>
                            <p class="wwd-text">Our design process is grounded in data, ensuring that every decision we make is backed by research and analysis.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/care.svg" alt="optimise" />
                            <h4 class="wwd-title">Your reliable UX/UI design partner</h4>
                            <p class="wwd-text">We're here for you, addressing any concerns promptly and consistently to make sure we accelerate your product journey.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/balancer.svg" alt="data" />
                            <h4 class="wwd-title">Exceptional Team</h4>
                            <p class="wwd-text">Our team of designers and developers is among the best in the industry, with the skills and expertise to bring your vision to life.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/enterprise.svg" alt="plane" />
                            <h4 class="wwd-title">Proven Track Record</h4>
                            <p class="wwd-text">We have a proven track record of success, with numerous satisfied clients across diverse domains.</p>
                        </div>
                    </div>

                 


                </div>
            </div>
        </div>
    </section>



    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">Why Choose Us for Your Product?</h2>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/building.svg" alt="qa" />
                            <h4 class="wwd-title">Expertise in Healthcare UX Design</h4>
                            <p class="wwd-text">Leading the industry with expertise in healthcare, we collaborate closely with healthcare professionals to create enhanced user-centric experiences.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/chart.svg" alt="value" />
                            <h4 class="wwd-title">Patient and Doctor-Centric Solutions</h4>
                            <p class="wwd-text">Our UI/UX designs are driven by emerging user needs, leveraging the latest AI/ML technology to deliver efficient clinical healthcare UX solutions that prioritize the needs of both patients and healthcare providers.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/care.svg" alt="optimise" />
                            <h4 class="wwd-title">Research-Driven Insights</h4>
                            <p class="wwd-text">Conducting UX qualitative research, we identify critical pain points in existing healthcare processes and translate them into innovative digital solutions, ensuring meaningful impact and improved outcomes.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/balancer.svg" alt="data" />
                            <h4 class="wwd-title">Domain Expertise and Mentorship</h4>
                            <p class="wwd-text">With strong domain expertise and multidisciplinary support, we create value-based solutions for medical web/mobile apps that align with industry standards and address the evolving needs of the healthcare sector.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/enterprise.svg" alt="plane" />
                            <h4 class="wwd-title">Future-Focused Design Solutions</h4>
                            <p class="wwd-text">Committed to creating omnipresent healthcare UX design solutions, we bring precision medical practices closer to users through innovative design approaches that anticipate and adapt to future trends.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/enterprise.svg" alt="plane" />
                            <h4 class="wwd-title">Impactful Healthcare Solutions</h4>
                            <p class="wwd-text">From leveraging medical wearables to telehealth platforms and AI-powered systems, we've optimized healthcare workflows to deliver better results for users, enhancing accessibility, efficiency, and overall holistic patient experience.</p>
                        </div>
                    </div>

                 


                </div>
            </div>
        </div>
    </section>




    <?php include $path.'components/hire-designers-engineers.php'; ?>
    <!-- testimonials  -->
    <?php $faq_tag = 'healthcare'; include 'components/faq.php'; ?>
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