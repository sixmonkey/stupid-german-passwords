<?php

namespace Sixmonkey\StupidPasswords;

use Exception;

class StupidPassword
{
    /**
     * Generate a stupid password.
     *
     * @param string $locale
     * @return string
     * @throws Exception
     */
    public static function generate(string $locale = 'en'): string
    {
        $resource_dir = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . $locale . DIRECTORY_SEPARATOR;

        if (!is_dir($resource_dir)) {
            throw new Exception("Local $locale is unavailable");
        }

        $animals = file($resource_dir . 'animals.txt');
        $fruits = file($resource_dir . 'fruits.txt');

        $animal = ucfirst(trim($animals[array_rand($animals)]));
        $fruit = ucfirst(trim($fruits[array_rand($fruits)]));

        return $animal . $fruit;
    }
}