  <!-- banner-strip  -->
    <?php $path= $GLOBALS['path'];?>
  <section class="banner-strip section-padding">
    <div class="container">
      <div class="row ui-card-dark ">
        <!-- Image Column -->
        <div class="col-md-6  img-container d-none d-md-block">
          <img src="<?php echo $path; ?>assets/images/about-us/hire-coder.webp" alt="Hire Designers/Front-end Engineers" class="img-fluid">
        </div>

        <!-- Text and Button Column -->
        <div class="col-md-6 ">
          <h2 class="bs-title">Start your project—contact us today.</h2>
          <p class="bs-text">
            Ready to start something new? Reach out and let’s bring your 
project to life!
          </p>
  
          <button class="btn btn-custom bs-button" data-bs-toggle="modal" data-bs-target="#registerModal" data-service="Project Enquiry" onclick="setEnquiryType('Project Enquiry')">
            Contact Us
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