<?php

use Sixmonkey\StupidPasswords\StupidPassword;

test('it generates some string', function () {
    expect(StupidPassword::generate())
        ->not->toBeEmpty()
        ->toBeString()
        ->and(StupidPassword::generate('de'))
        ->not->toBeEmpty()
        ->toBeString();

});

test('it is studly case', function () {
    expect(StupidPassword::generate())
        ->toBeStudlyCase()
        ->and(StupidPassword::generate('de'))
        ->toBeStudlyCase();
});

test('it has two uppercase letters', function () {
    expect(StupidPassword::generate())
        ->toMatch('/[A-Z].*[A-Z]/')
        ->and(StupidPassword::generate('de'))
        ->toMatch('/[A-Z].*[A-Z]/');
});