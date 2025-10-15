<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path.'includes/favicon.php'; ?>
    <?php include $path.'includes/css.php'; ?>
    <?php include $path.'includes/head-additional-scripts.php'; ?>
    <title>404 Page Not Found | Neointeraction</title>
    <meta name="description" content="The page you are looking for does not exist. Navigate back to our homepage to explore our UI/UX design and front-end development services."/>
    <meta name="keywords" content="404, page not found, UI/UX design, front-end development, neointeraction"/>
    <link rel="canonical" href="https://www.neointeraction.com/404"/>
    <meta property="og:title" content="404 Page Not Found | Neointeraction"/>
    <meta property="og:description" content="The page you are looking for does not exist. Navigate back to our homepage to explore our UI/UX design and front-end development services."/>
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/neo-home-ux-research-brand.jpeg" />
   <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="og:url" content="https://www.neointeraction.com/404"/>
    <meta property="og:site_name" content="Neointeraction Design"/>
    <meta property="og:type" content="website"/>
    <meta name="google-site-verification" content=""/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="404 Page Not Found | Neointeraction"/>
    <meta name="twitter:description" content="The page you are looking for does not exist. Navigate back to our homepage to explore our UI/UX design and front-end development services."/>
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/neo-home-ux-research-brand.jpeg"/>
    <style>
        .error-page {
            text-align: center;
            padding: 80px 0;
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .error-content h1 {
            font-size: 50px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }
        .error-content .red-text {
            color: #e74c3c;
        }
        .error-content img {
            max-width: 150px;
            margin: 20px 0;
        }
        .error-content p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        .btn-back {
            display: inline-block;
            padding: 10px 30px;
            border: 1px solid #333;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-back:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
    <body>
        <?php $page='Error';?>
        <?php include $path.'includes/body-additional-scripts.php'; ?>
        <!-- navbar  -->
        <div class="navbar-container-block">
            <?php include $path.'components/navigation.php'; ?>
            <?php include $path.'components/whatsapp.php'; ?>
        </div>
        <!-- navbar -- end  -->
        
        <!-- Error Section -->
        <section class="error-page">
            <div class="container">
                <div class="error-content">
                    <h1>Whoops <span class="red-text">404 Error :(</span></h1>
                    <img src="assets/images/common/404-error.svg" alt="404 Error">
                    <p>Oh no! It looks like a rogue pixel rebelled and disrupted your request, Let's find a better place for you to go</p>
                    <a href="<?php echo $base_url; ?>" class="btn-back">Back to Homepage</a>
                </div>
            </div>
        </section>
        <!-- Error Section -- end -->

        <?php include $path.'components/footer.php'; ?>
        <?php include $path.'includes/footer-additional-scripts.php'; ?>
        <?php include $path.'includes/js.php'; ?>
    </body>
</html>
