<!doctype html>
<html lang="en">

<head>
    <title>Blog - Justine Paul Vitan</title>

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
    <meta name="description" content="View Justine Paul Vitan's latest blogs on software development, computer science, and mathematics.">
    <meta name="author" content="Justine Paul Vitan">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="preload" as="font" href="css/font/lemonmilk.otf" crossorigin="anonymous">
    <link rel="preload" as="font" href="css/font/Roboto-Light.ttf" crossorigin="anonymous">
    <link rel="preload" as="font" href="css/font/Roboto-Regular.ttf" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
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
                    <div class="border-0 shadow mx-auto style-card-link" style="background-color: #1abc9c;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-book-half style-card-link-icon" viewBox="0 0 16 16" aria-label="Blog">
                            <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                        </svg>
                    </div>
                    <div class="mt-2 style-card-link-text">Blog</div>
                </div>
            </div>
        </div>

        <?php
        // Perform sanitization.
        $form_submitted_title = isset($_GET["title"]);
        $form_submitted_category = isset($_GET["category"]);

        $title = "";
        $category = "";

        if ($form_submitted_title) {
            $title = filter_var($_GET["title"], FILTER_SANITIZE_STRING);
        }
        if ($form_submitted_category) {
            $category = filter_var($_GET["category"], FILTER_SANITIZE_STRING);
        }
        ?>

        <form method="GET" id="query">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div style="max-width: 50rem;">
                        <div class="row">
                            <div class="col-sm px-0 pe-sm-2">
                                <input class="form-control mt-2" type="text" id="title" name="title" placeholder="Blog Title" <?php if ($form_submitted_title && $title != "") {
                                                                                                                                    echo "value='" . $title . "'";
                                                                                                                                } ?>>
                            </div>
                            <div class="col-sm px-0 ps-sm-2">
                                <select class="form-select mt-2" id="category" name="category" onchange="this.form.submit()">
                                    <option value="All">All Categories</option>
                                    <option value="SoftwareDevelopment" <?php if ($form_submitted_category && $category == "SoftwareDevelopment") {
                                                                            echo "selected='selected'";
                                                                        } ?>>Software Development</option>
                                    <option value="ComputerScience" <?php if ($form_submitted_category && $category == "ComputerScience") {
                                                                        echo "selected='selected'";
                                                                    } ?>>Computer Science</option>
                                    <option value="Mathematics" <?php if ($form_submitted_category && $category == "Mathematics") {
                                                                    echo "selected='selected'";
                                                                } ?>>Mathematics</option>
                                    <option value="Others" <?php if ($form_submitted_category && $category == "Others") {
                                                                echo "selected='selected'";
                                                            } ?>>Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
        include "controller/BlogController.php";

        if (BlogController::connectionWorking()) {
            $data_array = BlogController::getAllData();

            if (isset($_GET["title"]) && isset($_GET["category"])) {
                if ($title != "" && $category != "All") {
                    $data_array = BlogController::getDataFromTitleCategory($title, $category);
                } else if ($title != "") {
                    $data_array = BlogController::getDataFromTitle($title);
                } else if ($category != "All") {
                    $data_array = BlogController::getDataFromCategory($category);
                }
            }

            for ($i = 0; $i < count($data_array); $i++) {
                echo $data_array[$i]->getCard();
            }
        } else {
            echo "<div class='row justify-content-center text-center mt-4'><h1 style='color: #ff3f34;'>Connection Failed!</h1></div>";
        }
        ?>
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
    <script src="js/blog.js"></script>
</body>

</html>