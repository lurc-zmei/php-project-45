<?php

namespace Php\Project\Games\Brain\Prime;

use function Php\Project\Engine\checkAnswer;

# логика игры brain-prime
function runPrime(): void
{
    define('MAX_ROUND', 3);

    $data = [];

    for ($i = 0; $i < MAX_ROUND; $i++) {
        # генерируем число
        $number = random_int(min: 2, max: 99);


        $data[] = [
            'game' => 'Brain-prime',
            'question' => $number,
            'result' => prime($number)
        ];
    }

    checkAnswer($data, 'Answer "yes" if given number is prime. Otherwise answer "no".');
}


function prime(int $number): string
{
    switch (true) {
        case ($number < 2):
            $result = 'no';
            break;
        case ($number === 2):
            $result = 'no';
            break;
        case ($number % 2 === 0):
            $result = 'no';
            break;
        default:
            $result = 'yes';
            if ($number % 3 === 0) {
                $result = 'no';
            } else {
                for ($i = 3; $i < sqrt($number); $i++) {
                    if ($number % $i === 0) {
                        $result = 'no';
                    }
                }
            }
    }
    return $result;
}
