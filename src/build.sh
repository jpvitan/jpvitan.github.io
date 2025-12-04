#!/bin/bash

PHP=/Applications/MAMP/bin/php/php8.2.0/bin/php

BUILD=$($PHP build.php)

cp -rv css "$BUILD"
cp -rv js "$BUILD"
