<?php

$build = "../";
$files = [
    "./index.php" => "$build/index.html"
];

foreach ($files as $input => $output) {
    if (!file_exists($input)) {
        continue;
    }

    ob_start();
    include $input;
    file_put_contents($output, ob_get_clean());
}

echo $build;
