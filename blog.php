<!doctype html>
<html lang="en">
    <head>
        <title>JPVITAN | Blog</title>   
        
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
        
        <!-- AOS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>      
        
        <!-- CSS -->
        <link rel="preload" as="font" href="css/font/lemonmilk.otf" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/blog.css" rel="stylesheet">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#747d8c" class="bi bi-book-half" viewBox="0 0 16 16">      
                        <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                    </svg>
                    <h1 class="style-blog-heading mt-2">Blog</h1>
                    <p class="style-blog-note"></p>
                </div>
            </div>
            <form method="post" id="query">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-2">
                        <input class="form-control mt-2" type="text" id="title" name="title" placeholder="Blog Title" <?php if(isset($_POST["title"]) && $_POST["title"] != ""){ echo "value=".$_POST["title"]; } ?>>
                    </div>
                    <div class="col-lg-2">
                        <select class="form-select mt-2" id="category" name="category" onchange="this.form.submit()">
                            <option value="All">All Categories</option>
                            <option value="SoftwareDevelopment" <?php if(isset($_POST["category"]) && $_POST["category"] == "SoftwareDevelopment"){ echo "selected='selected'"; } ?>>Software Development</option>
                            <option value="ComputerScience" <?php if(isset($_POST["category"]) && $_POST["category"] == "ComputerScience"){ echo "selected='selected'"; } ?>>Computer Science</option>
                            <option value="ArtificialIntelligence" <?php if(isset($_POST["category"]) && $_POST["category"] == "ArtificialIntelligence"){ echo "selected='selected'"; } ?>>Artificial Intelligence</option>
                            <option value="Cryptography" <?php if(isset($_POST["category"]) && $_POST["category"] == "Cryptography"){ echo "selected='selected'"; } ?>>Cryptography</option>
                            <option value="Astronomy" <?php if(isset($_POST["category"]) && $_POST["category"] == "Astronomy"){ echo "selected='selected'"; } ?>>Astronomy</option>
                            <option value="Others" <?php if(isset($_POST["category"]) && $_POST["category"] == "Others"){ echo "selected='selected'"; } ?>>Others</option>
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
//                $username = "root";
//                $password = "";
            
                $mysqli = new mysqli($host, $username, $password, $dbname);
                if($mysqli->connect_errno){
                    die("<div class='row justify-content-center text-center mt-4'><h1 style='color: #ff3f34;'>Connection Failed!</h1></div>");
                }
            ?>
        </div>
        
        <footer class="my-2 text-center style-footer">
            <div class="container-fluid">Developed and Designed by Justine Paul Sanchez Vitan.</div>
            <div class="container-fluid">Copyright © 2021 Justine Paul Sanchez Vitan. All rights reserved.</div>
        </footer>
        
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        
        <!-- JavaScript -->
        <script src="js/blog.js"></script>
    </body>
</html>