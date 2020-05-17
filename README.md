# image-code-recaptcha-generator
Ce package permet de générer des images flouttées avec un code recaptcha déssus afin d'éviter d'être spammé par les robots au niveau des formulaire

#Requirements
    -   PHP 7.3
    -   ext-gd
    -   ext-openssl

#Utilisations
```php
<?php
/**
 * Copyright (c) 2020.
 * Ce code source appartient à FASO-DEV
 */

use FSDV\Generator\RecaptchaCodeGenerator;
use FSDV\Image\IMGRecaptcha;

require_once __DIR__.'/vendor/autoload.php';

//Génère un code aléatoire pour afficher sur une image
//Ce code peut être stocker dans la session ou dans les cookies
//afin de servir de de vérifications lors des soumissions des formulaires
$capcha_code = RecaptchaCodeGenerator::generate(3);

//On génère une image avec le code captcha déssus
//On le rend en même temps
IMGRecaptcha::render($capcha_code);

//On peut aussi stocker l'image génèrée dans un dossier
//exemple : dans ressources/recaptcha/images
//Cette méthode prend le code à afficher, le chemin avec le nom de l'image, la qualité
IMGRecaptcha::getRenderImage($capcha_code, "ressources/recaptcha/images/${capcha_code}.jpeg", 20);

```