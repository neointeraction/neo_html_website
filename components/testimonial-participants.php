  
  <?php $testimonials = [
    [
        'image' => 'assets/images/testimonials/sameer-mathur.jpeg',
        'alt' => 'Abhijit Lade',
        'name' => 'Abhijit Lade',
        'title' => 'Senior Chief UX Designer at Samsung',
        'text' => 'Gained valuable insights on how a Product is born and enjoyed hand on activities.'
    ],
    [
        'image' => 'assets/images/testimonials/jacob-varghese.jpeg',
        'alt' => 'Preethi Ritesh',
        'name' => 'Preethi Ritesh',
        'title' => 'Product Specialist at Rao\'s Infosoft',
        'text' => 'It was wonderful to understand how UX leverages business along with case studies.'
    ],
    [
        'image' => 'assets/images/testimonials/asha-subramanian.jpeg',
        'alt' => 'Upasna Kakkat',
        'name' => 'Upasna Kakkat',
        'title' => 'UX UI Designer at UNext Learning',
        'text' => 'Great Session!The case studies shared were very insightful.'
    ]
    
];
?>
  <section class="testimonials section-padding">
    <div class="container">
      <h2 class="section-title">What our Participants say about us</h2>
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
                      <?php echo $testimonial['text']; ?>
                    </div>
                    <div class="author-info">
                      <img
                        src="<?php echo $testimonial['image']; ?>"
                        alt="<?php echo $testimonial['alt']; ?>"
                        class="author-image" 
                        width="60px"
                        height="60px"
                      />
                      <div class="author-details">
                        <span class="author-name"><?php echo $testimonial['name']; ?></span>
                        <span class="author-title"><?php echo $testimonial['title']; ?></span>
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
                <?php echo $testimonial['text']; ?>
              </div>
              <div class="author-info">
                <img
                  src="<?php echo $testimonial['image']; ?>"
                  alt="<?php echo $testimonial['alt']; ?>"
                  class="author-image" 
                        width="60px"
                        height="60px"
                      />
                <div class="author-details">
                  <span class="author-name"><?php echo $testimonial['name']; ?></span>
                  <span class="author-title"><?php echo $testimonial['title']; ?></span>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
