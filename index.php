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
            <div class="container-fluid px-4 py-4">
                <div class="row justify-content-center">
                    <div class="content col">
                        <div class="title-card card shadow-lg border-0 text-center px-5 py-5">
                            <h1 class="py-5">Justine Paul Vitan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid px-4 py-4">
                <div class="row justify-content-center">
                    <div class="content col">
                        <h2>Introduction</h2>
                        <h3>Tell Me About Yourself</h3>
                        <p>I'm Justine Paul Vitan, a mobile and web developer based in the Philippines. I've been building and designing mobile and web applications as a hobby and profession. For the past few years, I've published many applications to prove my competency in developing and designing software.</p>
                        <p>Personality-wise, I love to describe myself as a tenacious person. I'm always insistent on finishing my goal, even if it gets to the point where I have to exhaust all my resources. This mindset allowed me to develop complex applications such as a satellite tracking app and a machine learning model that utilizes convolutional neural networks.</p>
                        <p>Moving forward, it is in my best interest to diversify, expand, and modernize my skill set to meet the demands of the industry. I'm always willing to learn and explore new things.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid px-4 py-4">
                <div class="row justify-content-center">
                    <div class="content col">
                        <h2>Professional and Technical Background</h2>
                        <h3>What Are Your Mobile Development Skills?</h3>
                        <p>I can develop and publish top-quality Android and iOS apps that are compliant with the policies imposed by Google and Apple. I have written and published applications for both of these platforms to demonstrate my competency in mobile app development.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0 px-md-4 py-4">
                <div class="row justify-content-center g-0">
                    <div class="content col">
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
            <div class="container-fluid px-4 py-4 mt-md-5">
                <div class="row justify-content-center">
                    <div class="content col">
                        <h3>What Are Your Web Development Skills?</h3>
                        <p>I am capable of building, maintaining, and designing websites using popular front-end and back-end technologies. I create websites that strictly adhere to modern web standards to ensure a smooth and comfortable web experience for everyone.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>