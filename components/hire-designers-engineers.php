  <!-- banner-strip  -->
    <?php $path= $GLOBALS['path'];?>
  <section class="banner-strip section-padding ">
    <div class="container">
      <div class="row ui-card hire-engineers">
        <!-- Image Column -->
        <div class="col-md-6  img-container">
          <!-- <img src="<?php echo $path; ?>assets/images/about-us/hire-designers-front-end-engineers.jpeg" alt="Hire Designers/Front-end Engineers" class="img-fluid"> -->

          <img src="<?php echo $path; ?>assets/images/bs-img.webp" alt="Hire Designers/Front-end Engineers" class="img-fluid">
          
        </div>

        <!-- Text and Button Column -->
        <div class="col-md-6 ">
          <h2 class="bs-title">Hire Designers/Front-end Engineers</h2>
          <p class="bs-text">
            Igniting success through passion-fueled collaboration.Igniting success through passion-fueled collaboration. 
          </p>
  
          <button class="btn btn-custom btn-custom-secondary request-quote-btn" data-bs-toggle="modal" data-bs-target="#registerModal" data-service="Request a Quote" onclick="setEnquiryType('Request a Quote')">
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
  <!-- banner-strip --end  -->