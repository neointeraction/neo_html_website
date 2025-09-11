<?php
// blog-listing.php - Updated to work dynamically
// This should be your existing $news_list array from the image
$news_list = array(
    "john-distilleries-introduce-single-malt-whisky.php",
    "bangalore-based-liquor-magnate-paul-john-hoping-single-malts-will-take-world-storm.php",
    "paul-john-shakes-world-single-malt-connoisseurship.php",
    "three-surprising-countries-making-world-class-single-malt-whisky-telegraph-uk.php",
    "10-smoky-whiskies-sip-all-winter-long-peated-select-cask.php",
    "10-superb-smoky-whiskies-you-should-try-paul-john-peated.php",
    "depth-distinction-coming-density-robb-report.php",
    "colourful-vibrant-and-balanced-paul-john-single-malt-must-lovers-peat-forbes.php",
    "meet-craft-whiskies-2018-taste-tested-cbc-goodfood.php",
    "whisky-made-india-by-independent-on-saturday-south-africa.php",
    "premium-best-drams-spiritz-magazine-india.php",
    "sip-some-single-malt-indias-first-ever-visitor-centre-distillery-tour-goa.php",
    "paul-johns-kenny-joins-malt-maniacs-malt-malt.php",
    "man-behind-paul-john-whisky-his-single-malt-journey-drink-making-philosophy-and-premium-gin-works.php",
    // Add more blog entries as needed...
);

// Blog metadata array - you can store this in database or separate file
$blog_metadata = array(
    "john-distilleries-introduce-single-malt-whisky.php" => array(
        "title" => "How to design Effective Dashboard to help boost your...",
        "author" => "Thirunavukkarasu L",
        "date" => "1 day ago",
        "image" => "assets/images/temp/blog.png",
        "alt" => "Dashboard UI"
    ),
    "bangalore-based-liquor-magnate-paul-john-hoping-single-malts-will-take-world-storm.php" => array(
        "title" => "Advantages and disadvantages of Website Templates",
        "author" => "Rahul Kale",
        "date" => "6 days ago",
        "image" => "assets/images/temp/blog2.png",
        "alt" => "Website Templates"
    ),
    "paul-john-shakes-world-single-malt-connoisseurship.php" => array(
        "title" => "What Is UX Design Process? A Complete Actionable Guide",
        "author" => "Rahul Kale",
        "date" => "6 days ago",
        "image" => "assets/images/temp/blog.png",
        "alt" => "UX Design Process"
    ),
    "three-surprising-countries-making-world-class-single-malt-whisky-telegraph-uk.php" => array(
        "title" => "Revolutionary UI/UX Design Through Machine Learning",
        "author" => "Thirunavukkarasu L",
        "date" => "2 days ago",
        "image" => "assets/images/temp/blog2.png",
        "alt" => "Machine Learning UI"
    ),
    // Add more metadata as needed...
);

// Pagination logic similar to your existing code
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
$index = array_search($curPageName, $news_list);

if ($index == 0 || $index > 0) {
    $previousURL = $index > 0 ? $news_list[$index-1] : $news_list[count($news_list)-1];
    $nextURL = $index+1 >= count($news_list) ? $news_list[0] : $news_list[$index+1];
} else {
    $previousURL = "javascript:void(0);";
    $nextURL = "javascript:void(0);";
}

$indexURL = "news.php";

// Items per page for initial load
$items_per_page = 4;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($current_page - 1) * $items_per_page;

// Get blogs for current page
$blogs_to_show = array_slice($news_list, $offset, $items_per_page);
$total_blogs = count($news_list);
$total_pages = ceil($total_blogs / $items_per_page);

// Generate blog cards
foreach ($blogs_to_show as $blog_file) {
    // Get metadata for this blog, with fallbacks
    $metadata = isset($blog_metadata[$blog_file]) ? $blog_metadata[$blog_file] : array(
        "title" => "Blog Post Title",
        "author" => "Author Name",
        "date" => "Some time ago",
        "image" => "assets/images/temp/blog.png",
        "alt" => "Blog Image"
    );
    ?>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="<?php echo htmlspecialchars($blog_file); ?>" class="blog-anchor">
            <div class="blog-card h-100">
                <img src="<?php echo htmlspecialchars($metadata['image']); ?>" 
                     class="card-img-top" 
                     alt="<?php echo htmlspecialchars($metadata['alt']); ?>">
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