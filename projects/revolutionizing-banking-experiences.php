<?php
// This is a placeholder file for Revolutionizing Banking Experiences
// You can add specific content for this project here.
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
  <?php include $path . 'includes/favicon.php'; ?>
  <?php include $path . 'includes/css.php'; ?>
  <?php include $path . 'includes/head-additional-scripts.php'; ?>
<title>Internet Banking App UI UX Design | Dubai Bank | Neointeraction Design</title>
  <meta name="description" content="The Neointeraction design team collaborated with a Dubai bank to redesign the Oracle Flexcube implementation for Internet Banking."/>
  <link rel="canonical" href="https://www.neointeraction.com/internet-banking-ux"/>
  <meta property="og:title" content="Internet Banking App UI UX Design | Dubai Bank | Neointeraction Design"/>
  <meta property="og:description" content="The Neointeraction design team collaborated with a Dubai bank to redesign the Oracle Flexcube implementation for Internet Banking."/>
  <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/dubai-bank-thumbnail.webp"/>
  <meta property="og:image:width" content="2500"/>
  <meta property="og:image:height" content="1330"/>
  <meta property="og:url" content="https://www.neointeraction.com/internet-banking-ux"/>
  <meta property="og:site_name" content="Neointeraction Design"/>
  <meta property="og:type" content="website"/>
  <meta name="google-site-verification" content="jDr4aVGcjUUHdNv8SD5bpXt6-kwDs5rDAbNqhXDrENY"/>
  <meta name="twitter:title" content="Internet Banking App UI UX Design | Dubai Bank | Neointeraction Design"/>
  <meta property="og:description" content="The Neointeraction design team collaborated with a Dubai bank to redesign the Oracle Flexcube implementation for Internet Banking."/>
  <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/dubai-bank-thumbnail.webp"/>
  <meta name="twitter:card" content="summary"/>

</head>

