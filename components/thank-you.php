<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path.'includes/favicon.php'; ?>
    <?php include $path.'includes/css.php'; ?>
    <?php include $path.'includes/head-additional-scripts.php'; ?>

    <title>Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations</title>
    <meta name="description" content="Discover the latest trends and expert insights in UI/UX designs on our blog. Stay informed and inspired with our informative articles and tips. Explore now!"/>
    <meta name="keywords" content="web design, UI/UX, digital transformation, web development, neointeraction"/>
    <link rel="canonical" href="https://www.neointeraction.com/blog"/>
    <meta property="og:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations"/>
    <meta property="og:description" content="Craft your brand identity with the expertise of Neointeraction Design  best branding studio in India."/>
    <meta property="og:image" content=""/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content="Neointeraction Design"/>
    <meta property="og:type" content="website"/>
    <meta name="google-site-verification" content=""/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations"/>
    <meta name="twitter:description" content="Craft your brand identity with the expertise of Neointeraction Design  best branding studio in India."/>
    <meta name="twitter:image" content=""/>
  </head>
<body>
    <?php $page='blog';?>
    <?php include $path.'includes/body-additional-scripts.php'; ?>
    <!-- navbar  -->
    <div class="navbar-container-block">
        <?php include $path.'components/navigation.php'; ?>
    </div>
    <!-- navbar  end  -->

    <section class="thank-you-section">
            <div class="thank-you-container">
                <h1 class="thank-you-title">
                    Thank <span class="highlight">you :)</span>
                </h1>

                <div class="email-icon">
                    <img src="<?php echo $path; ?>assets/images/contact-feedback.svg" alt="feedback icon" />
                </div>

                <div class="thank-you-message">
                    <p>Your message has been successfully sent.</p>
                    <p>We will contact you very soon!</p>
                </div>

                <a href="<?php echo $path; ?>index" class="back-btn">Back to Homepage</a>
            </div>
        </section>

  <?php include $path.'components/footer.php'; ?>
  <?php include $path.'includes/footer-additional-scripts.php'; ?>
  <?php include $path.'includes/js.php'; ?>
</body>
</html>

