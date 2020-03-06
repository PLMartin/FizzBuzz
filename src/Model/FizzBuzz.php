<?php


namespace App\Model;


class FizzBuzz
{

    public function isFizzNumber(int $number): bool
    {
        return ($number % 3 === 0) || strpos((string) $number, '3');
    }



    public function isBuzzNumber(int $number): bool
    {
        return ($number % 5 === 0) || strpos((string) $number, '5');
    }


}