<?php

namespace Brain\Games\BrainEven;

use function cli\line;
use function cli\prompt;

function brainEven()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $num = rand(1, 99);
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    line("Question: $num");
    $answer = prompt("Your answer");
    if ($num % 2 !== 0 || $answer === 'yes') {
        line("Correct!");
    } elseif ($num % 2 !== 0 || $answer === 'no') {
        line("$answer is wrong answer ;(. Correct answer was 'no'. \n Let's try again, %s!", $name);
    }
}
