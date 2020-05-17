<?php

/**
 * Copyright (c) 2020.
 * Ce code source appartient à FASO-DEV
 */

namespace FSDV\Generator;

/**
 * Interface RecaptchaCodeGeneratorInterface
 * @package FSDV\Generator
 */
interface RecaptchaCodeGeneratorInterface
{
    /**
     * Renvoie un code générer
     * @param int|null $length la longueur du code
     * @return string le code généré
     */
    public static function generate(?int $length = 2): string ;
}