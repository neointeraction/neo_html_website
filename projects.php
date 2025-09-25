<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <?php include $path . 'includes/css.php'; ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <title>User Experience Design & User Interface Design in India  | Neointeraction Design</title>
    <meta name="description" content="Discover the latest trends and expert insights in UI/UX designs on our blog. Stay informed and inspired with our informative articles and tips. Explore now!" />
    <meta name="keywords" content="web design, UI/UX, digital transformation, web development, neointeraction" />
    <link rel="canonical" href="https://www.neointeraction.com/blog" />
    <meta property="og:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations" />
    <meta property="og:description" content="Seeking expert User Interface Design in India? Explore our skilled UI designers crafting captivating digital experiences and hire top talent for your next project." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/neo-project-portfolio-brand.jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="https://www.neointeraction.com/blog" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations" />
    <meta name="twitter:description" content="Seeking expert User Interface Design in India? Explore our skilled UI designers crafting captivating digital experiences and hire top talent for your next project." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/neo-project-portfolio-brand.jpeg" />
</head>

<body>
    <?php $page = 'Projects'; ?>
    <?php include $path . 'includes/body-additional-scripts.php'; ?>
    <!-- navbar  -->
    <div class="navbar-container-block">
        <?php include $path . 'components/navigation.php'; ?>
        <?php include $path . 'components/whatsapp.php'; ?>
    </div>
    <!-- navbar -- end  -->
    <!-- heading  -->
    <section class="banner section-padding">
        <div>
            <div class="container">
                <h1 class="banner-title">
                    What we’ve been <span class="highlight">working on so far</span>
                </h1>
            </div>
        </div>
    </section>

    <!-- browse-project  -->
    <section class="browse-project">
        <div class="container">
            <div class="project-block">
                <div class="filter-tags-scroll-container">
                    <div class="filter-tag-flex">
                        <button class="btn filter-button active">All</button>
                        <button class="btn filter-button">Mobile Design</button>
                        <button class="btn filter-button">Enterprise Apps</button>
                        <button class="btn filter-button">Start-up Projects</button>
                        <button class="btn filter-button">B2B</button>
                        <button class="btn filter-button">Fintech</button>
                        <button class="btn filter-button">Capital Market</button>
                        <button class="btn filter-button">Healthcare</button>
                        <button class="btn filter-button">IOT</button>
                        <button class="btn filter-button">Travel & Hospitality</button>
                        <button class="btn filter-button">B2C</button>
                    </div>
                </div>
                <!-- project-listing  -->
                <?php include $path . include 'projects/project-listing.php'; ?>
                <!-- project-listing -- end  -->
            </div>
        </div>
    </section>
    <!-- browse-project -- end -->
    <div class="load-more-btn-projects">
        <button class="btn btn-custom btn-custom-secondary">
            Load More
        </button>
    </div>

    <!-- project-listing -- end  -->
    <?php include $path . 'components/footer.php'; ?>
    <?php include $path . 'includes/footer-additional-scripts.php'; ?>
    <?php include $path . 'includes/js.php'; ?>
</body>

</html>
