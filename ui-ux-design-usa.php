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
    <title>Best UI UX agency in USA | UI UX Services | Neointeraction Design</title>
    <meta name="description" content="Leading UI UX agency in USA offering top UI UX services. Boost user experiences with our innovative design solutions. Contact us for expert services."/>
    <meta name="keywords" content="UI UX agency in USA, UI UX Services"/>
    <link rel="canonical" href="https://www.neointeraction.com/ui-ux-design-usa"/>
    <meta property="og:title" content="Contact Neointeraction Design | Top UI/UX Agency in the USA | Expert UI/UX Services"/>
    <meta property="og:description" content="Transforming digital landscapes, our UI UX agency in USA delivers best design solutions for you. Contact us today!"/>
    <meta property="og:image" content=""/>
    <meta property="og:image:width" content="2500"/>
    <meta property="og:image:height" content="1330"/>
    <meta property="og:url" content="https://www.neointeraction.com/ui-ux-design-usa"/>
    <meta property="og:site_name" content="Neointeraction Design"/>
    <meta property="og:type" content="website"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Contact Neointeraction Design | Top UI/UX Agency in the USA | Expert UI/UX Services"/>
    <meta name="twitter:description" content="Transforming digital landscapes, our UI UX agency in USA delivers best design solutions for you. Contact us today!"/>
    <meta name="twitter:image" content=""/>
</head>

