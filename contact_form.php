<!doctype html>
<html lang="en">
    <head>
        <title>JPVitan | Form Submission</title>  
        
        <!-- Favicon -->
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
        <meta name="description" content="Justine Paul Vitan is software developer who specializes in building mobile and web applications.">
        <meta name="author" content="Justine Paul Vitan">
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <!-- CSS -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-auto text-center">
                    <?php
                        if(isset($_POST["submit"])){
                            $first_name = $_POST["first_name"];
                            $last_name = $_POST["last_name"];
                            $country = $_POST["country"];
                            $email = $_POST["email"];
                            $subject = $_POST["subject"];
                            $message = $_POST["message"];

                            $destination = "justinepaulvitan@jpvitan.com";
                            $headers = "From: ".$email;

                            $message = "[Sender Details]\nFirst Name: ".$first_name."\nLast Name: ".$last_name."\nCountry: ".$country."\n\n[Message]\n".$message;
                            
                            if(!isset($_POST["g-recaptcha-response"])){
                                die("<h1 class='mt-2' style='color: #747d8c;'>Please finish the reCAPTCHA form before submitting.</h1>");
                            }
                            
                            $recaptcha_secret_key = "6Ld_iSQaAAAAAIVvXcH67IRiLbWfG7kaIFeHuip1";
                            $recaptcha_response =  $_POST["g-recaptcha-response"];
                            $verification_url = "https://www.google.com/recaptcha/api/siteverify?secret=".urlencode($recaptcha_secret_key)."&response=".urlencode($recaptcha_response);
                            $verification_result = json_decode(file_get_contents($verification_url), true);
                            
                            if(!$verification_result["success"]){
                                die("<h1 class='mt-2' style='color: #747d8c;'>Are you a robot? If not, please make sure that you've finished the reCAPTCHA form.</h1>");
                            }
                            
                            $result = mail($destination, $subject, $message, $headers);
                            if($result){
                                echo "
                                 <svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='#2ecc71' class='bi bi-check-circle-fill mt-4' viewBox='0 0 16 16'>
                        <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
                    </svg>
                    <h1 class='mt-2' style='color: #747d8c;'>Your message has been sent!</h1>
                    <div class='mt-2' style='color: #485460;'>Hi ".$first_name."! Thanks for your message.</div>
                    <div style='color: #485460;'>Please expect a reply within 48 hours after you have received this message.</div>
                                ";
                            }else{
                                echo "
                                <svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='#ff3f34' class='bi bi-x-circle-fill mt-4' viewBox='0 0 16 16'>
                        <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z'/>
                    </svg>
                    <h1 class='mt-2' style='color: #747d8c;'>Your message has not been sent!</h1>
                    <div class='mt-2' style='color: #485460;'>Hi ".$first_name."! Thanks for your message.</div>
                    <div style='color: #485460;'>Unfortunately, your message was not sent. You may message me instead on my social media accounts.</div>
                                ";
                            }
                        }
                    ?>
                    <div class="mt-4">
                        <a href="index.html" class="btn mt-2" style="border: none; background-color: #2ecc71; color: #ffffff">Click here to go back home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>