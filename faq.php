<!doctype html>
<html lang="en">

<head>
    <title>FAQ | Justine Paul Vitan</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://jpvitan.com/favicon.ico">
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
    <meta name="description" content="I'll answer the most frequently asked questions about my professional and technical expertise.">
    <meta name="author" content="Justine Paul Vitan">
    <meta property="og:title" content="FAQ | Justine Paul Vitan" />
    <meta property="og:image" content="https://jpvitan.com/img/banner.png" />
    <meta property="og:description" content="I'll answer the most frequently asked questions about my professional and technical expertise." />
    <meta property="og:url" content="jpvitan.com" />

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@jpvitan_dev">
    <meta name="twitter:creator" content="@jpvitan_dev">
    <meta name="twitter:title" content="FAQ | Justine Paul Vitan">
    <meta name="twitter:description" content="I'll answer the most frequently asked questions about my professional and technical expertise.">
    <meta name="twitter:image" content="https://jpvitan.com/img/banner.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/faq.css" rel="stylesheet">
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

    <div class="container-fluid pb-5">
        <div class="row justify-content-center">
            <div class="col my-auto px-4" style="max-width: 50rem;">
                <h1>FAQ</h1>
                <p style="font-weight: 700;">about Justine Paul Vitan</p>
                <p style="font-size: 1rem;">
                    I'll answer the most frequently asked questions about my professional and technical expertise.
                </p>
                <div class="mt-5 custom-h5">Section 1</div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-start" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Question 1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Answer 1
                            </div>
                        </div>
                    </div>
                </div>
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

            $("#footer").load("footer.html");

            jQuery(window).on("load", () => {
                setFillerHeight();
            });
        });
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- JavaScript -->
    <script src="js/faq.js"></script>
</body>

</html>