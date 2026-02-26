<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/SpeedChecker.php';

class SpeedCheckerTest extends TestCase
{

    public static function speedProvider(): array
    {
        return [
            [0, "Molt lent"],
            [15, "Molt lent"],
            [29, "Molt lent"],
            [30, "Velocitat adequada"],
            [45, "Velocitat adequada"],
            [60, "Velocitat adequada"],
            [61, "Excés lleu"],
            [70, "Excés lleu"],
            [80, "Excés lleu"],
            [81, "Excés moderat"],
            [90, "Excés moderat"],
            [100, "Excés moderat"],
            [101, "Excés greu"],
            [150, "Excés greu"],
        ];
    }

    /**
     * @dataProvider SpeedCheckerTest::speedProvider
     */
    public function testSpeedThresholds(int $speed, string $expected): void
    {
        $checker = new SpeedChecker();
        $this->assertSame($expected, $checker->getSpeedThreshold($speed));
    }
}
