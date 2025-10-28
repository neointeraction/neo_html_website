<?php
if (!empty($gallery_images)) {
?>
<div class="project-block event-slider-block">
    <?php foreach ($gallery_images as $image) { ?>
    <div class="project-block-item event-item-block">
        <img src="<?php echo $path . $image['src']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid project-image" />
    </div>
    <?php } ?>
</div>
<?php
}
?>
