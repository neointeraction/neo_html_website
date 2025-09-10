<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="assets/css/vendor/aos.css" rel="stylesheet" />
  <link href="assets/css/main.css" rel="stylesheet" />
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
          <h1 class="banner-title" data-aos="fade-up">
            Award winning <span class="highlight">Ux Agency</span>
          </h1>
        </div>
        <!-- <button
            class="btn btn-custom btn-custom-secondary mt-4"
            data-aos="fade-up">
            Talk to an Expert
          </button> -->
        <div class="banner-img-block" data-aos="fade-up">
          <img src="./assets/images/temp/placeholder.jpg" alt="placeholder" />
        </div>
      </div>
      <div>
        <div class="container">
          <h1 class="banner-title" data-aos="fade-up">
            Make tech products <span class="highlight">more human</span>
          </h1>
        </div>
        <div class="banner-img-block" data-aos="fade-up">
          <img src="./assets/images/temp/placeholder.jpg" alt="placeholder" />
        </div>
      </div>
      <div>
        <div class="container">
          <h1 class="banner-title" data-aos="fade-up">
            AI-Powered Design. <span class="highlight">Human-Centered</span> Results.
          </h1>
        </div>
        <div class="banner-img-block" data-aos="fade-up">
          <img src="./assets/images/temp/placeholder.jpg" alt="placeholder" />
        </div>
      </div>
      <div>
        <div class="container">
          <h1 class="banner-title" data-aos="fade-up">
            Design With Purpose. <span class="highlight">Build With Precision</span>.
          </h1>
        </div>
        <div class="banner-img-block" data-aos="fade-up">
          <img src="./assets/images/temp/placeholder.jpg" alt="placeholder" />
        </div>
      </div>
    </div>


  </section>
  <!-- banner -- end  -->
  <!-- business-success  -->
  <section class="business-success section-padding">
    <div class="container">
      <h2 class="section-title" data-aos="fade-down">
        Crafting business success through Digital Experience
      </h2>
      <div class="bs-card-section">
        <div class="row justify-content-center">
          <!-- Card 1 -->
          <div
            class="col-12 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="100">
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
          <div
            class="col-12 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="300">
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
          <div
            class="col-12 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="600">
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
          <div
            class="col-12 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="900">
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
      <h2 class="section-title" data-aos="fade-down">Our Impact</h2>

      <div class="row w-100" data-aos="fade-up">
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
        <div class="col-6 col-md-3 count-up-item mt-4 mt-md-0">
          <div class="count-number" data-target="1">0</div>
          <div class="count-label">billion+ lives impacted</div>
        </div>
        <!-- 10+ countries impacted -->
        <div class="col-6 col-md-3 count-up-item mt-4 mt-md-0">
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
      <h2 class="section-title" data-aos="fade-down">
        Clients we’ve partnered with
      </h2>

      <div class="scroll-container" data-aos="fade-up">
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
  <section class="testimonials section-padding">
    <div class="container">
      <h2 class="section-title" data-aos="fade-down">Testimonials</h2>
      <div class="testimonial-slider-block">
        <div class="testimonial-slider">
          <div class="tc-item-flex">
            <div
              class="testimonial-card"
              data-aos="fade-up"
              data-aos-delay="100">
              <div class="quote-icon"></div>
              <div class="testimonial-text">
                They had the expertise to provide out-of-the-box ideas
                throughout the project
              </div>
              <div class="author-info">
                <img
                  src="https://placehold.co/60x60/808080/FFFFFF?text=S.M"
                  alt="Jacob Varghese"
                  class="author-image" />
                <div class="author-details">
                  <span class="author-name">Sameer Mathur </span>
                  <span class="author-title">Senior VP at Tricog Health
                  </span>
                </div>
              </div>
            </div>
            <div
              class="testimonial-card"
              data-aos="fade-up"
              data-aos-delay="300">
              <div class="quote-icon"></div>
              <div class="testimonial-text">
                We were most impressed with their commitment to the project.
              </div>
              <div class="author-info">
                <img
                  src="https://placehold.co/60x60/808080/FFFFFF?text=J.V"
                  alt="Jacob Varghese"
                  class="author-image" />
                <div class="author-details">
                  <span class="author-name">Jacob Varghese</span>
                  <span class="author-title">Director at Noctil</span>
                </div>
              </div>
            </div>
          </div>

          <div class="tc-item-flex">
            <div
              class="testimonial-card"
              data-aos="fade-up"
              data-aos-delay="100">
              <div class="quote-icon"></div>
              <div class="testimonial-text">
                They had the expertise to provide out-of-the-box ideas
                throughout the project
              </div>
              <div class="author-info">
                <img
                  src="https://placehold.co/60x60/808080/FFFFFF?text=S.M"
                  alt="Jacob Varghese"
                  class="author-image" />
                <div class="author-details">
                  <span class="author-name">John Doe </span>
                  <span class="author-title">Senior VP at Tricog Health
                  </span>
                </div>
              </div>
            </div>
            <div
              class="testimonial-card"
              data-aos="fade-up"
              data-aos-delay="300">
              <div class="quote-icon"></div>
              <div class="testimonial-text">
                We were most impressed with their commitment to the project.
              </div>
              <div class="author-info">
                <img
                  src="https://placehold.co/60x60/808080/FFFFFF?text=J.V"
                  alt="Jacob Varghese"
                  class="author-image" />
                <div class="author-details">
                  <span class="author-name">Jane Doe</span>
                  <span class="author-title">Director at Noctil</span>
                </div>
              </div>
            </div>
          </div>

          <div class="tc-item-flex">
            <div
              class="testimonial-card"
              data-aos="fade-up"
              data-aos-delay="100">
              <div class="quote-icon"></div>
              <div class="testimonial-text">
                They had the expertise to provide out-of-the-box ideas
                throughout the project
              </div>
              <div class="author-info">
                <img
                  src="https://placehold.co/60x60/808080/FFFFFF?text=S.M"
                  alt="Jacob Varghese"
                  class="author-image" />
                <div class="author-details">
                  <span class="author-name">Sameer Mathew </span>
                  <span class="author-title">Senior VP at Tricog Health
                  </span>
                </div>
              </div>
            </div>
            <div
              class="testimonial-card"
              data-aos="fade-up"
              data-aos-delay="300">
              <div class="quote-icon"></div>
              <div class="testimonial-text">
                We were most impressed with their commitment to the project.
              </div>
              <div class="author-info">
                <img
                  src="https://placehold.co/60x60/808080/FFFFFF?text=J.V"
                  alt="Jacob Varghese"
                  class="author-image" />
                <div class="author-details">
                  <span class="author-name">James Varghese</span>
                  <span class="author-title">Director at Noctil</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonials -- end  -->
  <!-- browse-project  -->
  <section class="browse-project section-padding">
    <div class="container">
      <div class="title-flex">
        <h2 class="section-title" data-aos="fade-down">Browse Projects</h2>
        <a href="#" class="section-links" data-aos="fade-down">View All</a>
      </div>
      <div class="project-block">
        <div class="project-block-item" data-aos="fade-up">
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
        <div class="project-block-item" data-aos="fade-up">
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
        <div class="project-block-item" data-aos="fade-up">
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
      <h2 class="section-title" data-aos="fade-down">Demo Video</h2>
      <img
        data-aos="fade-up"
        src="assets/images/temp/vid.png"
        alt="vid"
        style="width: 100%; margin-top: 40px" />
    </div>
  </section>
  <!-- faq  -->
  <section class="faq section-padding">
    <div class="container">
      <h2 class="section-title" data-aos="fade-down">FAQ’s</h2>

      <div class="faq-block" data-aos="fade-up">
        <div class="accordion" id="faqAccordion">
          <!-- FAQ Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne">
                How to choose a UI UX design company?
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Look at their design portfolio, read client reviews, team
                strength and their experience in various industry domains.
                Make sure their design process and communication match what
                you need. It will also help if the agency has the capability
                for end to end design delivery including the front end
                development.
              </div>
            </div>
          </div>
          <!-- FAQ Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo">
                What does a UI UX Agency do?
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                A UI UX Agency designs and optimizes digital products to be
                user-friendly and aesthetically pleasing. They focus on
                improving user satisfaction by enhancing the usability,
                accessibility, and pleasure provided in the interaction
                between the user and the product.
              </div>
            </div>
          </div>
          <!-- FAQ Item 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree">
                What is your UI UX Design process?
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Our process typically includes Discovery, Research, Ideation,
                Prototyping, and Testing. We work closely with our clients at
                each stage to ensure the final product meets their business
                goals and user needs.
              </div>
            </div>
          </div>
          <!-- FAQ Item 4 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFour"
                aria-expanded="false"
                aria-controls="collapseFour">
                How do you approach a new design project?
              </button>
            </h2>
            <div
              id="collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="headingFour"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We start by understanding the client's business objectives and
                the target audience. We then conduct a thorough analysis to
                identify user needs and pain points, which informs our design
                strategy and ensures a user-centric approach from the start.
              </div>
            </div>
          </div>
          <!-- FAQ Item 5 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFive"
                aria-expanded="false"
                aria-controls="collapseFive">
                What all services do you offer in UI/UX design?
              </button>
            </h2>
            <div
              id="collapseFive"
              class="accordion-collapse collapse"
              aria-labelledby="headingFive"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We offer a wide range of services including user research,
                wireframing, prototyping, user interface design, usability
                testing, and front-end development. Our goal is to provide a
                complete solution that covers every aspect of the design
                process.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- faq -- end  -->
  <!-- design-events  -->
  <section class="design-events section-padding">
    <div class="container">
      <h2 class="section-title" data-aos="fade-down">Design Events</h2>

      <div class="project-block">
        <div class="project-block-item" data-aos="fade-up">
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
        <h2 class="section-title" data-aos="fade-down">Recent Blogs</h2>
        <a href="#" class="section-links" data-aos="fade-down">View All</a>
      </div>
      <div class="blog-container-block">
        <div class="row g-4 justify-content-center">
          <!-- Card 1 -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up"
            data-aos-delay="100">
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
          <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up"
            data-aos-delay="300">
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
          <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up"
            data-aos-delay="600">
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
          <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up"
            data-aos-delay="900">
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
      <div class="row ui-card ">
        <!-- Image Column -->
        <div class="col-md-6  img-container" data-aos="zoom-in">
          <img src="assets/images/bs-img.png" alt="Stylized illustration" class="img-fluid">
        </div>

        <!-- Text and Button Column -->
        <div class="col-md-6 ">
          <h2 class="bs-title" data-aos="fade-left">Submit Enquiry</h2>
          <p class="bs-text" data-aos="fade-left">
            Igniting success through passion-fueled collaboration. Igniting success
            through passion-fueled collaboration.
          </p>
          <button
            class="btn btn-custom bs-button"
            data-aos="fade-left">
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
      <div class="row align-items-center" data-aos="fade-up">
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
  <!-- join-us -- end  -->
  <!-- footer  -->
  <?php include 'components/footer.php'; ?>
  <!-- footer -- end -->
</body>

<!-- script includes -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/vendor/aos.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/main.js"></script>

</html>