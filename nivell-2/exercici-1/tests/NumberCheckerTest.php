<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/NumberChecker.php';

class NumberCheckerTest extends TestCase
{
    public static function numberProvider(): array 
    {
        return [
            [4, true],
            [10, true],
            [-2, true],
            [-8, true],
            [0, true],
            [-5, false],
            [-9, false],
            [3, false],
            [7, false],
        ];
    }

    /**
     * @dataProvider numberProvider
     */
    public function testIsEven(int $number, bool $expected): void
    {
        $checker = new NumberChecker($number);
        $this->assertSame($expected, $checker->isEven());
    }

    public static function numberProvider2(): array 
    {
        return [
            [-5, false],
            [-2, false],
            [0, false],
            [3, true],
            [6, true],
        ];
    }

    /**
     * @dataProvider numberProvider2
     */
    public function testIsPositive(int $number, bool $expected): void
    {
        $checker = new NumberChecker($number);
        $this->assertSame($expected, $checker->isPositive());
    }
}
