<!doctype html>
<?php
ini_set('display_errors', 1);

include "controller/BlogController.php";

if(isset($_GET["id"])){
    $blog = BlogController::getDataFromId($_GET["id"]);
    
    if($blog == null){
        // Redirect to blog page.
        header("Location: /blog");
        die();
    }
}else{
    // Redirect to blog page.
    header("Location: /blog");
    die();
}
?>
<html lang="en">
    <head>
        <title>
            <?php echo "JPVITAN - " . $blog->getTitle(); ?>
        </title>   
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico">
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
            inlineMath: [['$', '$'], ['\\(', '\\)']]
          }
        };
        </script>
        <script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

        <!-- CSS -->
        <link rel="preload" as="font" href="css/font/lemonmilk.otf" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/blog-read.css" rel="stylesheet">
    </head>
    <body>    
        <nav class="navbar navbar-expand-lg navbar-light fixed-top style-navbar" id="navbar"></nav>

        <script>
        $(function(){
            $("#navbar").load("navbar.html");    
        });
        </script>

        <div style="height: 74px;"></div>
        
        <div class="container mt-lg-5">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-2 px-3">
                    <h1><?php echo $blog->getTitle(); ?></h1>
                    <div class="mb-3" style='color: #747d8c; font-size: 1.2rem;'><?php echo $blog->getDescription(); ?></div>
                    <div style='color: #0fbcf9; font-weight: 500;'><?php echo $blog->getCategory(); ?></div>
                    <div class="mb-4" style='color: #747d8c; font-size: 0.9rem;'><?php echo $blog->getAuthor() . ", " . $blog->getDate(); ?></div>
                    <?php include $blog->getLink(); ?>
                </div>
            </div>
        </div>
                      
        <footer class="my-2 text-center style-footer" id="footer">
            
        </footer>
        
        <script>
        $(function(){
            $("#footer").load("footer.html");
        });
        </script>
        
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <!-- JavaScript -->
        <script src="js/blog-read.js"></script>
    </body>
</html>