<?php
include "controller/BlogController.php";

if (isset($_GET["id"])) {
    $blog = BlogController::getDataFromId($_GET["id"]);

    if ($blog == null) {
        // Redirect to blog page.
        header("Location: https://jpvitan.com/blog");
        die();
    }
} else {
    // Redirect to blog page.
    header("Location: https://jpvitan.com/blog");
    die();
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>
        <?php echo $blog->getTitle() . " - " . $blog->getAuthor(); ?>
    </title>

    <!-- Favicon -->
    <link rel="icon" href="https://jpvitan.com/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php echo $blog->getDescription(); ?>">
    <meta name="author" content="<?php echo $blog->getAuthor(); ?>">
    <meta property="og:title" content="<?php echo $blog->getTitle() . " - " . $blog->getAuthor(); ?>" />
    <meta property="og:image" content="<?php echo $blog->getImageBanner(); ?>" />
    <meta property="og:description" content="<?php echo $blog->getDescription(); ?>" />
    <meta property="og:url" content="jpvitan.com" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- MathJax -->
    <script>
        MathJax = {
            tex: {
                inlineMath: [
                    ['$', '$'],
                    ['\\(', '\\)']
                ]
            }
        };
    </script>
    <script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <!-- PrismJS -->
    <link href="css/prism.css" rel="stylesheet">
    <script src="js/prism.js"></script>

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/blog-read.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <div class="style-menu" id="menu"></div>

    <div class="container-fluid fixed-top px-3 py-3 style-navbar" id="navbar">

    </div>

    <script>
        $(function() {
            $("#menu").load("menu.html");
            $("#navbar").load("navbar.html");
        });
    </script>

    <div class="py-5"></div>

    <div class="py-md-4"></div>

    <div class="container-fluid px-4">
        <div class="row justify-content-center">
            <div class="col" style="max-width: 60rem;">
                <h2><?php echo $blog->getTitle(); ?></h2>
                <div class="style-author-date mt-4">
                    <div>Written by <?php echo $blog->getAuthor(); ?></div>
                    <div><?php echo $blog->getDate(); ?></div>
                </div>
                <img src=<?php echo $blog->getImageBanner(); ?> alt="Banner" class="img-fluid shadow-sm my-5" />
                <div class="row justify-content-center">
                    <div class="col" style="max-width: 45rem;">
                        <?php include $blog->getLink(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-2" id="footer">

    </footer>

    <script>
        $(function() {
            $("#footer").load("footer.html");
        });
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="js/blog-read.js"></script>
</body>

</html>