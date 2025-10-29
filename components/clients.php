<?php
$path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2);
$clients_data = json_decode(file_get_contents($path.'data/clients_data.json'), true);

// Default tag if not provided
$tag = isset($client_tag) ? $client_tag : 'all';

$filtered_clients = array_filter($clients_data, function($client) use ($tag) {
    return in_array($tag, $client['tags']);
});
?>
<div class="client-logo-flex" aria-hidden="true">
    <?php foreach ($filtered_clients as $client) { ?>
        <div class="clf-item">
            <img src="<?php echo $path . $client['image']; ?>" alt="<?php echo $client['name']; ?>" width="<?php echo $client['width']; ?>" height="<?php echo $client['height']; ?>">
        </div>
    <?php } ?>
    <?php if($tag != "edtech" && $tag != "healthcare" && $tag != "uae") { ?>
    <?php foreach ($filtered_clients as $client) { ?>
        <div class="clf-item">
            <img src="<?php echo $path . $client['image']; ?>" alt="<?php echo $client['name']; ?>" width="<?php echo $client['width']; ?>" height="<?php echo $client['height']; ?>">
        </div>
    <?php } ?>
    <?php } ?>
</div>
