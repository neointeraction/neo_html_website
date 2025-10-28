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
    <title>Healthcare Design India | Health care design services | Neointeraction Design</title>
    <meta name="description" content="Expert Healthcare Design India: Innovative solutions for modern medical facilities. Contact us for best UX/UI design solutions." />
    <meta name="keywords" content="Healthcare Design India, Health care design services" />
    <link rel="canonical" href="https://www.neointeraction.com/health-care-design-services" />
    <meta property="og:title" content="Best Healthcare Design India | Neointeraction Design | Contact Us" />
    <meta property="og:description" content="Expert Healthcare Design India: Innovative solutions for modern medical facilities. Contact us for best UX/UI design solutions." />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="2500" />
    <meta property="og:image:height" content="1330" />
    <meta property="og:url" content="https://www.neointeraction.com/health-care-design-services" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="jDr4aVGcjUUHdNv8SD5bpXt6-kwDs5rDAbNqhXDrENY" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Healthcare Design India | Health care design services | Neointeraction Design" />
    <meta name="twitter:description" content="Expert Healthcare Design India: Innovative solutions for modern medical facilities. Contact us for best UX/UI design solutions." />
    <meta name="twitter:image" content="" />
</head>

<body>
    <?php $page='landing';

 $events = [
    [
        'title' => 'UX Design for Biomedical Reserach Platform',
        'description' => 'A platform that focuses on managing biomedical data complexities amid advancements in technology',
        'image'=> 'thumb/desk/euclid-homepage-banner.webp',
        'mobileImage'=> 'thumb/mobile/euclid-homepage-banner.webp',
        'alt' => 'UX Design for Biomedical Reserach Platform',
        'link' => 'euclid-biomedical-research-platform.php'
    ],
    [
        'title' => 'Redesigning Tricogs AI Driven Healthcare Platform',
        'description' => 'AI-driven predictive healthcare platform that improves heart failure patient care',
          'image'=> 'thumb/desk/tricog-homepage-banner.webp',
        'mobileImage'=> 'thumb/mobile/tricog-homepage-banner.webp',
        'alt' => 'Redesigning Tricogs AI Driven Healthcare Platform',
        'link' => 'ai-driven-healthcare-consultation-platform.php'
    ]
    ];

   $clients = [
    [
        'name'=> 'Vidal',
        'image'=> 'assets/images/clients/vidal-logo.png'
    ],
    [
        'name'=> 'Lifesignals',
        'image'=> 'assets/images/clients/lifesignals-logo.png'
    ],
    [
        'name'=> 'Tricog',
        'image'=> 'assets/images/clients/tricog-logo.png'
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
                                Transforming <br>Healthcare <span class="highlight">UX Design in India</span>
                            </h1>

                            <div class="contact-info d-none d-md-block">
                                <p class="banner-subtext">We create user-focused healthcare UX solutions that improve
                                    patient experiences and streamline digital interactions. Our UX/UI design and
                                    strategy deliver intuitive, effective, and impactful digital platforms.</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Healthcare Design Enquiry</h2>


                            <form id="contactForm">
                                <div class="form-group">
                                    <label for="lp_name" class="form-label">Name</label>
                                    <input type="text" id="lp_name" name="lp_name" class="form-control custom-input" placeholder="Enter name" required>
                                    <div id="lp_name-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="lp_work_email" class="form-label">Work email</label>
                                    <input type="email" id="lp_work_email" name="lp_work_email" class="form-control custom-input" placeholder="Enter work email"
                                        pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                                    <div id="lp_email-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="lp_mobile_number" class="form-label">Mobile Number</label>
                                    <input type="tel" id="lp_mobile_number" name="lp_mobile_number" class="form-control custom-input"
                                        placeholder="Enter mobile number" pattern="^\+?[0-9]{10,15}$" required
                                        oninput="this.value = this.value.replace(/[^0-9+]/g, '');">
                                    <div id="lp_mobile-error" class="text-danger" aria-live="polite"></div>
                                </div>

                                <div class="form-group">
                                    <label for="lp_designation" class="form-label">Which service would you like to
                                        request?*</label>
                                    <input id="lp_designation" name="lp_designation" class="form-control custom-input" placeholder="Enter your service request here" required>
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
                        <p class="banner-subtext">We create user-focused healthcare UX solutions that improve patient
                            experiences and streamline digital interactions. Our UX/UI design and strategy deliver
                            intuitive, effective, and impactful digital platforms.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- clients  -->
    <section class="clients section-padding">
        <div class="container">
            <h2 class="section-title">
                Our Healthcare Clients
            </h2>
            <div class="scroll-client-container section-margin">
                <div class="d-flex flex-column flex-md-row scrolling-client-logos">
                    <?php 
                        $client_tag = 'healthcare';
                    include 'components/clients.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- clients -- end  -->






    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">Why Choose Us to Design Your Healthcare Product?</h2>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/building.svg" alt="qa" />
                            <h4 class="wwd-title">Expertise in Healthcare UX Design</h4>
                            <p class="wwd-text">Leading the industry with expertise in healthcare, we collaborate
                                closely with healthcare professionals to create enhanced user-centric experiences.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/chart.svg" alt="value" />
                            <h4 class="wwd-title">Patient and Doctor-Centric Solutions</h4>
                            <p class="wwd-text">Our UI/UX designs are driven by emerging user needs, leveraging the
                                latest AI/ML technology to deliver efficient clinical healthcare UX solutions that
                                prioritize the needs of both patients and healthcare providers.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/care.svg" alt="optimise" />
                            <h4 class="wwd-title">Research-Driven Insights</h4>
                            <p class="wwd-text">Conducting UX qualitative research, we identify critical pain points in
                                existing healthcare processes and translate them into innovative digital solutions,
                                ensuring meaningful impact and improved outcomes.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/balancer.svg" alt="data" />
                            <h4 class="wwd-title">Domain Expertise and Mentorship</h4>
                            <p class="wwd-text">With strong domain expertise and multidisciplinary support, we create
                                value-based solutions for medical web/mobile apps that align with industry standards and
                                address the evolving needs of the healthcare sector.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/enterprise.svg" alt="plane" />
                            <h4 class="wwd-title">Future-Focused Design Solutions</h4>
                            <p class="wwd-text">Committed to creating omnipresent healthcare UX design solutions, we
                                bring precision medical practices closer to users through innovative design approaches
                                that anticipate and adapt to future trends.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/enterprise.svg" alt="plane" />
                            <h4 class="wwd-title">Impactful Healthcare Solutions</h4>
                            <p class="wwd-text">From leveraging medical wearables to telehealth platforms and AI-powered
                                systems, we've optimized healthcare workflows to deliver better results for users,
                                enhancing accessibility, efficiency, and overall holistic patient experience.</p>
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
                Recent Healthcare Design Projects
            </h2>
            <div class="engagement-modal-block section-margin">
                <?php foreach ($events as $event) { ?>
                <div class="project-block-item">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="project-card d-lg-flex">
                                <div class="col-lg-6 p-0 project-image-container">
                                    <img src="<?php echo $path; ?>assets/images/projects/<?php echo $event['image']; ?>" alt="<?php echo $event['alt']; ?>"
                                        class="img-fluid project-image d-none d-md-block" width="584" height="280" />
                                    <img src="<?php echo $path; ?>assets/images/projects/<?php echo $event['mobileImage']; ?>" alt="<?php echo $event['alt']; ?>"
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
                                        <button class="btn btn-custom">
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
                <iframe src="https://www.youtube-nocookie.com/embed/SSTsj85MzGU?si=_lPo5JZDsP3tnIZR" title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen loading="lazy" style="border-radius: 0;"></iframe>
            </div>
        </div>
    </section>




    <?php include $path.'components/hire-designers-engineers.php'; ?>
    <!-- testimonials  -->
    <?php $faq_tag = 'healthcare'; include 'components/faq.php'; ?>
    <!-- testimonials -- end  -->
    <div class="mb-4 mb-md-0"></div>
    <?php include $path . 'components/registration-modal.php'; ?>
    <script src="<?php echo $path; ?>assets/js/lp-enquiry.js"></script>
    <?php include $path.'components/footer.php'; ?>
    <?php include $path.'includes/footer-additional-scripts.php'; ?>
    <?php include $path.'includes/js.php'; ?>
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