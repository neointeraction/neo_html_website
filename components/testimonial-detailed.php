<section class="testimonials section-padding">
    <div class="container">
        <h2 class="section-title">What our Clients say about us</h2>
        <div class="testimonial-slider-block">
            <?php
            $json_data = file_get_contents('data/testimonials.json');
            $testimonials = json_decode($json_data, true);
            ?>
            <div class="testimonial-slider" id="testimonial-web">
                <?php
                $testimonial_chunks = array_chunk($testimonials, 2);
                foreach ($testimonial_chunks as $chunk) {
                    echo '<div class="tc-item-flex">';
                    foreach ($chunk as $testimonial) {
                ?>
                        <div class="testimonial-card">
                            <div class="testimonial-logo">
                                <img src="<?php echo $testimonial['logo']; ?>" alt="<?php echo $testimonial['alt']; ?>" />
                            </div>
                            <div class="quote-icon"></div>
                            <div class="testimonial-text">
                                <?php echo $testimonial['quote']; ?>
                            </div>
                            <div class="author-info">
                                <img src="<?php echo $testimonial['author_image']; ?>" alt="<?php echo $testimonial['author_name']; ?>" class="author-image" />
                                <div class="author-details">
                                    <span class="author-name"><?php echo $testimonial['author_name']; ?></span>
                                    <span class="author-title"><?php echo $testimonial['author_title']; ?></span>
                                </div>
                            </div>
                            <div class="testimonial-action">
                                <a href="<?php echo $path . $testimonial['project_link']; ?>" class="btn btn-custom btn-custom-secondary">
                                    View project
                                </a>
                            </div>
                        </div>
                <?php
                    }
                    echo '</div>';
                }
                ?>
            </div>
            <div class="testimonial-slider" id="testimonial-mob">
                <?php foreach ($testimonials as $testimonial) { ?>
                    <div class="testimonial-card">
                        <div class="testimonial-logo">
                            <img src="<?php echo $testimonial['logo']; ?>" alt="<?php echo $testimonial['alt']; ?>" />
                        </div>
                        <div class="quote-icon"></div>
                        <div class="testimonial-text">
                            <?php echo $testimonial['quote']; ?>
                        </div>
                        <div class="author-info">
                            <img src="<?php echo $testimonial['author_image']; ?>" alt="<?php echo $testimonial['author_name']; ?>" class="author-image" />
                            <div class="author-details">
                                <span class="author-name"><?php echo $testimonial['author_name']; ?></span>
                                <span class="author-title"><?php echo $testimonial['author_title']; ?></span>
                            </div>
                        </div>
                        <div class="testimonial-action">
                            <a href="<?php echo $path . $testimonial['project_link']; ?>" class="btn btn-custom btn-custom-secondary">
                                View project
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
