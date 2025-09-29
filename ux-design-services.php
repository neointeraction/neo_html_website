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
    <title>UX Design Services | Neointeraction Design | Contact Us</title>
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
                            Transform <br> <span class="highlight">Web & Mob App Designs</span>
                            </h1>

                            <div class="contact-info">
                                <p class="banner-subtext">Craft seamless experiences that delight your users. From research to design, we create intuitive interfaces that drive engagement. Let’s turn your ideas into impactful digital products.</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Connect with our Experts</h2>


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
            <p class="banner-subtext">With a deep understanding of industry trends and user behavior, we craft UX design services that truly resonate with your target audience, increasing satisfaction and loyalty. Our collaborative approach ensures every design decision aligns with your product and business objectives, laying the foundation for long-term success and growth </p>
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
                Recent UX Design Projects
                </h2>
                <a href="<?php echo $path; ?>projects.php">
                    View All
                </a>
            </div>
            <div class="engagement-modal-block section-margin">
                <?php 
                $limit = 2;

                $selectedTag = 'Mobile Design';

                include $path . include 'projects/project-listing.php'; ?>
            </div>
        </div>
    </section>

    

    <!-- clients  -->
    <section class="clients section-padding">
        <div class="container">
            <h2 class="section-title">
                Middle east Clients we’ve partnered with
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

    <section class="contact-section section-padding">
        <div class="container">
            <h2 class="section-title">
            Unlock full potential of your digital product
            </h2>
            <div class="row w-100">
                <div class="col-6 col-md-3 count-up-item">
                    <h3 class="percent__total">88%</h3>
                    <p class="count-label">website visitors abandon the site due to slow loading time</p>
                </div>
                <div class="col-6 col-md-3 count-up-item">
                    <h3 class="percent__total">39%</h3>
                    <p class="count-label">return on Investment for every 1$ invested</p>
                </div>
                <div class="col-6 col-md-4 count-up-item">
                    <h3 class="percent__total">89%</h3>
                    <p class="count-label">think that a company's mobile site should be as good or better than a desktop site.
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">UX Design Process</h2>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/graph.svg" alt="qa" />
                            <h4 class="wwd-title">User Research</h4>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/person.svg" alt="value" />
                            <h4 class="wwd-title">Persona Development</h4>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/arcticons_journey.svg" alt="optimise" />
                            <h4 class="wwd-title">User Journey Mapping</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/like.svg" alt="data" />
                            <h4 class="wwd-title">IA Validation</h4>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/ph_strategy-light.svg" alt="plane" />
                            <h4 class="wwd-title">UX Strategy & Wireframing</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/hand-pointer.svg" alt="team" />
                            <h4 class="wwd-title">Interactive Prototype</h4>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">Tailored UX Design Solutions</h2>
            <p class="section-desc">Neointeraction Design is a UX design company in India which offers customizable UX design solutions to suit your specific needs. Whether you're in the early stages of product development or looking to optimize an existing platform, we've got you covered.</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/token_cweb.svg" alt="qa" />
                            <h4 class="wwd-title">UX Research </h4>
                            <p class="wwd-text">Gain valuable insights into user behaviors and preferences to inform your product strategy and design decisions.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/arcticons_journey.svg" alt="value" />
                            <h4 class="wwd-title">IA and Content</h4>
                            <p class="wwd-text">Develop a clear information architecture and compelling content strategy to ensure that users can easily find what they need and engage with your brand</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/ph_strategy-light.svg" alt="optimise" />
                            <h4 class="wwd-title">UX Optimization</h4>
                            <p class="wwd-text">Continuously improve your digital product based on user feedback and analytics, optimizing the user experience to drive engagement and conversions.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/hand-pointer.svg" alt="data" />
                            <h4 class="wwd-title">Interactive Prototyping and Usability</h4>
                            <p class="wwd-text">Test early prototypes with real users to identify usability issues and refine the user experience before development begins.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/plane.svg" alt="plane" />
                            <h4 class="wwd-title">UI Design</h4>
                            <p class="wwd-text">From wireframes to high-fidelity mockups, our UI designers will create visually stunning user interfaces that align with your brand and delight your users</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/enterprise.svg" alt="team" />
                            <h4 class="wwd-title">Front End Development</h4>
                            <p class="wwd-text">Bring your designs to life with our front-end development services, ensuring pixel-perfect execution and seamless integration with your backend systems.</p>
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
            <div class="bs-card-section section-margin">
                <div class="row justify-content-center">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-6 col-lg-6 pb-4">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/ux.svg" alt="ux" />
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
                                <img src="assets/images/pd.svg" alt="pd" />
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
                                <img src="assets/images/dt.svg" alt="dt" />
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
                                <img src="assets/images/fd.svg" alt="fd" />
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

    <section class="ux-design-subscription section-padding">
        <div class="container">
            <h2 class="section-title">Design as a Service - Scalable Solutions for Your Business</h2>
           <p>Transform your digital presence with our Design as a Service. With flexible monthly subscriptions, we offer tailored UX, UI, and product design solutions that adapt to your business needs. Let us help you create user experiences that drive results.</p>
        </div>
    </section>

    <section class="ux-design-subscription section-padding">
        <div class="container">
            <h2 class="section-title">Why Choose UX Design Subscription Plans?</h2>
            <ul>
                <li><p >Get a UX Team to Support Product Designs</p></li>
                <li><p >Flexible Support for Your Business Needs</p></li>
                <li><p >Expert Design Team Aligned with Your Goals</p></li>
                <li><p >Hassle-Free Management with Clear Timelines</p></li>
            </ul>
        </div>
    </section>

    <?php include $path.'components/hire-designers-engineers.php'; ?>
    <!-- testimonials  -->
    <?php $faq_tag = 'ux-design'; include 'components/faq.php'; ?>
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