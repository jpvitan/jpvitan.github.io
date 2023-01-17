<?php
require_once "utilities/Icon.php";
require_once "components/ListCard.php";
require_once "components/Navigation.php";

$LIST_CARD = [
    new ListCard(
        Icon::Android(),
        "Android",
        [
            "Develop Android applications using Java and Kotlin.",
            "Design responsive Android layouts using XML.",
            "Publish Android applications that comply with Google Play's policies.",
            "Use Android Studio as an integrated development environment for developing Android apps.",
            "Use RESTful APIs to connect with back-end services.",
            "Integrate third-party Android SDKs such as AdMob, Firebase, and Mapbox."
        ],
        Icon::Check(),
        "background-color: #0093e9; background-image: linear-gradient(160deg, #0093e9 0%, #80d0c7 100%); height: 100%;"
    ),
    new ListCard(
        Icon::Apple(),
        "iOS",
        [
            "Develop iOS applications using Swift.",
            "Design responsive iOS layouts using Xcode's Interface Builder.",
            "Publish iOS applications that comply with App Store's policies.",
            "Use Xcode as an integrated development environment for developing iOS apps.",
            "Use RESTful APIs to connect with back-end services.",
            "Integrate third-party iOS SDKs."
        ],
        Icon::Check(),
        "background-color: #4158d0; background-image: linear-gradient(43deg, #4158d0 0%, #c850c0 46%, #ffcc70 100%); height: 100%;"
    ),
    new ListCard(
        Icon::Grid(),
        "Front-End (Client)",
        [
            "Proficiently use core front-end technologies such as HTML, CSS, and JavaScript to create web pages.",
            "Utilize popular front-end frameworks and libraries such as React, Angular, and Bootstrap.",
            "Design websites to be accessible, responsive, and user-friendly.",
            "Improve page performance using proven tools and techniques (e.g., utilizing image CDNs to load images faster).",
            "Ensure cross-browser compatibility for a unified and seamless experience across browsers.",
            "Comply with the standards imposed by the World Wide Web Consortium (W3C) and other similar organizations."
        ],
        Icon::Check(),
        "background-color: #21D4FD; background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%); height: 100%;"
    ),
    new ListCard(
        Icon::Server(),
        "Back-End (Server)",
        [
            "Work with PHP, Python, and other back-end languages to engineer back-end systems.",
            "Work with relational (SQL) and non-relational (NoSQL) databases like MySQL and Firebase Realtime Database.",
            "Develop RESTful APIs with popular back-end frameworks (e.g., Django REST framework).",
            "Implement security measures to prevent or minimize cyberattacks (e.g., using prepared statements to guard against SQL injections)."
        ],
        Icon::Check(),
        "background-color: #F4D03F; background-image: linear-gradient(132deg, #F4D03F 0%, #16A085 100%); height: 100%;"
    )
];

$NAVIGATION = [
    new Navigation(Icon::Home(), "Home", "https://jpvitan.com/"),
    new Navigation(Icon::App(), "Apps", "https://jpvitan.com/apps"),
    new Navigation(Icon::Blog(), "Blog", "https://jpvitan.com/blog"),
    new Navigation(Icon::Resume(), "Resume", "https://drive.google.com/file/d/1CSINyY0zE48QMUpAPvxsUSSJfnGJ0Nk9/view?usp=sharing"),
    new Navigation(Icon::Certificate(), "Certificates", "https://drive.google.com/drive/folders/1XhgPGvFUXtb_99ATdpOCHK0p0pUJ3NZz?usp=sharing"),
    new Navigation(Icon::Message(), "Message", "mailto:business@jpvitan.com")
];
