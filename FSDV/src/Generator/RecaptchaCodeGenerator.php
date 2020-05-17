<?php
/**
 * Copyright (c) 2020.
 * Ce code source appartient à FASO-DEV
 */

namespace FSDV\Generator;

/**
 * Class RecaptchaCodeGenerator
 * @package FSDV\Generator
 */
class RecaptchaCodeGenerator implements RecaptchaCodeGeneratorInterface
{

    /**
     * @inheritDoc
     */
    public static function generate(?int $length = 4): string
    {
        return strtoupper(bin2hex(openssl_random_pseudo_bytes($length)));
    }
}