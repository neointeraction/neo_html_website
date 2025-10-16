<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path.'includes/favicon.php'; ?>
    <?php include $path.'includes/css.php'; ?>
    <?php include $path.'includes/head-additional-scripts.php'; ?>
    <title>How to boost your agency website using Strapi &amp; Next.js</title>
    <meta name="description"
        content="Neointeraction Design, a ui ux design company in Bangalore recently redesigned its website using Strapi &amp;amp; Next.js" />
    <link rel="canonical"
        href="https://www.neointeraction.com/post/how-to-boost-your-agency-website-using-strapi-next-js" />
    <meta property="og:title" content="How to boost your agency website using Strapi &amp; Next.js" />
    <meta property="og:description"
        content="Neointeraction Design is a ui ux design company in Bangalore that is constantly researching and attempting to expand its boundaries, and the redesigned website using Strapi &amp; Next.js is a step in that direction. This blog documents our journey through the design and development phases, as well as the reasons behind our choices.Why a redesign?We decided to redesign our website to make it lighter, and faster and to keep up with current trends. Unlike the previous website's poor content management " />
    <meta property="og:image"
        content="" />
    <meta property="og:image:width" content="941" />
    <meta property="og:image:height" content="727" />
    <meta property="og:url"
        content="https://www.neointeraction.com/post/how-to-boost-your-agency-website-using-strapi-next-js" />
    <meta property="og:site_name" content="Neointeraction" />
    <meta property="og:type" content="article" />
    <meta property="article:author" content="Shameer M" />
    <meta property="article:published_time" content="2024-01-24T10:28:38.570Z" />
    <meta property="article:modified_time" content="2024-04-30T09:54:53.972Z" />
    <link rel="alternate" href="https://www.neointeraction.com/blog-feed.xml" title="Neointeraction - RSS"
        type="application/rss+xml" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="How to boost your agency website using Strapi &amp; Next.js" />
    <meta name="twitter:description"
        content="Neointeraction Design is a ui ux design company in Bangalore that is constantly researching and attempting to expand its boundaries, and the redesigned website using Strapi &amp; Next.js is a step in that direction. This blog documents our journey through the design and development phases, as well as the reasons behind our choices.Why a redesign?We decided to redesign our website to make it lighter, and faster and to keep up with current trends. Unlike the previous website's poor content management " />
    <meta name="twitter:image"
        content="" />
</head>

