<?php
require_once "utilities/Icon.php";
require_once "components/ListCard.php";
require_once "components/Navigation.php";

$LIST_CARD = [
    new ListCard(
        Icon::Android(),
        "Android (Native)",
        [
            "Develop Android applications using Java.",
            "Design responsive interfaces using Android Studio's Layout Editor and XML.",
            "Use Android Studio as an integrated development environment for developing Android apps.",
            "Use Gradle for handling and managing dependencies.",
            "Integrate third-party Android SDKs, frameworks, and libraries such as AdMob, Mapbox, and Retrofit.",
            "Use RESTful APIs to connect with back-end services.",
            "Publish Android applications that comply with Google Play's policies.",
            "Follow the recommended software architecture for Android applications to maximize scalability and efficiency."
        ],
        Icon::Check(),
        "background-color: #21d4fd; background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); height: 100%;"
    ),
    new ListCard(
        Icon::Apple(),
        "iOS (Native)",
        [
            "Develop iOS applications using Swift.",
            "Design responsive interfaces using Xcode's Interface Builder and storyboards.",
            "Use Xcode as an integrated development environment for developing iOS apps.",
            "Use CocoaPods for handling and managing dependencies.",
            "Integrate third-party iOS SDKs, frameworks, and libraries such as Mapbox, SwiftyJSON, and Alamofire.",
            "Use RESTful APIs to connect with back-end services.",
            "Publish iOS applications that comply with App Store's policies.",
            "Follow the recommended software architecture for iOS applications to maximize scalability and efficiency."
        ],
        Icon::Check(),
        "background-color: #f4d03f; background-image: linear-gradient(132deg, #f4d03f 0%, #16a085 100%); height: 100%;"
    ),
    new ListCard(
        Icon::Grid(),
        "Front-End (Client)",
        [
            "Proficiently use core front-end technologies such as HTML, CSS, and JavaScript (ES6+) to create web pages.",
            "Utilize popular front-end tools, frameworks, and libraries such as Sass (SCSS), Bootstrap, React, and Mapbox GL JS.",
            "Build and deploy websites using modern (CI/CD) or traditional (FTP) tools and techniques.",
            "Perform and write tests with Jest and other similar testing frameworks.",
            "Design websites to be accessible, responsive, and user-friendly.",
            "Improve page performance using proven tools and techniques (e.g., utilizing image CDNs to load images faster).",
            "Ensure cross-browser compatibility for a unified and seamless experience across browsers."
        ],
        Icon::Check(),
        "background-color: #21d4fd; background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); height: 100%;"
    ),
    new ListCard(
        Icon::Server(),
        "Back-End (Server)",
        [
            "Develop back-end applications with JavaScript (Node.js), PHP, and other back-end languages.",
            "Utilize popular back-end tools, frameworks, and libraries such as Express and Passport.",
            "Use npm for handling and managing dependencies.",
            "Work with relational (SQL) and non-relational (NoSQL) databases like MySQL and MongoDB.",
            "Use an Object Data Modeling (ODM) library like Mongoose.",
            "Impose authentication and authorization processes in back-end systems.",
            "Develop a well-designed REST API that follows modern standards.",
            "Implement security measures to prevent or minimize cyberattacks."
        ],
        Icon::Check(),
        "background-color: #f4d03f; background-image: linear-gradient(132deg, #f4d03f 0%, #16a085 100%); height: 100%;"
    )
];

$NAVIGATION = [
    new Navigation(Icon::Home(), "Home", "https://jpvitan.com/"),
    new Navigation(Icon::Blog(), "Blog", "https://jpvitan.medium.com/"),
    new Navigation(Icon::Resume(), "Resume", ""),
    new Navigation(Icon::Certificate(), "Certificates", "https://drive.google.com/drive/folders/1LgoVQWbGlAtZKmyambedLStAIcFWx9tA?usp=share_link"),
    new Navigation(Icon::Message(), "Message", "mailto:business@jpvitan.com")
];
