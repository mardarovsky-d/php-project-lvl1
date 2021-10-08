<?php

namespace Brain\Games\BrainProgression;

use function Brain\Engine\game;

function makeProgression(int $beginsWith, int $count, int $plus): array
{
    $progression = [];
    for ($i = 1; $i <= $count; $i++) {
        $beginsWith += $plus;
        $progression[] = $beginsWith;
    }
    return $progression;
}

function brainProgression(): void
{
    $question = "What number is missing in the progression?";
    $task = function (): array {
        $progressionBeginning = rand(1, 10);
        $progressionLength = rand(6, 10);
        $randomPlus = rand(1, 5);
        $progression = makeProgression($progressionBeginning, $progressionLength, $randomPlus);
        $missingNum = rand(2, $progressionLength - 1);
        $answer = $progression[$missingNum];
        $progression[$missingNum] = "..";
        $progressionForTask = implode(" ", $progression);
        return [$progressionForTask, "$answer"];
    };

    game($question, $task);
}
