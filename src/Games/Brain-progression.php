<?php

namespace Php\Project\Games\Brain\Progression;

use function Php\Project\Engine\checkAnswer;

# логика игры brain-gcd
function runProgression(): void
{
    define('MAX_ROUND', 3);

    $data = [];

    for ($i = 0; $i < MAX_ROUND; $i++) {
        # генерируем случайные числа
        //$start = rand(1, 30); // начальное число
        $step = random_int(min: 2, max: 9); // арифметическое увеличение

        $map = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        /*
        // рандомное количество выводимых чисел в массиве по примеру
        for ($j = 1; $j <= rand(6, 10); $j++) {
            $map[] = $j;
        }
        */

        // под этим номером будет число для вопроса
        $randElement = rand(2, count($map));
        $result = $randElement  *  $step;

        $data[] = [
            'game' => 'Brain-gcd',
            'question' => progression($map, $randElement, $step),
            'result' => $result,
        ];
    }

    checkAnswer($data, "What number is missing in the progression?");
}

function progression(array $map, int $randElement, int $step): string
{
    $question = '';

    foreach ($map as $index) {
        $currentElement = $index *  $step;

        if ($index === $randElement) {
            $question = "$question ..";
        } else {
            $question = "$question $currentElement";
        }
    }
    return trim($question);
}
