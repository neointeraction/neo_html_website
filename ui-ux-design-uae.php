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
    <title>Best UI UX agency in UAE | UI UX Services | Neointeraction Design</title>
    <meta name="description"
        content="Neointeraction, a leading UI UX agency in the UAE, delivers expert UI UX services to improve user experiences and drive engagement with our expert design solutions." />
    <meta name="keywords" content="UI UX agency in UAE, UI UX Services" />
    <link rel="canonical" href="https://www.neointeraction.com/blog" />
    <meta property="og:title" content="Expert UX Design Audit in UAE | Neointeraction Design | Contact Us" />
    <meta property="og:description"
        content="Boost your digital presence with our  UX Design Audit services in UAE. Uncover actionable insights for user experiences and drive business growth" />
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
  $events = [
    [
        'title' => 'Commercial Bank of Dubai',
        'description' => 'Redesign for Commercial and Retail Bank in the Middle East to reach new customers with improved experience design.',
        'mobileImage' => 'projects/dubai-banking/dubai-bank-homepage-banner-listing.jpg',
        'image' => 'projects/dubai-banking/dubai-bank-homepage-banner.jpeg',
        'alt' => 'Commercial Bank of Dubai',
        'link' => 'revolutionizing-banking-experiences.php'
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
                                Ideas to Impact: <br /><span class="highlight"> UAE's Leading UI/UX Design Agency</span>
                            </h1>

                            <div class="contact-info d-none d-md-block">
                                <p class="banner-subtext">NeoInteraction Design delivers user-centric UI/UX solutions in
                                    the UAE, creating engaging digital experiences for websites and apps that drive
                                    results and growth.</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Design Enquiry for UAE Clients</h2>


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
                                        placeholder="Enter mobile number" pattern="^\+?[0-9]{10,15}$"
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
                        <p class="banner-subtext">NeoInteraction Design delivers user-centric UI/UX solutions in the
                            UAE, creating engaging digital experiences for websites and apps that drive results and
                            growth.</p>

                    </div>
                </div>
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
                    <?php 
                        $client_tag = 'uae';
                    include 'components/clients.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- clients -- end  -->


    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">Why UAE Companies chose us for their product?</h2>
            <p class="body-text">At Neointeraction Design, we understand that your digital product is the cornerstone of
                your business. That's why we're committed to delivering best product design services that not only meet
                but exceed your expectations. Here's why US clients choose us to design and develop their product</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/diamond.svg" alt="Quality assurance diamond icon" />
                            <h4 class="wwd-title">Quality Assurance </h4>
                            <p class="wwd-text">While our rates may be competitive, our commitment to quality remains
                                unwavering. With over 15 years of industry experience, our team of experts is dedicated
                                to delivering superior design solutions that not only meet but exceed your expectations,
                                ensuring optimal user experiences and driving your brand's success.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/book.svg" alt="Value packages icon" />
                            <h4 class="wwd-title">Value-Packed Packages</h4>
                            <p class="wwd-text">Our service packages are designed to offer maximum value for your
                                investment. Enjoy a comprehensive range of services, including UX/UI design, product
                                design, and frontend development, all bundled together to streamline your project
                                workflow and enhance efficiency.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/optimise.svg" alt="Cost efficiency team icon" />
                            <h4 class="wwd-title">Cost-Optimized Outsourcing</h4>
                            <p class="wwd-text">Outsource to maximize cost efficiency and optimize your project expenses
                                while still receiving top-notch design services</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/data.svg" alt="Data analytics process icon" />
                            <h4 class="wwd-title">Data-Driven Solutions</h4>
                            <p class="wwd-text">Our design process is grounded in data, ensuring that every decision we
                                make is backed by research and analysis.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/plane.svg" alt="Handshake partnership icon" />
                            <h4 class="wwd-title">Your reliable UX/UI design partner</h4>
                            <p class="wwd-text">We're here for you, addressing any concerns promptly and consistently to
                                make sure we accelerate your product journey.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/team.svg" alt="Professional team icon" />
                            <h4 class="wwd-title">Exceptional Team</h4>
                            <p class="wwd-text">Our team of ux/ui designers, product designers and frontend developers
                                is among the best in the industry, with the skills and expertise to bring your vision to
                                life.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/record.svg" alt="Success growth icon" />
                            <h4 class="wwd-title">Proven Track Record</h4>
                            <p class="wwd-text">We have a proven track record of success, with numerous satisfied
                                clients across diverse domains.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include $path . 'components/our-services-landing.php'; ?>

    <!-- testimonials  -->
    <?php include 'components/testimonial.php'; ?>
    <!-- testimonials -- end  -->

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
                                <div class="col-lg-6 p-0 project-image-container">
                                    <img src="<?php echo $path; ?>assets/images/<?php echo $event['image']; ?>"
                                        alt="<?php echo $event['alt']; ?>"
                                        class="img-fluid project-image d-none d-md-block" width="100%" height="auto" />
                                    <img src="<?php echo $path; ?>assets/images/<?php echo $event['mobileImage']; ?>"
                                        alt="<?php echo $event['alt']; ?>"
                                        class="img-fluid project-image d-flex d-md-none" width="100%" height="auto" />
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

    <section class="section-padding">
        <div class="container">
            <div class="blog-quote-block project-quote-block">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-3">
                        <div class="p-logo d-flex align-items-center justify-content-start justify-content-md-center">
                            <img src="<?php echo $path; ?>assets/images/projects/client-logos/commercial-bank-of-dubai-logo.svg"
                                alt="commercial-bank-of-dubai-logo" />
                            <div class="quote-icon-right d-block d-md-none"></div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="quote-icon d-none d-md-block"></div>
                        <p class="blog-quote-text">The visual appeal and the new banking experience led us to overcome
                            the competition and we’re very happy with the result the design team delivered.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- demo-video  -->
    <section class="demo-video section-padding">
        <div class="container">
            <h2 class="section-title">Our Process</h2>
            <div class="video-container section-margin">

                <iframe width="100%" height="650" src="https://www.youtube-nocookie.com/embed/SSTsj85MzGU?si=B8pq4kK3-ExetQKL"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy" style="border-radius: 0;"></iframe>
            </div>
        </div>
    </section>

    <!-- dev-cycle  -->
    <!-- <section class="dev-cycle section-padding">
        <div class="container">
            <h2 class="section-title">
                Supporting 70% of Product Development cycle
            </h2>
            <p class="body-text">Neointeraction UX UI design agency with 15 years of expertise, has collaborated with various industry sectors and provided UX design & Frontend development services for business enterprises & startups to achieve their business goals.</p>
            <div class="dev-cycle-blocks section-margin">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="dev-cycle-block">
                            <img src="<?php echo $path; ?>assets/images/tick-circle.svg" alt="tick-circle" class="dcb-icon" />
                            <h4 class="dcb-title">UX Design</h4>
                            <ul class="dcb-list">
                                <li>User Research</li>
                                <li>UX Audit</li>
                                <li>Customer Journey Mapping</li>
                                <li>Persona Development</li>
                                <li>IA Validation</li>
                                <li>UX Strategy & Prototyping</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="dev-cycle-block">
                            <img src="<?php echo $path; ?>assets/images/tick-circle.svg" alt="tick-circle" class="dcb-icon" />
                            <h4 class="dcb-title">UI Design</h4>
                            <ul class="dcb-list">
                                <li>Design Systems</li>
                                <li>Brand Elements</li>
                                <li>Custom Graphics</li>
                                <li>UI Handoff</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="dev-cycle-block">
                            <img src="<?php echo $path; ?>assets/images/tick-circle.svg" alt="tick-circle" class="dcb-icon" />
                            <h4 class="dcb-title">UI Development</h4>
                            <ul class="dcb-list">
                                <li>Micro Frontend Architecture</li>
                                <li>Modular Component Building</li>
                                <li>Story Books</li>
                                <li>API Integration</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="dev-cycle-block disabled">
                            <img src="<?php echo $path; ?>assets/images/close-circle.svg" alt="close-circle" class="dcb-icon" />
                            <h4 class="dcb-title">Backend & Integration</h4>
                            <ul class="dcb-list">
                                <li>DB Design</li>
                                <li>API Development</li>
                                <li>QA</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- dev-cycle -- end -->

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
    <?php $faq_tag = 'uae'; include 'components/faq.php'; ?>
    <!-- testimonials -- end  -->
    <div class="mb-4 mb-md-0"></div>
    <?php include $path . 'components/registration-modal.php'; ?>
    <script src="<?php echo $path; ?>assets/js/lp-enquiry.js"></script>
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
