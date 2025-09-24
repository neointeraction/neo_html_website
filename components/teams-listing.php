<?php
$path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2);
$team_data = json_decode(file_get_contents($path . 'data/team_data.json'), true);

// Default tag if not provided
$tag = isset($team_tag) ? $team_tag : 'all';
$limit = isset($team_limit) ? $team_limit : null;

$filtered_team = array_filter($team_data, function ($member) use ($tag) {
    return in_array($tag, $member['tags']);
});

if ($limit !== null) {
    $filtered_team = array_slice($filtered_team, 0, $limit);
}
?>
<div class="row justify-content-center">
    <?php foreach ($filtered_team as $member) { ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a href="<?php echo $member['linkedin']; ?>" class="blog-anchor" target="_blank">
                <div class="blog-card color-bw h-100">
                    <img src="<?php echo $path . $member['image']; ?>" class="team-img-top" alt="<?php echo $member['name']; ?>" />
                    <div class="card-body">
                        <h5 class="team-card-title d-flex justify-content-between align-items-center">
                            <span><?php echo $member['name']; ?></span>
                            <img src="<?php echo $path; ?>assets/images/icons/linkedin.svg" alt="LinkedIn" class="team-linkedin-logo">
                        </h5>
                        <p class="team-card-text">
                            <small class="text-muted"><?php echo $member['role']; ?></small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>
</div>