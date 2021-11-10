<!doctype html>
<html lang="en">

<head>
    <title>Resume | Justine Paul Vitan</title>

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
    <meta name="description" content="Want to hire me for a project? View my resume now and see if my skills fit your job description.">
    <meta name="author" content="Justine Paul Vitan">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/resume.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

    <div class="container-fluid pb-4">
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
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div style="max-width: 40rem;">
                        <div class="row">
                            <div class="col-sm px-0 pe-sm-2">
                                <input class="form-control shadow-sm mt-3" type="text" id="search" name="search" placeholder="Search" <?php if ($form_submitted_search && $search != "") {
                                                                                                                                            echo "value='" . $search . "'";
                                                                                                                                        } ?>>
                            </div>
                            <div class="col-sm px-0 ps-sm-2">
                                <select class="form-select shadow-sm mt-3" id="platform" name="platform" onchange="this.form.submit()">
                                    <option value="All">All</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="row justify-content-center">
            <div class='col' style="max-width: 40rem;">
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
    <script src="js/resume.js"></script>
</body>

</html>