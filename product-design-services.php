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
    <title>Product Design Services in india | Neointeraction Design</title>
    <meta name="description"
        content="Unlock the full potential of your business with our digital transformation services in India. Contact us today for your digital transformation journey." />
    <meta name="keywords" content="Digital Transformation services in india" />
    <link rel="canonical" href="https://www.neointeraction.com/product-design-services" />
    <meta property="og:title" content="Digital Transformation services in india | Neointeraction Design" />
    <meta property="og:description"
        content="Unlock the full potential of your business with our digital transformation services in India. Contact us today for your digital transformation journey." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/product-design-thumbnail.webp" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="https://www.neointeraction.com/product-design-services" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title"
        content="Digital Transformation services in india | Neointeraction Design | Contact us" />
    <meta name="twitter:description"
        content="Unlock the full potential of your business with our digital transformation services in India. Contact us today for your digital transformation journey." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/product-design-thumbnail.webp" />
</head>

<body>
    <?php $page='blog';

  $events = [
    [
        'title' => 'Redesigning Tricogs AI Driven Healthcare Platform',
        'description' => 'AI-driven predictive healthcare platform that improves heart failure patient care',
         'image'=> 'thumb/desk/tricog-homepage-banner.webp',
        'mobileImage'=> 'thumb/mobile/tricog-homepage-banner.webp',
        'alt' => 'Redesigning Tricogs AI Driven Healthcare Platform',
        'link' => 'ai-driven-healthcare-consultation-platform.php',
        'case_study_service' => 'ai-driven-healthcare-consultation-platform',
        'case_study_url' => 'case-study/casestudy-ai-driven-healthcare-consultation-platform.pdf'
    ],
    [
        'title' => 'Mobility Platform for Crew Ship workforce management',
        'description' => 'Go-to application for Carnival ship staff streamlining daily activities, tasks, and journey-related information',
        'image' => 'thumb/desk/crew-mobility-management.webp',
        'mobileImage' => 'thumb/mobile/crew-mobility-management.webp',
        'alt' => 'Mobility Platform for Crew Ship workforce management',
        'link' => 'crew-mobility-management-in-a-cruise.php',
        'case_study_service' => 'digital-health-wellness',
        'case_study_url' => 'case-study/casestudy-crew-mobility-management-in-a-cruise.pdf'
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
                        <div class="contact-left d-none d-md-block">
                            <h1 class="banner-title">
                                End-to-End Product <span class="highlight">Design Solutions</span>
                            </h1>

                            <div class="contact-info d-none d-md-block">
                                <p class="banner-subtext">Bring your product vision to life with user-focused design. Our product design services create engaging, intuitive experiences that drive results.</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Product Design Enquiry</h2>


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
                        <p class="banner-subtext">Bring your product vision to life with user-focused design. Our product design services create engaging, intuitive experiences that drive results.</p>

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
            <h2 class="section-title">Why Choose Us to Design Your Product?</h2>
            <p class="body-text">At Neointeraction Design, we recognize that your SaaS app or digital product is fundamental to your business success. That's why we are dedicated to providing the finest product design services in India, going beyond expectations to deliver exceptional results. Here's why partnering with us to design your product makes a difference.</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/award.svg" alt="Quality design icon"  width="40px" height="40px" />
                            <h3 class="wwd-title">Quality Design </h3>
                            <p class="wwd-text">With over 15 years of experience, we've established ourselves as a leader in the industry, delivering top - notch UX design solutions that drive success.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/db.svg" alt="Data analysis design icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Data-Driven Solutions</h3>
                            <p class="wwd-text">Our design process is grounded in data, ensuring that every decision we make is backed by research and analysis.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/hand-shake.svg" alt="UX UI partnership icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Your reliable UX/UI design partner</h3>
                            <p class="wwd-text">We're here for you, addressing any concerns promptly and consistently to make sure we accelerate your product journey.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/bulb-on.svg" alt="Creative design team icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Exceptional Team</h3>
                            <p class="wwd-text">Our team of UX/UI designers, product designers, and frontend developers is among the best in the industry, with the expertise to deliver pixel-perfect, responsive, and high-performance interfaces that flawlessly translate your vision into engaging user experiences.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/proven-expertise.svg" alt="Track record success icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Proven Track Record</h3>
                            <p class="wwd-text">We consistently deliver high-quality designs on time, earning the trust of clients worldwide across diverse industries. Our focus on precision and excellence ensures every project achieves its goals and goes beyond expectations.</p>
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
                Recent Product Design Projects
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
        <?php include 'components/testimonial.php'; ?>
    </section>


    <!-- demo-video  -->
    <section class="demo-video section-padding">
        <div class="container">
            <h2 class="section-title">Our Design Process</h2>
            <div class="video-container section-margin">

            <div class="youtube-lazy-load" data-id="SSTsj85MzGU?si=B8pq4kK3-ExetQKL"></div>
            </div>
        </div>
    </section>
    <?php include $path . 'components/industry-experience.php'; ?>
    <div class="container">
    <?php 
        $title = 'Connect with Our Product Design Experts'; 
        $desc = 'Partner with Neointeraction Design to elevate your digital experience. Our UX-driven team helps you refine product design and craft seamless journeys that attract users and accelerate business growth.';
        $buttonName = 'Book a UX Consultation';
        $imageLink = "assets/images/about-us/hire-content.webp";
        $imageAlt = "Book a UX Consultation";
        include $path . 'components/hire-designers-engineers.php'; 
    ?>
    </div>
    <!-- testimonials  -->
    <?php $faq_tag = 'product-design'; include 'components/faq.php'; ?>
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
    <script src="<?php echo $path; ?>assets/js/youtube-click-play.js" defer></script>
    <style>
    .youtube-lazy-load {
        background-image: url(./assets/images/youtube/design-process.webp) !important;
    }
    @media (max-width: 768px) {
            .youtube-lazy-load {
                background-image: url(./assets/images/youtube/design-process-mobile.webp) !important;
            }
    }
    </style>
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
