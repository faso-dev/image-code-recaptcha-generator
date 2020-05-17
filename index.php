<?php

use FSDV\Generator\RecaptchaCodeGenerator;
use FSDV\Image\IMGRecaptcha;

require_once __DIR__.'/vendor/autoload.php';

$code = RecaptchaCodeGenerator::generate();

IMGRecaptcha::getRenderImage($code, 'test.jpeg', 100);
