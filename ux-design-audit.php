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
    <title>Expert UX Design Audit in India | Neointeraction Design</title>
    <meta name="description"
        content="Boost your digital presence with our UX Design Audit services in India. Uncover actionable insights for user experiences and drive business growth." />
    <meta name="keywords" content="UX Design Audit in India" />
    <link rel="canonical" href="https://www.neointeraction.com/ux-design-audit" />
    <meta property="og:logo" content="https://www.neointeraction.com/assets/images/header_logo.png" />
    <meta property="og:title" content="Expert UX Design Audit in India | Neointeraction Design" />
    <meta property="og:description"
        content="Boost your digital presence with our UX Design Audit services in India. Uncover actionable insights for user experiences and drive business growth." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/ux-audit-thumbnail.webp" />
    <meta property="og:url" content="https://www.neointeraction.com/ux-design-audit" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Expert UX Design Audit in India | Neointeraction Design" />
    <meta name="twitter:description"
        content="Boost your digital presence with our UX Design Audit services in India. Uncover actionable insights for user experiences and drive business growth." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/ux-audit-thumbnail.webp" />
</head>

<body>
    <?php $page='blog';
    $events = [
        [
            'title' => 'Digital Experience in Health & Wellness',
            'description' => 'Enhancing user experience for digital health and wellness platforms.',
             'image'=> 'thumb/desk/mega-we-care-homepage-banner.webp',
            'mobileImage'=> 'thumb/mobile/mega-we-care-homepage-banner.webp',
            'alt' => 'UX Audit for a Health and Wellness Brand',
            'link' => 'digital-health-wellness.php',
             'case_study_service' => 'digital-health-wellness',
            'case_study_url' => 'case-study/casestudy-ux-audit-website-redesign-for-a-health-and-wellness-brand.pdf'
        ],
        [
            'title' => 'Trade Platform UX Audit',
            'description' => 'A comprehensive UX audit to simplify user journeys and improve the overall experience',
             'image'=> 'trade-platform-audit-banner.webp',
            'mobileImage'=> 'trade-platform-audit-mobile.webp',
            'alt' => 'Trade Platform UX Audit',
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
    <main>
        <!-- banner  -->
        <section class="contact-section section-padding">
            <div class="container">
                <div class="contact-container">
                    <div class="row g-0">
                        <!-- Left Side -->
                        <div class="col-lg-6">
                            <div class="contact-left d-none d-md-block">
                                <h1 class="banner-title">
                                    Unlock Full Potential <br>with <span class="highlight">UX Audit</span>
                                </h1>

                                <div class="contact-info d-none d-md-block">
                                    <p class="banner-subtext">Unlock your web and mobile apps’ potential with expert UX
                                        design audits. Identify issues, optimize experiences, and drive growth with
                                        data-driven insights.</p>

                                </div>
                            </div>
                        </div>

                        <!-- Right Side -->
                        <div class="col-lg-6">
                            <div class="contact-right">
                                <h2 class="form-title">Book your UX Audit</h2>


                                <form id="contactForm">
                                    <div class="form-group">
                                        <label for="lp_name" class="form-label">Name*</label>
                                        <input type="text" id="lp_name" name="lp_name" class="form-control custom-input" placeholder="Enter name" required>
                                        <div id="lp_name-error" class="text-danger" aria-live="polite"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lp_work_email" class="form-label">Work email*</label>
                                        <input type="email" id="lp_work_email" name="lp_work_email" class="form-control custom-input" placeholder="Enter work email"
                                            pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                                        <div id="lp_email-error" class="text-danger" aria-live="polite"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lp_mobile_number" class="form-label">Mobile Number*</label>
                                        <input type="tel" id="lp_mobile_number" name="lp_mobile_number" class="form-control custom-input"
                                            placeholder="Enter mobile number (e.g. +91 98765 43210)" pattern="^\+?[0-9]{10,15}$" required
                                            oninput="this.value = this.value.replace(/[^0-9+]/g, '');">
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
                                        <button type="button" class="btn btn-custom" id="lp_contact-submit-btn" onclick="submitLPForm()">
                                            Submit Enquiry
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>

                        <div class="contact-info d-flex d-md-none">
                            <p class="banner-subtext">Unlock your web and mobile apps’ potential with expert UX
                                design audits. Identify issues, optimize experiences, and drive growth with
                                data-driven insights.</p>

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

        <section class="industry-experience section-padding">
            <div class="container">
                <h2 class="section-title">Why Companies chose us for their UX Design Audit ?</h2>
                <div class="what-we-do-block section-margin">
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3">
                            <div class="wwd-item">
                                <img src="<?php echo $path; ?>assets/images/icons/target.svg" alt="Business understanding icon" width="40" height="40" />
                                <h3 class="wwd-title">Understand Business </h3>
                                <p class="wwd-text">Neointeraction’s UX/UI experts engage with stakeholders in 1-on-1
                                    sessions to align on business goals.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3">
                            <div class="wwd-item">
                                <img src="<?php echo $path; ?>assets/images/icons/search.svg" alt="Heuristic evaluation icon" width="40" height="40" />
                                <h3 class="wwd-title">Hueristic Evaluation</h3>
                                <p class="wwd-text">We assess your website/app using design principles by tracing the user journey.</p>
                            </div>

                        </div>
                        <div class="col-12 col-md-3 col-lg-3">
                            <div class="wwd-item">
                                <img src="<?php echo $path; ?>assets/images/icons/new.svg" alt="UX audit report icon" width="40" height="40" />
                                <h3 class="wwd-title">Audit reports</h3>
                                <p class="wwd-text">We create a report highlighting hidden UX/UI gaps affecting user
                                    engagement.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3">
                            <div class="wwd-item">
                                <img src="<?php echo $path; ?>assets/images/icons/bulb.svg" alt="Design solutions icon" width="40" height="40" />
                                <h3 class="wwd-title">Suggest Solutions</h3>
                                <p class="wwd-text">We provide actionable design recommendations, quick fixes, and strategic
                                    insights in a detailed report.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="business-success section-padding">
            <div class="container">
                <h2 class="section-title">
                    Why conduct a UX Audit?
                </h2>
                <div class="bs-card-section section-margin">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="custom-card">
                                <div class="icon-container">
                                    <img src="<?php echo $path; ?>assets/images/funnel.svg" alt="Conversion funnel icon" width="40" height="40"  />
                                </div>
                                <h3 class="title">Low conversion rates</h3>
                                <p class="description">
                                    Improve user journey to boost conversion rates effectively.
                                </p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="custom-card">
                                <div class="icon-container">
                                    <img src="<?php echo $path; ?>assets/images/hand-pointer.svg" alt="Usability testing icon" width="40" height="40"  />
                                </div>
                                <h3 class="title">Uncover Usability Issues</h3>
                                <p class="description">
                                    Identify design flaws to improve usability and user satisfaction.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="custom-card">
                                <div class="icon-container">
                                    <img src="<?php echo $path; ?>assets/images/a11y.svg" alt="Accessibility icon" width="40" height="40" />
                                </div>
                                <h3 class="title">Ensure Accessibility</h3>
                                <p class="description">
                                    Design inclusively to provide equal access for every user.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="custom-card">
                                <div class="icon-container">
                                    <img src="<?php echo $path; ?>assets/images/file.svg" alt="Data analytics icon" width="40" height="40" />
                                </div>
                                <h3 class="title">Data-Driven Decisions</h3>
                                <p class="description">
                                    Leverage insights to optimize strategies and outcomes.
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
                    Recent Ux Project
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




        <section class="demo-video section-padding">
            <div class="container">
                <h2 class="section-title">Our UX Audit Process</h2>
                <div class="video-container section-margin">
                    <!-- <iframe class="video-iframe" height="650"  src="https://www.youtube-nocookie.com/embed/AbRHZ6M6gwM?si=yP7lOJJA_2PAnzTh" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy" style="width:100%;border-radius: 0; border: none;"></iframe> -->
                    <div class="youtube-lazy-load" data-id="AbRHZ6M6gwM?si=yP7lOJJA_2PAnzTh"></div>
                </div>
            </div>
        </section>
    <?php include $path . 'components/industry-experience.php'; ?>
    <div class="container">
        <?php 
            $title = 'Start Your UX Audit Consultation'; 
            $desc = 'Uncover usability gaps and opportunities to optimize your product experience. Our UX experts will review your platform and provide actionable insights for measurable improvements.';
            $buttonName = 'Get a Free consultation';
            $imageLink = "assets/images/about-us/hire-ui.webp";
            $imageAlt = "Get a Free consultation";
            include $path . 'components/hire-designers-engineers.php'; 
        ?>
        </div>
        <!-- testimonials  -->
        <?php $faq_tag = 'ux-audit'; include 'components/faq.php'; ?>
        <!-- testimonials -- end  -->
    </main>
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
     <script src="<?php echo $path; ?>assets/js/youtube-click-play.js" defer></script>
    <style>
    .youtube-lazy-load {
        background-image: url(./assets/images/youtube/ux-audit-process.webp) !important;
    }
    @media (max-width: 768px) {
            .youtube-lazy-load {
                background-image: url(./assets/images/youtube/ux-audit-process-mobile.webp) !important;
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
