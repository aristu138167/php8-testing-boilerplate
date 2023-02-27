<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    private StringCalculator $stringCalculator;
    protected function setUp():void
    {
        parent::setUp();
        $this-> stringCalculator = new StringCalculator();

    }

    /**
     * @test
     */
    public function returns0forEmpty()
    {
        $result = $this -> stringCalculator->add("");

        $this->assertEquals(0,$result);
    }
    /**
     * @test
     */
    public function returns1for1number()
    {
        $result = $this -> stringCalculator->add("1");

        $this->assertEquals(1,$result);
    }

    /**
     * @test
     */
    public function returns2for2numbers()
    {
        $result = $this -> stringCalculator->add("1,1");

        $this->assertEquals(2,$result);
    }

    /**
     * @test
     */
    public function returns10for5numbers()
    {
        $result = $this -> stringCalculator->add("1,1,2,4,2");

        $this->assertEquals(10,$result);
    }
    /**
     * @test
     */
    public function returns6for3numbersWithLineJump()
    {
        $result = $this -> stringCalculator->add("1/n2,3");

        $this->assertEquals(6,$result);

    }
}