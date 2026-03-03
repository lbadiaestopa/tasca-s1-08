<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/NumberChecker.php';

class NumberCheckerTest extends TestCase
{
    public function testEvenPositiveNumber()
    {
        $checker = new NumberChecker(4);
        $this->assertTrue($checker->isEven());
    }
    
    public function testOddPositiveNumber() {
        $checker = new NumberChecker(3);
        $this->assertFalse($checker->isEven());
    }

    public function testEvenNegativeNumber() {
        $checker = new NumberChecker(-2);
        $this->assertTrue($checker->isEven());
    }

    public function testOddNegativeNumber() {
        $checker = new NumberChecker(-5);
        $this->assertFalse($checker->isEven());
    }

    public function testZeroIsEven() {
        $checker = new NumberChecker(0);
        $this->assertTrue($checker->isEven());
    }

    public function testPositiveNumber() {
        $checker = new NumberChecker(3);
        $this->assertTrue($checker->isPositive());
    }

    public function testNegativeNumber() {
        $checker = new NumberChecker(-2);
        $this->assertFalse($checker->isPositive());
    }

    public function testZeroIsNotPositive() {
        $checker = new NumberChecker(0);
        $this->assertFalse($checker->isPositive());
    }
}
