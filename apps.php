<?php
require_once "model/Page.php";
require_once "utilities/Data.php";

$page = Page::findById(2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "common/head.php"; ?>
</head>

<body class="theme-light">
    <?php require "common/navigation.php"; ?>
    <main class="home">
        <section class="vh-100">
            <div class="background-image-low-polygon-mountains image-card card shadow-lg border-0 text-center h-100">
                <div class="my-auto">
                    <img class="rounded-circle shadow-lg mx-auto mb-4" alt="Selfie" src="https://res.cloudinary.com/dhv9gcew6/image/upload/q_auto/v1675296391/jpvitan-website/profile/selfie_zwuuz1.jpg" width="100" height="100">
                    <h1 class="font-color-white mb-0">Apps</h1>
                    <p class="font-color-white fw-bold">Justine Paul Vitan</p>
                    <img class="mt-4" alt="Arrow Down" src="https://res.cloudinary.com/dhv9gcew6/image/upload/q_auto/v1676559077/jpvitan-website/icons/arrow-down_f7nvlm.gif" width="25" height="25">
                    <p class="font-notice-small font-color-white mt-2">Scroll Down</p>
                </div>
            </div>
        </section>
    </main>
    <?php require "common/footer.php"; ?>
</body>

</html>