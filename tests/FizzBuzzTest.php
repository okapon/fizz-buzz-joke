<?php

namespace Okapon;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function fizzExpectedProvider()
    {
        return [[3], [6], [9], [12], [18]];
    }
    public function buzzExpectedProvider()
    {
        return [[5], [10], [20]];
    }
    public function fizzBuzzExpectedProvider()
    {
        return [[15], [30]];
    }
    public function sameNumberExpectedProvider()
    {
        return [[1], [2], [4], [7], [8], [11], [13], [14], [16], [17], [19]];
    }

    /**
     * @dataProvider sameNumberExpectedProvider
     */
    public function testNumber(int $number)
    {
        $this->assertEquals($number, FizzBuzz::fizzBuzz($number));
    }

    /**
     * @dataProvider fizzExpectedProvider
     */
    public function testFizz(int $number)
    {
        $this->assertEquals('Fizz', FizzBuzz::fizzBuzz($number));
    }

    /**
     * @dataProvider buzzExpectedProvider
     */
    public function testBuzz(int $number)
    {
        $this->assertEquals('Buzz', FizzBuzz::fizzBuzz($number));
    }

    /**
     * @dataProvider fizzBuzzExpectedProvider
     */
    public function testFizzBuzz(int $number)
    {
        $this->assertEquals('FizzBuzz', FizzBuzz::fizzBuzz($number));
    }
}
