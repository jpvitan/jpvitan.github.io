<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="theme-color" content="<?php echo $page->getColor(); ?>">
<meta name="description" content="<?php echo $page->getDescription(); ?>">
<meta name="author" content="<?php echo $page->getAuthor(); ?>">
<!-- Favicon -->
<link rel="icon" href="./favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
<!-- Open Graph -->
<meta property="og:url" content="<?php echo $page->getURL(); ?>" />
<meta property="og:title" content="<?php echo $page->getTitle(); ?>" />
<meta property="og:description" content="<?php echo $page->getDescription(); ?>" />
<meta property="og:image" content="<?php echo $page->getImage(); ?>" />
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<!-- AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- CSS -->
<link href="css/main.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<!-- JavaScript -->
<script src="js/main.js"></script>

<title><?php echo $page->getTitle(); ?></title>