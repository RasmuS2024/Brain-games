<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\playGame;

const GAME_DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const MIN_NUMBER = 1;
const MAX_NUMBER = 20;

function getGcd(int $number1, int $number2): int
{
    while ($number2 !== 0) {
        $temp = $number2;
        $number2 = $number1 % $number2;
        $number1 = $temp;
    }
    return $number1;
}

function getGcdQuestion(): array
{
    $firstNumber = random_int(MIN_NUMBER, MAX_NUMBER);
    $secondNumber = random_int(MIN_NUMBER, MAX_NUMBER);
    $question = "{$firstNumber} {$secondNumber}";
    $rightAnswer = (string)getGcd($firstNumber, $secondNumber);
    return [$question, $rightAnswer];
}

function playGcd(): void
{
    playGame(GAME_DESCRIPTION, 'BrainGames\Games\Gcd\getGcdQuestion');
}
