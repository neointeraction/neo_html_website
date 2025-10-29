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
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/edtech-design-thumbnail.webp" />
    <meta property="og:logo" content="https://www.neointeraction.com/assets/images/header_logo.png" />
    <meta property="og:url" content="https://www.neointeraction.com/edtech-design-services" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="jDr4aVGcjUUHdNv8SD5bpXt6-kwDs5rDAbNqhXDrENY" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Edtech Design services in India | Edtech company | Neointeraction Design" />
    <meta name="twitter:description"
        content="Are you looking for best Edtech UX/UI design services in India? Neointeraction Design is one of the best Edtech design company in India offering expert solutions." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/edtech-design-thumbnail.webp" />
</head>

<body>
    <?php $page='landing';
 $events = [
    [
        'title' => '90+ Tuition App - Online Tutoring Platform',
        'description' => 'Enhancing the usability of a platform that delivers tuition to your doorstep for easy learning',
        'image' => 'thumb/desk/tutoring-platform-homepage-banner.webp',
        'mobileImage'=> 'thumb/mobile/tutoring-platform-homepage-banner.webp',
        'alt' => '90+ Tuition App - Online Tutoring Platform',
        'link' => 'online-tutoring-platform.php',
        'case_study_service' => 'online-tutoring-platform',
        'case_study_url' => 'case-study/casestudy-online-tutoring-platform-90-tuition-app.pdf'
    ],
    [
        'title' => 'AI-Powered Learning Platform',
        'description' => 'Implemented a web portal and EdTech platform enabling intelligent learning through knowledge gap identification and personalized practice opportunities',
        'image' => 'ai-powered-learning-banner.webp',
        'mobileImage'=> 'ai-powered-learning-mobile.webp',
        'alt' => 'AI-Powered Learning Platform',
        'link' => '',
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
                        <div class="contact-left d-none d-md-block">
                            <h1 class="banner-title">

                                User-centric<br> Edtech Design <span class="highlight">Services</span>
                            </h1>

                            <div class="contact-info d-none d-md-block">
                                <p class="banner-subtext">We craft EdTech design solutions that make learning engaging and intuitive. From UX/UI design to product strategy, we help educational platforms deliver impactful digital experiences.</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Edtech Design Enquiry</h2>


                            <form id="contactForm">
                                <div class="form-group">
                                    <label for="lp_name" class="form-label">Name*</label>
                                    <input type="text" id="lp_name" name="lp_name" class="form-control custom-input"
                                        placeholder="Enter name" required>
                                    <div id="lp_name-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="lp_work_email" class="form-label">Work email*</label>
                                    <input type="email" id="lp_work_email" name="lp_work_email"
                                        class="form-control custom-input" placeholder="Enter work email"
                                        pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                                    <div id="lp_email-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="lp_mobile_number" class="form-label">Mobile Number*</label>
                                    <input type="tel" id="lp_mobile_number" name="lp_mobile_number"
                                        class="form-control custom-input"
                                        placeholder="Enter mobile number (e.g. +91 98765 43210)" pattern="^\+?[0-9]{10,15}$"
                                        required oninput="this.value = this.value.replace(/[^0-9+]/g, '');">
                                    <div id="lp_mobile-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="lp_designation" class="form-label">Type your requirement</label>
                                    <textarea id="lp_designation" name="lp_designation" class="form-control custom-input"
                                            placeholder="Describe your project needs—for example, a UX design, UI development, or or UX audit"
                                            rows="2" maxlength="200" ></textarea>
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
                        <p class="banner-subtext">We craft EdTech design solutions that make learning engaging and intuitive. From UX/UI design to product strategy, we help educational platforms deliver impactful digital experiences.</p>

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
            <h2 class="section-title">Why Choose Us for Your EdTech Product?</h2>
            <p class="body-text">As a leading UX agency in India, Neointeraction Design specializes in delivering expert product design and front-end development services tailored for students, educational institutions, and AI-assisted learning tools. Guided by proven UX design methodologies, we create intuitive, engaging, and scalable digital learning environments that enhance comprehension and retention.</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/engineering.svg" alt="Edtech design-based solution icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Design-based solutions</h3>
                            <p class="wwd-text">We revolutionize education technology through innovative design approaches that improve user experiences and drive meaningful learning outcomes.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/pointer.svg" alt="Digital learning immersion icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Complete Digital Immersion</h3>
                            <p class="wwd-text">Our immersive designs provide students with interactive educational environments that foster deeper understanding and active engagement.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/a11y.svg" alt="Accessibility and usability icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Accessibility and Usability</h3>
                            <p class="wwd-text">We prioritize inclusive, accessible design so learners of all abilities can navigate and interact effortlessly, ensuring equal learning opportunities.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/graduate.svg" alt="Classroom simulation icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Simulated Classroom Experience</h3>
                            <p class="wwd-text">Through interactive features and captivating design, we digitally recreate the classroom atmosphere to encourage collaboration, communication, and active learning.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/atom.svg" alt="Inclusive education access icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Democratizing Education</h3>
                            <p class="wwd-text">By leveraging technology, we break down barriers based on geography and socioeconomic status to make quality education accessible to all.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/bulb.svg" alt="Impactful edtech solutions icon"  width="40px" height="40px"/>
                            <h3 class="wwd-title">Impactful Solutions</h3>
                            <p class="wwd-text">Our client-focused approach delivers actionable insights and innovative solutions that align with educational goals—boosting student engagement, satisfaction, and academic performance. By partnering with our skilled UX designers, you gain a team dedicated to transforming your EdTech product into a market-leading digital solution that empowers both learners and educators.</p>
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
                Recent Edtech Design Project
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
                                 <img src="<?php echo $path; ?>assets/images/projects/<?php echo $event['image']; ?>" alt="<?php echo $event['alt']; ?>"
                                        class="img-fluid project-image d-none d-md-block" width="584" height="280" />
                                    <img src="<?php echo $path; ?>assets/images/projects/<?php echo $event['mobileImage']; ?>" alt="<?php echo $event['alt']; ?>"
                                        class="img-fluid project-image d-flex d-md-none" width="438" height="126" />
                                </div>
                                <div class="col-lg-6 d-flex flex-column justify-content-center project-content">
                                    <h2 class="project-title d-none d-md-block">
                                        <?php echo $event['title']; ?>
                                    </h2>
                                    <p class="project-description">
                                        <?php echo $event['description']; ?>
                                    </p>
                                    <?php if($event['case_study_service']){ ?>
                                    <div class="pb-action-btn mt-2">
                                        <button class="btn btn-custom"
                                        data-service="<?php echo htmlspecialchars($event['case_study_service']); ?>"
                                            data-bs-toggle="modal" data-bs-target="#downloadCaseStudyModal"
                                            data-project-title="<?php echo htmlspecialchars($project_title); ?>"
                                            data-case-study-url="<?php echo htmlspecialchars($event['case_study_url']); ?>"
                                        >
                                            Download Case Study
                                        </button>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>


    <!-- demo-video  -->
    <section class="demo-video section-padding">
        <div class="container">
            <h2 class="section-title">Our Design Process</h2>
            <div class="video-container section-margin">

                <iframe width="100%" height="650" src="https://www.youtube-nocookie.com/embed/SSTsj85MzGU?si=_lPo5JZDsP3tnIZR"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy" style="border-radius: 0;"></iframe>
            </div>
        </div>
    </section>
        <?php 
        $title = 'Start Your Consultation with Our UX Experts'; 
        $desc = 'Partner with Neointeraction Design to elevate your digital experience. Our UX-driven team helps you uncover user pain points, refine edtech product design, and craft seamless journeys that attract users and accelerate business growth.';
        $buttonName = 'Book a UX Consultation';
        $imageLink = "assets/images/about-us/hire-ui.webp";
        $imageAlt = "Book a UX Consultation";
        include $path . 'components/hire-designers-engineers.php'; 
    ?>
    <!-- testimonials  -->
    <?php $faq_tag = 'edutech'; include 'components/faq.php'; ?>
    <!-- testimonials -- end  -->
    <div class="mb-4 mb-md-0"></div>
    <?php include $path . 'components/registration-modal.php'; ?>
    <script src="<?php echo $path; ?>assets/js/lp-enquiry.js"></script>
    <?php include $path . 'components/download-casestudy-modal.php'; ?>
    <?php include $path.'components/footer.php'; ?>
    <?php include $path.'includes/footer-additional-scripts.php'; ?>
    <?php include $path.'includes/js.php'; ?>
    <script src="<?php echo $path; ?>assets/js/events.js"></script>
    <script><?php include 'includes/tracking-script.php'; ?></script>
    <script>
        

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
