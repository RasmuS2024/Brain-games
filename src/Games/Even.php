<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\playGame;

const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
const MAX_RANDOM_NUMBER = 100;
const MIN_NUMBER = 1;

function isEvenNumber(int $number): bool
{
    return $number % 2 === 0;
}

function getEvenQuestion(): array
{
    $randomNumber = random_int(MIN_NUMBER, MAX_RANDOM_NUMBER);
    $rightAnswer = isEvenNumber($randomNumber) ? 'yes' : 'no';
    return [(string)$randomNumber, $rightAnswer];
}

function playEven(): void
{
    playGame(GAME_DESCRIPTION, 'BrainGames\Games\Even\getEvenQuestion');
}
