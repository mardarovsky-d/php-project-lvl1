<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;

function game($question, $task)
{
    $victoryCount = 0;
    $gamesCount = 3;
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("$question");
    $continue = true;
    for ($i = 0; $i < $gamesCount && $continue === true; $i++) {
        $correct = $task();
        $answer = prompt("Your answer");
        if ($answer != $correct) {
            line("$answer is wrong answer ;(. Correct answer was $correct.\nLet's try again, %s!", $name);
            $continue = false;
        } else {
            line("Correct!");
            $victoryCount++;
        }
    }
    if ($victoryCount === $gamesCount) {
        line("Congratulations, %s!", $name);
    }
}