<body>
  <?php
  $page = 'Projects';
  include $path . 'includes/case_study_helper.php';
  ?>
  <?php include $path . 'includes/body-additional-scripts.php'; ?>
  <!-- navbar  -->
  <div class="navbar-container-block">
    <?php include $path . 'components/navigation.php'; ?>
    <?php include $path . 'components/whatsapp.php'; ?>
  </div>
  <!-- navbar  end  -->
  <!-- banner  -->
  <section class="banner section-padding">
    <div class="container">
      <h1 class="banner-title">
        Redesign Retail banking UX for <span class="highlight">Commercial Bank of Dubai</span>
      </h1>
    </div>
    <!-- project-banner-img -->

    <div class="project-banner-img project-banner-img-block d-none d-md-block">
        <div class="pbi-layer1">
            <img src="<?php echo $path; ?>assets/images/projects/dubai-banking/dubai-bank-banner.webp"
            alt="pbanner1" />
        </div>
        <div class="pbi-layer2">
            <img src="<?php echo $path; ?>assets/images/projects/dubai-banking/dubai-bank-banner-float.webp"
                alt="pbanner1" />
        </div>
    </div>
    <div class="project-banner-img project-banner-img-block project-banner-mob d-block d-md-none">
            <div class="pbi-layer1">
                <img src="<?php echo $path; ?>assets/images/projects/dubai-banking/revolutionizing-banking-experiences.webp"
                    alt="pbanner1" />
            </div>
        </div>
    <div class="project-content-block">
      <div class="container">
        <!-- blog-quote-block  -->
        <div class="blog-quote-block project-quote-block">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-3">
              <div class="p-logo d-flex align-items-center justify-content-start justify-content-md-center">
                <img src="<?php echo $path; ?>assets/images/projects/client-logos/commercial-bank-of-dubai-logo.svg" alt="commercial-bank-of-dubai" />
                <div class="quote-icon-right d-block d-md-none"></div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="quote-icon d-none d-md-block"></div>
              <p class="blog-quote-text">
              The visual appeal and the new banking experience led us to overcome the competition and we’re very happy with the result the design team delivered.</p>
            </div>
          </div>
        </div>
        <!-- overview-block -->
        <div class="overview-block project-section-padding">
          <div class="title-flex">
            <h4 class="project-section-title">Overview </h4>
            <button class="btn btn-custom banner-btn consultation-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
                            Book A Consultation
                        </button>
          </div>
          <p class="p-main-text">Dubai Bank aimed to attract and serve young professionals, expats, and native youth by adopting Oracle's Flexcube platform for a streamlined and contemporary banking experience
          </p>
          <!-- <button class="btn btn-custom case-study-mobview ">
            Book A Consultation
          </button> -->
        </div>
        <!-- result-block -->
        <div class="result-block project-section-padding">
          <h4 class="project-section-title">Result </h4>
          <div class="row ">
            <!-- 15+ years expertise -->
            <div class="col-4 col-md-3 count-up-item">
              <div class="count-number" data-target="90" data-type="percent">0</div>
              <div class="count-label">New User Engagement</div>
            </div>
            <!-- 150+ trusted clients -->
            <div class="col-4 col-md-3 count-up-item">
              <div class="count-number" data-target="83">0</div>
              <div class="count-label">Profits</div>
            </div>
            <!-- 80% lives impacted -->
            <div class="col-4 col-md-3 count-up-item pb-0 mt-md-0">
              <div class="count-number" data-target="90" data-type="percent">0</div>
              <div class="count-label">New Customer Acquisition</div>
            </div>

          </div>
        </div>
        <!-- objective-challenges  -->
        <div class="objective-challenges project-section-padding">
          <div class="row">
            <div class="col-md-6">
              <h4 class="project-section-title">Objective </h4>
              <p class="project-body-text">The primary objective was to create a user-friendly and modern look for diverse user groups including young professionals, expats, and native youth. The aim was to make everyday transactions easy and improve the overall user experience.</p>
            </div>
            <div class="col-md-6">
              <h4 class="project-section-title ps-responsive-margin">Challenges </h4>
              <p class="project-body-text">With a vision to get closer to customers, the bank team decided to implement their core banking application using Oracle’s Flexcube platform. The main challenge was to make the app attractive to various retail user types, making transactional journeys easier, identifying frequently used tasks, presenting account information clearly visible. We worked on designing simple but impactful banking experience by testing and improving based on user feedback.</p>
            </div>
          </div>
        </div>
        <!-- solutions-offered  -->
        <div class="solutions-offered project-section-padding">
          <h4 class="project-section-title">Solutions we offered</h4>
          <p class="project-body-text">Our user-centric redesign strategically addressed the primary tasks of Online Retail Banking customers, such as Balance checking, Fund transfers, Bill payments, and Service Requests (SRs). With a targeted methodology, emphasizing these frequently used functions a comprehensive click-through prototype was refined to align with new business objectives. The design experience ensured that all key tasks could be completed with a maximum of three mouse clicks, improving user delight.</p>

          <div class="bs-card-section project-bs-cards">
            <div class="row">
              <!-- Card 1 -->
              <div class="col-12 col-md-6 col-lg-3">
                <div class="custom-card">
                  <h4 class="title">
                  Key Task Optimization</h4>
                  <p class="description">
                  Prioritized tasks such as balance inquiries, fund transfers, bill payments, and service requests for a more efficient user experience
                  </p>
                </div>
              </div>
              <!-- Card 2 -->
              <div class="col-12 col-md-6 col-lg-3">
                <div class="custom-card">
                  <h4 class="title">Focused Design Methodology</h4>
                  <p class="description">
                  Identified and concentrated on frequently used tasks, guiding the creation of a detailed click-through prototype.
                  </p>
                </div>
              </div>
              <!-- Card 3 -->
              <div class="col-12 col-md-6 col-lg-3">
                <div class="custom-card">
                  <h4 class="title">Collaborative Stakeholder Review</h4>
                  <p class="description">
                  Facilitated comprehensive stakeholder collaboration through a prototype mapping new business flows
                  </p>
                </div>
              </div>
              <!-- Card 4 -->
              <div class="col-12 col-md-6 col-lg-3">
                <div class="custom-card">
                  <h4 class="title">Seamless User Experience </h4>
                  <p class="description">
                  The business team implemented necessary recommendations to align with the overall UX enhancements.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- brainstorming-session  -->
      
        <!-- solutions-help section -->
        <div class="solutions-help project-section-padding">
          <div class="title-flex">
            <h2 class="project-section-title">
              How did our solutions help?
            </h2>
            <button class="btn btn-custom case-study-webview" data-service="revolutionizing-banking-experiences"
                                 data-bs-toggle="modal"
                                 data-bs-target="#downloadCaseStudyModal"
                                 data-project-title="<?php echo htmlspecialchars($project_title); ?>"
                                 data-case-study-url="<?php echo htmlspecialchars($case_study_download_url); ?>">
              Download case study
            </button>
          </div>
          <p class="project-body-text">
          Our solutions amplified accessibility and usability by focusing on real user needs and insights from competitive analysis. This approach ensured a more inclusive, efficient, and differentiated online banking experience.
          </p>
          <button class="btn btn-custom case-study-mobview ps-responsive-margin" data-service="revolutionizing-banking-experiences"
                                 data-bs-toggle="modal"
                                 data-bs-target="#downloadCaseStudyModal"
                                 data-project-title="<?php echo htmlspecialchars($project_title); ?>"
                                 data-case-study-url="<?php echo htmlspecialchars($case_study_download_url); ?>">
            Download case study
          </button>
          <div class="bs-card-section project-bs-cards">
            <div class="row">
              <!-- Card 1 -->
              <div
                class="col-12 col-md-6 col-lg-3">
                <div class="custom-card case-study-card">
                  <h4 class="title">Improved Accessibility</h4>
                  <p class="description">
                  The redesigned Internet Banking platform reached a wider customer base by incorporating accessibility standards and responsive design, ensuring smooth use across all devices.
                  </p>

                </div>
              </div>

              <!-- Card 2 -->
              <div
                class="col-12 col-md-6 col-lg-3">
                <div class="custom-card case-study-card">
                  <h4 class="title">User-Centric Focus</h4>
                  <p class="description">
                  Extensive user research shaped each stage of the redesign, helping us streamline critical banking journeys and create a more intuitive, goal-oriented experience.
                  </p>

                </div>
              </div>

              <!-- Card 3 -->
              <div
                class="col-12 col-md-6 col-lg-3">
                <div class="custom-card case-study-card">
                  <h4 class="title">Competitive Insights</h4>
                  <p class="description">
                  Analyzing competitor platforms helped identify gaps and opportunities, enabling us to introduce a design that felt distinct, modern, and aligned with user expectations.
                  </p>

                </div>
              </div>

              <!-- Card 4 -->
              <div
                class="col-12 col-md-6 col-lg-3">
                <div class="custom-card case-study-card">
                  <h4 class="title">
                  Substantial User Increase</h4>
                  <p class="description">
                  The redesigned platform achieved a 40% growth in user adoption, reflecting improved satisfaction, ease of use, and trust in the digital banking experience.
                  </p>

                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- ui-update  -->
        <div class="ui-update project-section-padding">
        <h4 class="project-section-title">Final UI </h4>
          <div class="bs-img">
            <img src="<?php echo $path; ?>assets/images/projects/dubai-banking/dubai-bank-website-ui.webp" alt="ui-update" />
          </div>
        </div>
        <!-- <div class="view-all-blogs-btn">
          <button class="btn btn-custom btn-custom-secondary">
            View More Projects
          </button>
        </div> -->
      </div>
    </div>
  </section>


  <?php 
        $previous = "Intertrust Navigate- Fund operations platform";
        $previousLink = "/intertrust-navigate.php";
        $next = "Redesigning Tricogs AI Driven Healthcare Platform";
        $nextLink ="/ai-driven-healthcare-consultation-platform.php";
        include $path . 'components/navigation-footer.php';
    ?>


  <?php include $path . 'components/projects-enquiry.php'; ?>
  <div class="mb-0 mb-sm-4"></div>
    <?php include $path . 'components/registration-modal.php'; ?>
    <?php include $path . 'components/download-casestudy-modal.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
    <?php include $path . 'includes/footer-additional-scripts.php'; ?>
    <?php include $path . 'includes/js.php'; ?>
</body>

</html>
