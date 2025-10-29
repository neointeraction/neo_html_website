  <!-- banner-strip  -->
    <?php $path= $GLOBALS['path'];
    
    if(empty($title)) {
      $title = "Hire Designers/Front-end Engineers";
    }

    if(empty($desc)) {
      $desc = " Transform your ideas into pixel-perfect digital experiences with our expert designers and front-end engineers.";
    }

    if(empty($buttonName)){
      $buttonName = "Request a Quote";
    }
     
    if(empty($imageLink)){
      $imageLink =  "assets/images/about-us/hire-ui.webp";
    }

    if(empty($imageAlt)){
      $imageAlt = "Hire Designers/Front-end Engineers";
    }
  
    ?>
  <section class="banner-strip section-padding">
    <div class="container">
      <div class="row ui-card hire-engineers">
        <!-- Image Column -->
        <div class="col-md-6  img-container d-none d-md-block">
          <img src="<?php echo $path . $imageLink; ?>" alt="<?php echo $imageAlt; ?>" class="img-fluid" width="559" height="210">
          
        </div>

        <!-- Text and Button Column -->
        <div class="col-md-6 ">
          <h2 class="bs-title"><?php echo $title; ?></h2>
          <p class="bs-text">
          <?php echo $desc; ?>
          </p>
  
          <button class="btn btn-custom btn-custom-secondary bs-button request-quote-btn" data-bs-toggle="modal" data-bs-target="#registerModal" data-service="<?php echo $buttonName; ?>" onclick="setEnquiryType(<?php echo $buttonName; ?>)">
            <?php echo $buttonName; ?>
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
  
  <!-- banner-strip end  -->
