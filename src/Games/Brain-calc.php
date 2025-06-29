<?php

namespace Php\Project\Games\Brain\Calc;

use function Php\Project\Engine\checkAnswer;

# логика игры brain-calc
function runCalc(): void
{
    define('MAX_ROUND', 3);

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
            'game' => 'Brain-calc',
            'question' => "$num1 $operator $num2",
            'result' => calc($num1, $num2, $operator)
        ];
    }
    checkAnswer($data, "What is the result of the expression?");
}

function calc($num1, $num2, $operator): int
{
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
    return $result;
}
