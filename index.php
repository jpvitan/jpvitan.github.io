<?php
require_once "model/Page.php";
require_once "utilities/Icon.php";
require_once "utilities/ListCard.php";

$page = Page::findById(1);

$listCardArray = array(
    new ListCard(
        Icon::Android(),
        "Android",
        array(
            "Develop Android applications using Java and Kotlin.",
            "Design responsive Android layouts using XML.",
            "Publish Android applications that comply with Google Play's policies.",
            "Use Android Studio as an integrated development environment for developing Android apps.",
            "Use RESTful APIs to connect with back-end services.",
            "Integrate third-party Android SDKs such as AdMob, Firebase, and Mapbox."
        ),
        Icon::Check(),
        "background-color: #0093e9; background-image: linear-gradient(160deg, #0093e9 0%, #80d0c7 100%); height: 100%;"
    ),
    new ListCard(
        Icon::Apple(),
        "iOS",
        array(
            "Develop iOS applications using Swift.",
            "Design responsive iOS layouts using Xcode's Interface Builder.",
            "Publish iOS applications that comply with App Store's policies.",
            "Use Xcode as an integrated development environment for developing iOS apps.",
            "Use RESTful APIs to connect with back-end services.",
            "Integrate third-party iOS SDKs."
        ),
        Icon::Check(),
        "background-color: #4158d0; background-image: linear-gradient(43deg, #4158d0 0%, #c850c0 46%, #ffcc70 100%); height: 100%;"
    )
)
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
                                <?php echo $listCardArray[0]->generate(); ?>
                            </div>
                            <div class="col-md">
                                <?php echo $listCardArray[1]->generate(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>