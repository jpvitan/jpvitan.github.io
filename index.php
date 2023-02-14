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
                                        <div class="background-transparent card border-0 text-center px-4 py-4">
                                            <img class="rounded-circle shadow-lg mx-auto mb-4" alt="Selfie" src="https://res.cloudinary.com/dhv9gcew6/image/upload/q_auto/v1675296391/jpvitan-website/profile/selfie_zwuuz1.jpg" width="100" height="100">
                                            <h1 class="font-color-white mb-0">Justine Paul Vitan</h1>
                                            <p class="font-color-white fw-bold">Software Developer</p>
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
                    <div class="content-sm col text-center" data-aos="fade-up">
                        <h2>Hello!</h2>
                        <p>I'm a mobile and web developer who writes production-grade software that follows modern standards and best practices to ensure a smooth and comfortable mobile and web experience for everyone.</p>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <a class="basic-button background-color-peter-river font-color-white btn shadow-lg px-4 py-2 mt-4" href="mailto:business@jpvitan.com">Let's Talk</a>
                            </div>
                            <div class="col-auto">
                                <a class="basic-button font-color-peter-river btn px-4 py-2 mt-4" href="https://jpvitan.com/apps">View Apps</a>
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
                        <h2>Mobile</h2>
                        <div class="row">
                            <div class="col-md">
                                <div class="background-image-wavy-abstract basic-card card shadow-lg border-0 px-5 py-5">
                                    <h3 class="font-color-white">What Are Your Mobile Development Skills?</h3>
                                    <p class="fw-bold font-color-white">Android and iOS Development</p>
                                    <p class="font-color-white">I can develop, design, and publish apps using native tools and technologies for both Android and iOS. My knowledge of each ecosystem's policies and best practices gives me an edge in delivering reliable and performant apps.</p>
                                </div>
                            </div>
                            <div class="col-md mt-3 mt-md-0">
                                <div class="background-color-clouds basic-card card shadow-lg border-0 px-5 pt-5">
                                    <h3>Featured Mobile App</h3>
                                    <p class="fw-bold">SatTrack-X by Justine Paul Vitan</p>
                                    <p>An Android application that lets you track over two thousand earth-orbiting satellites for free and without limits. It has a customizable and compact interface that users can easily pick up.</p>
                                    <a class="text-center" href="https://play.google.com/store/apps/details?id=com.jpv.sattrack">
                                        <img class="img-fluid mt-5" alt="Samsung" src="https://res.cloudinary.com/dhv9gcew6/image/upload/q_auto/v1676133708/jpvitan-website/sattrack-x/samsung_kpuoje.png" width="1527" height="2273" data-aos="fade-up">
                                    </a>
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
                                    <h3 class="font-color-white">What Are Your Web Development Skills?</h3>
                                    <p class="fw-bold font-color-white">Front-End and Back-End Development</p>
                                    <p class="font-color-white">I am capable of building, maintaining, and designing websites using popular front-end and back-end technologies. I create websites that strictly adhere to modern web standards to ensure a smooth and comfortable web experience for everyone.</p>
                                </div>
                            </div>
                            <div class="col-md mt-3 mt-md-0">
                                <div class="background-color-clouds basic-card card shadow-lg border-0 px-5 py-5">
                                    <h3>Featured Web App</h3>
                                    <p class="fw-bold">EarthquakePH by Justine Paul Vitan</p>
                                    <p>A highly customizable real-time and progressive web application that tracks and monitors the latest earthquake recorded by the United States Geological Survey within the Philippines and the world.</p>
                                    <a class="text-center" href="https://earthquakeph.netlify.app/">
                                        <img class="img-fluid mt-5" alt="MacBook" src="https://res.cloudinary.com/dhv9gcew6/image/upload/q_auto/v1675967562/jpvitan-website/earthquakeph/macbook_iwbznj.png" width="3287" height="1884" data-aos="zoom-in">
                                    </a>
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
        <section class="mt-5">
            <div class="container-fluid px-4 py-3">
                <div class="row justify-content-center">
                    <div class="content-lg col">
                        <h2>Certificates</h2>
                        <div class="row">
                            <div class="col-md">
                                <div class="background-color-clouds basic-card card shadow-lg border-0 px-5 py-5">
                                    <h3>Microsoft Technology Associate</h3>
                                    <p class="fw-bold">Exam 98-361: Software Development Fundamentals</p>
                                    <p>Earners of the MTA: Software Development Fundamentals certification have demonstrated core software development skills. The MTA program provides an appropriate entry point to a future career in technology.</p>
                                    <p>—Credly</p>
                                    <a class="text-center" href="https://www.credly.com/badges/b97de60d-3b7c-436d-bc76-f271322f4211/public_url">
                                        <img class="img-fluid my-5" alt="Exam 98-361: Software Development Fundamentals" src="https://res.cloudinary.com/dhv9gcew6/image/upload/q_auto/v1676316116/jpvitan-website/badges/mta-software-development-fundamentals-2018_k6omov.png" width="300" height="300">
                                    </a>
                                    <!-- <div class="basic-progress progress">
                                        <div class="progress-bar" style="width: 100%;" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md mt-3 mt-md-0">

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