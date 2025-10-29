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
    <title>Banking and Fintech Solutions India | Fintech banking solutions | Neointeraction Design</title>
    <meta name="description"
        content="Discover innovative Banking and Fintech Solutions India! At NeoInteraction Design, we redefine fintech and banking through cutting-edge UX/UI design." />
    <meta name="keywords" content="UX/UI design, Banking and Fintech Solutions India" />
    <link rel="canonical" href="https://www.neointeraction.com/banking-and-fintech-solutions" />
    <meta property="og:title" content="Banking and Fintech Solutions India | Fintech banking solutions | Neointeraction Design" />
    <meta property="og:description"
        content="Discover innovative Banking and Fintech Solutions India! At NeoInteraction Design, we redefine fintech and banking through cutting-edge UX/UI design." />
    <meta property="og:logo" content="https://www.neointeraction.com/assets/images/header_logo.png" />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/fintech-design-thumbnail.webp" />
    <meta property="og:url" content="https://www.neointeraction.com/banking-and-fintech-solutions" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="jDr4aVGcjUUHdNv8SD5bpXt6-kwDs5rDAbNqhXDrENY" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Banking and Fintech Solutions India | Fintech banking solutions | Neointeraction Design" />
    <meta name="twitter:description"
        content="Discover innovative Banking and Fintech Solutions India! At NeoInteraction Design, we redefine fintech and banking through cutting-edge UX/UI design." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/fintech-design-thumbnail.webp" />
</head>

<body>
    <?php $page='landing';
    
    $events = [
    [
        'title' => 'Redesign Digital banking platform for Commercial Bank of Dubai',
        'description' => 'Creating a user friendly modern banking platform for young professionals, expats, and native youth',
        'image' => 'thumb/desk/dubai-bank-homepage-banner.webp',
        'mobileImage'=> 'thumb/mobile/dubai-bank-homepage-banner.webp',
        'alt' => 'Redesign Digital banking platform for Commercial Bank of Dubai',
        'link' => 'revolutionizing-banking-experiences.php',
        'case_study_service' => 'revolutionizing-banking-experiences',
        'case_study_url' => 'case-study/casestudy-revolutionizing-banking-experiences-at-dubai-bank.pdf'
    ],
    [
        'title' => 'Share Trading platform redesign',
        'description' => 'Trading platform revamped to offer users a unified experience accessible across devices',
        'image' => 'thumb/desk/geogit-homepage-banner.webp',
        'mobileImage'=> 'thumb/mobile/geogit-homepage-banner.webp',
        'alt' => 'Share Trading platform redesign',
        'link' => 'share-trading-platform.php',
        'case_study_service' => 'share-trading-platform',
        'case_study_url' => 'case-study/case-study-share-trading-platform-redesign.pdf'
    ],]
 
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
                                Designing <br><span class="highlight">Banking and Fintech Solutions</span>
                            </h1>

                            <div class="contact-info d-none d-md-block">
                                <p class="banner-subtext">Transforming banking and fintech with user-friendly digital solutions that drive engagement, simplify transactions, and deliver measurable results.</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Fintech Project Enquiry</h2>

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
                                    <input type="tel" id="lp_mobile_number" name="lp_mobile_number" class="form-control custom-input" placeholder="Enter mobile number (e.g. +91 98765 43210)"
                                        pattern="^\+?[0-9]{10,15}$" required oninput="this.value = this.value.replace(/[^0-9+]/g, '');">
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
                        <p class="banner-subtext">Transforming banking and fintech with user-friendly digital solutions that drive engagement, simplify transactions, and deliver measurable results.</p>

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
                    <?php 
                      $client_tag = 'fintech';
                    include 'components/clients.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- clients -- end  -->

    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">Why Choose Us for Your Banking and Fintech Solutions?</h2>
            <p class="wwd-text">At Neointeraction Design, we specialize in creating next-generation digital products for online banking, digital payments, trading apps, NBFC platforms, and financial dashboards. We understand that your fintech or SaaS product is at the core of your business success, which is why we deliver user-focused designs tailored to your unique goals. With deep domain expertise and an innovative approach, we craft secure, engaging, and high-performing experiences that build customer trust and drive business growth. Partner with us to transform your financial product into a market-leading digital solution.
</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/coin.svg" alt="Fintech banking UX design icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Expertise in Fintech and Banking UX Design</h3>
                            <p class="wwd-text">We lead the industry with a profound understanding of digital banking, conversational banking, AI-powered agentic UX, financial planning, and trading solutions. Collaborating with financial professionals, we craft user-centric experiences that build engagement and trust.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/customer-centric.svg" alt="Customer-centric solutions icone" width="40px" height="40px" />
                            <h3 class="wwd-title">Customer-Centric Solutions</h3>
                            <p class="wwd-text">Our UX/UI designs address the evolving needs of customers and institutions alike. Using an AI-assisted design process, we create intuitive solutions that improve user experiences across digital banking platforms, conversational interfaces, and financial dashboards.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/research-driven.svg" alt="Research-driven UX approach icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Research-Driven Approach</h3>
                            <p class="wwd-text">Through detailed qualitative research, we uncover pain points in existing fintech processes and translate them into innovative, AI-enhanced digital products. This insight-driven methodology ensures meaningful impact and improved outcomes for users and businesses.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/calendar-driven.svg" alt="Fintech domain expertise icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Domain Expertise and Guidance</h3>
                            <p class="wwd-text">Our fintech and banking experts provide strategic mentorship throughout the design process, aligning solutions with industry standards and the fast-changing financial landscape to secure long-term success.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/ui-design.svg" alt="Future-focused design icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Future-Focused Design Solutions</h3>
                            <p class="wwd-text">We anticipate emerging trends and develop scalable, adaptable designs that prepare clients for tomorrow’s challenges, ensuring sustained relevance in the evolving world of digital finance.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/enterprise.svg" alt="Banking fintech solutions icon" width="40px" height="40px" />
                            <h3 class="wwd-title">Impactful Banking and Fintech Solutions</h3>
                            <p class="wwd-text">From improving digital and conversational banking experiences to implementing AI-powered agentic interfaces for trading and financial planning, we help financial institutions boost efficiency, accessibility, and innovation—driving sustainable growth across markets.</p>
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
                Recent Fintech Design Projects
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


    <!-- testimonials  -->
    <?php include 'components/testimonial.php'; ?>
    <!-- testimonials -- end  -->

    <!-- demo-video  -->
    <section class="demo-video section-padding">
        <div class="container">
            <h2 class="section-title">Our Design Process</h2>
            <div class="video-container section-margin">

                <iframe width="100%" height="650" src="https://www.youtube-nocookie.com/embed/SSTsj85MzGU?si=_lPo5JZDsP3tnIZR" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen loading="lazy" style="border-radius: 0;"></iframe>
            </div>
        </div>
    </section>


    <?php 
        $title = 'Start Your Consultation with Our UX Experts'; 
        $desc = 'Partner with Neointeraction Design to elevate your digital experience. Our UX-driven team helps you uncover user pain points, refine fintech product design, and craft seamless journeys that attract users and accelerate business growth.';
        $buttonName = 'Book a UX Consultation';
        $imageLink = "assets/images/about-us/hire-coder.webp";
        $imageAlt = "Book a UX Consultation";
        include $path . 'components/hire-designers-engineers.php'; 
    ?>

    <!-- testimonials  -->
    <?php $faq_tag = 'fintech'; include 'components/faq.php'; ?>
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