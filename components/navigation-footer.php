  <!-- banner-strip  -->
  <?php 
  
    $path= $GLOBALS['path'];

    if(empty($from)){
        $from = "projects";
        $viewMoreLink = $path . 'projects.php';
    }
    
    if(empty($previous)) {
      $previous = "";
      $previousLink = "";
    }

    if(empty($next)) {
      $next = "";
      $nextLink = "";
    }

    if($from == "blog") {
        $viewMoreLink = $path . 'blogs.php';
        $blogData = file_get_contents(__DIR__ . '/../data/blog_data.json');
        $blogsJson = json_decode($blogData, true);
        $blogs =  $blogsJson['blog_metadata'];   
        $count = count($blogs);
        // Get all the slugs (keys)
        $slugs = array_keys($blogs);

        // Find the position of the current slug in the array
        $currentIndex = array_search($currentSlug, $slugs);

        $prevIndex = $currentIndex - 1;
        $nextIndex = $currentIndex + 1;

        if($nextIndex >= $count) {
            $nextIndex = 0;
        }

        if($prevIndex < 0) {
            $prevIndex = $count - 1;
        }

        // Get previous and next slugs safely
        $previousSlug = $slugs[$prevIndex] ?? null;
        $nextSlug = $slugs[$nextIndex] ?? null;

        $previous = $previousSlug ? $blogs[$previousSlug]['title'] : null;
        $next = $nextSlug ? $blogs[$nextSlug]['title'] : null;
        $previousLink = $path . 'blogs/' .$previousSlug;
        $nextLink = $path . 'blogs/' .$nextSlug;

    }else {
        $previousLink = $path . 'projects' .$previousLink;
        $nextLink = $path . 'projects' .$nextLink;
    }
  
    ?>
  <section class="banner-strip section-padding ">
      <div class="container">
          <div class="row navigation-footer">
              <!-- Image Column -->
              <div class="col-md-4 d-none d-md-block">
                  <h4 title="<?php echo $previous; ?>"><?php echo $previous; ?></h4>
                  <a href="<?php echo  $previousLink; ?>">
                      <button class="btn btn-custom btn-custom bs-button">
                      <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-1">
                              <path class="svg-arrow" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.292787 7.70734C0.105316 7.51981 0 7.26551 0 7.00034C0 6.73518 0.105316 6.48087 0.292787 6.29334L5.94979 0.636343C6.04203 0.540833 6.15238 0.464651 6.27438 0.412242C6.39639 0.359833 6.52761 0.332246 6.66039 0.331092C6.79316 0.329939 6.92484 0.355241 7.04774 0.405521C7.17064 0.455802 7.28229 0.530055 7.37618 0.623948C7.47007 0.717841 7.54433 0.829492 7.59461 0.952389C7.64489 1.07529 7.67019 1.20696 7.66904 1.33974C7.66788 1.47252 7.6403 1.60374 7.58789 1.72575C7.53548 1.84775 7.4593 1.9581 7.36379 2.05034L2.41379 7.00034L7.36379 11.9503C7.54594 12.1389 7.64674 12.3915 7.64446 12.6537C7.64218 12.9159 7.53701 13.1668 7.35161 13.3522C7.1662 13.5376 6.91538 13.6427 6.65319 13.645C6.39099 13.6473 6.13839 13.5465 5.94979 13.3643L0.292787 7.70734Z"
                                  fill="#fff" />
                          </svg> &nbsp;&nbsp; Read More
                      </button>
                  </a>
              </div>
              <div class="col-md-4 d-none d-md-flex justify-content-center align-items-end">
                <a href="<?php echo $viewMoreLink ?>">
                    <img src="<?php echo  $path; ?>assets/images/view-more.svg" alt="">
                </a>
              </div>

              

              <div class="d-flex slick-navigation justify-content-between d-md-none">
                  <a href="<?php echo $previousLink; ?>">
                      <button class="btn btn-custom btn-custom-secondary slick-btn slick-prev-custom">
                          <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg" >
                              <path class="svg" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.292787 7.70734C0.105316 7.51981 0 7.26551 0 7.00034C0 6.73518 0.105316 6.48087 0.292787 6.29334L5.94979 0.636343C6.04203 0.540833 6.15238 0.464651 6.27438 0.412242C6.39639 0.359833 6.52761 0.332246 6.66039 0.331092C6.79316 0.329939 6.92484 0.355241 7.04774 0.405521C7.17064 0.455802 7.28229 0.530055 7.37618 0.623948C7.47007 0.717841 7.54433 0.829492 7.59461 0.952389C7.64489 1.07529 7.67019 1.20696 7.66904 1.33974C7.66788 1.47252 7.6403 1.60374 7.58789 1.72575C7.53548 1.84775 7.4593 1.9581 7.36379 2.05034L2.41379 7.00034L7.36379 11.9503C7.54594 12.1389 7.64674 12.3915 7.64446 12.6537C7.64218 12.9159 7.53701 13.1668 7.35161 13.3522C7.1662 13.5376 6.91538 13.6427 6.65319 13.645C6.39099 13.6473 6.13839 13.5465 5.94979 13.3643L0.292787 7.70734Z"
                                  fill="#2B2828" />
                          </svg>
                      </button>
                  </a>
                  <a href="<?php echo $viewMoreLink; ?>">
                    <img src="<?php echo  $path; ?>assets/images/view-more.svg" alt="">
                </a>
                  <a href="<?php echo  $nextLink; ?>">
                      <button class="btn btn-custom btn-custom-secondary slick-btn slick-next-custom">
                          <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path class="svg" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M7.70832 6.29318C7.89579 6.48071 8.00111 6.73502 8.00111 7.00018C8.00111 7.26534 7.89579 7.51965 7.70832 7.70718L2.05132 13.3642C1.95907 13.4597 1.84873 13.5359 1.72672 13.5883C1.60472 13.6407 1.4735 13.6683 1.34072 13.6694C1.20794 13.6706 1.07626 13.6453 0.953366 13.595C0.83047 13.5447 0.718817 13.4705 0.624924 13.3766C0.531032 13.2827 0.456778 13.171 0.406498 13.0481C0.356217 12.9252 0.330915 12.7936 0.332069 12.6608C0.333223 12.528 0.360809 12.3968 0.413218 12.2748C0.465627 12.1528 0.541809 12.0424 0.637319 11.9502L5.58732 7.00018L0.637319 2.05018C0.455161 1.86158 0.354367 1.60898 0.356645 1.34678C0.358924 1.08458 0.464092 0.83377 0.6495 0.648362C0.834909 0.462954 1.08572 0.357785 1.34792 0.355507C1.61011 0.353228 1.86272 0.454022 2.05132 0.636181L7.70832 6.29318Z"
                                  fill="#2B2828" />
                          </svg>
                      </button>
                  </a>
              </div>



              <div class="col-md-4 d-none d-md-block">
                  <h4 title="<?php echo $next; ?>"><?php echo $next; ?></h4>
                  <a href="<?php echo  $nextLink; ?>">
                      <button class="btn btn-custom btn-custom bs-button">
                          Read More &nbsp;&nbsp;
                          <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-1">
                              <path class="svg-arrow" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M7.70832 6.29318C7.89579 6.48071 8.00111 6.73502 8.00111 7.00018C8.00111 7.26534 7.89579 7.51965 7.70832 7.70718L2.05132 13.3642C1.95907 13.4597 1.84873 13.5359 1.72672 13.5883C1.60472 13.6407 1.4735 13.6683 1.34072 13.6694C1.20794 13.6706 1.07626 13.6453 0.953366 13.595C0.83047 13.5447 0.718817 13.4705 0.624924 13.3766C0.531032 13.2827 0.456778 13.171 0.406498 13.0481C0.356217 12.9252 0.330915 12.7936 0.332069 12.6608C0.333223 12.528 0.360809 12.3968 0.413218 12.2748C0.465627 12.1528 0.541809 12.0424 0.637319 11.9502L5.58732 7.00018L0.637319 2.05018C0.455161 1.86158 0.354367 1.60898 0.356645 1.34678C0.358924 1.08458 0.464092 0.83377 0.6495 0.648362C0.834909 0.462954 1.08572 0.357785 1.34792 0.355507C1.61011 0.353228 1.86272 0.454022 2.05132 0.636181L7.70832 6.29318Z"
                                  fill="#fff" />
                          </svg>
                      </button>
                  </a>
              </div>


          </div>
      </div>
      </div>
  </section>