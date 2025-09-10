<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="assets/css/main.css" rel="stylesheet" />
  <link href="assets/css/responsive.css" rel="stylesheet" />
  <title>Neointeraction - Home</title>

  <style>
.solutions-help {
  background: #fff;
}

.section-subtitle {
  color: #666;
  font-size: 18px;
  line-height: 1.6;
  max-width: 900px;
  margin: 0 auto;
}

.case-study-btn {
  background: #333 !important;
  border: 2px solid #333 !important;
  color: #fff !important;
  padding: 10px 20px;
  border-radius: 4px;
  font-weight: 500;
  font-size: 14px;
  transition: all 0.3s ease;
  white-space: nowrap;
}

.case-study-btn:hover {
  background: #555 !important;
  color: #fff !important;
}

.modal-content {
  border-radius: 12px;
  border: none;
  box-shadow: 0 10px 40px rgba(0,0,0,0.1);
}

.modal-header {
  border-bottom: 1px solid #eee;
  padding: 20px 30px;
}

.modal-body {
  padding: 30px;
}

.form-control {
  border: 2px solid #e9ecef;
  border-radius: 8px;
  padding: 12px 16px;
  font-size: 16px;
}

.form-control:focus {
  border-color: #007bff;
  box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25);
}

.modal {
  display: none;
  position: fixed;
  z-index: 1050;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5);
}

.modal.show {
  display: block !important;
}

.modal-open {
  overflow: hidden;
}

@media (max-width: 768px) {
  .section-subtitle {
    font-size: 16px;
  }
  
  .custom-card {
    margin-bottom: 25px;
  }
}
</style>


</head>

