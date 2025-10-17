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
  <meta name="description" content="Discover innovative Banking and Fintech Solutions India! At NeoInteraction Design, we redefine fintech and banking through cutting-edge UX/UI design."/>
  <meta name="keywords" content="UX/UI design, Banking and Fintech Solutions India" />
  <link rel="canonical" href="https://www.neointeraction.com/banking-and-fintech-solutions"/>
  <meta property="og:title" content="Banking and Fintech Solutions India | Fintech banking solutions | Neointeraction Design"/>
  <meta property="og:description" content="Discover innovative Banking and Fintech Solutions India! At NeoInteraction Design, we redefine fintech and banking through cutting-edge UX/UI design."/>
  <meta property="og:image" content=""/>
  <meta property="og:image:width" content="2500"/>
  <meta property="og:image:height" content="1330"/>
  <meta property="og:url" content="https://www.neointeraction.com/banking-and-fintech-solutions"/>
  <meta property="og:site_name" content="Neointeraction Design"/>
  <meta property="og:type" content="website"/>
  <meta name="google-site-verification" content="jDr4aVGcjUUHdNv8SD5bpXt6-kwDs5rDAbNqhXDrENY"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="Banking and Fintech Solutions India | Fintech banking solutions | Neointeraction Design"/>
  <meta name="twitter:description" content="Discover innovative Banking and Fintech Solutions India! At NeoInteraction Design, we redefine fintech and banking through cutting-edge UX/UI design."/>
  <meta name="twitter:image" content=""/>
</head>

<body>
    <?php $page='landing';
    
    $events = [
    [
        'title' => 'Redesign Digital banking platform for Commercial Bank of Dubai',
        'description' => 'Creating a user friendly modern banking platform for young professionals, expats, and native youth',
        'image' => 'projects/dubai-banking/dubai-bank-homepage-banner-listing.jpg',
        'alt' => 'Redesign Digital banking platform for Commercial Bank of Dubai',
        'link' => 'revolutionizing-banking-experiences.php'
    ],
    [
        'title' => 'Share Trading platform redesign',
        'description' => 'Trading platform revamped to offer users a unified experience accessible across devices',
        'image' => 'projects/share-trading-platform/geogit-homepage-banner-listing.jpg',
        'alt' => 'Share Trading platform redesign',
        'link' => 'share-trading-platform.php'
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
                        <div class="contact-left">
                            <h1 class="banner-title">
                            Redefining Banking  <br> and <span class="highlight">Fintech Solutions in India </span>
                            </h1>

                            <div class="contact-info d-none d-md-block">
                                <p class="banner-subtext">Transforming banking and fintech with user-friendly digital solutions that drive engagement, simplify transactions, and deliver measurable results</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Fintech Project Enquiry</h2>


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

                    <div class="contact-info d-flex d-md-none">
                        <p class="banner-subtext">Transforming banking and fintech with user-friendly digital solutions that drive engagement, simplify transactions, and deliver measurable results</p>

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
            <h2 class="section-title">Why Choose Us for Your Banking and Fintech Solutions?</h2>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/building.svg" alt="qa" />
                            <h4 class="wwd-title">Expertise in Fintech and Banking UX Design</h4>
                            <p class="wwd-text">Leading the industry with our deep understanding of fintech and banking dynamics, we collaborate closely with financial professionals to craft user-centric experiences that drive engagement and trust.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/chart.svg" alt="value" />
                            <h4 class="wwd-title">Customer-Centric Solutions</h4>
                            <p class="wwd-text">Our UX/UI designs are tailored to meet the evolving needs of both customers and financial institutions. Leveraging cutting-edge technologies such as AI and machine learning, we deliver intuitive solutions that enhance the user experience across various banking and fintech platforms.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/care.svg" alt="optimise" />
                            <h4 class="wwd-title">Research-Driven Approach</h4>
                            <p class="wwd-text">Through rigorous qualitative research, we identify pain points in existing financial processes and translate them into innovative digital solutions. Our insights-driven approach ensures that our designs have a meaningful impact and deliver improved outcomes for both users and businesses.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/balancer.svg" alt="data" />
                            <h4 class="wwd-title">Domain Expertise and Guidance</h4>
                            <p class="wwd-text">With a team of experts in fintech and banking, we provide valuable mentorship and guidance throughout the design process. Our solutions align with industry standards and address the dynamic needs of the financial sector, ensuring long-term success for our clients.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/enterprise.svg" alt="plane" />
                            <h4 class="wwd-title">Future-Focused Design Solutions</h4>
                            <p class="wwd-text">Committed to staying ahead of the curve, we anticipate future trends and design solutions that are scalable and adaptable. Our forward-thinking approach ensures that our clients are well-prepared to meet the challenges of tomorrow's financial landscape.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/enterprise.svg" alt="team" />
                            <h4 class="wwd-title">Impactful Banking and Fintech Solutions</h4>
                            <p class="wwd-text">From optimizing digital banking platforms to revolutionizing payment systems and implementing AI-driven solutions, we've helped financial institutions enhance efficiency, accessibility, and overall user experience, driving growth and innovation in the industry.</p>
                        </div>
                    </div>
                 


                </div>
            </div>
        </div>
    </section>

    <section class="business-success section-padding">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2 class="section-title">
                    Our Services
                </h2>
                <button class="btn btn-custom " data-service="UX Design" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Start your project
                </button>
            </div>
            <div class="bs-card-section section-margin">
                <div class="row justify-content-center">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/ux.svg" alt="ux" />
                            </div>
                            <h4 class="title">UX Design</h4>
                            <p class="description">
                            Shape tomorrow's digital experiences with our UX design services, crafting seamless interactions that align with your brand and business goals.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/pd.svg" alt="pd" />
                            </div>
                            <h4 class="title">Product Design</h4>
                            <p class="description">
                            Revamp your product with our concise Product Design services, seamlessly blending innovative aesthetics and functionality for standout, user-centric solutions.
                            </p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/dt.svg" alt="dt" />
                            </div>
                            <h4 class="title">UX Audit</h4>
                            <p class="description">
                            Revolutionizing design through a seamless blend of creativity and strategic innovation, enhancing overall aesthetic and functionality.
                            </p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/fd.svg" alt="fd" />
                            </div>
                            <h4 class="title">UI Engineering</h4>
                            <p class="description">
                            Merging design and technology for dynamic and precise user interfaces, optimizing the digital experience.
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
                Recent Fintech Design Projects
            </h2>
            <div class="engagement-modal-block section-margin">
                <?php foreach ($events as $event) { ?>
                <div class="project-block-item">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="project-card d-lg-flex">
                                <div class="col-lg-6 p-0 project-image-container">
                                    <img src="<?php echo $path; ?>assets/images/<?php echo $event['image']; ?>"
                                        alt="<?php echo $event['alt']; ?>" class="img-fluid project-image" width="100%"
                                        height="auto" />
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
                
                <iframe width="100%" height="650" src="https://www.youtube.com/embed/SSTsj85MzGU?si=_lPo5JZDsP3tnIZR" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen style="border-radius: 0;"></iframe>
            </div>
        </div>
    </section>




    <?php include $path.'components/hire-designers-engineers.php'; ?>
    <!-- testimonials  -->
    <?php $faq_tag = 'fintech'; include 'components/faq.php'; ?>
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
