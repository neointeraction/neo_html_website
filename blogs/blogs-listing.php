<?php
    $rootPath = "blog/";
    $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2);
    $news_list = array(
        "composable-business-ux-design-secure-better-user-experiences",
        "vr-interaction-design-immersive-experiences",
        "boost-ux-security-better-results",
        "ai-everyday-users-designing-seamless-integration",
        "design-hybrid-workforce-model",
        "design-systems-scalable-digital-products",
        "mobile-first-design-responsive-web-development", 
        "user-research-methods-better-ux-insights",
        "accessibility-inclusive-design-principles",
        "microinteractions-enhance-user-engagement",
        "design-thinking-process-innovation",
        "color-psychology-ui-design",
        "typography-web-design-best-practices",
        "ux-writing-conversational-interfaces",
        "design-trends-2025-digital-experiences",
        "prototyping-tools-ux-designers",
        "user-testing-validation-methods",
        "information-architecture-website-design",
        "visual-hierarchy-effective-layouts",
        "cross-platform-design-consistency",
        "animation-micro-interactions-web",
        "dashboard-design-data-visualization",
        "ecommerce-ux-conversion-optimization"

    );

    // Blog metadata with Neointeraction content - FULL 23 BLOGS DATA
    $blog_metadata = array(
        "composable-business-ux-design-secure-better-user-experiences" => array(
            "title" => "Composable Business: How UX Design Secure Better User Experiences",
            "author" => "Neointeraction Design Team",
            "date" => "2 weeks ago",
            "image" => "https://static.wixstatic.com/media/c16c07_7c0d7d7eca6949f9ad4d73356ea352d8~mv2.jpg/v1/fill/w_305,h_229,fp_0.50_0.50,q_90,enc_avif,quality_auto/c16c07_7c0d7d7eca6949f9ad4d73356ea352d8~mv2.webp",
            "alt" => "Composable Business UX Design"
        ),
        "vr-interaction-design-immersive-experiences" => array(
            "title" => "What You Need To Know About VR Interaction Design For Immersive Experiences",
            "author" => "UX Research Team",
            "date" => "3 weeks ago",
            "image" => "https://static.wixstatic.com/media/c16c07_4f3e66cd40ee45e0b89d9fe504b8e669~mv2.jpg/v1/fill/w_306,h_229,fp_0.50_0.50,q_90,enc_avif,quality_auto/c16c07_4f3e66cd40ee45e0b89d9fe504b8e669~mv2.webp",
            "alt" => "VR Interaction Design"
        ),
        "boost-ux-security-better-results" => array(
            "title" => "How To Boost UX Security And See Better Results",
            "author" => "Security UX Team",
            "date" => "1 month ago",
            "image" => "https://static.wixstatic.com/media/c16c07_8e7866b3a96a47b4beb65cd38979f32b~mv2.jpg/v1/fill/w_305,h_229,fp_0.50_0.50,q_90,enc_avif,quality_auto/c16c07_8e7866b3a96a47b4beb65cd38979f32b~mv2.webp",
            "alt" => "UX Security Design"
        ),
        "ai-everyday-users-designing-seamless-integration" => array(
            "title" => "AI for Everyday Users: Designing for Seamless AI Integration",
            "author" => "AI UX Specialists",
            "date" => "1 month ago",
            "image" => "https://static.wixstatic.com/media/c16c07_48f1a076de3141fc99509e32c9f897ff~mv2.jpg/v1/fill/w_305,h_229,fp_0.50_0.50,q_90,enc_avif,quality_auto/c16c07_48f1a076de3141fc99509e32c9f897ff~mv2.webp",
            "alt" => "AI UX Integration"
        )
    );
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
