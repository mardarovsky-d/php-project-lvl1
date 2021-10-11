<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;

function game(string $question, callable $task): void
{
    $gamesCount = 3;
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question);
    for ($i = 0; $i < $gamesCount; $i++) {
        [$taskText, $correctAnswer] = $task();
        line("Question: {$taskText}");
        $userAnswer = prompt("Your answer");
        if ($userAnswer !== $correctAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, %s!", $name);
            return;
        } else {
            line("Correct!");
        }
    }
    line("Congratulations, %s!", $name);
}
