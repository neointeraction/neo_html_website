  <!-- banner-strip  -->
<?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
  <section class="banner-strip section-padding">
    <div class="container">
      <div class="row ui-card ">
        <!-- Image Column -->
        <div class="col-md-6  img-container">
          <img src="<?php echo $path; ?>assets/images/about-us/hire-designers-front-end-engineers.jpeg" alt="Stylized illustration" class="img-fluid">
        </div>

        <!-- Text and Button Column -->
        <div class="col-md-6 ">
          <h2 class="bs-title">Enquiry Form</h2>
          <p class="bs-text">
            Excited to connect! Share what you’re looking for and we’ll guide you every step of the way!
          </p>


          <button class="btn btn-custom bs-button" data-bs-toggle="modal" data-bs-target="#registerModal" data-service="Request a Quote" onclick="setEnquiryType('Request a Quote')">
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