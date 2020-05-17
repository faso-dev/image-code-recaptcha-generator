<?php
/**
 * Copyright (c) 2020.
 * Ce code source appartient à FASO-DEV
 */

namespace FSDV\Image;

/**
 * Interface IMGRecaptchaInterface
 * @package FSDV\Image
 */
interface IMGRecaptchaInterface
{
    /**
     * Génère une image
     * @param string $captcha_code
     * @param int|null $width la largeur de l'image
     * @param int|null $height la hauteur de l'image
     * @return resource|false la nouvelle ressource image générer
     */
    public static function generate(string $captcha_code, ?int $width = 72, ?int $height = 20);

    /**
     * Rend une image avec le code captcha déssus
     * @param string $captcha_code le code à afficher sur l'image
     * @param int|null $quality la qualité de l'image
     * @return mixed
     */
    public static function render(string $captcha_code, ?int $quality = 15);

    /**
     * @param string $captcha_code le code à afficher sur l'image
     * @param string $filename le chemin pour stocker l'image
     * @param int|null $quality la qualité de l'image
     * @return mixed
     */
    public static function getRenderImage(string $captcha_code, string $filename, ?int $quality = 15);
}