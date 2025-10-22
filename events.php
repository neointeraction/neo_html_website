<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <?php include $path . 'includes/css.php'; ?>
    <title>Events on Design & Front End Technologies | Neointeraction Bangalore</title>
    <meta name="description"
        content="Neointeraction hosts events on UX research services in India. Join industry leaders to explore user experience strategies, design innovations, and front-end trends." />
    <meta name="keywords" content="web design, UI/UX, digital transformation, web development, neointeraction" />
    <link rel="canonical" href="https://www.neointeraction.com/blog" />
    <meta property="og:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations" />
    <meta property="og:description" content="Neointeraction hosts events on UX research services in India. Join industry leaders to explore user experience strategies, design innovations, and front-end trends." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/assets/images/og/neo-events-design-brand.jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="https://www.neointeraction.com/blog" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations" />
    <meta name="twitter:description" content="Neointeraction hosts events on UX research services in India. Join industry leaders to explore user experience strategies, design innovations, and front-end trends." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/assets/images/og/neo-events-design-brand.jpeg" />
</head>

<body>
    <?php
    $page = 'Events';
    $events_json = file_get_contents($path . 'data/events_data.json');
    $events = json_decode($events_json, true);
    ?>
    <?php include $path . 'includes/body-additional-scripts.php'; ?>
    <!-- navbar  -->
    <div class="navbar-container-block">
        <?php include $path . 'components/navigation.php'; ?>
        <?php include $path . 'components/whatsapp.php'; ?>
    </div>
    <!-- navbar  end  -->
    <!-- banner  -->
    <section class="event-banner section-padding">
        <div>
            <div class="container">
                <h1 class="banner-title">
                    Journey to <span class="highlight">crafting success</span>
                </h1>
                <p class="banner-subtext mt-0">Embark on a transformative journey where creativity meets expertise. Connect with industry leaders, explore innovative ideas, and
                    leave inspired to reshape your path to success</p>
            </div>
        </div>
    </section>
    <!-- banner - end -->
    <!-- upcoming-events  -->
    <section class="upcoming-events section-padding">
        <div class="container">
            <h2 class="section-title">
                Upcoming Events
            </h2>
            <div class="project-block section-margin">
                <div class="project-block-item">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="project-card d-lg-flex">
                                <div class="col-lg-6 p-0 project-image-container">
                                    <img src="assets/images/events/UX-Audit-101.webp" alt="Project Image" class="img-fluid project-image" />
                                </div>
                                <div class="col-lg-6  flex-column justify-content-center project-content">
                                    <h2 class="project-title">
                                        UX Audit 101
                                    </h2>
                                    <ul class="time-list">
                                        <li>20th September 2025</li>
                                        <li>10 am - 12 pm IST</li>
                                    </ul>
                                    <p class="project-description">
                                        Learn how UX Audits help uncover usability issues, improve accessibility, and create seamless user experiences. Perfect for beginners and
                                        professionals alike, you’ll gain practical skills to make products more intuitive and user-friendly.
                                    </p>
                                    <div class="project-tags upcoming-events-tags">
                                        <span class="badge">Online Workshop</span>
                                    </div>
                                    <!-- <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#registerModal">
                                        Register Now
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php 
        $title = 'Submit Enquiry'; 
        $desc = 'Igniting success through passion-fueled collaboration.Igniting success through passion-fueled collaboration.';
        $buttonName = 'Request a Quote';
        $imageLink = "assets/images/about-us/hire-ui.webp";
        $imageAlt = "Request a Quote";
        include $path . 'components/hire-designers-engineers.php'; 
    ?>

    <section class="engagement-modal section-padding">
        <div class="container">
            <h2 class="section-title">
                Past Events
            </h2>
            <div class="engagement-modal-block section-margin">
                <?php foreach ($events as $event) { ?>
                <div class="project-block-item">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="project-card d-lg-flex">
                                <div class="col-lg-6 p-0 project-image-container">
                                    <img src="<?php echo $path; ?>assets/images/events/<?php echo $event['image']; ?>" alt="<?php echo $event['alt']; ?>"
                                        class="img-fluid project-image" style="width:100%;height:auto;" />
                                </div>
                                <div class="col-lg-6 d-flex flex-column justify-content-center project-content">
                                    <h2 class="project-title">
                                        <?php echo $event['title']; ?>
                                    </h2>
                                    <p class="project-description">
                                        <?php echo $event['description']; ?>
                                    </p>
                                    <?php if($event['link']){ ?>
                                    <button class="btn btn-custom btn-custom-secondary em-btn" onclick="location.href='<?php echo $rootPath . $event['link']; ?>';"
                                        style="cursor: pointer;">
                                        View More
                                    </button>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="clients section-padding">
        <div class="container">
            <h2 class="section-title">
                Attendees From
            </h2>
            <div class="scroll-container section-margin">
                <div class="scrolling-logos">
                    <?php $client_tag = 'events'; include $path . 'components/clients.php'; ?>
                </div>
            </div>
        </div>
    </section>

     
    <?php include $path . 'components/testimonial-participants.php'; ?>

    <div class="container">
        <h2 class="section-title">
            Event gallery
        </h2>
        <p class="body-text">Take a look inside our event highlights — a showcase of creative minds, inspiring sessions, and collaborative moments that brought design innovation to
            life.</p>
    </div>



    <section>
        <div class="container">
            <div class="engagement-modal-block section-margin">
                <div class="project-block-item">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="project-card d-lg-flex">
                                <div class="col-lg-6 p-0 project-image-container">
                                    <iframe class="video-iframe" height="280" src="https://www.youtube.com/embed/ag_Y_vApTp8?si=LDc4iJk334QIn4JA"
                                        title="YouTube video player" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="border-radius: 0;width:100%;border:0;"></iframe>
                                </div>
                                <div class="col-lg-6 d-flex flex-column justify-content-center project-content" style="margin-bottom:7px">
                                    <h2 class="project-title">
                                        Micro frontend architecture workshop
                                    </h2>
                                    <p class="body-text m-0">A hands-on session exploring user-centered design principles, practical tools, and real-world case studies to craft better digital experiences</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="engagement-modal-block section-margin">
                <div class="project-block-item">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="project-card d-lg-flex">
                                <div class="col-lg-6 p-0 project-image-container">
                                    <iframe class="video-iframe" height="290" src="https://www.youtube.com/embed/6Y12RcoHwc4?si=y75cMFm8oaaivTfb"
                                        title="YouTube video player"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="border-radius: 0;width:100%;border:0;"></iframe>
                                </div>
                                <div class="col-lg-6 d-flex flex-column justify-content-center project-content" style="margin-bottom:7px">
                                    <h2 class="project-title">
                                        UX design Workshop
                                    </h2>
                                    <p class="body-text">A hands-on session exploring user-centered design principles, practical tools, and real-world case studies to craft better
                                        digital experiences</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- event-highlights  -->

    <section class="event-highlights section-padding mb-4">
        <div class="container">
            <div class="title-flex">
                <h2 class="section-title">
                    Event Highlights
                </h2>
                <div class="slick-navigation event-highlight-nav">
                    <button class="btn btn-custom btn-custom-secondary slick-btn slick-prev-custom" aria-label="Previous">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="svg" fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.292787 7.70734C0.105316 7.51981 0 7.26551 0 7.00034C0 6.73518 0.105316 6.48087 0.292787 6.29334L5.94979 0.636343C6.04203 0.540833 6.15238 0.464651 6.27438 0.412242C6.39639 0.359833 6.52761 0.332246 6.66039 0.331092C6.79316 0.329939 6.92484 0.355241 7.04774 0.405521C7.17064 0.455802 7.28229 0.530055 7.37618 0.623948C7.47007 0.717841 7.54433 0.829492 7.59461 0.952389C7.64489 1.07529 7.67019 1.20696 7.66904 1.33974C7.66788 1.47252 7.6403 1.60374 7.58789 1.72575C7.53548 1.84775 7.4593 1.9581 7.36379 2.05034L2.41379 7.00034L7.36379 11.9503C7.54594 12.1389 7.64674 12.3915 7.64446 12.6537C7.64218 12.9159 7.53701 13.1668 7.35161 13.3522C7.1662 13.5376 6.91538 13.6427 6.65319 13.645C6.39099 13.6473 6.13839 13.5465 5.94979 13.3643L0.292787 7.70734Z"
                                fill="#2B2828" />
                        </svg>
                    </button>
                    <button class="btn btn-custom btn-custom-secondary slick-btn slick-next-custom" aria-label="Next">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="svg" fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.70832 6.29318C7.89579 6.48071 8.00111 6.73502 8.00111 7.00018C8.00111 7.26534 7.89579 7.51965 7.70832 7.70718L2.05132 13.3642C1.95907 13.4597 1.84873 13.5359 1.72672 13.5883C1.60472 13.6407 1.4735 13.6683 1.34072 13.6694C1.20794 13.6706 1.07626 13.6453 0.953366 13.595C0.83047 13.5447 0.718817 13.4705 0.624924 13.3766C0.531032 13.2827 0.456778 13.171 0.406498 13.0481C0.356217 12.9252 0.330915 12.7936 0.332069 12.6608C0.333223 12.528 0.360809 12.3968 0.413218 12.2748C0.465627 12.1528 0.541809 12.0424 0.637319 11.9502L5.58732 7.00018L0.637319 2.05018C0.455161 1.86158 0.354367 1.60898 0.356645 1.34678C0.358924 1.08458 0.464092 0.83377 0.6495 0.648362C0.834909 0.462954 1.08572 0.357785 1.34792 0.355507C1.61011 0.353228 1.86272 0.454022 2.05132 0.636181L7.70832 6.29318Z"
                                fill="#2B2828" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="event-slider section-margin">
                <div class="project-block event-slider-block">
                    <div class="project-block-item event-item-block">
                        <img src="assets/images/events/event-highlights_1.webp" alt="Creative Atmosphere" class="img-fluid project-image" />
                    </div>
                    <div class="project-block-item event-item-block">
                        <img src="assets/images/events/event-highlights_2.webp" alt="Design Collaborations" class="img-fluid project-image" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include $path . 'components/footer.php'; ?>
    <?php include $path . 'includes/footer-additional-scripts.php'; ?>
    <?php include $path . 'includes/js.php'; ?>
    <?php include $path . 'components/registration-modal.php'; ?>
</body>

</html>
