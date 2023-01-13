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
    </main>
</body>

</html>