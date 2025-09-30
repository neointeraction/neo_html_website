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
    <title>Product Design Services | Neointeraction Design | Contact Us</title>
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
                                Product <span class="highlight"> Design Service</span>
                            </h1>

                            <div class="contact-info">
                                <p class="banner-subtext">need content hereneed content hereneed content hereneed
                                    content hereneed content hereneed content hereneed content hereneed content hereneed
                                    content hereneed content hereneed content hereneed content here</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Product Design Enquiry</h2>


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
            <p class="banner-subtext">With over 15 years of experience, Neointeraction Design has consistently delivered top-tier UX design solutions across diverse domains for different companies and startups. From concept to product, we focus on creating engaging designs that align with business goals, ensuring measurable ROI. Our commitment to end-to-end design services means we're with you every step of the way, meticulously crafting every aspect of your project to perfection. Whether you're in need of UX/UI design, frontend development, or a combination of both for your website or SaaS product our team has the expertise and experience to bring your vision to life. Experience the best UX/UI design service tailored to your brand's needs and unlock your business potential today.
            </p>
    </div>
        </div>
    </section>

    <section class="banner section-padding">
        <div>
            <div class="container">
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
    </section>


    <section class="engagement-modal section-padding">
        <div class="container">
            <div class="project__header">
                <h2 class="section-title">
                    Product Design Portfolio
                </h2>
                <a href="<?php echo $path; ?>projects.php">
                    View All
                </a>
            </div>
            <div class="engagement-modal-block section-margin">
                <?php 
                $limit = 2;
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
            <h2 class="section-title">SaaS Design Service</h2>
            <p class="section-desc">Elevate your SaaS product with Neointeraction Design's specialized service. Our tailored approach ensures your digital product stands out in the market and also delivers an exceptional user experience for your end users. From concept to execution, we're your partner for the success of your SaaS UX design.</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/star.svg" alt="qa" />
                            <p class="wwd-text">Tailored design solutions for your product to stand out.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/check.svg" alt="value" />
                            <p class="wwd-text">Expertise in UX/UI design for impactful product experiences.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/document.svg" alt="optimise" />
                            <p class="wwd-text">Optimized usability, functionality, and scalability to drive growth and user satisfaction</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/thumbs-up.svg" alt="data" />
                            <p class="wwd-text">Collaborative approach to meet your target audience's needs effectively.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/coin.svg" alt="plane" />
                            <p class="wwd-text">Customized solutions for building or refining the best SaaS apps and digital products.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/hand-pointer.svg" alt="team" />
                            <p class="wwd-text">Data-driven approach to UX design, ensuring decisions are backed by insights and analytics.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">Why Choose Us to Design Your Product?</h2>
            <p class="section-desc">At Neointeraction Design, we understand that your SaaS app or digital product is the cornerstone of your business. That's why we're committed to delivering the best product design services in India that not only meet but exceed your expectations. Here's why you should choose us to design your product:</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/award.svg" alt="qa" />
                            <h4 class="wwd-title">Quality Design </h4>
                            <p class="wwd-text">With over 15 years of experience, we've established ourselves as a leader in the industry, delivering top-notch UX design solutions that drive success.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/db.svg" alt="value" />
                            <h4 class="wwd-title">Data-Driven Solutions</h4>
                            <p class="wwd-text">Our design process is grounded in data, ensuring that every decision we make is backed by research and analysis.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/hand-shake.svg" alt="optimise" />
                            <h4 class="wwd-title">Your reliable UX/UI design partner</h4>
                            <p class="wwd-text">We're here for you, addressing any concerns promptly and consistently to make sure we accelerate your product journey.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/bulb-on.svg" alt="data" />
                            <h4 class="wwd-title">Exceptional Team</h4>
                            <p class="wwd-text">Our team of UX/UI designers, product designers and frontend developers is among the best in the industry, with the skills and expertise to bring your vision to life.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/star-document.svg" alt="plane" />
                            <h4 class="wwd-title">Proven Track Record</h4>
                            <p class="wwd-text">We have a proven track record of success, with numerous satisfied clients across diverse domains</p>
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

      <!-- demo-video  -->
      <section class="demo-video section-padding">
        <div class="container">
            <h2 class="section-title">Showcase Reel</h2>
            <div class="video-container section-margin">
                
                <iframe width="100%" height="650" src="https://www.youtube.com/embed/d_rEmpCVHAI?si=ZPQ5SxsTSvOkJsIW" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen style="border-radius: 0;"></iframe>
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


    <?php include $path.'components/hire-designers-engineers.php'; ?>
    <!-- testimonials  -->
    <?php $faq_tag = 'product-design'; include 'components/faq.php'; ?>
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