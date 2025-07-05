<?php

namespace Php\Project\Games\BrainCalc;

use function Php\Project\Engine\runGameEngine;

# логика игры brain-calc
function runCalc(): void
{
    $data = [];

    for ($i = 0; $i < MAX_ROUND; $i++) {
        # генерируем случайные 2 числа и оператор
        $num1 = rand(1, 25);
        $num2 = rand(1, 25);
        $operatorArr = [
            0 => '+',
            1 => '-',
            2 => '*'
        ];
        $operator = $operatorArr[random_int(0, 2)];

        $data[] = [
            'question' => "$num1 $operator $num2",
            'result' => calc($num1, $num2, $operator)
        ];
    }
    runGameEngine($data, "What is the result of the expression?");
}

function calc(int $num1, int $num2, string $operator): string
{
    $result = 0;
    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
    }
    return (string)$result;
}
