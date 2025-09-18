<?php
  $rootPath = "projects/";
  $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2);
  $allowedTags = [
    'Mobile Design', 'Enterprise Apps', 'Start-up Projects', 'B2B', 'Fintech',
    'Capital Market', 'Healthcare', 'IOT', 'Travel & Hospitality', 'B2C'];

  $projects = [
    [
      'title' => 'Intertrust BPM Tool',
      'description' => 'A BPM application/product revamped for enhanced user-friendliness & its vital role in improving organizational processes.',
      'image' => 'intertrust-bpm-tool.jpeg',
      'alt' => 'Intertrust BPM Tool',
      'tags' => ['Enterprise Apps', 'BPM'],
      'link' => 'intertrust-bpm-tool.php'
    ],
    [
      'title' => 'Euclid - A biomedical Research platform',
      'description' => 'A platform that focuses on managing biomedical data complexities amid advancements in technology',
      'image' => 'euclid-biomedical-research-platform.jpeg',
      'alt' => 'Euclid - A biomedical Research platform',
      'tags' => ['Start-up Projects', 'Healthcare'],
      'link' => 'euclid-biomedical-research-platform.php'
    ],
    [
      'title' => 'Intertrust Navigate',
      'description' => 'A platform enabling employees to monitor and track the company\'s fund-related operations',
      'image' => 'intertrust-navigate.jpeg',
      'alt' => 'Intertrust Navigate',
      'tags' => ['Enterprise Apps', 'Fintech'],
      'link' => 'intertrust-navigate.php'
    ],
    [
      'title' => 'Share Trading Platform',
      'description' => 'Trading platform revamped to offer users a unified experience accessible across devices',
      'image' => 'share-trading-platform.jpeg',
      'alt' => 'Share Trading Platform',
      'tags' => ['Fintech', 'Capital Market'],
      'link' => 'share-trading-platform.php'
    ],
    [
      'title' => 'Crew Mobility Management in a Cruise',
      'description' => 'Go-to application for Carnival ship staff streamlining daily activities, tasks, and journey-related information',
      'image' => 'crew-mobility-management-in-a-cruise.jpeg',
      'alt' => 'Crew Mobility Management in a Cruise',
      'tags' => ['Mobile Design', 'Travel & Hospitality'],
      'link' => 'crew-mobility-management-in-a-cruise.php'
    ],
    [
      'title' => 'Online Tutoring Platform 90+ Tuition App',
      'description' => 'Enhancing the usability of a platform that delivers tuition to your doorstep for easy learning',
      'image' => 'online-tutoring-platform.jpeg',
      'alt' => 'Online Tutoring Platform',
      'tags' => ['Mobile Design', 'Start-up Projects'],
      'link' => 'online-tutoring-platform.php'
    ],
    [
      'title' => 'AI Driven Healthcare Consultation Platform',
      'description' => 'AI-driven predictive healthcare platform that improves heart failure patient care',
      'image' => 'ai-driven-healthcare-consultation-platform\ai-driven-healthcare-consultation-platform.jpeg',
      'alt' => 'AI Driven Healthcare Consultation Platform',
      'tags' => ['Healthcare'],
      'link' => 'ai-driven-healthcare-consultation-platform.php'
    ],
    [
      'title' => 'Music Rights Management solution (noctti)',
      'description' => 'An advanced tech solution optimizes collection, distribution for Rights Management Organizations, minimizing costs.',
      'image' => 'music-rights-management-solution.jpeg',
      'alt' => 'Music Rights Management Solution',
      'tags' => ['Enterprise Apps'],
      'link' => 'music-rights-management-solution.php'
    ],
    [
      'title' => 'Cattle Tracking & Management solution',
      'description' => 'Revolutionizing cattle farm management by streamlining tasks, promoting healthier livestock, and increasing profitability.',
      'image' => 'cattle-tracking-management-solution.jpeg',
      'alt' => 'Cattle Tracking & Management solution',
      'tags' => ['IOT', 'B2B'],
      'link' => 'cattle-tracking-management-solution.php'
    ],
    [
      'title' => 'Revolutionizing Banking Experiences',
      'description' => 'Creating a user friendly modern banking platform for young professionals, expats, and native youth',
      'image' => 'revolutionizing-banking-experiences.jpeg',
      'alt' => 'Revolutionizing Banking Experiences',
      'tags' => ['Fintech', 'B2C'],
      'link' => 'revolutionizing-banking-experiences.php'
    ],
    [
      'title' => 'Player Transfer System',
      'description' => 'The Player Transfer System redesign that streamlines player movements between FIFA accredited clubs',
      'image' => 'player-transfer-system.jpeg',
      'alt' => 'Player Transfer System',
      'tags' => ['Enterprise Apps', 'B2B'],
      'link' => 'player-transfer-system.php'
    ],
    [
      'title' => 'Inkmagik - A Graphic Design Tool',
      'description' => 'An all in one easy to use graphics design tool for individuals and businesses',
      'image' => 'inkmagik-graphic-design-tool.jpeg',
      'alt' => 'Inkmagik - A Graphic Design Tool',
      'tags' => ['Start-up Projects', 'B2C'],
      'link' => 'inkmagik-graphic-design-tool.php'
    ],
    [
      'title' => 'Claiming Efficiency - UX Boost for Cashless TPA',
      'description' => 'Revamping UX for TPA claims across 600 teams, prioritizing cashless simplicity and efficiency via TIPS.',
      'image' => 'vidal-cashless-tpa.jpeg',
      'alt' => 'Claiming Efficiency - UX Boost for Cashless TPA',
      'tags' => ['Healthcare', 'B2B'],
      'link' => 'vidal-cashless-tpa.php'
    ]
  ];

  $filteredProjects = [];
  if (isset($selectedTag) && $selectedTag !== 'All') {
    foreach ($projects as $project) {
      if (in_array($selectedTag, $project['tags'])) {
        $filteredProjects[] = $project;
      }
    }
  } else {
    $filteredProjects = $projects;
  }

  $limit = isset($limit) ? (int)$limit : count($filteredProjects);
  $displayProjects = array_slice($filteredProjects, 0, $limit);

  foreach ($displayProjects as $project) {
?>
      <div class="project-block-item" onclick="location.href='<?php echo $rootPath . $project['link']; ?>';" style="cursor: pointer;">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="project-card d-lg-flex">
                <!-- Image container with fixed height and object-fit for consistent appearance -->
                <div class="col-lg-6 p-0 project-image-container">
                  <img
                    src="<?php echo $path; ?>assets/images/projects/<?php echo $project['image']; ?>"
                    alt="<?php echo $project['alt']; ?>"
                    class="img-fluid project-image" 
                     width="584px"
                    height="280px"/>
                </div>
                <div
                  class="col-lg-6 d-flex flex-column justify-content-center project-content">
                  <h2 class="project-title"><?php echo $project['title']; ?></h2>
                  <p class="project-description">
                    <?php echo $project['description']; ?></p>
                  <div class="project-tags">
                    <?php foreach ($project['tags'] as $tag) { ?>
                      <span class="badge"><?php echo $tag; ?></span>
                    <?php } ?>
                  </div>

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
  }
?>
