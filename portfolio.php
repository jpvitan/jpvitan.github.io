<!doctype html>
<html lang="en">
    <head>
        <title>JPVITAN - Portfolio</title>   
        
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
        <meta name="description" content="Justine Paul Vitan (jpvitan) is a software developer who builds mobile, web, and desktop applications.">
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
        <link href="css/portfolio.css" rel="stylesheet">
    </head>
    <body>    
        <nav class="navbar navbar-expand-lg navbar-light fixed-top style-navbar" id="navbar"></nav>

        <script>
        $(function(){
            $("#navbar").load("navbar.html");    
        });
        </script>

        <div style="height: 74px;"></div>
                
        <div class="container-fluid py-4">
            <div class="row justify-content-center text-center">
                <div class="col-sm-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#747d8c" class="bi bi-folder-fill" viewBox="0 0 16 16">
                        <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg>
                    <h1 class="style-portfolio-heading mt-2">Portfolio</h1>
                    <p class="style-portfolio-note"></p>
                </div>
            </div>
            <form method="GET" id="query">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-2">
                        <input class="form-control mt-2" type="text" id="title" name="title" placeholder="Project Title" <?php if(isset($_GET["title"]) && $_GET["title"] != ""){ echo "value=".$_GET["title"]; } ?>>
                    </div>
                    <div class="col-lg-2">
                        <select class="form-select mt-2" id="platform" name="platform" onchange="this.form.submit()">
                            <option value="All">All Platforms</option>
                            <option value="Mobile" <?php if(isset($_GET["platform"]) && $_GET["platform"] == "Mobile"){ echo "selected='selected'"; } ?>>Mobile</option>
                            <option value="Web" <?php if(isset($_GET["platform"]) && $_GET["platform"] == "Web"){ echo "selected='selected'"; } ?>>Web</option>
                            <option value="Desktop" <?php if(isset($_GET["platform"]) && $_GET["platform"] == "Desktop"){ echo "selected='selected'"; } ?>>Desktop</option>
                            <option value="Others" <?php if(isset($_GET["platform"]) && $_GET["platform"] == "Others"){ echo "selected='selected'"; } ?>>Others</option>
                        </select>
                    </div>
                </div>
            </form>
            <?php    
            $host = "localhost";
            $dbname = "jpvitan1_site";

            // For production server:
            $username = "jpvitan1_master";
            $password = "!M,xxii*MKRR";

            // For local server:
            $username = "root";
            $password = "";
            
            $mysqli = new mysqli($host, $username, $password, $dbname);
            if($mysqli->connect_errno){
                echo "<div class='row justify-content-center text-center mt-4'><h1 style='color: #ff3f34;'>Connection Failed!</h1></div>";
            }else{
                $statement = $mysqli->prepare("SELECT * FROM portfolio");

                if(isset($_GET["title"]) && isset($_GET["platform"])){
                    $title = $_GET["title"];
                    $platform = $_GET["platform"];
                    if($title != "" && $platform != "All"){
                        $statement = $mysqli->prepare("SELECT * FROM portfolio WHERE title LIKE ? AND platform=?");
                        $title .= "%";
                        $statement->bind_param("ss", $title, $platform);
                    }
                    else if($title != ""){
                        $statement = $mysqli->prepare("SELECT * FROM portfolio WHERE title LIKE ?");
                        $title .= "%";
                        $statement->bind_param("s", $title);
                    }
                    else if($platform != "All"){
                        $statement = $mysqli->prepare("SELECT * FROM portfolio WHERE platform=?");
                        $statement->bind_param("s", $platform);
                    }
                }

                $statement->execute();
                $statement->bind_result($id, $image_banner, $title, $description, $technologies_used, $platform, $link);

                while($statement->fetch()){
                    echo "
                    <div class='row justify-content-center mt-4'>
                        <div class='col-lg-4'>
                            <a href='". $link ."' style='text-decoration: none; color: black;'>
                                <div class='card shadow border-0'>
                                    <img class='card-img-top' alt='Banner' src='" . $image_banner . "'>
                                    <div class='card-body'>
                                        <div class='card-title' style='font-size: 1.25rem; font-weight: 500;'>". $title ."</div>
                                        <p class='card-text' style='color: #747d8c;'>". $description ."</p>
                                        <div style='color: #0fbcf9; font-weight: 500;'>Technologies Used</div>
                                        <div style='color: #747d8c;'>". $technologies_used ."</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    ";
                }
            }
            ?>
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
        
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        
        <!-- JavaScript -->
        <script src="js/portfolio.js"></script>
    </body>
</html>