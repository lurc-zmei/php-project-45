<?php

namespace Php\Project\Games\Brain\Gcd;

use function Php\Project\Engine\checkAnswer;

# логика игры brain-gcd
function runGcd(): void
{
    define('MAX_ROUND', 3);

    $data = [];

    for ($i = 0; $i < MAX_ROUND; $i++) {
        # генерируем случайные 2 числа
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);

        $data[] = [
            'game' => 'Brain-gcd',
            'question' => "$num1 $num2",
            'result' => gcd($num1, $num2)
        ];
    }

    checkAnswer($data, "Find the greatest common divisor of given numbers.");
}


function gcd(int $num1, int $num2): string
{
    if ($num2 === 0) {
        $result = $num1;
    }

    do {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
        $result = $num1;
    } while ($num2 !== 0);

    return $result;
}
