<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <?php include $path . 'includes/css.php'; ?>
    <title>User Experience Design & User Interface Design in India | Neointeraction Design</title>
    <meta name="description"
        content="Discover the latest trends and expert insights in UI/UX designs on our blog. Stay informed and inspired with our informative articles and tips. Explore now!" />
    <meta name="keywords" content="web design, UI/UX, digital transformation, web development, neointeraction" />
    <link rel="canonical" href="https://www.neointeraction.com/" />
    <meta property="og:title" content="Neointeraction UX Designs & Front-End Development Blogs | Insights & Innovations" />
    <meta property="og:description"
        content="Seeking expert User Interface Design in India? Explore our skilled UI designers crafting captivating digital experiences and hire top talent for your next project." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/neointeraction-projects-og.webp" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="https://www.neointeraction.com/" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Neointeraction UX Designs & Front-End Development Blogs | Insights & Innovations" />
    <meta name="twitter:description"
        content="Seeking expert User Interface Design in India? Explore our skilled UI designers crafting captivating digital experiences and hire top talent for your next project." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/neointeraction-projects-og.webp" />
</head>

<body>
    <?php $page = 'Projects'; ?>
    <?php include $path . 'includes/body-additional-scripts.php'; ?>
    <!-- navbar  -->
    <div class="navbar-container-block">
        <?php include $path . 'components/navigation.php'; ?>
        <?php include $path . 'components/whatsapp.php'; ?>
    </div>
    <!-- navbar end  -->
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
                        <?php
                        $projectsData = file_get_contents(__DIR__ . '/data/projects_data.json');
                        $projects = json_decode($projectsData, true);
                        $tags = [];
                        foreach ($projects as $project) {
                            $tags = array_merge($tags, $project['tags']);
                        }
                        $uniqueTags = array_unique($tags);
                        ?>
                        <button class="btn filter-button active">All</button>
                        <?php foreach ($uniqueTags as $tag) : ?>
                        <button class="btn filter-button"><?php echo $tag; ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- project-listing  -->
                <?php
  $rootPath = "projects/";
  $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2);
  $allowedTags = [
    'Mobile Design', 'Enterprise Apps', 'Start-up Projects', 'B2B', 'Fintech',
    'Capital Market', 'Healthcare', 'IOT', 'Travel & Hospitality', 'B2C'];

  $projectsData = file_get_contents(__DIR__ . '/data/projects_data.json');
  $projects = json_decode($projectsData, true);

  $initial_projects_to_show = 4;
  $projects_per_load = 4;
  $total_projects = count($projects);
  $projectCount = 0; // Initialize a counter for projects

  foreach ($projects as $index => $project) {
    $hidden_class = ($index >= $initial_projects_to_show) ? 'hidden-project' : '';
?>
                <div class="project-block-item <?php echo $hidden_class; ?>" data-tags="<?php echo implode(',', $project['tags']); ?>" data-project-index="<?php echo $index; ?>"
                    onclick="location.href='<?php echo $rootPath . $project['link']; ?>';" style="cursor: pointer;">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="project-card d-lg-flex">
                                <!-- Image container with fixed height and object-fit for consistent appearance -->
                                <div class="col-lg-6 p-0 project-image-container">
                                    <img src="<?php echo $path; ?>assets/images/projects/<?php echo $project['image']; ?>" alt="<?php echo $project['alt']; ?>"
                                        class="img-fluid project-image d-none d-md-block" width="584" height="280" />
                                    <img src="<?php echo $path; ?>assets/images/projects/<?php echo $project['mobileImage']; ?>" alt="<?php echo $project['alt']; ?>"
                                        class="img-fluid project-image d-flex d-md-none" width="438" height="126" />
                                </div>
                                <div class="col-lg-6 d-flex flex-column justify-content-center project-content">
                                    <div class="project-tags">
                                        <?php foreach ($project['tags'] as $tag) { ?>
                                        <span class="badge"><?php echo $tag; ?></span>
                                        <?php } ?>
                                    </div>
                                    <h2 class="project-title"><?php echo $project['title']; ?></h2>
                                    <p class="project-description">
                                        <?php echo $project['description']; ?></p>


                                    <div class="pb-action-btn">
                                        <button class="btn btn-custom read-more-btn">
                                            Read More
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
    $projectCount++;
  }
?>



                <!-- project-listing end  -->
            </div>
            <div class="load-more-btn-projects pt-0">
                <button class="btn btn-custom btn-custom-secondary" id="loadMoreProjects">
                    Load More
                </button>
            </div>
        </div>
    </section>
    <!-- browse-project end -->

    <!-- hire designer  -->
    <?php 
        $title = 'Submit Enquiry'; 
        $desc = 'Ready to start something new? Reach out and let’s bring your project to life!';
        $buttonName = 'Request a Quote';
         $imageLink = "assets/images/about-us/hire-coder.webp";
        $imageAlt = "Submit Enquiry";
        include $path . 'components/hire-designers-engineers.php'; 
    ?>
    <!-- hire designer  end  -->




    <!-- project-listing end  -->
    <?php include $path . 'components/registration-modal.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
    <?php include $path . 'includes/footer-additional-scripts.php'; ?>
    <?php include $path . 'includes/js.php'; ?>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const filterButtons = document.querySelectorAll(".filter-button");
        const projectItems = document.querySelectorAll(".project-block-item");
        const loadMoreButton = document.getElementById("loadMoreProjects");
        let projectsToShow = <?php echo $initial_projects_to_show; ?>;
        const projectsPerLoad = <?php echo $projects_per_load; ?>;
        const totalProjects = <?php echo $total_projects; ?>;

        function updateProjectVisibility() {
            projectItems.forEach((item, index) => {
                if (index < projectsToShow) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });

            if (projectsToShow >= totalProjects) {
                loadMoreButton.style.display = "none";
            } else {
                loadMoreButton.style.display = "block";
            }
        }

        filterButtons.forEach(button => {
            button.addEventListener("click", function() {
                filterButtons.forEach(btn => btn.classList.remove("active"));
                this.classList.add("active");

                const selectedTag = this.textContent.trim();

                projectItems.forEach(item => {
                    const projectTags = item.getAttribute("data-tags");
                    if (selectedTag === "All" || projectTags.includes(selectedTag)) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
                // Reset projectsToShow and hide load more button if filtering
                if (selectedTag !== "All") {
                    loadMoreButton.style.display = "none";
                } else {
                    projectsToShow = <?php echo $initial_projects_to_show; ?>;
                    updateProjectVisibility();
                }
            });
        });

        loadMoreButton.addEventListener("click", function() {
            projectsToShow += projectsPerLoad;
            updateProjectVisibility();
        });

        updateProjectVisibility(); // Initial call to set visibility
    });
    </script>
</body>

</html>
