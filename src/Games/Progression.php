<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\playGame;

const GAME_DESCRIPTION = 'What number is missing in the progression?';
const MAX_START_NUMBER = 9;
const MAX_NUMBER_PROGRESSION = 150;
const COUNT_PROGRESSION = 10;

function getProgressionQuestion(): array
{
    $firstNumber = (string)random_int(1, MAX_START_NUMBER);
    $progressionIncrement = random_int(1, MAX_START_NUMBER);
    $progression = range($firstNumber, MAX_NUMBER_PROGRESSION, $progressionIncrement);
    $progression = array_slice($progression, 0, COUNT_PROGRESSION);
    $answerNumber = array_rand($progression);
    $rightAnswer = $progression[$answerNumber];
    $progression[$answerNumber] = '..';
    return [implode(' ', $progression), (string)$rightAnswer];
}

function playProgression(): void
{
    playGame(GAME_DESCRIPTION, 'BrainGames\Games\Progression\getProgressionQuestion');
}
