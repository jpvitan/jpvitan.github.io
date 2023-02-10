<?php
require_once "model/Page.php";
require_once "utilities/Data.php";

$page = Page::findById(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "common/head.php"; ?>
</head>

<body class="theme-light">
    <?php require "common/navigation.php"; ?>
    <main class="home">
        <section>
            <div class="container-fluid px-0 px-md-4 pb-4 py-md-4">
                <div class="row justify-content-center g-0 g-md-4">
                    <div class="content-lg col">
                        <div class="background-image-low-polygon-mountains image-card card shadow-lg border-0">
                            <div class="container-fluid px-4 py-4">
                                <div class="row justify-content-center">
                                    <div class="content-xs col">
                                        <div class="card border-0 text-center px-4 py-4">
                                            <img class="rounded-circle shadow-lg mx-auto mb-4" alt="Selfie" src="https://res.cloudinary.com/dhv9gcew6/image/upload/q_auto/v1675296391/jpvitan-website/profile/selfie_zwuuz1.jpg" width="100" height="100">
                                            <h1>Justine Paul Vitan</h1>
                                            <p>Software Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <div class="container-fluid px-4 py-4">
                <div class="row justify-content-center">
                    <div class="content-sm col text-center">
                        <h2 style="color: #3498db;">Hello!</h2>
                        <p>I'm a mobile and web developer who writes production-grade software that follows modern standards and best practices to ensure a smooth and comfortable mobile and web experience for everyone.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <div class="container-fluid px-4 py-3">
                <div class="row justify-content-center">
                    <div class="content-lg col">
                        <h2>Mobile</h2>
                        <div class="row">
                            <div class="col-md">
                                <div class="background-image-wavy-abstract basic-card card shadow-lg border-0 px-5 py-5">
                                    <h3>What Are Your Mobile Development Skills?</h3>
                                    <p>I can develop and publish top-quality Android and iOS apps that are compliant with the policies imposed by Google and Apple. I have written and published applications for both of these platforms to demonstrate my competency in mobile app development.</p>
                                </div>
                            </div>
                            <div class="col-md mt-3 mt-md-0">
                                <div class="background-color-clouds basic-card card shadow-lg border-0 px-5 py-5">
                                    <img class="img-fluid mx-auto my-auto" alt="Samsung" src="https://res.cloudinary.com/dhv9gcew6/image/upload/q_auto/v1675963744/jpvitan-website/sattrack-x/samsung_dgom4z.png" width="1840" height="3600">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0 px-md-4 py-5 py-md-3">
                <div class="row justify-content-center g-0 g-md-4">
                    <div class="content-lg col">
                        <div class="row g-0 g-md-4">
                            <div class="col-md">
                                <?php echo $LIST_CARD[0]->generate(); ?>
                            </div>
                            <div class="col-md">
                                <?php echo $LIST_CARD[1]->generate(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <div class="container-fluid px-4 py-3">
                <div class="row justify-content-center">
                    <div class="content-lg col">
                        <h2>Web</h2>
                        <div class="row">
                            <div class="col-md">
                                <div class="background-image-wavy-abstract basic-card card shadow-lg border-0 px-5 py-5">
                                    <h3>What Are Your Web Development Skills?</h3>
                                    <p>I am capable of building, maintaining, and designing websites using popular front-end and back-end technologies. I create websites that strictly adhere to modern web practices and standards to ensure a smooth and comfortable web experience for everyone.</p>
                                </div>
                            </div>
                            <div class="col-md mt-3 mt-md-0">
                                <div class="background-color-clouds basic-card card shadow-lg border-0 px-5 py-5">
                                    <img class="img-fluid mx-auto my-auto" alt="MacBook" src="https://res.cloudinary.com/dhv9gcew6/image/upload/q_auto/v1675967562/jpvitan-website/earthquakeph/macbook_iwbznj.png" width="3287" height="1884">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0 px-md-4 py-5 py-md-3">
                <div class="row justify-content-center g-0 g-md-4">
                    <div class="content-lg col">
                        <div class="row g-0 g-md-4">
                            <div class="col-md">
                                <?php echo $LIST_CARD[2]->generate(); ?>
                            </div>
                            <div class="col-md">
                                <?php echo $LIST_CARD[3]->generate(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require "common/footer.php"; ?>
</body>

</html>