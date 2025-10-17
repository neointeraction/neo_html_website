<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <?php include $path . 'includes/css.php'; ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <title>UX Design Team -Enhance User Experience |  Neointeraction Design</title>
    <meta name="description" content="Discover the latest trends and expert insights in UI/UX designs on our blog. Stay informed and inspired with our informative articles and tips. Explore now!" />
    <meta name="keywords" content="web design, UI/UX, digital transformation, web development, neointeraction" />
    <link rel="canonical" href="https://www.neointeraction.com/blog" />
    <meta property="og:title" content="UX Design Team -Enhance User Experience |  Neointeraction Design" />
    <meta property="og:description" content="India's leading UI/UX design company reveals their process for creating digital products with delightful CX and measurable business impact." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/neo-team-join-our-team-benefits.jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="UX Design Team -Enhance User Experience |  Neointeraction Design" />
    <meta name="twitter:description" content="India's leading UI/UX design company reveals their process for creating digital products with delightful CX and measurable business impact." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/neo-team-join-our-team-benefits.jpeg" />
</head>
<body>
    <?php $page='blog';?>
    <?php include $path.'includes/body-additional-scripts.php'; ?>
    <!-- navbar  -->
    <div class="navbar-container-block">
        <?php include $path.'components/navigation.php'; ?>
        <?php include $path.'components/whatsapp.php'; ?>
    </div>
    <!-- navbar  end  -->
    <!-- banner  -->
    <section class="banner heading-padding">
        <div>
            <div class="container">
                <h1 class="banner-title">
                    Use this PHP template <span class="highlight">to recreate new pages</span>
                </h1>
            </div>
        </div>
    </section>
    <!-- banner -- end  -->
  <?php include $path.'components/footer.php'; ?>
  <?php include $path.'includes/footer-additional-scripts.php'; ?>
  <?php include $path.'includes/js.php'; ?>
</body>
</html>