<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;

function game(string $question, callable $task): void
{
    $victoryCount = 0;
    $gamesCount = 3;
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("$question");
    for ($i = 0; $i < $gamesCount; $i++) {
        $taskText = $task();
        line("Question: $taskText[0]");
        $correct = $taskText[1];
        $answer = prompt("Your answer");
        if ($answer !== $correct) {
            line("'$answer' is wrong answer ;(. Correct answer was '$correct'.\nLet's try again, %s!", $name);
            return;
        } else {
            line("Correct!");
            $victoryCount++;
        }
    }
    line("Congratulations, %s!", $name);
}
