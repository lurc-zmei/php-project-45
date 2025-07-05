<?php

namespace Php\Project\Games\BrainEven;

use function Php\Project\Engine\runGameEngine;

function runEven(): void
{
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
            'question' => $number,
            'result' => $result
        ];
    }

    runGameEngine($data, 'Answer "yes" if the number is even, otherwise answer "no".');
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