<body>
   <?php $page='Home';?>
   
  <!-- navbar  -->
  <div class="navbar-container-block">
    <?php include 'components/navigation.php'; ?>
  </div>

  <!-- navbar -- end  -->
  <!-- banner  -->
  <section class="banner section-padding">

    <div class="banner-slider">
      <div>
        <div class="container">
          <h1 class="banner-title">
            Award winning <span class="highlight">Ux Agency</span>
          </h1>
        </div>
        <!-- <button
            class="btn btn-custom btn-custom-secondary mt-4"
            >
            Talk to an Expert
          </button> -->
        <div class="banner-img-block">
          <img src="./assets/images/temp/placeholder.jpg" alt="placeholder" />
        </div>
      </div>
      <div>
        <div class="container">
          <h1 class="banner-title">
            Make tech products <span class="highlight">more human</span>
          </h1>
        </div>
        <div class="banner-img-block">
          <img src="./assets/images/temp/placeholder.jpg" alt="placeholder" />
        </div>
      </div>
      <div>
        <div class="container">
          <h1 class="banner-title">
            AI-Powered Design. <span class="highlight">Human-Centered</span> Results.
          </h1>
        </div>
        <div class="banner-img-block">
          <img src="./assets/images/temp/placeholder.jpg" alt="placeholder" />
        </div>
      </div>
      <div>
        <div class="container">
          <h1 class="banner-title">
            Design With Purpose. <span class="highlight">Build With Precision</span>.
          </h1>
        </div>
        <div class="banner-img-block">
          <img src="./assets/images/temp/placeholder.jpg" alt="placeholder" />
        </div>
      </div>
    </div>


  </section>
  <!-- banner -- end  -->
  <!-- business-success  -->
  <section class="business-success section-padding">
    <div class="container">
      <h2 class="section-title">
        Crafting business success through Digital Experience
      </h2>
      <div class="bs-card-section">
        <div class="row justify-content-center">
          <!-- Card 1 -->
          <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card">
              <div class="icon-container">
                <img src="assets/images/ux.svg" alt="ux" />
              </div>
              <h4 class="title">UX Design</h4>
              <p class="description">
                Delivering seamless experiences that speak louder than words.
              </p>
              <button class="btn btn-custom btn-custom-secondary">
                Hire Us
              </button>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card">
              <div class="icon-container">
                <img src="assets/images/pd.svg" alt="pd" />
              </div>
              <h4 class="title">Product Design</h4>
              <p class="description">
                Shaping ideas into tangible user centric design solutions
              </p>
              <button class="btn btn-custom btn-custom-secondary">
                Hire Us
              </button>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card">
              <div class="icon-container">
                <img src="assets/images/dt.svg" alt="dt" />
              </div>
              <h4 class="title">Digital Transformation</h4>
              <p class="description">
                Crafting revolutionary aesthetics that redefine user
                interaction.
              </p>
              <button class="btn btn-custom btn-custom-secondary">
                Hire Us
              </button>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card">
              <div class="icon-container">
                <img src="assets/images/fd.svg" alt="fd" />
              </div>
              <h4 class="title">Frontend Development</h4>
              <p class="description">
                Bridging creativity and code for pixel-perfect user
                interfaces.
              </p>
              <button class="btn btn-custom btn-custom-secondary">
                Hire Us
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- solutions-help section -->
<section class="solutions-help section-padding">
  <div class="container">
 <div class="d-flex justify-content-between align-items-start mb-4">
      <div>
        <h2 class="section-title" data-aos="fade-down">
          How did our solutions help?
        </h2>
      </div>
      <button class="btn btn-dark case-study-btn" data-case="all" data-aos="fade-down" id="case-study-btn">
        Download case study
      </button>
    </div>
    <p class="mb-5" data-aos="fade-up">
      Our user task-focused design empowers crew members, ensuring seamless goal achievement and enhanced productivity. Beyond technical improvements, it transforms daily routines for a more enjoyable and manageable experience.
    </p>
    <div class="bs-card-section">
      <div class="row justify-content-center">
        <!-- Card 1 -->
        <div
          class="col-12 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="100">
          <div class="custom-card case-study-card" >
            <h4 class="title" style="color: #333; margin-bottom: 16px;">Improved Usability</h4>
            <p class="description" style="color: #666; margin-bottom: 20px;">
              Our design significantly enhances the system's usability, offering a more user-friendly and accessible interface.
            </p>
        
          </div>
        </div>

        <!-- Card 2 -->
        <div
          class="col-12 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="300">
          <div class="custom-card case-study-card">
            <h4 class="title" style="color: #333; margin-bottom: 16px;">User Centric UI</h4>
            <p class="description" style="color: #666; margin-bottom: 20px;">
              Prioritizing crew well-being and mobility management, our UI design ensures both functionality and comfort.
            </p>
      
          </div>
        </div>

        <!-- Card 3 -->
        <div
          class="col-12 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="600">
          <div class="custom-card case-study-card" >
            <h4 class="title" style="color: #333; margin-bottom: 16px;">Enhanced Performance</h4>
            <p class="description" style="color: #666; margin-bottom: 20px;">
              Optimized workflows and reduced processing time resulted in significant performance improvements across all modules.
            </p>
       
          </div>
        </div>

        <!-- Card 4 -->
        <div
          class="col-12 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="900">
          <div class="custom-card case-study-card" >
            <h4 class="title" style="color: #333; margin-bottom: 16px;">Cost Efficiency</h4>
            <p class="description" style="color: #666; margin-bottom: 20px;">
              Strategic implementation reduced operational costs while maintaining high-quality standards and user satisfaction.
            </p>
         
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Case Study Download Modal -->
<div class="modal fade" id="caseStudyModal" tabindex="-1" role="dialog" aria-labelledby="caseStudyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="caseStudyModalLabel">Download Case Study</h5>
      <!-- Change this line in your modal -->
