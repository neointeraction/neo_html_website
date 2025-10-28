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
                                        placeholder="Enter mobile number (e.g. +91 98765 43210)" pattern="^\+?[0-9]{10,15}$"
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
                            <img src="<?php echo $path; ?>assets/images/icons/engineering.svg" alt="Design-based solutions" width="40px" height="40px" />
                            <h3 class="wwd-title">Design-based solutions</h3>
                            <p class="wwd-text">We're reshaping the landscape of education technology by integrating
                                innovative design approaches that enhance user experiences and drive meaningful learning
                                outcomes.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/pointer.svg" alt="complete digital immersion" width="40px" height="40px" />
                            <h3 class="wwd-title">Enabling a complete digital immersion</h3>
                            <p class="wwd-text">Our immersive digital solutions create an engaging learning environment
                                where students can fully immerse themselves in interactive educational experiences,
                                fostering deeper understanding and retention</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/a11y.svg" alt="Increasing accessibility and usability" width="40px" height="40px" />
                            <h3 class="wwd-title">Increasing accessibility and usability</h3>
                            <p class="wwd-text">We prioritize accessibility and usability in our designs to ensure that
                                learners of all abilities can easily navigate and engage with educational content,
                                promoting inclusivity and equal opportunities for learning</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/graduate.svg" alt="Designing an engaging simulation" width="40px" height="40px" />
                            <h3 class="wwd-title">Designing an engaging simulation of a classroom</h3>
                            <p class="wwd-text">Through captivating design elements and interactive features, we
                                simulate the classroom experience in a digital environment, fostering collaboration,
                                communication, and active learning among students</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/atom.svg" alt="Democratizing education" width="40px" height="40px" />
                            <h3 class="wwd-title">Democratizing education</h3>
                            <p class="wwd-text">Our goal is to make quality education accessible to all, regardless of
                                geographical location or socioeconomic status, by leveraging technology to break down
                                barriers and expand access to learning resources</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/bulb.svg" alt="Impactful Solutions"  width="40px" height="40px"/>
                            <h3 class="wwd-title">Impactful solutions provided to our clients</h3>
                            <p class="wwd-text">We deliver tangible results by providing our clients with actionable
                                insights and innovative solutions that align with their goals, driving measurable
                                improvements in student engagement, satisfaction, and academic performance.</p>
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
            <h2 class="section-title">Our Process</h2>
            <div class="video-container section-margin">

                <iframe width="100%" height="650" src="https://www.youtube-nocookie.com/embed/SSTsj85MzGU?si=_lPo5JZDsP3tnIZR"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy" style="border-radius: 0;"></iframe>
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
    <?php include $path . 'components/download-casestudy-modal.php'; ?>
    <?php include $path.'components/footer.php'; ?>
    <?php include $path.'includes/footer-additional-scripts.php'; ?>
    <?php include $path.'includes/js.php'; ?>
    <script src="<?php echo $path; ?>assets/js/events.js"></script>
    <script><?php include 'includes/tracking-script.php'; ?></script>
    <script>
        document.getElementById("lp_designation").addEventListener("input", function() {
            if (this.value.trim().length > 0 && /^\S+$/.test(this.value)) {
                document.getElementById("lp_designation").classList.remove("is-invalid");
                document.getElementById("lp_designation-error").innerHTML = "";
            } else {
                document.getElementById("lp_designation").classList.add("is-invalid");
                document.getElementById("lp_designation-error").innerHTML = "Please describe your project details";
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
