  <section class="faq section-padding">
      <div class="container">
          <h2 class="section-title">FAQ’s</h2>

          <div class="faq-block">
              <div class="accordion" id="faqAccordion">
                  <?php
          $faqs = json_decode(file_get_contents(__DIR__ . '/../data/faq_data.json'), true);
          $filteredFaqs = [];

          if (isset($faq_tag) && $faq_tag !== '') {
              foreach ($faqs as $faq) {
                  if (in_array($faq_tag, $faq['tags'])) {
                      $filteredFaqs[] = $faq;
                  }
              }
          } else {
              $filteredFaqs = $faqs;
          }

          foreach ($filteredFaqs as $index => $faq) {
              $headingId = 'heading' . ($index + 1);
              $collapseId = 'collapse' . ($index + 1);
              $isExpanded = $index === 0 ? 'true' : 'false';
              $showClass = $index === 0 ? 'show' : '';
              $buttonClass = $index === 0 ? '' : 'collapsed';
          ?>
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="<?php echo $headingId; ?>">
                          <button class="accordion-button <?php echo $buttonClass; ?>" type="button"
                              data-bs-toggle="collapse" data-bs-target="#<?php echo $collapseId; ?>"
                              aria-expanded="<?php echo $isExpanded; ?>" aria-controls="<?php echo $collapseId; ?>">
                              <?php echo $faq['question']; ?>
                          </button>
                      </h2>
                      <div id="<?php echo $collapseId; ?>" class="accordion-collapse collapse <?php echo $showClass; ?>"
                          aria-labelledby="<?php echo $headingId; ?>" data-bs-parent="#faqAccordion">
                          <div class="accordion-body">
                              <?php echo $faq['answer']; ?>
                          </div>
                      </div>
                  </div>
                  <?php } ?>
              </div>
          </div>
      </div>
  </section>