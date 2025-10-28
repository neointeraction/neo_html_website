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
    <title>Top UX Design services in India | UX Design company | Neointeraction Design</title>
    <meta name="description"
        content="Neointeraction Design offers top UX Design services in India, creating visually appealing and user-friendly websites for your business needs. Request a free quote today." />
    <meta name="keywords" content="UX Design services in India, UX Design company" />
    <link rel="canonical" href="https://www.neointeraction.com/blog" />
    <meta property="og:title" content="Top UX Design services in India | UX Design company | Neointeraction Design" />
    <meta property="og:description"
        content="Neointeraction Design offers top UX Design services in India, creating visually appealing and user-friendly websites for your business needs. Request a free quote today." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/ux-design-thumbnail.webp" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Top UX Design services in India | UX Design company | Neointeraction Design" />
    <meta name="twitter:description"
        content="Neointeraction Design offers top UX Design services in India, creating visually appealing and user-friendly websites for your business needs. Request a free quote today." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/ux-design-thumbnail.webp" />
</head>

<body>
    <?php $page='blog';

 $events = [
    [
        'title' => 'Redesigning Tricogs AI Driven Healthcare Platform',
        'description' => 'AI-driven predictive healthcare platform that improves heart failure patient care',
        'image' => 'thumb/desk/tricog-homepage-banner.webp',
        'mobileImage' => 'thumb/mobile/tricog-homepage-banner.webp',
        'alt' => 'Redesigning Tricogs AI Driven Healthcare Platform',
        'link' => 'ai-driven-healthcare-consultation-platform.php',
        'case_study_service' => 'ai-driven-healthcare-consultation-platform',
        'case_study_url' => 'case-study/casestudy-ai-driven-healthcare-consultation-platform.pdf'
    ],
    [
        'title' => 'Mobility Paltform for Crew Ship workforce management',
        'description' => 'Go-to application for Carnival ship staff streamlining daily activities, tasks, and journey-related information',
        'image' => 'thumb/desk/crew-mobility-management.webp',
        'mobileImage' => 'thumb/mobile/crew-mobility-management.webp',
        'alt' => 'Mobility Paltform for Crew Ship workforce management',
        'link' => 'crew-mobility-management-in-a-cruise.php',
        'case_study_service' => 'crew-mobility-management-in-a-cruise',
        'case_study_url' => 'case-study/casestudy-crew-mobility-management-in-a-cruise.pdf'
    ]
    ]
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
                                Transform <br> <span class="highlight">Web & Mob App Designs</span>
                            </h1>

                            <div class="contact-info d-none d-md-block">
                                <p class="banner-subtext">Craft seamless experiences that delight your users. From
                                    research to design, we create intuitive interfaces that drive engagement. Let’s turn
                                    your ideas into impactful digital products.</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">UX Design Enquiry</h2>


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
                                        class="form-control custom-input" placeholder="Enter mobile number (e.g. +91 98765 43210)"
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
                        <p class="banner-subtext">Craft seamless experiences that delight your users. From research to
                            design, we create intuitive interfaces that drive engagement. Let’s turn your ideas into
                            impactful digital products.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- clients  -->
    <section class="clients section-padding">
        <div class="container">
            <h2 class="section-title">
                Clients we collaborated with
            </h2>
            <div class="scroll-container section-margin">
                <div class="scrolling-logos">
                    <?php include 'components/clients.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- clients -- end  -->

    <section class="industry-experience section-padding mb-5">
        <div class="container">
            <h2 class="section-title">Why Brands Trust Us for UX Design ?</h2>
            <p class="body-text">We design experiences that put users first and brands ahead. Our proven approach blends
                creativity, strategy, and technology to deliver impact-driven results.</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/user-chat.svg"
                                alt="User-focused design icon" width="40" height="40" />
                            <h3 class="wwd-title">User-Centered Approach</h3>
                            <p class="wwd-text">Every design decision focuses on your users, creating clear and
                                easy-to-use interactions. We prioritize simplicity and usability in every step of the
                                design process.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/strategic-alignment.svg"
                                alt="Business strategy alignment icon" width="40" height="40" />
                            <h3 class="wwd-title">Strategic Alignment</h3>
                            <p class="wwd-text">Designs are created to reflect your business goals and vision. Each
                                solution supports measurable growth and aligns with your long-term strategy.</p>
                        </div>

                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/proven-expertise.svg"
                                alt="Experience and expertise icon" width="40" height="40" />
                            <h3 class="wwd-title">Proven Expertise</h3>
                            <p class="wwd-text">With years of experience across industries, we deliver seamless and
                                intuitive digital experiences. Our track record shows consistent results for businesses
                                of all sizes.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/team-building.svg"
                                alt="Team collaboration icon" width="40" height="40" />
                            <h3 class="wwd-title">Collaborative Process</h3>
                            <p class="wwd-text">Open communication and teamwork guide every stage of the project. Your
                                input is incorporated at every step to ensure alignment with your expectations.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/bulb.svg"
                                alt="Innovation and future-ready design icon" width="40" height="40" />
                            <h3 class="wwd-title">Future-Ready Solutions</h3>
                            <p class="wwd-text">Our designs are scalable and adaptable to changing business needs. They
                                are built to grow with your brand and respond to evolving digital trends.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/target.svg"
                                alt="Growth and performance icon" width="40" height="40" />
                            <h3 class="wwd-title">Measurable Impact</h3>
                            <p class="wwd-text">Every design is focused on delivering results you can track. We aim to
                                improve user engagement, satisfaction, and conversion through thoughtful UX solutions.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">UX Design Process</h2>
            <p class="body-text">Neointeraction Design is a UX design company in India which offers customizable UX
                design solutions to suit your specific needs. Whether you're in the early stages of product development
                or looking to optimize an existing platform, we've got you covered.</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/token_cweb.svg" alt="User research icon"
                                width="40" height="40" />
                            <h3 class="wwd-title">UX Research </h3>
                            <p class="wwd-text">Gain valuable insights into user behaviors and preferences to inform
                                your product strategy and design decisions.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/arcticons_journey.svg"
                                alt="Information architecture and content icone" width="40" height="40" />
                            <h3 class="wwd-title">IA and Content</h3>
                            <p class="wwd-text">Develop a clear information architecture and compelling content strategy
                                to ensure that users can easily find what they need and engage with your brand</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/ph_strategy-light.svg"
                                alt="UX optimization icon" width="40" height="40" />
                            <h3 class="wwd-title">UX Optimization</h3>
                            <p class="wwd-text">Continuously improve your digital product based on user feedback and
                                analytics, optimizing the user experience to drive engagement and conversions.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/hand-pointer.svg"
                                alt="Interactive prototyping icon" width="40" height="40" />
                            <h3 class="wwd-title">Interactive Prototyping and Usability</h3>
                            <p class="wwd-text">Test early prototypes with real users to identify usability issues and
                                refine the user experience before development begins.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/ui-design.svg" alt="UI design icon"
                                width="40" height="40" />
                            <h3 class="wwd-title">UI Design</h3>
                            <p class="wwd-text">From wireframes to high-fidelity mockups, our UI designers will create
                                visually stunning user interfaces that align with your brand and delight your users</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/technology.svg"
                                alt="Front-end development icon" width="40" height="40" />
                            <h3 class="wwd-title">Front End Development</h3>
                            <p class="wwd-text">Bring your designs to life with our front-end development services,
                                ensuring pixel-perfect execution and seamless integration with your backend systems.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <?php include $path . 'components/our-services-landing.php'; ?>


    <section class="engagement-modal section-padding">
        <div class="container">
            <h2 class="section-title">
                Recent UX Design Projects
            </h2>
            <div class="engagement-modal-block section-margin">
                <?php foreach ($events as $event) { ?>
                <div class="project-block-item">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="project-card d-lg-flex">
                                <h2 class="project-title d-block d-md-none">
                                        <?php echo $event['title']; ?>
                                    </h2>
                                <div class="col-lg-6 p-0 project-image-container">
                                    <img src="<?php echo $path; ?>assets/images/projects/<?php echo $event['image']; ?>"
                                        alt="<?php echo $event['alt']; ?>"
                                        class="img-fluid project-image d-none d-md-block" width="584" height="280" />
                                    <img src="<?php echo $path; ?>assets/images/projects/<?php echo $event['mobileImage']; ?>"
                                        alt="<?php echo $event['alt']; ?>"
                                        class="img-fluid project-image d-flex d-md-none" width="438" height="126" />
                                </div>
                                <div class="col-lg-6 d-flex flex-column justify-content-center project-content">
                                    <h2 class="project-title d-none d-md-block">
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

                <iframe width="100%" height="650"
                    src="https://www.youtube-nocookie.com/embed/SSTsj85MzGU?si=B8pq4kK3-ExetQKL"
                    title="YouTube video player" frameborder="0"
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
        $imageLink = "assets/images/about-us/hire-ui.webp";
        $imageAlt = "Get a Free consultation";
        include $path . 'components/hire-designers-engineers.php'; 
    ?>
    <!-- testimonials  -->
    <?php $faq_tag = 'ux-design'; include 'components/faq.php'; ?>
    <!-- testimonials -- end  -->
    <?php include $path . 'components/registration-modal.php'; ?>
    <script src="<?php echo $path; ?>assets/js/lp-enquiry.js"></script>
    <?php include $path.'components/footer.php'; ?>
    <?php include $path . 'components/download-casestudy-modal.php'; ?>
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