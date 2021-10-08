<?php

namespace Brain\Games\BrainCalc;

use function Brain\Engine\game;

function brainCalc(): void
{
    $question = "What is the result of the expression?";
    function calculations(int $num1, int $num2, string $operator): string
    {
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            default:
                throw new \Exception('No such operator');
        }
        return "$result";
    }

    $task = function (): array {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);
        $operators = ["+", "*", "-"];
        $randomOperator = $operators[rand(0, count($operators) - 1)];
        $taskText = "$num1 $randomOperator $num2";
        return [$taskText, calculations($num1, $num2, $randomOperator)];
    };

    game($question, $task);
}
