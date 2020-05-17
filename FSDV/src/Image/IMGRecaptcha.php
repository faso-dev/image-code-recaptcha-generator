<?php
/**
 * Copyright (c) 2020.
 * Ce code source appartient à FASO-DEV
 */

namespace FSDV\Image;


/**
 * Class IMGRecaptcha
 * @package FSDV\Image
 */
class IMGRecaptcha implements IMGRecaptchaInterface
{

    /**
     * @inheritDoc
     */
    public static function generate(string $captcha_code, ?int $width = 80, ?int $height = 50)
    {
        $image_ressource = imagecreatetruecolor($width,$height);
        $captcha_background = imagecolorallocate($image_ressource, 204, 204, 204);
        imagefill($image_ressource,0,0,$captcha_background);
        $captcha_text_color = imagecolorallocate($image_ressource, 0, 0, 0);
        imagestring($image_ressource, 5, 3, 15, $captcha_code, $captcha_text_color);
        return $image_ressource;
    }


    /**
     * @inheritDoc
     */
    public static function render(string $captcha_code, ?int $quality = 15)
    {
        header("Content-type: image/jpeg");
        imagejpeg(self::generate($captcha_code), null, $quality);
    }

    /**
     * @inheritDoc
     */
    public static function getRenderImage(string $captcha_code, string $filename, ?int $quality = 15)
    {
        imagejpeg(self::generate($captcha_code), $filename, $quality);
    }
}