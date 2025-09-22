<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <?php include $path . 'includes/css.php'; ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations</title>
    <meta name="description" content="Discover the latest trends and expert insights in UI/UX designs on our blog. Stay informed and inspired with our informative articles and tips. Explore now!" />
    <meta name="keywords" content="web design, UI/UX, digital transformation, web development, neointeraction" />
    <link rel="canonical" href="https://www.neointeraction.com/blog" />
    <meta property="og:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations" />
    <meta property="og:description" content="Craft your brand identity with the expertise of Neointeraction Design  best branding studio in India." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/neo-project-portfolio-brand.jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="https://www.neointeraction.com/blog" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <link rel="alternate" href="https://www.neointeraction.com/blog-feed.xml" type="application/rss+xml" title="Neointeraction - RSS" />
    <link rel="next" href="https://www.neointeraction.com /blog/page/2" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations" />
    <meta name="twitter:description" content="Craft your brand identity with the expertise of Neointeraction Design  best branding studio in India." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/neo-project-portfolio-brand.jpeg" />
</head>

<body>
    <?php $page = 'Blogs'; ?>

    <?php
    // Load blog data from JSON file
    $blog_data_json = file_get_contents($path . 'data/blog_data.json');
    $blog_data = json_decode($blog_data_json, true);

    $blog_metadata = $blog_data['blog_metadata'];
    $news_list = array_keys($blog_metadata);
    $featured_blog_slug = $blog_data['featured_blog_slug'];
    $featured_blog = $blog_metadata[$featured_blog_slug];

    // Remove featured blog from the regular news list
    $news_list = array_diff($news_list, [$featured_blog_slug]);
    $news_list = array_values($news_list); // Re-index the array

    // Pagination variables
    $items_per_page = 8; // Show 8 items initially (2 rows of 4)
    $load_more_count = 4; // Load 4 more items each time
    ?>

    <!-- <?php include 'includes/body-additional-scripts.php'; ?> -->
    <!-- navbar  -->
    <div class="navbar-container-block">
        <?php include 'components/navigation.php'; ?>
        <?php include 'components/whatsapp.php'; ?>
    </div>
    <!-- navbar -- end  -->
    <!-- banner  -->
    <section class="banner heading-padding">
        <div>
            <div class="container">
                <h1 class="banner-title">
                    A collection of our <span class="highlight">insights</span>.
                </h1>
            </div>
        </div>
    </section>
    <!-- banner -- end  -->
    <!-- browse-project  -->
    <section class="browse-project section-padding">
        <div class="container">
            <div class="project-block">
                <div class="project-block-item">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="project-card d-lg-flex">
                                <div class="col-lg-6 p-0 project-image-container">
                                    <img
                                        src="<?php echo htmlspecialchars($featured_blog['image']); ?>"
                                        alt="<?php echo htmlspecialchars($featured_blog['alt']); ?>"
                                        class="img-fluid project-image" />
                                </div>
                                <div
                                    class="col-lg-6 d-flex flex-column justify-content-center project-content">
                                    <h2 class="project-title"><?php echo htmlspecialchars($featured_blog['title']); ?></h2>
                                    <p class="project-description">
                                        <?php echo htmlspecialchars($featured_blog['author']); ?> • <?php echo htmlspecialchars($featured_blog['date']); ?>
                                    </p>
                                    <div class="project-tags">
                                        <!-- Add relevant tags if available in metadata -->
                                    </div>

                                    <div class="pb-action-btn">
                                        <button class="btn btn-custom read-more-btn" onclick="window.location.href='blogs/<?php echo urlencode($featured_blog_slug); ?>.php'">
                                            Read More
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- browse-project -- end -->
    <!-- recent-blogs  -->
    <section class="recent-blogs ">
        <div class="container">
            <div class="blog-container-block">
                <div class="row g-4 justify-content-center" id="blog-container">
                <?php
                // Show initial blogs - ONLY CHANGED THE LINKING PART
                for ($i = 0; $i < min($items_per_page, count($news_list)); $i++) {
                    $blog_slug = $news_list[$i]; // Changed from $blog_file to $blog_slug
                    $metadata = isset($blog_metadata[$blog_slug]) ? $blog_metadata[$blog_slug] : array(
                        "title" => "Insightful Blog Post About Design and Development",
                        "author" => "Design Team",
                        "date" => "Recently",
                        "image" => "assets/images/temp/blog.webp",
                        "alt" => "Blog Image"
                    );
                ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="blogs/<?php echo urlencode($blog_slug); ?>" class="blog-anchor">
                            <div class="blog-card h-100">
                                <img src="<?php echo htmlspecialchars($metadata['image']); ?>" 
                                        class="card-img-top" 
                                        alt="<?php echo htmlspecialchars($metadata['alt']); ?>"
                                        onerror="this.src='assets/images/temp/blog.png'">
                                <div class="card-body">
                                    <h5 class="blog-card-title"><?php echo htmlspecialchars($metadata['title']); ?></h5>
                                    <p class="blog-card-text">
                                        <small class="text-muted"><?php echo htmlspecialchars($metadata['author']); ?> • <?php echo htmlspecialchars($metadata['date']); ?></small>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
                </div>

                <?php if (count($news_list) > $items_per_page): ?>
                    <div class="text-center mt-4">
                        <button class="btn btn-custom btn-custom-secondary" id="load-more-btn" onclick="loadMoreBlogs()">
                            Load More
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- recent-blogs - end  -->

    <!-- JavaScript for Load More functionality - ONLY CHANGED THE LINKING PART -->
    <script>
        let currentIndex = <?php echo $items_per_page; ?>;
        const loadMoreCount = <?php echo $load_more_count; ?>;
        const totalBlogs = <?php echo count($news_list); ?>;

        const blogData = <?php echo json_encode(array_map(function ($blog_slug) use ($blog_metadata) {
                                return array(
                                    'slug' => $blog_slug, // Changed from 'file' to 'slug'
                                    'metadata' => isset($blog_metadata[$blog_slug]) ? $blog_metadata[$blog_slug] : array(
                                        "title" => "Insightful Blog Post About Design and Development",
                                        "author" => "Design Team",
                                        "date" => "Recently",
                                        "image" => "assets/images/temp/blog.png",
                                        "alt" => "Blog Image"
                                    )
                                );
                            }, $news_list)); ?>;

        function loadMoreBlogs() {
            const container = document.getElementById('blog-container');
            const loadMoreBtn = document.getElementById('load-more-btn');

            let itemsToLoad = Math.min(loadMoreCount, totalBlogs - currentIndex);

            for (let i = 0; i < itemsToLoad; i++) {
                const blogIndex = currentIndex + i;
                const blog = blogData[blogIndex];

                const blogCard = `
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="blogs/${encodeURIComponent(blog.slug)}.php" class="blog-anchor">
                        <div class="blog-card h-100">
                            <img src="${escapeHtml(blog.metadata.image)}" 
                                 class="card-img-top" 
                                 alt="${escapeHtml(blog.metadata.alt)}"
                                 onerror="this.src='assets/images/temp/blog.png'">
                            <div class="card-body">
                                <h5 class="blog-card-title">${escapeHtml(blog.metadata.title)}</h5>
                                <p class="blog-card-text">
                                    <small class="text-muted">${escapeHtml(blog.metadata.author)} • ${escapeHtml(blog.metadata.date)}</small>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            `;

                container.insertAdjacentHTML('beforeend', blogCard);
            }

            currentIndex += itemsToLoad;

            // Hide load more button if all blogs are loaded
            if (currentIndex >= totalBlogs) {
                loadMoreBtn.style.display = 'none';
            }
        }

        function escapeHtml(text) {
            const map = {
                '&': '&',
                '<': '<',
                '>': '>',
                '"': '"',
                "'": '&#039;'
            };
            return text.replace(/[&<>"']/g, function(m) {
                return map[m];
            });
        }
    </script>

    <?php include 'components/hire-designers-engineers.php'; ?>
    <?php include 'components/footer.php'; ?>
    <?php include 'includes/footer-additional-scripts.php'; ?>
    <?php include 'includes/js.php'; ?>
</body>

</html>
