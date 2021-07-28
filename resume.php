<!doctype html>
<html lang="en">

<head>
    <title>Resume - Justine Paul Vitan</title>

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
    <meta name="description" content="">
    <meta name="author" content="Justine Paul Vitan">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="preload" as="font" href="css/font/lemonmilk.otf" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/resume.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-xl navbar-light fixed-top style-navbar" id="navbar"></nav>

    <script>
        $(function() {
            $("#navbar").load("navbar.html");
        });
    </script>

    <div style="height: 74px;"></div>

    <div class="container-fluid mt-4 py-4">
        <div class="row justify-content-center text-center">
            <div class="col-sm-auto">
                <div class="text-center mx-auto style-card-link-outer">
                    <div class="border-0 shadow mx-auto style-card-link" style="background-color: #2ecc71;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-file-earmark-text-fill style-card-link-icon" viewBox="0 0 16 16" aria-label="Resume">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                        </svg>
                    </div>
                    <div class="mt-2 style-card-link-text">Resume</div>
                </div>
            </div>
        </div>

        <?php
        // Perform sanitization.
        $form_submitted_search = isset($_GET["search"]);

        $search = "";

        if ($form_submitted_search) {
            $search = filter_var($_GET["search"], FILTER_SANITIZE_STRING);
        }
        ?>

        <form method="GET" id="query">
            <div class="row justify-content-center text-center">
                <div class="col-xl-3 col-xxl-2">
                    <input class="form-control mt-2" type="text" id="search" name="search" placeholder="Search" <?php if ($form_submitted_search && $search != "") {
                                                                                                                    echo "value='" . $search . "'";
                                                                                                                } ?>>
                </div>
            </div>
        </form>

        <div class="row justify-content-center">
            <div class='col-xl-6 col-xxl-4'>
                <ul class="list-group list-group-flush">
                    <?php
                    include "controller/ResumeController.php";

                    if (ResumeController::connectionWorking()) {
                        $data_array = ResumeController::getAllData();

                        if (isset($_GET["search"])) {
                            if ($search != "") {
                                $data_array = ResumeController::getDataFromTitle($search);
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

    <footer class="mt-2" id="footer">

    </footer>

    <script>
        $(function() {
            $("#footer").load("footer.html");
        });
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- JavaScript -->
    <script src="js/resume.js"></script>
</body>

</html>