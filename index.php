<?php
include "model/Page.php";
$page = Page::findById(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "common/head.php"; ?>
</head>

<body class="theme-light">
    <?php include "common/navigation.php"; ?>
    <main class="home">
        <section>
            <div class="container-fluid px-4 py-4">
                <div class="row justify-content-center">
                    <div class="content col">
                        <div class="main-card card shadow-lg border-0 text-center px-5 py-5">
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
                        <h2>Professional Background</h2>
                        <h3>What Are Your Mobile Development Skills?</h3>
                        <p>I can develop and publish top-quality Android and iOS apps that are compliant with the policies imposed by Google and Apple. I have written and published applications for both of these platforms to demonstrate my competency in mobile app development.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>