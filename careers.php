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
  <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/neo-team-join-our-team-benefits.jpeg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:url" content="https://www.neointeraction.com/blog" />
  <meta property="og:site_name" content="Neointeraction Design" />
  <meta property="og:type" content="website" />
  <meta name="google-site-verification" content="" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations" />
  <meta name="twitter:description" content="Craft your brand identity with the expertise of Neointeraction Design  best branding studio in India." />
  <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/neo-team-join-our-team-benefits.jpeg" />
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
      $json_data = file_get_contents('data/job_listing_data.json');
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
                                  <a href="https://app.kapiree.com/info-candidate?id={$job['key']}" class="btn btn-custom btn-custom-secondary" "target="_blank">Apply Now</a>
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
            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="svg" fill-rule="evenodd" clip-rule="evenodd" d="M0.292787 7.70734C0.105316 7.51981 0 7.26551 0 7.00034C0 6.73518 0.105316 6.48087 0.292787 6.29334L5.94979 0.636343C6.04203 0.540833 6.15238 0.464651 6.27438 0.412242C6.39639 0.359833 6.52761 0.332246 6.66039 0.331092C6.79316 0.329939 6.92484 0.355241 7.04774 0.405521C7.17064 0.455802 7.28229 0.530055 7.37618 0.623948C7.47007 0.717841 7.54433 0.829492 7.59461 0.952389C7.64489 1.07529 7.67019 1.20696 7.66904 1.33974C7.66788 1.47252 7.6403 1.60374 7.58789 1.72575C7.53548 1.84775 7.4593 1.9581 7.36379 2.05034L2.41379 7.00034L7.36379 11.9503C7.54594 12.1389 7.64674 12.3915 7.64446 12.6537C7.64218 12.9159 7.53701 13.1668 7.35161 13.3522C7.1662 13.5376 6.91538 13.6427 6.65319 13.645C6.39099 13.6473 6.13839 13.5465 5.94979 13.3643L0.292787 7.70734Z" fill="#2B2828" />
            </svg>

          </button>
          <button class="btn btn-custom btn-custom-secondary slick-btn slick-next-custom">
            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="svg" fill-rule="evenodd" clip-rule="evenodd" d="M7.70832 6.29318C7.89579 6.48071 8.00111 6.73502 8.00111 7.00018C8.00111 7.26534 7.89579 7.51965 7.70832 7.70718L2.05132 13.3642C1.95907 13.4597 1.84873 13.5359 1.72672 13.5883C1.60472 13.6407 1.4735 13.6683 1.34072 13.6694C1.20794 13.6706 1.07626 13.6453 0.953366 13.595C0.83047 13.5447 0.718817 13.4705 0.624924 13.3766C0.531032 13.2827 0.456778 13.171 0.406498 13.0481C0.356217 12.9252 0.330915 12.7936 0.332069 12.6608C0.333223 12.528 0.360809 12.3968 0.413218 12.2748C0.465627 12.1528 0.541809 12.0424 0.637319 11.9502L5.58732 7.00018L0.637319 2.05018C0.455161 1.86158 0.354367 1.60898 0.356645 1.34678C0.358924 1.08458 0.464092 0.83377 0.6495 0.648362C0.834909 0.462954 1.08572 0.357785 1.34792 0.355507C1.61011 0.353228 1.86272 0.454022 2.05132 0.636181L7.70832 6.29318Z" fill="#2B2828" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- business-success -- end  -->
  <!-- banner -- end  -->
  <?php $faq_tag = 'career'; include $path . 'components/faq.php'; ?>
  <?php include $path . 'components/footer.php'; ?>
  <?php include $path . 'includes/footer-additional-scripts.php'; ?>
  <?php include $path . 'includes/js.php'; ?>
</body>

</html>
