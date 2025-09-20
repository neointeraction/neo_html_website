  <!-- banner-strip  -->
<?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
  <section class="banner-strip section-padding">
    <div class="container">
      <div class="row ui-card ">
        <!-- Image Column -->
        <div class="col-md-6  img-container">
          <img src="<?php echo $path; ?>assets/images/bs-img.webp" alt="Stylized illustration" class="img-fluid">
        </div>

        <!-- Text and Button Column -->
        <div class="col-md-6 ">
          <h2 class="bs-title">Submit Enquiry</h2>
          <p class="bs-text">
            Igniting success through passion-fueled collaboration. Igniting success
            through passion-fueled collaboration.
          </p>
          <button
            class="btn btn-custom bs-button" data-bs-toggle="modal" data-bs-target="#registerModal">
            Request a Quote
          </button>
        </div>
      </div>
    </div>
  </section>
  <?php include $path . 'components/registration-modal.php'; ?>
  <!-- banner-strip --end  -->