<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="mb-3">Enter your email to download the case study and stay updated with our latest insights.</p>
        <form id="caseStudyForm">
          <div class="mb-3">
            <input
              type="email"
              id="case-study-email"
              class="form-control"
              placeholder="Enter your work email"
              required>
          </div>
          <div id="case-study-status" class="mb-3"></div>
          <button type="submit" class="btn btn-custom-secondary w-100" id="case-study-submit">
            Download Case Study
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

  <!-- business-success -- end  -->
  <!-- our-impact  -->
  <section class="our-impact section-padding">
    <div class="container">
      <h2 class="section-title">Our Impact</h2>

      <div class="row w-100">
        <!-- 15+ years expertise -->
        <div class="col-6 col-md-3 count-up-item">
          <div class="count-number" data-target="15">0</div>
          <div class="count-label">years expertise</div>
        </div>
        <!-- 150+ trusted clients -->
        <div class="col-6 col-md-3 count-up-item">
          <div class="count-number" data-target="150">0</div>
          <div class="count-label">trusted clients</div>
        </div>
        <!-- 1b+ lives impacted -->
        <div class="col-6 col-md-3 count-up-item  mt-md-0">
          <div class="count-number" data-target="1">0</div>
          <div class="count-label">billion+ lives impacted</div>
        </div>
        <!-- 10+ countries impacted -->
        <div class="col-6 col-md-3 count-up-item mt-md-0">
          <div class="count-number" data-target="10">0</div>
          <div class="count-label">countries impacted</div>
        </div>
      </div>
    </div>
  </section>

  <!-- our-impact -- end  -->
  <!-- clients  -->
  <section class="clients section-padding">
    <div class="container">
      <h2 class="section-title">
        Clients we’ve partnered with
      </h2>

      <div class="scroll-container">
        <div class="scrolling-logos">
          <!-- First set of logos -->
          <div class="client-logo-flex" aria-hidden="true">
            <div class="clf-item">
              <img src="assets/images/clients/icici.png" alt="icici" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/geo.png" alt="geo" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/bnp.png" alt="bnp" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/cbd.png" alt="bnp" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/clayfin.png" alt="clayfin" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/cb.png" alt="cb" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/brac.png" alt="brac" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/qb.png" alt="qb" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/fs.png" alt="fs" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/bosch.png" alt="bosch" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/itg.png" alt="itg" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/vc.png" alt="vc" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/vidal.png" alt="vidal" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/ls.png" alt="ls" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/it.png" alt="it" />
            </div>
            <div class="clf-item">
              <img
                src="assets/images/clients/traveloka.png"
                alt="traveloka" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/db.png" alt="db" />
            </div>
            <div class="clf-item">
              <img
                src="assets/images/clients/inkmagik.png"
                alt="inkmagik" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/tricog.png" alt="tricog" />
            </div>
            <div class="clf-item">
              <img
                src="assets/images/clients/yokogawa.png"
                alt="yokogawa" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/wipro.png" alt="wipro" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/quest.png" alt="quest" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/int.png" alt="int" />
            </div>
            <div class="clf-item">
              <img src="assets/images/clients/car.png" alt="car" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- clients -- end  -->
  <!-- testimonials  -->
  <?php include 'components/testimonial.php'; ?>
  <!-- testimonials -- end  -->
  <!-- browse-project  -->
  <section class="browse-project section-padding">
    <div class="container">
      <div class="title-flex">
        <h2 class="section-title">Browse Projects</h2>
        <a href="#" class="section-links">View All</a>
      </div>
      <div class="project-block">
        <div class="project-block-item">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="project-card d-lg-flex">
                <!-- Image container with fixed height and object-fit for consistent appearance -->
                <div class="col-lg-6 p-0 project-image-container">
                  <img
                    src="assets/images/projects/itg-bpm.png"
                    alt="Project Image"
                    class="img-fluid project-image" />
                </div>
                <div
                  class="col-lg-6 d-flex flex-column justify-content-center project-content">
                  <h2 class="project-title">Intertrust BPM Tool</h2>
                  <p class="project-description">
                    A BPM application/product that helps optimizing business
                    processes in an organization
                  </p>
                  <div class="project-tags">
                    <span class="badge">Healthcare</span>
                    <span class="badge">Healthcare</span>
                  </div>

                  <div class="pb-action-btn">
                    <button class="btn btn-custom read-more-btn">
                      Read More
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="project-block-item">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="project-card d-lg-flex">
                <div class="col-lg-6 p-0 project-image-container">
                  <img
                    src="assets/images/projects/itg-bpm.png"
                    alt="Project Image"
                    class="img-fluid project-image" />
                </div>
                <div
                  class="col-lg-6 d-flex flex-column justify-content-center project-content">
                  <h2 class="project-title">Intertrust BPM Tool</h2>
                  <p class="project-description">
                    A BPM application/product that helps optimizing business
                    processes in an organization
                  </p>
                  <div class="project-tags">
                    <span class="badge">Healthcare</span>
                    <span class="badge">Healthcare</span>
                  </div>

                  <div class="pb-action-btn">
                    <button class="btn btn-custom read-more-btn">
                      Read More
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="project-block-item">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="project-card d-lg-flex">
                <div class="col-lg-6 p-0 project-image-container">
                  <img
                    src="assets/images/projects/itg-bpm.png"
                    alt="Project Image"
                    class="img-fluid project-image" />
                </div>
                <div
                  class="col-lg-6 d-flex flex-column justify-content-center project-content">
                  <h2 class="project-title">Intertrust BPM Tool</h2>
                  <p class="project-description">
                    A BPM application/product that helps optimizing business
                    processes in an organization
                  </p>
                  <div class="project-tags">
                    <span class="badge">Healthcare</span>
                    <span class="badge">Healthcare</span>
                  </div>

                  <div class="pb-action-btn">
                    <button class="btn btn-custom read-more-btn">
                      Read More
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- browse-project -- end -->
  <!-- demo-video  -->
  <section class="demo-video section-padding">
    <div class="container">
      <h2 class="section-title">Demo Video</h2>
      <img
        class=""
        src="assets/images/temp/vid.png"
        alt="vid"
        style="width: 100%; margin-top: 40px" />
    </div>
  </section>
  <!-- faq  -->
  <?php include 'components/faq.php'; ?>
  <!-- faq -- end  -->
  <!-- design-events  -->
  <section class="design-events section-padding">
    <div class="container">
      <h2 class="section-title">Design Events</h2>

      <div class="project-block ">
        <div class="project-block-item">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="project-card d-lg-flex">
                <div class="col-lg-6 p-0 project-image-container">
                  <img
                    src="assets/images/workshop.png"
                    alt="Project Image"
                    class="img-fluid project-image" />
                </div>
                <div
                  class="col-lg-6 d-flex flex-column justify-content-center project-content">
                  <h2 class="project-title">
                    Workshop on Accelerating Design decisions
                  </h2>
                  <p class="project-description">
                    A one-day deep dive into the world of UX, where we had the
                    opportunity to enrich UX Leads and Product Designers to
                    elevate their product experiences and uplift their design
                    career path.
                  </p>

                  <button class="btn btn-custom read-more-btn">
                    Read More
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- design-events -- end -->

  <!-- recent-blogs  -->
  <section class="recent-blogs section-padding">
    <div class="container">
      <div class="title-flex">
        <h2 class="section-title">Recent Blogs</h2>
        <a href="#" class="section-links">View All</a>
      </div>
      <div class="blog-container-block">
        <div class="row g-4 justify-content-center">
          <!-- Card 1 -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="blog-card h-100">
              <img src="assets/images/temp/blog.png" class="card-img-top" alt="Dashboard UI">
              <div class="card-body">
                <h5 class="blog-card-title">How to design Effective Dashboard to help boost your...</h5>
                <p class="blog-card-text">
                  <small class="text-muted">Thirunavukkarasu L • 1 day ago</small>
                </p>
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="blog-card h-100">
              <img src="assets/images/temp/blog2.png" class="card-img-top" alt="Dashboard UI">
              <div class="card-body">
                <h5 class="blog-card-title">Advantages and disadvantages of Website Templates</h5>
                <p class="blog-card-text">
                  <small class="text-muted">Rahul Kale • 6 days ago</small>
                </p>
              </div>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="blog-card h-100">
              <img src="assets/images/temp/blog.png" class="card-img-top" alt="Dashboard UI">
              <div class="card-body">
                <h5 class="blog-card-title">What Is UX Design Process? A Complete Actionable Guide</h5>
                <p class="blog-card-text">
                  <small class="text-muted">Rahul Kale • 6 days ago</small>
                </p>
              </div>
            </div>
          </div>
          <!-- Card 4 -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="blog-card h-100">
              <img src="assets/images/temp/blog2.png" class="card-img-top" alt="Dashboard UI">
              <div class="card-body">
                <h5 class="blog-card-title">What Is UX Design Process? A Complete Actionable Guide</h5>
                <p class="blog-card-text">
                  <small class="text-muted">Rahul Kale • 6 days ago</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- recent-blogs - end  -->
  <!-- banner-strip  -->
  <section class="banner-strip section-padding">
    <div class="container">
      <div class="row ui-card">
        <!-- Image Column -->
        <div class="col-md-6 img-container">
          <img src="assets/images/bs-img.png" alt="Stylized illustration" class="img-fluid">
        </div>

        <!-- Text and Button Column -->
        <div class="col-md-6 ">
          <h2 class="bs-title">Submit Enquiry</h2>
          <p class="bs-text">
            Igniting success through passion-fueled collaboration. Igniting success
            through passion-fueled collaboration.
          </p>
          <button
            class="btn btn-custom bs-button">
            Request a Quote
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- banner-strip --end  -->

  <!-- join-us  -->
  <section class="join-us section-padding">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 d-flex align-items-center">
          <h1 class="join-us-title mb-0">Join Our Team</h1>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <p class="join-us-description mb-0">Igniting success through passion-fueled collaboration. Igniting success through passion-fueled collaboration.</p>
        </div>
        <div class="col-md-3 d-flex justify-content-end pr-0">
          <button
            class="btn btn-custom-secondary">
            Apply Now
          </button>
        </div>
      </div>
    </div>
  </section>
  <?php include 'components/footer.php'; ?>
  <?php include 'includes/footer-additional-scripts.php'; ?>
  <?php include 'includes/js.php'; ?>
</body>
</html>