<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function returns0forEmpty()
    {
        $stringcalculator = new StringCalculator();

        $result = $stringcalculator->add("");

        $this->assertEquals(0, $result);
    }
    /**
     * @test
     */
    public function returns1for1number()
    {
        $stringcalculator = new StringCalculator();

        $result = $stringcalculator->add("1");

        $this->assertEquals(1, $result);
    }

    /**
     * @test
     */
    public function returns2for2numbers()
    {
        $stringcalculator = new StringCalculator();

        $result = $stringcalculator->add("1,1");

        $this->assertEquals(2, $result);
    }

    /**
     * @test
     */
    public function returns10for5numbers()
    {
        $stringcalculator = new StringCalculator();

        $result = $stringcalculator->add("1,1,2,4,2");

        $this->assertEquals(10, $result);
    }
    /**
     * @test
     */
    public function returns6for3numbersWithLineJump()
    {
        $stringcalculator = new StringCalculator();

        $result = $stringcalculator->add("1/n2,3");

        $this->assertEquals(10, $result);
    }
}