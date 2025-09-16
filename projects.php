<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
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
    <?php include 'includes/favicon.php'; ?>
    <?php include 'includes/css.php'; ?>
    <?php include 'includes/head-additional-scripts.php'; ?>
</head>

<body>
    <?php $page = 'Projects'; ?>
    <?php include 'includes/body-additional-scripts.php'; ?>
    <!-- navbar  -->
    <div class="navbar-container-block">
        <?php include 'components/navigation.php'; ?>
        <?php include 'components/whatsapp.php'; ?>
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
                <!-- project-listing  -->
                <?php include 'projects/project-listing.php'; ?>
                <!-- project-listing -- end  -->
            </div>
        </div>
    </section>
    <!-- browse-project -- end -->
    <?php include 'components/submit-enquiry.php'; ?>
    <!-- project-listing  -->
    <section class="browse-project section-padding">
        <div class="container">
            <div class="project-block">
                <!-- project-listing  -->
                <?php include 'projects/project-listing.php'; ?>
                <!-- project-listing -- end  -->
            </div>
        </div>
    </section>
    <div class="load-more-btn-projects">
        <button class="btn btn-custom btn-custom-secondary">
            Load More
        </button>
    </div>

    <!-- project-listing -- end  -->
    <?php include 'components/footer.php'; ?>
    <?php include 'includes/footer-additional-scripts.php'; ?>
    <?php include 'includes/js.php'; ?>
</body>

</html>