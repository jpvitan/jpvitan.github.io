#!/bin/bash

PHP=/Applications/MAMP/bin/php/php8.2.0/bin/php

BUILD=$($PHP build.php)

cp -rv css "$BUILD"
cp -rv js "$BUILD"

for file in "$BUILD"/*.html; do
    minify "$file" | sponge "$file"
done

for file in "$BUILD/css"/*.css; do
    minify "$file" | sponge "$file"
done
