<?php
function getCaseStudyData($current_page_filename, $path) {
    // Load projects data from JSON
    $projects_json_path = $path . 'data/projects_data.json';
    $projects_data = [];
    if (file_exists($projects_json_path)) {
        $projects_data = json_decode(file_get_contents($projects_json_path), true);
    }

    $project_title = 'Download Case Study'; // Default title
    $case_study_download_url = '#'; // Default URL

    // Find the current project's data
    foreach ($projects_data as $project) {
        if (isset($project['link']) && $project['link'] === $current_page_filename) {
            $project_title = $project['title'];
            $case_study_download_url = $path . $project['case_study_url']; // Prepend path for correct URL
            break;
        }
    }

    return [
        'project_title' => $project_title,
        'case_study_download_url' => $case_study_download_url
    ];
}

// Get current page filename
  $current_page_filename = basename($_SERVER['PHP_SELF']);

  // Get case study data using the helper function
  $case_study_data = getCaseStudyData($current_page_filename, $path);
  $project_title = $case_study_data['project_title'];
  $case_study_download_url = $case_study_data['case_study_download_url'];
?>
