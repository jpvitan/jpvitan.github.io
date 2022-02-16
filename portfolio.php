<!doctype html>
<html lang="en">

<head>
    <title>Projects | Justine Paul Vitan</title>

    <!-- Favicon -->
    <link rel="icon" href="https://jpvitan.com/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="https://jpvitan.com/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="My projects are built on the best software engineering practices. I always make sure that it's fast, secure, and reliable.">
    <meta name="author" content="Justine Paul Vitan">
    <meta property="og:title" content="Projects | Justine Paul Vitan" />
    <meta property="og:image" content="https://jpvitan.com/img/banner.png" />
    <meta property="og:description" content="My projects are built on the best software engineering practices. I always make sure that it's fast, secure, and reliable." />
    <meta property="og:url" content="jpvitan.com" />

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@jpvitan_dev">
    <meta name="twitter:creator" content="@jpvitan_dev">
    <meta name="twitter:title" content="Projects | Justine Paul Vitan">
    <meta name="twitter:description" content="My projects are built on the best software engineering practices. I always make sure that it's fast, secure, and reliable.">
    <meta name="twitter:image" content="https://jpvitan.com/img/banner.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/portfolio.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
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

    <div style="overflow: hidden;">
        <div class="container-fluid" style="background-color: #ffffff;">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <div class="card border-0">
                        <div class="card-body px-3 py-3 px-sm-5 py-sm-5">
                            <div class="row justify-content-center text-start">
                                <div class="col" style="max-width: 50rem;">
                                    <div class="row">
                                        <div class="col-md mx-md-2">
                                            <h1>PROJECTS</h1>
                                            <p style="font-weight: 700;">by Justine Paul Vitan</p>
                                            <p style="font-size: 1rem;">
                                                My projects are built on the best software engineering practices. I always make sure that it's fast, secure, and reliable.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pb-4">
        <?php
        // Perform sanitization.
        $form_submitted_title = isset($_GET["title"]);
        $form_submitted_platform = isset($_GET["platform"]);

        $title = "";
        $platform = "";

        if ($form_submitted_title) {
            $title = filter_var($_GET["title"], FILTER_SANITIZE_STRING);
        }
        if ($form_submitted_platform) {
            $platform = filter_var($_GET["platform"], FILTER_SANITIZE_STRING);
        }
        ?>

        <form method="GET" id="query">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div style="max-width: 50rem;">
                        <div class="row">
                            <div class="col-sm">
                                <input class="form-control mt-3" type="text" id="title" name="title" placeholder="Search" <?php if ($form_submitted_title && $title != "") {
                                                                                                                                echo "value='" . $title . "'";
                                                                                                                            } ?>>
                            </div>
                            <div class="col-sm">
                                <select class="form-select mt-3" id="platform" name="platform" onchange="this.form.submit()">
                                    <option value="All">All Platforms</option>
                                    <option value="Mobile" <?php if ($form_submitted_platform && $platform == "Mobile") {
                                                                echo "selected='selected'";
                                                            } ?>>Mobile</option>
                                    <option value="Web" <?php if ($form_submitted_platform && $platform == "Web") {
                                                            echo "selected='selected'";
                                                        } ?>>Web</option>
                                    <option value="Desktop" <?php if ($form_submitted_platform && $platform == "Desktop") {
                                                                echo "selected='selected'";
                                                            } ?>>Desktop</option>
                                    <option value="Others" <?php if ($form_submitted_platform && $platform == "Others") {
                                                                echo "selected='selected'";
                                                            } ?>>Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="row justify-content-center">
            <div class="col" style="max-width: 50rem;">
                <ul class="list-group list-group-flush">
                    <?php
                    include "controller/PortfolioController.php";

                    if (PortfolioController::connectionWorking()) {
                        $data_array = PortfolioController::getAllData();

                        if ($form_submitted_title && $form_submitted_platform) {
                            if ($platform == "Others") {
                                $data_array = PortfolioController::getDataOthers();
                                if ($title != "") {
                                    $data_array = PortfolioController::getDataOthersWithTitle($title);
                                }
                            } else if ($title != "" && $platform != "All") {
                                $data_array = PortfolioController::getDataFromTitlePlatform($title, $platform);
                            } else if ($title != "") {
                                $data_array = PortfolioController::getDataFromTitle($title);
                            } else if ($platform != "All") {
                                $data_array = PortfolioController::getDataFromPlatform($platform);
                            }
                        }

                        for ($i = 0; $i < count($data_array); $i++) {
                            echo $data_array[$i]->getCard();
                        }
                    } else {
                        echo "
                        <div class='row justify-content-center mt-5'>
                            <div class='col-auto my-auto px-0'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='#ff3f34' class='bi bi-x-circle-fill' viewBox='0 0 16 16'>
                                    <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z' />
                                </svg>
                            </div>
                            <div class='col-auto my-auto px-2'>
                                <span style='font-weight: 500; color: #ff3f34;'>Connection Failed!</span>
                            </div>
                        </div>    
                        ";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div id="filler"></div>

    <footer class="pt-2" id="footer">

    </footer>

    <script>
        $(function() {
            let setFillerHeight = () => {
                let filler = document.getElementById("filler");
                let fillerY = $("#filler").offset().top;

                let footer = document.getElementById("footer");
                let footerHeight = footer.getBoundingClientRect().height;

                let clientHeight = document.documentElement.clientHeight;

                let fillerHeight = clientHeight - fillerY - footerHeight;

                if (fillerHeight < 0) {
                    filler.style.height = 0 + "px";
                } else {
                    filler.style.height = fillerHeight + "px";
                }
            }

            window.addEventListener('resize', setFillerHeight);

            $("#footer").load("footer.html", () => {
                setFillerHeight();
            });
        });
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- JavaScript -->
    <script src="js/portfolio.js"></script>
</body>

</html>