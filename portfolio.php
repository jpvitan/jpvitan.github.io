<!doctype html>
<html lang="en">

<head>
    <title>Portfolio - Justine Paul Vitan</title>

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
    <meta name="description" content="Take a glimpse at Justine Paul Vitan's latest projects.">
    <meta name="author" content="Justine Paul Vitan">

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
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
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
                            <p>Projects</p>
                            <h1>Built with quality and performance</h1>
                            <div class="row justify-content-center text-center">
                                <div class="col" style="max-width: 65rem;">
                                    <div class="row">
                                        <div class="col-md mx-md-2 mt-4 mt-md-5">
                                            <img src="https://res.cloudinary.com/dhv9gcew6/image/upload/q_auto/v1633372542/shield_f7u5dt.png" alt="Icon" width="50" height="50" class="mb-4">
                                            <h5>Built with quality</h5>
                                            <p style="font-size: 1rem;">
                                                Applications built with proper software engineering practices are
                                                guaranteed to have the best quality.
                                            </p>
                                        </div>
                                        <div class="col-md mx-md-2 mt-4 mt-md-5">
                                            <img src="https://res.cloudinary.com/dhv9gcew6/image/upload/q_auto/v1633372438/rocket_iroig2.png" alt="Icon" width="50" height="50" class="mb-4">
                                            <h5>Built with performance</h5>
                                            <p style="font-size: 1rem;">
                                                Applications built with performance ensures a smooth and stable
                                                experience even if it's pushed to its limits.
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
                            <div class="col-sm px-0 pe-sm-2">
                                <input class="form-control shadow-sm mt-3" type="text" id="title" name="title" placeholder="Search Portfolio" <?php if ($form_submitted_title && $title != "") {
                                                                                                                                                    echo "value='" . $title . "'";
                                                                                                                                                } ?>>
                            </div>
                            <div class="col-sm px-0 ps-sm-2">
                                <select class="form-select shadow-sm mt-3" id="platform" name="platform" onchange="this.form.submit()">
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
            <div class='col-auto'>
                <div style="max-width: 45rem;">
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
                            echo "<div class='row justify-content-center text-center mt-4'><h1 style='color: #ff3f34;'>Connection Failed!</h1></div>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="filler"></div>

    <footer class="pt-2" id="footer">

    </footer>

    <script>
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

        $(function() {
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