<?php

namespace Sixmonkey\FunnyGermanPasswords;

class StupidGermanPassword
{
    /**
     * Generate a stupid German password.
     *
     * @return string
     */
    public static function generate(): string
    {
        $animals = file(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'animals.txt');
        $fruits = file(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'fruits.txt');

        $animal = trim($animals[array_rand($animals)]);
        $fruit = trim($fruits[array_rand($fruits)]);

        return $animal . $fruit;
    }
}