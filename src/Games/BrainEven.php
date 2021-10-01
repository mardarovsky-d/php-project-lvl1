<?php

namespace Brain\Games\BrainEven;

use function cli\line;
use function cli\prompt;

function brainEven()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    $gamesCount = 3;
    $victoryCount = 0;
    for ($i = 0; $i < $gamesCount; $i++) {
        $num = rand(1, 99);
        line("Question: $num");
        $answer = prompt("Your answer");
        $wrong = "$answer is wrong answer ;(. Correct answer was 'yes'.\nLet's try again, %s!";
        if ($num % 2 === 0 && $answer === 'no') {
            line("$wrong", $name);
            break;
        } elseif ($num % 2 === 0 && $answer !== 'yes') {
            line("$wrong", $name);
            break;
        } elseif ($num % 2 !== 0 && $answer !== 'no') {
            line("$wrong", $name);
            break;
        } else {
            line("Correct!");
            $victoryCount += 1;
        }
    }
    if ($victoryCount === $gamesCount) {
        line("Congratulations, %s!", $name);
    }
}
