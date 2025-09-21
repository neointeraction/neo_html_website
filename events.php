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


    <?php include $path . 'components/footer.php'; ?>
    <?php include $path . 'includes/footer-additional-scripts.php'; ?>
    <?php include $path . 'includes/js.php'; ?>
</body>

</html>