<body>
    <?php $page = 'blog'; ?>
    <?php include $path.'includes/body-additional-scripts.php'; ?>
    <!-- navbar  -->
    <div class="navbar-container-block">
        <?php include $path.'components/navigation.php'; ?>
        <?php include $path.'components/whatsapp.php'; ?>
    </div>
    <!-- navbar -- end  -->
    <!-- banner  -->
    <section class="banner section-padding">
        <div class="container">
            <div class="blog-body-padding">
                <p class="blog-author-text">
                <div class="avatar-img-block">
                    <img src="<?php echo $path; ?>assets/images/blog/author/shameer.avif" alt="avatar"
                        class="avatar-img" />
                </div>
                <span>Shameer M • 24 Jan, 2024</span>
                </p>
                <h1 class="banner-title">
                    How to boost your agency website using Strapi & Next.js
                </h1>
                <div class="blog-banner-img">
                    <img src="<?php echo $path; ?>assets/images/blog/how-to-boost-your-agency/image1.jpg" alt="blog1" />
                </div>
                <p class="blog-body-text">
                    <a href="https://www.neointeraction.com/" target="_blank">Neointeraction Design</a> is a ui ux
                    design company in Bangalore that is constantly researching and
                    attempting to expand its boundaries, and the redesigned website using Strapi & Next.js is a step in
                    that direction. This blog documents our journey through the design and development phases, as well
                    as the reasons behind our choices.
                </p>
                <h4 class="blog-body-title">
                    Why a redesign?
                </h4>
                <div class="blog-banner-img">
                    <img src="<?php echo $path; ?>assets/images/blog/how-to-boost-your-agency/image2.jpg"
                        alt="image2" />
                </div>
                <p class="blog-body-text">
                    We decided to redesign our website to make it lighter, and faster and to keep up with current
                    trends. Unlike the previous website's poor content management system, the new website's overhaul
                    places a focus on the projects. The <a href="https://www.neointeraction.com/"
                        target="_blank">website's revamp</a> also saw an increase in visitors. Additionally,
                    the website can now render effectively on a variety of devices. The redesigned website is reliable
                    and accessible to users of all ages and geographies.
                </p>

                <div class="blog-quote-block">
                    <div class="quote-icon"></div>
                    <p class="blog-quote-text">The revamp enhanced page rendering speed by 80% and increased visitors'
                        average page interaction time to 4-5 seconds</p>
                </div>

                <h4 class="blog-body-title">
                    Why we settled with Strapi instead of Wordpress?
                </h4>
                <p class="blog-body-text">
                    <b>Traditional CMS (eg: WordPress)</b>
                </p>

                <p class="blog-body-text">
                <ul>
                    <li>
                        It is a single-point solution.
                    </li>
                    <li>
                        The frontend and backend are linked together and is inseparable
                    </li>
                    <li>
                        Focuses on content management solutions for websites.
                    </li>
                    <li>
                        Unable to handle a large workload
                    </li>
                    <li>
                        Slower and more susceptible
                    </li>
                    <li>
                        Slower site loading and bulky
                    </li>
                    <li>
                        Slower site loading and bulky
                    </li>

                </ul>
                </p>

                <p class="blog-body-text">
                    <b>Headless CMS (eg: Strapi)</b>
                </p>

                <p class="blog-body-text">
                <ul>
                    <li>
                        It is front-end agnostic, meaning it doesn't matter what technology the front end runs on.
                    </li>
                    <li>
                        It is a backend-only CMS whose content is delivered via an API.
                    </li>
                    <li>
                        It can deliver content to any type of device and platform, whether web-based or
                        application-based. This is ideal for modern-day content consumption.
                    </li>
                    <li>
                        Supports static site generation, which improves content delivery, security, and scalability.
                    </li>
                    <li>
                        Optimizes content and allows for faster site loading
                    </li>
                    <li>
                        Capable of handling a large workload
                    </li>
                    <li>
                        Due to the lack of a frontend, it is faster and more secure.
                    </li>
                    <li>
                        UI UX developer can focus on code development rather than ui ux design, and the <a
                            href="https://www.neointeraction.com/ui-ux-design-services" target="_blank">ui ux design</a>
                        can
                        be driven by the designers who do not need to worry about the code.
                    </li>
                </ul>
                </p>

                <h4 class="blog-body-title">
                    What are the technologies used?
                </h4>

                <p class="blog-body-text">
                <ul>
                    <li>
                        <a href="https://www.figma.com/" target="_blank">Figma</a>
                    </li>
                    <li>

                        <a href="https://react.dev/" target="_blank">React Framework</a>
                    </li>
                    <li>

                        <a href="https://strapi.io/" target="_blank">Strapi - Headless CMS</a>
                    </li>
                    </li>
                </ul>
                </p>

                <div class="blog-banner-img">
                    <img src="<?php echo $path; ?>assets/images/blog/how-to-boost-your-agency/image3.jpg"
                        alt="image3" />
                </div>



                <!-- <a href="" target="_blank">here</a> -->

                <h4 class="blog-body-title">Design & Development Phase</h4>

                <p class="blog-body-text">
                    <b>Design Phase</b>
                    <br />
                    We created a <a href="https://www.neointeraction.com/blogs/how-mood-boards-will-enhance-your-design"
                        target="_blank">mood board</a> using inspiration we found online and among ourselves. Making a
                    wireframe
                    and selecting the ideal layout and structure came next. Then we designed and prototyped and
                    redesigned and revised again till we reached our final version. The final design was then handed off
                    to the development team.<br />
                    Our website was designed and prototyped using Figma.<br />
                    <b>Our go-to design tool, Figma</b><br />
                    Figma is a popular tool used for ui ux design to bring to life the applications and websites
                    designers have envisioned. Figma’s real-time collaborative nature made it an ideal choice for our
                    team.

                </p>

                <p class="blog-body-text">
                    <b>Development Phase</b>
                </p>

                <div class="blog-banner-img">
                    <img src="<?php echo $path; ?>assets/images/blog/how-to-boost-your-agency/image4.jpg"
                        alt="image4" />
                </div>

                <p class="blog-body-text">
                    We chose React Js, Next Js, and Strapi headless CMS frameworks after thoroughly assessing several
                    others for the development of the website.<br />
                    We began by creating a single-page application using the officially approved Create React App tool.
                    The create react app command generates the files required to launch and run the application in a
                    browser. As a result, we can focus on coding the website rather than worrying about the build
                    configurations.<br />
                    We used JSX for markup, CSS for styling, and the <a
                        href="https://getbootstrap.com/docs/5.2/layout/grid/" target="_blank">bootstrap grid system</a>
                    to implement a grid layout
                    for our website. We added some CSS foundation styles and began constructing the components that can
                    be reused from the design mockup. For instance, the input controls, card components, etc.<br />
                    After which we started building each page and added interactions and slight animations to make the
                    website feel more alive. We used Bootstrap's grid layout to create a responsive website with ease.
                    In addition, we employed rem units for fonts, which aids in adjusting the font size according to the
                    viewport.</br>
                    To make sure the user will have a great experience on any device, we tested each page's
                    responsiveness after it was completed. We used an open-source Strapi headless cms to distribute
                    content consistently across devices. Make sure to hire the best UI UX developers and designers to
                    boost your website.
                </p>
                <p class="blog-body-text">
                    <b>React JS</b>
                </p>

                <p class="blog-body-text">
                    React Js is a free and open-source frontend javascript library. It is based on entities known as
                    components, which render into the required DOM(document object model) element. This makes it an
                    efficient method for creating scalable and quick user interfaces for websites and applications.
                    Since it is built on components, react reduces code redundancy and enhances code reuse, resulting in
                    a much lighter and more manageable codebase. This also facilitates debugging.
                </p>


                <p class="blog-body-text">
                    <b>Why we used React js?</b><br />
                <ul>
                    <li>With a component-based architecture, React js seemed a very efficient solution for developing
                        fast & scalable front end for websites.</li>
                    <li>Code reuse - React allows for code reuse, which can really boost productivity.</li>
                    <li>React Js offers fast rendering - React has a feature called virtual DOM in which any new changes
                        are first performed on the virtual DOM which gives higher performance and a cleaner user
                        experience.</li>
                    <li>SEO-friendly - Because of React's fast rendering features, it reduces page load time which in
                        turn benefits the ranking on Google SERP pages.</li>

                    <li>Libraries - React has a strong developer community, and there are many third-party open-source
                        libraries available that we can use in our project.</li>
                </ul>
                </p>

                <div class="blog-banner-img">
                    <img src="<?php echo $path; ?>assets/images/blog/how-to-boost-your-agency/image5.jpg"
                        alt="image5" />
                </div>

                <p class="blog-body-text">
                    <b>Why we used Next.JS?</b>
                </p>

                <p class="blog-body-text">
                    Next Js is a react framework that grants additional capabilities like server-side rendering and
                    static site generation to the react application. The server-side rendering feature increases the
                    performance of a Next Js application compared to a regular react application. Applications built
                    with next js tend to get a higher SEO ranking than regular react-based applications.
                </p>

                <p class="blog-body-text">
                    <b>Strapi - Headless CMS</b>
                </p>

                <p class="blog-body-text">
                    Strapi is a headless CMS used to create websites, mobile apps, eCommerce sites, and APIs. It enables
                    you to construct an API without any prior knowledge of the backend or databases.
                </p>

                <p class="blog-body-text">
                    <b>Why we used strapi js?</b><br />
                <ul>
                    <li>Strapi is an open-source headless cms</li>
                    <li>Shorten time to deploy</li>
                    <li>Security reasons</li>
                    <li>Seamless CMS</li>
                    <li>100% Javascript</li>
                    <li>Customizable content architecture</li>
                    <li>Multi-database support</li>
                    <li>Strapi is powered by a modern technology stack using Node.js.</li>
                    <li>In traditional or monolithic CMS like WordPress, everything is packaged together. Headless CMS
                        like Strapi focuses on its primary mission: managing content.
                    </li>
                    <li>Strapi's native functionality matches that of the Custom Fields Advanced plugin in WordPress.
                    </li>
                </ul>
                </p>

                <div class="blog-banner-img">
                    <img src="<?php echo $path; ?>assets/images/blog/how-to-boost-your-agency/image6.jpg"
                        alt="image6" />
                </div>

                <p class="blog-body-text">
                    <b>Challenges we faced</b><br />
                <ul>
                    <li>Using Strapi</li>
                    <li>Learning new cms</li>
                    <li>Various media file format support</li>
                </ul>
                </p>


                <h4 class="blog-body-title">Conclusion</h4>

                <p class="blog-body-text">
                    The website's page loading speed and traffic rose thanks to the use of the React, Strapi & Next.js
                    frameworks. The redesigned website is less cluttered and more organized, allowing the projects to
                    stand out.
                </p>


                <?php 
                    $from = "blog";
                    $currentSlug = 'how-to-boost-your-agency-website-using-strapi-next-js';
                    include $path . 'components/navigation-footer.php';
                ?>

            </div>
            <?php include $path.'components/submit-enquiry.php'; ?>
        </div>

    </section>
    <!-- banner -- end  -->
    <?php include $path.'components/footer.php'; ?>
    <?php include $path.'includes/footer-additional-scripts.php'; ?>
    <?php include $path.'includes/js.php'; ?>
</body>

</html>