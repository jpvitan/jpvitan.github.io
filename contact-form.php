<!doctype html>
<html lang="en">

<head>
    <title>Form Submission | Justine Paul Vitan</title>

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
    <meta name="author" content="Justine Paul Vitan">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/contact-form.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <div class="card border-0 text-center mx-auto my-auto style-card">
        <div class="card-body">
            <div class="text-center">
                <?php
                if (isset($_POST["submit"])) {
                    $full_name = filter_var($_POST["full_name"], FILTER_SANITIZE_STRING);
                    $company = filter_var($_POST["company"], FILTER_SANITIZE_STRING);
                    $position = filter_var($_POST["position"], FILTER_SANITIZE_STRING);
                    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
                    $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
                    $client_message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

                    $message = "<html><body>";
                    $message .= "<h4>Full Name: </h4><p>" . $full_name . "</p> ";
                    $message .= "<h4>Company: </h4><p>" . $company . "</p> ";
                    $message .= "<h4>Position: </h4><p>" . $position . "</p> ";
                    $message .= "<h4>Message: </h4><p>" . $client_message . "</p> ";

                    if (isset($_POST["meeting"])) {
                        $dateTime = filter_var($_POST["date_time"], FILTER_SANITIZE_STRING);
                        $where = filter_var($_POST["where"], FILTER_SANITIZE_STRING);
                        $message .= "<h4>Date and Time: </h4><p>" . $dateTime . "</p> ";
                        $message .= "<h4>Where: </h4><p>" . $where . "</p> ";
                    }

                    $message .= "</body></html>";

                    $destination = "contact@jpvitan.com";
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: <' . $email . '>' . "\r\n";

                    $recaptcha_failed_message = "
                        <svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='#2ecc71' class='bi bi-question-square-fill' viewBox='0 0 16 16'>
                            <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z'/>
                        </svg>
                        <h1 class='mt-4'>Are You a Robot?</h1>
                        <p>If you are not a robot, please make sure that you have finished the reCAPTCHA before submitting.</p>
                        ";
                    $success_message = "
                        <svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='#2ecc71' class='bi bi-check-circle-fill' viewBox='0 0 16 16'>
                            <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
                        </svg>
                        <h1 class='mt-4'>Message Sent!</h1>
                        <p>Hi, " . $full_name . "! Thanks for your message. Please expect a response soon from the email that you have provided.</p>
                        ";
                    $failed_message = "
                        <svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='#ff3f34' class='bi bi-x-circle-fill' viewBox='0 0 16 16'>
                            <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z'/>
                        </svg>
                        <h1 class='mt-4'>Failed to Send Message!</h1>
                        <p>Unfortunately, your message was not sent. Please try again later.</p>
                        ";

                    $ok_button = "<button class='btn shadow-sm mt-3 style-button' id='button' value='0'>OK</button>";
                    $go_back_button = "<button class='btn shadow-sm mt-3 style-button' id='button' value='1'>Go Back</button>";

                    $recaptcha_failed = false;

                    if (!isset($_POST["g-recaptcha-response"])) {
                        $recaptcha_failed = true;
                    }

                    $recaptcha_secret_key = "6Ld_iSQaAAAAAIVvXcH67IRiLbWfG7kaIFeHuip1";
                    $recaptcha_response =  $_POST["g-recaptcha-response"];
                    $verification_url = "https://www.google.com/recaptcha/api/siteverify?secret=" . urlencode($recaptcha_secret_key) . "&response=" . urlencode($recaptcha_response);
                    $verification_result = json_decode(file_get_contents($verification_url), true);

                    if (!$verification_result["success"]) {
                        $recaptcha_failed = true;
                    }

                    if (!$recaptcha_failed) {
                        $result = mail($destination, $subject, $message, $headers);
                        if ($result) {
                            echo $success_message;
                        } else {
                            echo $failed_message;
                        }
                        echo $ok_button;
                    } else {
                        echo $recaptcha_failed_message;
                        echo $go_back_button;
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- JavaScript -->
    <script src="js/contact-form.js"></script>
</body>

</html>