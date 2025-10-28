    <section class="banner heading-padding">
        <div class="pb-5">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner-content text-center">
                                <h1 class="banner-title">
                                    Award winning <span class="highlight">UX Agency</span>
                                </h1>
                                <div class="text-animate-wrapper">
                                    <div class="text-animate-wrapper-inner">
                                        <h2 class="banner-supertext">make tech products more human</h2>
                                        <h2 class="banner-supertext">business impact and ROI-driven design</h2>
                                        <h2 class="banner-supertext">design with purpose. build with precision</h2>
                                        <h2 class="banner-supertext">make tech products more human</h2>

                                    </div>
                                </div><br>
                                <button class="btn btn-custom btn-custom-secondary banner-btn consultation-btn"
                                    data-bs-toggle="modal" data-bs-target="#registerModal">
                                    Book A Consultation
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <style>

/* @media (min-width: 768px) {
    :root {
    --font-size: 1.125rem;
    --line-height: 3;
    }
} */

.text-animate-wrapper {
    display: inline-block;
    border-radius: 0.5rem;
    overflow: hidden;
    flex-grow: 1;
    /* Allows .window to grow and take up remaining space */
    height: calc(2rem * 1.625);
    vertical-align: bottom;
}

.text-animate-wrapper-inner {
    display: inline-block;
    animation: scroll-text 5s ease-in-out infinite;
}

@keyframes scroll-text {
  0% {
    transform: translateY(0%);
    opacity: 1; /* fully visible */
  }
  10% {
    opacity: 0.5; /* fade out as it starts moving */
  }
  25% {
    transform: translateY(calc(-25%));
    opacity: 1; /* fade back in after moving */
  }
  35% {
    opacity: 0.75;  /* fade out again before next move */
  }
  50% {
    transform: translateY(calc(-50%));
    opacity: 1;
  }
  60% {
    opacity: 0.75;
  }
  75% {
    transform: translateY(calc(-75%));
    opacity: 1;
  }
  /* 85% {
    opacity: 0.75;
  } */
  100% {
    transform: translateY(calc(-75%));
    opacity: 1;
  }
}

    @media (max-width: 768px) {
            .text-animate-wrapper {
                height: calc(1rem * 1.625);
            }
    }
    </style>