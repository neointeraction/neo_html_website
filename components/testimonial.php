  
  <?php $testimonials = [
    [
        'image' => 'assets/images/testimonials/sameer-mathur.jpeg',
        'alt' => 'Sameer Mathur',
        'name' => 'Sameer Mathur',
        'title' => 'Senior VP at Tricog Health',
        'text' => 'They had the expertise to provide out-of-the-box ideas throughout the project.'
    ],
    [
        'image' => 'assets/images/testimonials/jacob-varghese.jpeg',
        'alt' => 'Jacob Varghese',
        'name' => 'Jacob Varghese',
        'title' => 'Director at Noctil',
        'text' => 'We were most impressed with their commitment to the project.'
    ],
    [
        'image' => 'assets/images/testimonials/asha-subramanian.jpeg',
        'alt' => 'Asha Subramanian',
        'name' => 'Asha Subramanian',
        'title' => 'Founder & CEO at Semantic Web India',
        'text' => 'They were very accommodative to repeated iterations until the design was accepted by all stakeholders.'
    ],
    [
        'image' => 'assets/images/testimonials/varun-k-r.jpeg',
        'alt' => 'Varun K R',
        'name' => 'Varun K R',
        'title' => 'Product Manager at TrustCheckr',
        'text' => 'Their adaptability, attention to detail, and client-centric collaboration contributed to the project\'s success.'
    ],
    [
        'image' => 'assets/images/testimonials/lakshminarayana-j.jpeg',
        'alt' => 'Lakshminarayana J',
        'name' => 'Lakshminarayana J',
        'title' => 'VP of Engineering at Funding Societies',
        'text' => 'Whenever the team encountered challenges, they had access to internal frontend experts to overcome these obstacles.'
    ],
    [
        'image' => 'assets/images/testimonials/jude-patrick.jpeg',
        'alt' => 'Jude Patrick',
        'name' => 'Jude Patrick',
        'title' => 'CEO at Venusgeo Solutions Inc',
        'text' => 'The response to any work items was at its best.'
    ],
    [
        'image' => 'assets/images/testimonials/rajith-kumar-k.jpeg',
        'alt' => 'Rajith Kumar K',
        'name' => 'Rajith Kumar K',
        'title' => 'Associate Vice President at Evo11ve',
        'text' => 'The skill set of the assigned people and their commitment, proactiveness, and professionalism were impressive.'
    ],
    [
        'image' => 'assets/images/testimonials/man.jpeg',
        'alt' => 'Sajan Jose',
        'name' => 'Sajan Jose',
        'title' => 'Chief Manager of Marketing of Geojit',
        'text' => 'Their collaborative approach and clarity in communication made them feel like an extension of our internal team.'
    ],
    [
        'image' => 'assets/images/testimonials/varun-k-r.jpeg',
        'alt' => 'Shrikant Raipure',
        'name' => 'Shrikant Raipure',
        'title' => 'Senior Manager at Megawecare',
        'text' => 'Everything related to project management was good.'
    ],
    
];
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
