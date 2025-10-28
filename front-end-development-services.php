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
    <title>Front End Development Services in India | Front End Development Company | Neointeraction Design</title>
    <meta name="description"
        content="Neointeraction Design provides best Front end development services in India. Hire talented Front-End developers for your upcoming web projects." />
    <meta name="keywords" content="Front End Development Services in India, Front End Development Company" />
    <link rel="canonical" href="https://www.neointeraction.com/blog" />
    <meta property="og:title"
        content="Front End Development Services in India | Front End Development Company | Neointeraction Design" />
    <meta property="og:description"
        content="Neointeraction Design provides best Front end development services in India. Hire talented Front-End developers for your upcoming web projects." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/ui-development-thumbnail.webp" />
    <meta property="og:logo" content="https://www.neointeraction.com/assets/images/header_logo.png" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title"
        content="Front End Development Services in India | Front End Development Company | Neointeraction Design" />
    <meta name="twitter:description"
        content="Neointeraction Design provides best Front end development services in India. Hire talented Front-End developers for your upcoming web projects." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/ui-development-thumbnail.webp" />
</head>

<body>
    <?php $page='blog';
  $events = [
    [
        'title' => 'Streamlining Fund Operations: UI/UX Development for Intertrust Navigate',
        'description' => 'Developing a scalable, user-centric interface to transform Intertrust\'s fund management workflow and consolidate vast amounts of data.',
        'image' => 'thumb/desk/intertrust-navigate-homepage-banner.webp',
        'mobileImage' => 'thumb/mobile/intertrust-navigate-homepage-banner.webp',
        'alt' => 'Streamlining Fund Operations: UI/UX Development for Intertrust Navigate',
        'link' => 'intertrust-navigate.php',
        'case_study_service' => 'intertrust-navigate',
       'case_study_url' => 'case-study/case-study-intertrust-navigate.pdf'
    ],
    [
        'title' => 'Redesigning Tricogs AI Driven Healthcare Platform',
        'description' => 'AI-driven predictive healthcare platform that improves heart failure patient care',
        'image' => 'thumb/desk/tricog-homepage-banner.webp',
        'mobileImage' => 'thumb/mobile/tricog-homepage-banner.webp',
        'alt' => 'Redesigning Tricogs AI Driven Healthcare Platform',
        'link' => 'ai-driven-healthcare-consultation-platform.php',
         'case_study_service' => 'ai-driven-healthcare-consultation-platform',
        'case_study_url' => 'case-study/casestudy-ai-driven-healthcare-consultation-platform.pdf'
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
                                Transform Your <br> Product with Expert<br /> <span class="highlight">Front End <br />
                                    Development <br />Services in India</span>
                            </h1>

                            <div class="contact-info d-none d-md-block">
                                <p class="banner-subtext">Bring your digital product to life with fast, engaging, and
                                    user-friendly web experiences. Our frontend expertise ensures high-performing
                                    interfaces that captivate your users. Turn your ideas into interactive,
                                    results-driven digital solutions</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">UI Development Enquiry</h2>


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
                                        class="form-control custom-input" placeholder="Enter mobile number"
                                        pattern="^\+?[0-9]{10,15}$" required
                                        oninput="this.value = this.value.replace(/[^0-9+]/g, '');">
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
                        <p class="banner-subtext">Bring your digital product to life with fast, engaging, and
                            user-friendly web experiences. Our frontend expertise ensures high-performing interfaces
                            that captivate your users. Turn your ideas into interactive, results-driven digital
                            solutions</p>

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
            <h2 class="section-title">Why Brands Trust Us for UI Development?</h2>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/code-browser.svg"
                                alt="Frontend development icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Expert Frontend Development</h3>
                            <p class="wwd-text">Our team comprises seasoned frontend developers with extensive
                                experience in crafting intuitive and visually appealing user interfaces. With a keen eye
                                for detail and a passion for innovation, we ensure that your digital product stands out.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/technology.svg"
                                alt="Technology innovation icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Cutting-Edge Technologies</h3>
                            <p class="wwd-text">We stay ahead of the curve by leveraging the latest technologies and
                                frameworks in frontend development. Whether it's React, Angular, Vue.js, or HTML/CSS
                                (SASS), we have the expertise to build dynamic and responsive interfaces that elevate
                                user experiences.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/bulb.svg" alt="Custom solution icon"
                                width="40px" height="40px" />
                            <h3 class="wwd-title">Customized Solutions</h3>
                            <p class="wwd-text">We understand that every project is unique, which is why we offer
                                tailored solutions to meet your specific needs and objectives. From concept to
                                execution, we collaborate closely with you to ensure that the end product aligns
                                perfectly with your vision.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/api.svg" alt="Integration icon"
                                width="40px" height="40px" />
                            <h3 class="wwd-title">Seamless Integration</h3>
                            <p class="wwd-text">Our frontend development services seamlessly integrate with your
                                existing systems and technologies, ensuring smooth operation and compatibility across
                                platforms. Whether you're building from scratch or enhancing an existing product, we've
                                got you covered.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/team-building.svg"
                                alt="Collaboration icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Collaborative Partnership</h3>
                            <p class="wwd-text">We view our clients as partners and believe in building long-term
                                relationships based on trust, transparency, and mutual success. When you choose us for
                                your frontend development needs, you're not just getting a service provider – you're
                                gaining a strategic ally dedicated to your success.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/proven-expertise.svg"
                                alt="Track record icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Proven Track Record</h3>
                            <p class="wwd-text">With a proven track record of delivering high-quality frontend solutions
                                for diverse industries and clients, you can trust us to bring your digital vision to
                                life. Our portfolio speaks for itself, showcasing our expertise and commitment to
                                excellence.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/arrow-flow.svg"
                                alt="Agile development icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Agile Development Approach</h3>
                            <p class="wwd-text">We follow an agile development approach, allowing for flexibility,
                                transparency, and quick iterations throughout the project lifecycle. This ensures that
                                we adapt to changing requirements and deliver results efficiently and effectively. </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/support.svg" alt="Customer support icon"
                                width="40px" height="40px" />
                            <h3 class="wwd-title">Dedicated Support</h3>
                            <p class="wwd-text">Our commitment to customer satisfaction doesn't end with the project
                                delivery. We provide ongoing support and maintenance to ensure that your product
                                continues to perform optimally and evolves with your business needs.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">Our Development Process</h2>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/dynamic_feed.svg"
                                alt="UI component construction icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Dynamic Component Construction</h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/flowchart.svg"
                                alt="Interactive user journey icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Crafting Interactive User Journeys</h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/responsive.svg"
                                alt="Responsive design icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Responsive Design Implementation</h3>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/check-circle.svg"
                                alt="Business validation icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Business Flow Validation</h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/balancer.svg"
                                alt="Service integration icon" width="40px" height="40px" />
                           <h3 class="wwd-title">Seamless Service Integration</h3>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/developer-mode.svg"
                                alt="UI development transition icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Dev-Ready UI Transition</h3>
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
                    Frontend Development Services
                </h2>
                <button class="btn btn-custom mb-4" data-service="UI Development" data-bs-toggle="modal"
                    data-bs-target="#registerModal" style="width:fit-content;">
                    Start your project
                </button>
            </div>
            <div class="bs-card-section section-margin">
                <div class="row justify-content-center">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <h3 class="title">HTML & CSS (SASS) Development</h3>
                            <p class="description">
                                Bring your designs to life with our HTML and CSS development services. From Figma to
                                Sketch, we craft stunning, responsive interfaces that perform seamlessly across devices,
                                powered by frameworks like Bootstrap.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <h3 class="title">React JS/React Native</h3>
                            <p class="description">
                                As a leading React development company, we harness the power of JavaScript library. With
                                React JS, we build dynamic, interactive and responsive web & mobile apps to deliver a
                                seamless user experience.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <h3 class="title">Vue JS</h3>
                            <p class="description">
                                Craft compelling user interfaces with our Vue.js development services. Our experts
                                utilize this progressive JavaScript framework to build scalable and high-performing web
                                applications that enhance user engagement and satisfaction.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <h3 class="title">Angular</h3>
                            <p class="description">
                                Take your web applications to new heights with our Angular development services. Our
                                experienced developers leverage this robust JavaScript framework to create complex and
                                scalable pixel perfect solutions tailored to your needs.
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
                Recent UI Development Projects
            </h2>
            <div class="engagement-modal-block section-margin">
                <?php foreach ($events as $event) { ?>
                <div class="project-block-item">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="project-card d-lg-flex">
                                <div class="col-lg-6 p-0 project-image-container">
                                    <img src="<?php echo $path; ?>assets/images/projects/<?php echo $event['image']; ?>"
                                        alt="<?php echo $event['alt']; ?>"
                                        class="img-fluid project-image d-none d-md-block" width="584" height="280" />
                                    <img src="<?php echo $path; ?>assets/images/projects/<?php echo $event['mobileImage']; ?>"
                                        alt="<?php echo $event['alt']; ?>"
                                        class="img-fluid project-image d-flex d-md-none" width="438" height="126" />
                                </div>
                                <div class="col-lg-6 d-flex flex-column justify-content-center project-content">
                                    <h2 class="project-title">
                                        <?php echo $event['title']; ?>
                                    </h2>
                                    <p class="project-description">
                                        <?php echo $event['description']; ?>
                                    </p>

                                    <div class="pb-action-btn mt-2">
                                        <button class="btn btn-custom"
                                            data-service="<?php echo htmlspecialchars($event['case_study_service']); ?>"
                                            data-bs-toggle="modal" data-bs-target="#downloadCaseStudyModal"
                                            data-project-title="<?php echo htmlspecialchars($project_title); ?>"
                                            data-case-study-url="<?php echo htmlspecialchars($event['case_study_url']); ?>">
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





    <!-- testimonials  -->
    <?php include 'components/testimonial.php'; ?>
    <!-- testimonials -- end  -->



    <!-- demo-video  -->
    <section class="demo-video section-padding">
        <div class="container">
            <h2 class="section-title">Our Process</h2>
            <div class="video-container section-margin">
                <iframe height="650" src="https://www.youtube-nocookie.com/embed/7MslRWZZ9qA?si=TaDeAtgk8dCEY1oY"
                    title="YouTube video player" style="border:0;width:100%;"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"
                    style="border-radius: 0;"></iframe>
            </div>
        </div>
    </section>

    <?php include $path . 'components/industry-experience.php'; ?>
    <?php 
        $title = 'Start Your Consultation'; 
        $desc = 'Transform your ideas into pixel-perfect digital experiences with our expert designers and front-end engineers.';
        $buttonName = 'Get a Free consultation';
        $imageLink = "assets/images/about-us-hire.jpg";
        $imageAlt = "Get a Free consultation";
        include $path . 'components/hire-designers-engineers.php'; 
    ?>
    <!-- testimonials  -->
    <?php $faq_tag = 'ui-development'; include 'components/faq.php'; ?>
    <!-- testimonials -- end  -->
    <div class="mb-4 mb-md-0"></div>
    <?php include $path . 'components/registration-modal.php'; ?>
    <script src="<?php echo $path; ?>assets/js/lp-enquiry.js"></script>
    <?php include $path . 'components/download-casestudy-modal.php'; ?>
    <?php include $path.'components/footer.php'; ?>
    <?php include $path.'includes/footer-additional-scripts.php'; ?>
    <?php include $path.'includes/js.php'; ?>
    <script src="<?php echo $path; ?>assets/js/events.js"></script>
    <script>
    <?php include 'includes/tracking-script.php'; ?>
    </script>
    <script>
    document.getElementById("lp_designation").addEventListener("input", function() {
        if (this.value.trim().length > 0 && /^\S+$/.test(this.value)) {
            document.getElementById("lp_designation").classList.remove("is-invalid");
            document.getElementById("lp_designation-error").innerHTML = "";
        } else {
            document.getElementById("lp_designation").classList.add("is-invalid");
            document.getElementById("lp_designation-error").innerHTML = "Please describe your project needs";
        }
    });


    document.getElementById("lp_name").addEventListener("input", function() {
        if (this.value.trim().length > 0 && /^\S+$/.test(this.value)) {
            document.getElementById("lp_name").classList.remove("is-invalid");
            document.getElementById("lp_name-error").innerHTML = "";
        } else {
            document.getElementById("lp_name").classList.add("is-invalid");
            document.getElementById("lp_name-error").innerHTML = "Enter a valid name";
        }
    });

    document.getElementById("lp_work_email").addEventListener("input", function() {
        if (this.value.trim().length > 0 && /^\S+@\S+\.\S+$/.test(this.value)) {
            document.getElementById("lp_work_email").classList.remove("is-invalid");
            document.getElementById("lp_email-error").innerHTML = "";
        } else {
            document.getElementById("lp_work_email").classList.add("is-invalid");
            document.getElementById("lp_email-error").innerHTML = "Enter a valid email address";
        }
    });

    document.getElementById("lp_mobile_number").addEventListener("input", function() {
        if (this.value.trim().length > 0 && /^\+?[0-9]{10,15}$/.test(this.value)) {
            document.getElementById("lp_mobile_number").classList.remove("is-invalid");
            document.getElementById("lp_mobile-error").innerHTML = "";
        } else {
            document.getElementById("lp_mobile_number").classList.add("is-invalid");
            document.getElementById("lp_mobile-error").innerHTML = "Enter a valid mobile number";
        }
    });
    </script>
</body>

</html>