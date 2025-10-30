  <!-- banner-strip  -->
<?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
  <section class="banner-strip section-padding">
    <div class="container">
      <div class="row ui-card hire-engineers">
        <!-- Image Column -->
        <div class="col-md-6  img-container d-none d-md-block">
          <img src="<?php echo $path; ?>assets/images/submit-projects.jpg" alt="Stylized illustration" class="img-fluid">
        </div>

        <!-- Text and Button Column -->
        <div class="col-md-6 ">
          <h2 class="bs-title">Submit Enquiry</h2>
          <p class="bs-text">
          Transform your ideas into pixel-perfect digital experiences with our expert designers and front-end engineers. 
          </p>


          <button class="btn btn-custom btn-custom-secondary bs-button request-quote-btn" data-bs-toggle="modal" data-bs-target="#registerModal" data-service="Request a Quote" onclick="setEnquiryType('Request a Quote')">
            Request a Quote
          </button>

          <script>
            function setEnquiryType(enquiryType) {
              localStorage.setItem('enquiryType', enquiryType);
            }
          </script>
        </div>
      </div>
    </div>
  </section>
  <?php include $path . 'components/registration-modal.php'; ?>