<body>
    <?php $page='landing';
    
   $events = [
    [
        'title' => 'Share Trading platform redesign',
        'description' => 'Trading platform revamped to offer users a unified experience accessible across devices',
        'image'=> 'thumb/desk/geogit-homepage-banner.webp',
        'mobileImage'=> 'thumb/mobile/geogit-homepage-banner.webp',
        'alt' => 'Share Trading platform redesign',
        'link' => 'share-trading-platform.php'
    ],
    [
        'title' => 'Redesigning Tricogs AI Driven Healthcare Platform',
        'description' => 'AI-driven predictive healthcare platform that improves heart failure patient care',
        'image'=> 'thumb/desk/tricog-homepage-banner.webp',
        'mobileImage'=> 'thumb/mobile/tricog-homepage-banner.webp',
        'alt' => 'Redesigning Tricogs AI Driven Healthcare Platform',
        'link' => 'ai-driven-healthcare-consultation-platform.php'
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

                            Ideas to Impact: <br><span class="highlight">USA's Leading UI/UX Design Agency</span>


                            </h1>

                            <div class="contact-info d-none d-md-block">
                                <p class="banner-subtext">We craft user-focused digital experiences that captivate and convert. From UX/UI design to frontend development, we deliver seamless, intuitive solutions for web and mobile platforms.</p>

                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Design Enquiry for USA Clients</h2>


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
                                        placeholder="Enter mobile number (e.g. +1234567890)" pattern="^\+?[0-9]{10,15}$"
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
                        <p class="banner-subtext">We craft user-focused digital experiences that captivate and convert. From UX/UI design to frontend development, we deliver seamless, intuitive solutions for web and mobile platforms.</p>

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


    <section class="industry-experience section-padding">
        <div class="container">
            <h2 class="section-title">Why US Companies chose us for their product?</h2>
            <p class="body-text">At Neointeraction Design, we understand that your digital product is the cornerstone of your business. That's why we're committed to delivering best product design services that not only meet but exceed your expectations. Here's why US clients choose us to design and develop their product</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/diamond.svg" alt="Quality Assurance " width="40px" height="40px"  />
                            <h4 class="wwd-title">Quality Assurance </h4>
                            <p class="wwd-text">While our rates may be competitive, our commitment to quality remains unwavering. With over 15 years of industry experience, our team of experts is dedicated to delivering superior design solutions that not only meet but exceed your expectations, ensuring optimal user experiences and driving your brand's success.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/book.svg" alt="Value-Packed Packages" width="40px" height="40px"  />
                            <h4 class="wwd-title">Value-Packed Packages</h4>
                            <p class="wwd-text">Our service packages are designed to offer maximum value for your investment. Enjoy a comprehensive range of services, including UX/UI design, product design, and frontend development, all bundled together to streamline your project workflow and enhance efficiency.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/optimise.svg" alt="Cost-Optimized Outsourcing" width="40px" height="40px"  />
                            <h4 class="wwd-title">Cost-Optimized Outsourcing</h4>
                            <p class="wwd-text">Outsource to maximize cost efficiency and optimize your project expenses while still receiving top-notch design services</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/data.svg" alt="Data-Driven Solutions" width="40px" height="40px"  />
                            <h4 class="wwd-title">Data-Driven Solutions</h4>
                            <p class="wwd-text">Our design process is grounded in data, ensuring that every decision we make is backed by research and analysis.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/plane.svg" alt="UX/UI design partner" width="40px" height="40px"  />
                            <h4 class="wwd-title">Your reliable UX/UI design partner</h4>
                            <p class="wwd-text">We're here for you, addressing any concerns promptly and consistently to make sure we accelerate your product journey.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/team.svg" alt="Exceptional Team" width="40px" height="40px"  />
                            <h4 class="wwd-title">Exceptional Team</h4>
                            <p class="wwd-text">Our team of ux/ui designers, product designers and frontend developers is among the best in the industry, with the skills and expertise to bring your vision to life.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/icons/record.svg" alt="Proven Track Record" width="40px" height="40px"   />
                            <h4 class="wwd-title">Proven Track Record</h4>
                            <p class="wwd-text">We have a proven track record of success, with numerous satisfied clients across diverse domains.</p>
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
                    Our Services
                </h2>
                <button class="btn btn-custom mb-4" data-service="usa" data-bs-toggle="modal" data-bs-target="#registerModal" style="width:fit-content;">
                    Start your project
                </button>
            </div>
            <div class="bs-card-section section-margin">
                <div class="row justify-content-center">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="custom-card">
                            <div class="icon-container">
                                <img src="assets/images/ux.svg" alt="UX Design"  width="40px" height="40px"  />
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
                                <img src="assets/images/pd.svg" alt="Product Design" width="40px" height="40px"   />
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
                                <img src="assets/images/dt.svg" alt="UX Audit" width="40px" height="40px"   />
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
                                <img src="assets/images/fd.svg" alt="UI Engineering"  width="40px" height="40px"  />
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
            Recent Projects
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
                
                <iframe width="100%" height="650" src="https://www.youtube-nocookie.com/embed/d_rEmpCVHAI?si=ZPQ5SxsTSvOkJsIW" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen loading="lazy" style="border-radius: 0;"></iframe>
            </div>
        </div>
    </section>

 

    <section class="industry-experience section-padding mb-5">
        <div class="container">
            <h2 class="section-title">Industry Experience</h2>
            <p class="body-text">Neointeraction Design is an expert frontend development company in India that specialize in implementing pixel-perfect UI designs across diverse industries, driving successful outcomes for enterprise solutions, startup ventures, and B2C products enhancing user experiences and boosts business performance.</p>
            <div class="what-we-do-block section-margin">
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/ob.svg" alt="Online Banking" width="40px" height="40px"  />
                            <h4 class="wwd-title">Online Banking</h4>
                            <p class="wwd-text">Revolutionizing financial interactions with intuitive interfaces and secure transactions.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/cm.svg" alt="Capital Market" width="40px" height="40px"  />
                            <h4 class="wwd-title">Capital Market</h4>
                            <p class="wwd-text">Empowering investors with data-driven insights and intuitive trading platforms.</p>
                        </div>

                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/healthcare.svg" alt="Healthcare"  width="40px" height="40px" />
                            <h4 class="wwd-title">Healthcare</h4>
                            <p class="wwd-text">Redefining patient care through user-centric healthcare platforms, enhancing wellness journeys. </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/iot.svg" alt="IOT"  width="40px" height="40px" />
                            <h4 class="wwd-title">IoT</h4>
                            <p class="wwd-text">Connecting the world through seamless digital ecosystems, powering smarter user experiences.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/th.svg" alt="Travel and Hospitality" width="40px" height="40px"  />
                            <h4 class="wwd-title">Travel and Hospitality</h4>
                            <p class="wwd-text">Crafting memorable customer digital journeys, from booking to exploration, for unforgettable experiences.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/es.svg" alt="Enterprise Solutions" width="40px" height="40px"  />
                            <h4 class="wwd-title">Enterprise Solutions</h4>
                            <p class="wwd-text">Tailored digital solutions that streamline operations and drive scalable growth.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/ob.svg" alt="Startup Ventures"  width="40px" height="40px" />
                            <h4 class="wwd-title">Startup Ventures</h4>
                            <p class="wwd-text">Driving digital innovation with agile solutions that disrupt markets and fuel rapid growth.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <div class="wwd-item">
                            <img src="<?php echo $path; ?>assets/images/industry-experience/es.svg" alt="B2C"  width="40px" height="40px" />
                            <h4 class="wwd-title">B2C</h4>
                            <p class="wwd-text">Enhancing consumer experiences with engaging and intuitive digital platforms</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include $path . 'components/registration-modal.php'; ?>
    <script src="<?php echo $path; ?>assets/js/lp-enquiry.js"></script>


    <?php include $path.'components/hire-designers-engineers.php'; ?>
    <!-- testimonials  -->
    <?php $faq_tag = 'usa'; include 'components/faq.php'; ?>
    <!-- testimonials -- end  -->
    <div class="mb-4 mb-md-0"></div>
    <?php include $path.'components/footer.php'; ?>
    <?php include $path.'includes/footer-additional-scripts.php'; ?>
    <?php include $path.'includes/js.php'; ?>
    <script src="<?php echo $path; ?>assets/js/events.js"></script>
    <script><?php include 'includes/tracking-script.php'; ?></script>  
</body>

</html>
