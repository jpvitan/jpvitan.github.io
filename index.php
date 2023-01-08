<?php
include "model/Page.php";
$page = Page::findById(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "common/head.php"; ?>
</head>

<body>
    <?php include "common/navigation.php"; ?>
</body>

</html>