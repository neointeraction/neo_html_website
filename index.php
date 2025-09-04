<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - neointeraction design</title>
    <meta name='description' content="Welcome to neointeraction design - your partner in digital transformation.">
    <meta name="keywords" content="web design, UI/UX, digital transformation, web development, neointeraction"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'includes/favicon.php'; ?>
    <?php include 'includes/css.php'; ?>
    <?php include 'includes/head-additional-scripts.php'; ?>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php include 'includes/body-additional-scripts.php'; ?>
    <?php $page="Home"; ?>
    <div class="wrapper">
        <?php include 'includes/navigation.php';?>




        <?php include 'includes/footer.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        // Simple FAQ toggle functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                const answer = faqItem.querySelector('.faq-answer');
                const chevron = question.querySelector('.chevron');
                
                faqItem.classList.toggle('active');
                
                if (faqItem.classList.contains('active')) {
                    answer.style.display = 'block';
                    chevron.style.transform = 'rotate(180deg)';
                } else {
                    answer.style.display = 'none';
                    chevron.style.transform = 'rotate(0deg)';
                }
            });
        });
    </script>
</body>
</html>
