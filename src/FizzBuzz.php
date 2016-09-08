<?php
/**
 * Created by PhpStorm.
 * User: polidog
 * Date: 2016/09/08
 */

namespace Polidog\FizzBuzz;


class FizzBuzz
{
    public function main()
    {
        foreach ($this->getRange(1, 100) as $number) {
            echo $this->callMessage($number);
        }
    }

    public function callMessage($i) {
        if ($this->fizzBuzz($i)) {
            return "FizzBuzz";
        } else if ($this->fizz($i)) {
            return "Fizz";
        } else if ($this->buzz($i)) {
            return "Buzz";
        } else {
            return $i;
        }
    }


    public function fizz($i) {
        if ($i % 3 == 0 ) {
            return true;
        } else {
            return false;
        }
    }
    public function buzz($i) {
        if ($i % 5 == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function fizzBuzz($i) {
        if ($i % 5 == 0 && $i % 3 == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getRange($start, $end) {

        if ($end > 100) {
            throw new \InvalidArgumentException("最大値が100以上になっている number=".$end);
        }

        foreach (range($start, $end) as $number) {
            yield $number;
        }
    }
}