<?php
/**
 * Created by PhpStorm.
 * User: polidog
 * Date: 2016/09/08
 */

namespace Polidog\FizzBuzz\Test;


use Polidog\FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function さんの倍数の時はFizzが返る()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertTrue($fizzBuzz->fizz(3));
    }

    /**
     * @test
     */
    public function ごの倍数の時はBuzzが返る()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertTrue($fizzBuzz->buzz(5));
    }

    /**
     * @test
     */
    public function さんとごの倍数の時はFizzBuzzが返る()
    {
        $this->assertTrue((new FizzBuzz())->fizzBuzz(15));
    }

    /**
     */
    public function 最大値が100までになる() {
        $count = 0;
        $fizzBuzz = new FizzBuzz();
        foreach ($fizzBuzz->getRange(1, 100) as $number) {
            $count++;
        }
        $this->assertEquals(100, $count);
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     */
    public function 最大値が100を超えた場合はExceptionが発生する()
    {
        $fizzBuzz = new FizzBuzz();
        foreach($fizzBuzz->getRange(1, 200) as $number) {}
    }

    /**
     * @test
     * @dataProvider fizzBuzzData
     * @param $number
     * @param $expected
     */
    public function checkIfString ($number, $expected) {
        $fizzbuzz = new FizzBuzz();
        $actual = $fizzbuzz->callMessage($number);
        $this->assertEquals($expected, $actual);
    }

    public function fizzBuzzData()
    {
        return [
            [1, '1'],
            [2, '2'],
            [3, 'Fizz'],
            [4, '4'],
            [5, 'Buzz'],
        ];
    }
}
