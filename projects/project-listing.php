<?php
  $rootPath = "projects/";
  $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2);
  $allowedTags = [
    'Mobile Design', 'Enterprise Apps', 'Start-up Projects', 'B2B', 'Fintech',
    'Capital Market', 'Healthcare', 'IOT', 'Travel & Hospitality', 'B2C'];

  $projectsData = file_get_contents(__DIR__ . '/../data/projects_data.json');
  $projects = json_decode($projectsData, true);

  $limit = isset($limit) ? (int)$limit : count($projects);
  $displayProjects = array_slice($projects, 0, $limit);
  $projectCount = 0; // Initialize a counter for projects

  foreach ($displayProjects as $project) {
?>
<div class="project-block-item" data-tags="<?php echo implode(',', $project['tags']); ?>" onclick="location.href='<?php echo $rootPath . $project['link']; ?>';"
    style="cursor: pointer;">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="project-card d-lg-flex">
                <!-- Image container with fixed height and object-fit for consistent appearance -->
                <div class="col-lg-6 p-0 project-image-container">
                    <img src="<?php echo $path; ?>assets/images/projects/<?php echo $project['image']; ?>" alt="<?php echo $project['alt']; ?>"
                        class="img-fluid project-image d-none d-md-block" width="584" height="280" >
                    <img src="<?php echo $path; ?>assets/images/projects/<?php echo $project['mobileImage']; ?>" alt="<?php echo $project['alt']; ?>"
                        class="img-fluid project-image d-flex d-md-none" width="584" height="280" >
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
