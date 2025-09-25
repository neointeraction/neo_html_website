  
  <?php
$json_data = file_get_contents('data/testimonials.json');
$testimonials = json_decode($json_data, true);
?>
  <section class="testimonials section-padding">
    <div class="container">
      <h2 class="section-title">What our Clients say about us</h2>
      <div class="testimonial-slider-block">
        <div class="testimonial-slider" id="testimonial-web">
          <?php for ($i = 0; $i < count($testimonials); $i += 2): ?>
            <div class="tc-item-flex">
              <?php for ($j = 0; $j < 2; $j++): ?>
                <?php if (isset($testimonials[$i + $j])): ?>
                  <?php $testimonial = $testimonials[$i + $j]; ?>
                  <div class="testimonial-card">
                    <div class="quote-icon"></div>
                    <div class="testimonial-text">
                      <?php echo $testimonial['quote']; ?>
                    </div>
                    <div class="author-info">
                      <img
                        src="<?php echo $testimonial['author_image']; ?>"
                        alt="<?php echo $testimonial['alt']; ?>"
                        class="author-image" 
                        width="60px"
                        height="60px"
                      />
                      <div class="author-details">
                        <span class="author-name"><?php echo $testimonial['author_name']; ?></span>
                        <span class="author-title"><?php echo $testimonial['author_title']; ?></span>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              <?php endfor; ?>
            </div>
          <?php endfor; ?>
        </div>
        <div class="testimonial-slider" id="testimonial-mob">
          <?php foreach ($testimonials as $testimonial): ?>
            <div class="testimonial-card">
              <div class="quote-icon"></div>
              <div class="testimonial-text">
                <?php echo $testimonial['quote']; ?>
              </div>
              <div class="author-info">
                <img
                  src="<?php echo $testimonial['author_image']; ?>"
                  alt="<?php echo $testimonial['alt']; ?>"
                  class="author-image" 
                        width="60px"
                        height="60px"
                      />
                <div class="author-details">
                  <span class="author-name"><?php echo $testimonial['author_name']; ?></span>
                  <span class="author-title"><?php echo $testimonial['author_title']; ?></span>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
