<?php

namespace BrainGames\Games\Calc;

use InvalidArgumentException;

use function BrainGames\Engine\playGame;

const GAME_DESCRIPTION = 'What is the result of the expression?';
const MIN_NUMBER = 1;
const MAX_NUMBER1 = 20;
const MAX_NUMBER2 = 10;

function calculate(string $operation, int $number1, int $number2): int
{
    switch ($operation) {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
        default:
            throw new InvalidArgumentException("Unsupported operation: $operation");
    }
}

function getCalcQuestion(): array
{
    $operationTypes = ['+', '-', '*'];
    $operation = $operationTypes[array_rand($operationTypes)];
    $firstNumber = random_int(MIN_NUMBER, MAX_NUMBER1);
    $secondNumber = random_int(MIN_NUMBER, MAX_NUMBER2);
    $calcAnswer = (string)calculate($operation, $firstNumber, $secondNumber);
    return ["{$firstNumber} {$operation} {$secondNumber}", $calcAnswer];
}

function playCalc(): void
{
    playGame(GAME_DESCRIPTION, 'BrainGames\Games\Calc\getCalcQuestion');
}
