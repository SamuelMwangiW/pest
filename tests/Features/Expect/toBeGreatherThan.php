<?php

use PHPUnit\Framework\ExpectationFailedException;

test('passes', function () {
    expect(42)->toBeGreaterThan(41);
    expect(4)->toBeGreaterThan(3.9);
});

test('failures', function () {
    expect(4)->toBeGreaterThan(4);
})->throws(ExpectationFailedException::class);

test('failures with custom message', function () {
    expect(4)->toBeGreaterThan(4, 'oh no!');
})->throws(ExpectationFailedException::class, 'oh no!');

test('not failures', function () {
    expect(5)->not->toBeGreaterThan(4);
})->throws(ExpectationFailedException::class);
