<?php

namespace Tests\Model;

use App\Model\FizzBuzz;
use PHPUnit\Framework\TestCase;



class FizzBuzzTest extends TestCase
{

    private $fizzBuzz;


    public function setUp()
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }


/********************************************************************/
/*                           FIZZ                                   */

    public function shouldReturnFizzDataProvider()
    {
        yield [3];
        yield [6];
        yield [9];
        yield [12];
        yield [13];
    }

    /**
     * @dataProvider shouldReturnFizzDataProvider()
     * @param int $fizzNumber
     */
    public function testShouldReturnFizz(int $fizzNumber)
    {
        $errorMessage = "Le nombre ${fizzNumber} ne renvoie pas Fizz alors qu'il devrait.";
        $this->assertEquals(true, $this->fizzBuzz::isFizzNumber($fizzNumber), $errorMessage);
    }

    public function shouldNotReturnFizzDataProvider()
    {
        yield [2];
        yield [5];
        yield [8];
        yield [11];
        yield [14];
    }

    /**
     * @dataProvider shouldNotReturnFizzDataProvider()
     * @param int $fizzNumber
     */
    public function testShouldNotReturnFizz(int $fizzNumber)
    {
        $errorMessage = "Le nombre ${fizzNumber} renvoie Fizz alors qu'il ne devrait pas.";
        $this->assertEquals(false, $this->fizzBuzz::isFizzNumber($fizzNumber), $errorMessage);
    }


/********************************************************************/
/*                           BUZZ                                   */

    public function shouldReturnBuzzDataProvider()
    {
        yield [5];
        yield [10];
        yield [20];
        yield [100];
    }

    /**
     * @dataProvider shouldReturnBuzzDataProvider()
     * @param int $buzzNumber
     */
    public function testShouldReturnBuzz(int $buzzNumber)
    {
        $errorMessage = "Le nombre ${buzzNumber} ne renvoie pas Buzz alors qu'il devrait.";
        $this->assertEquals(true,  $this->fizzBuzz->isBuzzNumber($buzzNumber), $errorMessage);
    }

    public function shouldNotReturnBuzzDataProvider()
    {
        yield [1];
        yield [2];
        yield [3];
        yield [4];
        yield [6];
        yield [7];
        yield [8];
        yield [9];
    }


    /**
     * @dataProvider shouldNotReturnBuzzDataProvider()
     * @param int $buzzNumber
     */
    public function testShouldNotReturnBuzz(int $buzzNumber)
    {
        $errorMessage = "Le nombre ${buzzNumber} renvoie Buzz alors qu'il ne devrait pas.";
        $this->assertEquals(false, $this->fizzBuzz::isBuzzNumber($buzzNumber), $errorMessage);
    }
}