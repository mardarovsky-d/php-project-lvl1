<?php

namespace Brain\Games\BrainProgression;

use function cli\line;
use function Brain\Engine\game;

function brainProgression(): void
{
    $question = "What number is missing in the progression?";
    $task = function () {
        $randomPlus = rand(1, 5);
        $numCount = rand(6, 10);
        $beginning = rand(1, 10);
        $progression = [];
        for ($i = 1; $i <= $numCount; $i++) {
            $beginning += $randomPlus;
            $progression[] = $beginning;
        }
        $missingNum = rand(2, $numCount - 1);
        $result = $progression[$missingNum];
        $progression[$missingNum] = "..";
        $progressionForTask = implode(" ", $progression);
        line("Question: $progressionForTask");
        return $result;
    };

    game($question, $task);
}
