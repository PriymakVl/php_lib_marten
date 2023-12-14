<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Marten - Pet Food eCommerce</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/animate.css">
        <link rel="stylesheet" href="/assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="/assets/css/themify-icons.css">
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/css/slick.css">
        <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/responsive.css">
    </head>
    <body>
        <!-- header -->
        <?php echo $twig->render('public/templates/header/index.php', $data); ?>

        <!-- slider -->
        <?php echo $twig->render('public/templates/slider.php'); ?>

        <!-- categories -->
        <?php echo $twig->render('public/templates/main_cats.php', $data); ?>

        <!-- recent products (template file) -->
        <?php echo $twig->render($template_path, $data); ?>

        <!-- best products -->
        <?php echo $twig->render('public/templates/best_products.php'); ?>

        <!-- testimonials -->
        <?php echo $twig->render('public/templates/testimonials.php'); ?>

        <!-- service -->
        <?php echo $twig->render('public/templates/service.php'); ?>

        <!-- blog -->
        <?php echo $twig->render('public/templates/blog.php'); ?>

        <!-- footer -->
        <?php echo $twig->render('public/templates/footer.php'); ?>

		<!-- modal -->
        <?php echo $twig->render('public/templates/modal.php'); ?>
		
		<!-- all js here -->
        <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="/assets/js/popper.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.counterup.min.js"></script>
        <script src="/assets/js/waypoints.min.js"></script>
        <script src="/assets/js/elevetezoom.js"></script>
        <script src="/assets/js/ajax-mail.js"></script>
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>
