<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path . 'includes/favicon.php'; ?>
    <?php include $path . 'includes/css.php'; ?>
    <?php include $path . 'includes/head-additional-scripts.php'; ?>
    <title>Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations</title>
    <meta name="description" content="Discover the latest trends and expert insights in UI/UX designs on our blog. Stay informed and inspired with our informative articles and tips. Explore now!" />
    <meta name="keywords" content="web design, UI/UX, digital transformation, web development, neointeraction" />
    <link rel="canonical" href="https://www.neointeraction.com/blog" />
    <meta property="og:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations" />
    <meta property="og:description" content="Craft your brand identity with the expertise of Neointeraction Design  best branding studio in India." />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/assets/images/og/neo-events-design-brand.jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="https://www.neointeraction.com/blog" />
    <meta property="og:site_name" content="Neointeraction Design" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Neointeraction UX Designs &amp; Front-End Development Blogs | Insights &amp; Innovations" />
    <meta name="twitter:description" content="Craft your brand identity with the expertise of Neointeraction Design  best branding studio in India." />
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/assets/images/og/neo-events-design-brand.jpeg" />
</head>

<body>
    <?php
    $page = 'Events';
    $events = [
        [
            'title' => 'Micro Frontend Architecture Driving User Experience',
            'description' => '1-Day workshop on how to implement Micro Frontend Architecture in large-scale applications for streamlined development and to enhance digital interactions curated for Frontend Development Engineers.',
            'image' => 'micro-frontend-architecture.jpeg',
            'alt' => 'Micro Frontend Architecture Driving User Experience',
            'link' => 'micro-frontend-architecture-driving-user-experience.php'
        ],
        [
            'title' => 'Effective Methods to Accelerate Design decisions',
            'description' => 'A one-day deep dive into the world of UX, where we had the opportunity to enrich UX Leads and Product Designers to elevate their product experiences and uplift their design career path.',
            'image' => 'effective-methods-to-accelerate-design-decisions.jpeg',
            'alt' => 'Effective Methods to Accelerate Design decisions',
            'link' => 'effective-methods-to-accelerate-design-decisions.php'
        ],
        [
            'title' => 'Simplifying Logo Design with Grids',
            'description' => 'Learn expert techniques and strategies that will help you create simpler, more impactful logos using grid systems',
            'image' => 'simplifying-logo-design-with-grids.jpeg', // Placeholder, will update with correct image
            'alt' => 'Simplifying Logo Design with Grids',
            'link' => 'simplifying-logo-design-with-grids.php'
        ],
        [
            'title' => 'Introduction to Micro frontend Architecture',
            'description' => 'Learn key benefits, best practices, and real-world applications for your development process.',
            'image' => 'introduction-to-micro-frontend-architecture.jpeg', // Placeholder, will update with correct image
            'alt' => 'Introduction to Micro frontend Architecture',
            'link' => 'introduction-to-micro-frontend-architecture.php'
        ],
        [
            'title' => 'How to make your UX UI Portfolio standout',
            'description' => 'Mastering UI/UX Portfolios: Key Takeaways from Our Webinar on how to design a standout portfolio and make a lasting a lasting impression.',
            'image' => 'how-to-make-your-ux-ui-portfolio-standout.jpeg', // Placeholder, will update with correct image
            'alt' => 'How to make your UX UI Portfolio standout',
            'link' => 'how-to-make-your-ux-ui-portfolio-standout.php'
        ],
        [
            'title' => 'Introduction to Micro frontend Architecture',
            'description' => 'Explored the transformative potential of micro front-end architecture with real-world use cases in our recent workshop.',
            'image' => 'introduction-to-micro-frontend-architecture-2.jpeg', // Placeholder, will update with correct image
            'alt' => 'Introduction to Micro frontend Architecture',
            'link' => 'introduction-to-micro-frontend-architecture-2.php'
        ]

    ];
    ?>
    <?php include $path . 'includes/body-additional-scripts.php'; ?>
    <!-- navbar  -->
    <div class="navbar-container-block">
        <?php include $path . 'components/navigation.php'; ?>
        <?php include $path . 'components/whatsapp.php'; ?>
    </div>
    <!-- navbar -- end  -->
    <!-- banner  -->
    <section class="event-banner section-padding">
        <div>
            <div class="container">
                <h1 class="banner-title">
                    Journey to <span class="highlight">crafting success</span>
                </h1>
                <p class="banner-subtext mt-0">Embark on a transformative journey where creativity meets expertise. Connect with industry leaders, explore innovative ideas, and leave inspired to reshape your path to success</p>
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
                                    <img
                                        src="assets/images/UX Audit 101.jpg"
                                        alt="Project Image"
                                        class="img-fluid project-image" />
                                </div>
                                <div
                                    class="col-lg-6  flex-column justify-content-center project-content">
                                    <h2 class="project-title">
                                        UX Audit 101
                                    </h2>
                                    <ul class="time-list">
                                        <li>20th September 2025</li>
                                        <li>10 am - 12 pm IST</li>
                                    </ul>
                                    <p class="project-description">
                                        Learn how UX Audits help uncover usability issues, improve accessibility, and create seamless user experiences. Perfect for beginners and professionals alike, you’ll gain practical skills to make products more intuitive and user-friendly.
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



    <!-- upcoming-events  -->
    <?php include 'components/submit-enquiry.php'; ?>

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
                                        <img
                                            src="<?php echo $path; ?>assets/images/events/<?php echo $event['image']; ?>"
                                            alt="<?php echo $event['alt']; ?>"
                                            class="img-fluid project-image"
                                            width="100%"
                                            height="auto" />
                                    </div>
                                    <div
                                        class="col-lg-6 d-flex flex-column justify-content-center project-content">
                                        <h2 class="project-title">
                                            <?php echo $event['title']; ?>
                                        </h2>
                                        <p class="project-description">
                                            <?php echo $event['description']; ?>
                                        </p>
                                        <button class="btn btn-custom btn-custom-secondary em-btn" onclick="location.href='<?php echo $rootPath . $event['link']; ?>';" style="cursor: pointer;">
                                            View More
                                        </button>
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
                    <?php include $path . 'components/event-attendees.php'; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- banner -- end  -->
    <?php include $path . 'components/testimonial-participants.php'; ?>

    <div class="container">
        <h2 class="section-title">
            Event gallery
        </h2>
        <p class="body-text">Take a look inside our event highlights — a showcase of creative minds, inspiring sessions, and collaborative moments that brought design innovation to life.</p>
    </div>

    <section class="demo-video experience-block ">
        <div class="container">
            <h2 class="section-title">
                Micro frontend architecture workshop
            </h2>
            <p class="body-text">An in-depth workshop on breaking monoliths into scalable micro frontends, streamlining development, and enabling independent team deployments.</p>
            <div class="video-container section-margin ">
                <iframe class="video-iframe" width="100%" height="650" src="https://www.youtube.com/embed/S-gxMxp6tDU?si=TgzP8kdXa-K0HT4f" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="border-radius: 0;"></iframe>
            </div>
        </div>
    </section>

    <section class="demo-video experience-block ">
        <div class="container">
            <h2 class="section-title">
                UX design Workshop
            </h2>
            <p class="body-text">A hands-on session exploring user-centered design principles, practical tools, and real-world case studies to craft better digital experiences</p>
            <div class="video-container section-margin ">
                <iframe class="video-iframe" width="100%" height="650" src="https://www.youtube.com/embed/6Y12RcoHwc4?si=y75cMFm8oaaivTfb" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="border-radius: 0;"></iframe>
            </div>
        </div>
    </section>

    <!-- event-highlights  -->

    <section class="event-highlights section-padding">
        <div class="container">
            <div class="title-flex">
                <h2 class="section-title">
                    Event Highlights
                </h2>
                <div class="slick-navigation event-highlight-nav">
                    <button class="btn btn-custom btn-custom-secondary slick-btn slick-prev-custom">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="svg" fill-rule="evenodd" clip-rule="evenodd" d="M0.292787 7.70734C0.105316 7.51981 0 7.26551 0 7.00034C0 6.73518 0.105316 6.48087 0.292787 6.29334L5.94979 0.636343C6.04203 0.540833 6.15238 0.464651 6.27438 0.412242C6.39639 0.359833 6.52761 0.332246 6.66039 0.331092C6.79316 0.329939 6.92484 0.355241 7.04774 0.405521C7.17064 0.455802 7.28229 0.530055 7.37618 0.623948C7.47007 0.717841 7.54433 0.829492 7.59461 0.952389C7.64489 1.07529 7.67019 1.20696 7.66904 1.33974C7.66788 1.47252 7.6403 1.60374 7.58789 1.72575C7.53548 1.84775 7.4593 1.9581 7.36379 2.05034L2.41379 7.00034L7.36379 11.9503C7.54594 12.1389 7.64674 12.3915 7.64446 12.6537C7.64218 12.9159 7.53701 13.1668 7.35161 13.3522C7.1662 13.5376 6.91538 13.6427 6.65319 13.645C6.39099 13.6473 6.13839 13.5465 5.94979 13.3643L0.292787 7.70734Z" fill="#2B2828" />
                        </svg>
                    </button>
                    <button class="btn btn-custom btn-custom-secondary slick-btn slick-next-custom">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="svg" fill-rule="evenodd" clip-rule="evenodd" d="M7.70832 6.29318C7.89579 6.48071 8.00111 6.73502 8.00111 7.00018C8.00111 7.26534 7.89579 7.51965 7.70832 7.70718L2.05132 13.3642C1.95907 13.4597 1.84873 13.5359 1.72672 13.5883C1.60472 13.6407 1.4735 13.6683 1.34072 13.6694C1.20794 13.6706 1.07626 13.6453 0.953366 13.595C0.83047 13.5447 0.718817 13.4705 0.624924 13.3766C0.531032 13.2827 0.456778 13.171 0.406498 13.0481C0.356217 12.9252 0.330915 12.7936 0.332069 12.6608C0.333223 12.528 0.360809 12.3968 0.413218 12.2748C0.465627 12.1528 0.541809 12.0424 0.637319 11.9502L5.58732 7.00018L0.637319 2.05018C0.455161 1.86158 0.354367 1.60898 0.356645 1.34678C0.358924 1.08458 0.464092 0.83377 0.6495 0.648362C0.834909 0.462954 1.08572 0.357785 1.34792 0.355507C1.61011 0.353228 1.86272 0.454022 2.05132 0.636181L7.70832 6.29318Z" fill="#2B2828" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="event-slider section-margin">
                <div class="project-block event-slider-block">
                    <div class="project-block-item event-item-block">
                        <img
                            src="assets/images/life-at-neo/creative-atmosphere.jpeg"
                            alt="Creative Atmosphere"
                            class="img-fluid project-image" />
                    </div>
                    <div class="project-block-item event-item-block">
                        <img
                            src="assets/images/life-at-neo/design-collaborations.jpeg"
                            alt="Design Collaborations"
                            class="img-fluid project-image" />
                    </div>
                    <div class="project-block-item event-item-block">
                        <img
                            src="assets/images/life-at-neo/continuous-learning.jpeg"
                            alt="Continuous Learning"
                            class="img-fluid project-image" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include $path . 'components/faq.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
    <?php include $path . 'includes/footer-additional-scripts.php'; ?>
    <?php include $path . 'includes/js.php'; ?>
</body>

</html>