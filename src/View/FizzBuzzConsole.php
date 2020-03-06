<?php

namespace App\View;


use App\Model\FizzBuzz;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FizzBuzzConsole extends Command
{
    protected static $defaultName = 'app:launch';

    protected $fizzBuzz;


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->fizzBuzz = new FizzBuzz();

        $limit = 100;
        for ($number = 1; $number < $limit; $number++)
        {
            $isFizzNumber = $this->fizzBuzz->isFizzNumber($number);
            $isBuzzNumber = $this->fizzBuzz->isBuzzNumber($number);

            if ($isFizzNumber) {
                $output->write("Fizz");
            }
            if ($isBuzzNumber) {
                $output->write("Buzz");
            }

            if(!$isFizzNumber && !$isBuzzNumber) {
                $output->write($number);
            }
            $output->write("\n");

        }
        return 0;
    }
}