<?php

use Sixmonkey\FunnyGermanPasswords\StupidGermanPassword;

test('it generates some string', function () {
    expect(StupidGermanPassword::generate())
        ->not->toBeEmpty()
        ->toBeString();
});

test('it is studly case', function () {
    expect(StupidGermanPassword::generate())
        ->toBeStudlyCase();
});

test('it has two uppercase letters', function () {
    expect(StupidGermanPassword::generate())
        ->toMatch('/[A-Z].*[A-Z]/');
});