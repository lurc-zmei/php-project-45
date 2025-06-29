<?php

namespace Php\Project\Games\Brain\Even;

use function Php\Project\Engine\checkAnswer;

function runEven(): void
{
    define('MAX_ROUND', 3);

    $data = [];

    for ($i = 0; $i < MAX_ROUND; $i++) {
        # генерируем проверяемое число
        $number = rand(1, 99);

        # результат четное - 'yes'/нечетное - 'no'
        $result = match (isEven($number)) {
            true => 'yes',
            false => 'no',
        };

        $data[] = [
            'game' => 'Brain-even',
            'question' => $number,
            'result' => $result
        ];
    }

    checkAnswer($data, "Answer 'yes' if the number is even, otherwise answer 'no'");
}

function isEven($number): bool
{
    return $number % 2 == 0;
}
