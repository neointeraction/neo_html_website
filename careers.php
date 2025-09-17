<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
  <?php include $path . 'includes/favicon.php'; ?>
  <?php include $path . 'includes/css.php'; ?>
  <?php include $path . 'includes/head-additional-scripts.php'; ?>

  <title>Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations</title>
  <meta name="description" content="Discover the latest trends and expert insights in UI/UX designs on our blog. Stay informed and inspired with our informative articles and tips. Explore now!" />
  <meta name="keywords" content="web design, UI/UX, digital transformation, web development, neointeraction" />
  <link rel="canonical" href="https://www.neointeraction.com/blog" />
  <meta property="og:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations" />
  <meta property="og:description" content="Craft your brand identity with the expertise of Neointeraction Design  best branding studio in India." />
  <meta property="og:image" content="https://static.wixstatic.com/media/c380a9_dc195b7222dd4fa890f20ccee3a0c7d3~mv2.png/v1/fill/w_1200,h_630,al_c/c380a9_dc195b7222dd4fa890f20ccee3a0c7d3~mv2.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:url" content="https://www.neointeraction.com/blog" />
  <meta property="og:site_name" content="Neointeraction Design" />
  <meta property="og:type" content="website" />
  <meta name="google-site-verification" content="jDr4aVGcjUUHdNv8SD5bpXt6-kwDs5rDAbNqhXDrENY" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations" />
  <meta name="twitter:description" content="Craft your brand identity with the expertise of Neointeraction Design  best branding studio in India." />
  <meta name="twitter:image" content="https://static.wixstatic.com/media/c380a9_dc195b7222dd4fa890f20ccee3a0c7d3~mv2.png/v1/fill/w_1200,h_630,al_c/c380a9_dc195b7222dd4fa890f20ccee3a0c7d3~mv2.png" />
</head>

<body>
  <?php $page = 'blog'; ?>
  <?php include $path . 'includes/body-additional-scripts.php'; ?>
  <!-- navbar  -->
  <div class="navbar-container-block">
    <?php include $path . 'components/navigation.php'; ?>
    <?php include $path . 'components/whatsapp.php'; ?>
  </div>
  <!-- navbar -- end  -->
  <!-- banner  -->
  <section class="career-banner section-padding">
    <div>
      <div class="container">
        <h1 class="banner-title">
          Make an Impact, <span class="highlight">Join Our Team</span>
        </h1>
      </div>
    </div>
  </section>

  <section class="career-openings section-padding">
    <div class="container">
      <h2 class="section-title">Current Openings</h2>
      <?php
      $json_data = file_get_contents('data/joblisting.json');
      $jobs = json_decode($json_data, true);

      if (json_last_error() !== JSON_ERROR_NONE) {
        echo '<p>Error reading job listings.</p>';
      } else {
        $openings = array_filter($jobs, function ($job) {
          return $job['displayOnWeb'];
        });

        if (empty($openings)) {
          echo '<p>No open positions at the moment. Please check back later.</p>';
        } else {
          foreach ($openings as $index => $job) {
            $description = nl2br(htmlspecialchars($job['roleDiscription']));
            echo <<<HTML
                        <div class="job-posting">
                          <div class="row justify-content-start">
                            <div class="col-md-10">
                                 <div class="job-header">
                                <h3 class="job-title">{$job['roleName']}</h3>
                  
                            </div>
                            <div class="job-body">
                                <p>{$description}</p>
                            </div>
                            </div>
                            <div class="col-md-2">
                                  <a href="contact-us.php" class="btn btn-custom btn-custom-secondary">Apply Now</a>
                            </div>
                          </div>
                         
                        </div>
HTML;
          }
        }
      }
      ?>
    </div>
  </section>

  <!-- business-success  -->
  <section class="business-success section-padding">
    <div class="container">
      <h2 class="section-title">
        Why work with Neointeraction ?
      </h2>
      <div class="bs-card-section section-margin">
        <div class="row justify-content-center">
          <!-- Card 1 -->
          <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card">
              <div class="icon-container">
                <img src="<?php echo $path; ?>assets/images/ux.svg" alt="ux" />
              </div>
              <h4 class="title">Get mentorship</h4>
              <p class="description">
                Real user insights to understand needs and pain points.
              </p>
              <button class="btn btn-custom btn-custom-secondary">
                Hire Us
              </button>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card">
              <div class="icon-container">
                <img src="<?php echo $path; ?>assets/images/pd.svg" alt="pd" />
              </div>
              <h4 class="title">Cross functional team</h4>
              <p class="description">
                Analyze interactions for actionable insights.
              </p>
              <button class="btn btn-custom btn-custom-secondary">
                Hire Us
              </button>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card">
              <div class="icon-container">
                <img src="<?php echo $path; ?>assets/images/dt.svg" alt="dt" />
              </div>
              <h4 class="title">Functional design </h4>
              <p class="description">
                Enhancing aesthetics and usability.
              </p>
              <button class="btn btn-custom btn-custom-secondary">
                Hire Us
              </button>
            </div>
          </div>
          <!-- Card 4 -->
          <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card">
              <div class="icon-container">
                <img src="<?php echo $path; ?>assets/images/fd.svg" alt="fd" />
              </div>
              <h4 class="title">Ignite your Potential</h4>
              <p class="description">
                Gain Practical Insights in Transformative Workshops.
              </p>
              <button class="btn btn-custom btn-custom-secondary">
                Hire Us
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="life-at-neo section-padding">
    <div class="container">
      <h2 class="section-title">Life at Neointeraction</h2>
      <div class="project-slider-wrapper section-margin">
        <div class="project-block life-at-neo-block">
          <?php include $path . 'components/life-at-neo.php'; ?>
        </div>
        <div class="slick-navigation life-at-neo-navigation">
          <button class="btn btn-custom btn-custom-secondary slick-btn slick-prev-custom">
            <img src="<?php echo $path; ?>assets/images/prev.svg" alt="prev" />
          </button>
          <button class="btn btn-custom btn-custom-secondary slick-btn slick-next-custom">
            <img src="<?php echo $path; ?>assets/images/next.svg" alt="next" />
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- business-success -- end  -->
  <!-- banner -- end  -->
  <?php include $path . 'components/faq.php'; ?>
  <?php include $path . 'components/footer.php'; ?>
  <?php include $path . 'includes/footer-additional-scripts.php'; ?>
  <?php include $path . 'includes/js.php'; ?>
</body>

</html>