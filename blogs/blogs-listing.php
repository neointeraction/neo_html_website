<?php
    $rootPath = "blog/";
    $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2);

    // Load blog data from JSON file
    $blog_data_json = file_get_contents($path . 'data/blog_data.json');
    $blog_data = json_decode($blog_data_json, true);

    $blog_metadata = $blog_data['blog_metadata'];
    $news_list = array_keys($blog_metadata);

    // Pagination variables
    $items_per_page = 4; // Show 8 items initially (2 rows of 4)
    $load_more_count = 4; // Load 4 more items each time
?>
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

        </div>
    </div>
</section>
