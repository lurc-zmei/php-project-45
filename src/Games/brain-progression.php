<?php

namespace Php\Project\Games\Brain\Progression;

use function Php\Project\Engine\checkAnswer;

# условие игры и инициация счетчика
function runProgression(): void
{
    echo "What number is missing in the progression?\n";
    global $correctAnswerCount;
    $correctAnswerCount = 0;
}

function arithmetic()
{
    global $result;

    # генерируем случайные числа
    $start = rand(1, 70); // начальное число
    $step = random_int(2, 9); // арифметическое увеличение
    //$map = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    for ($i = 1; $i <= rand(6, 10); $i++) { // количество выводимых чисел в массиве
        $map[] = $i;
    }
    $randElement = rand(2, count($map)); // под этим номером будет число для вопроса

    foreach ($map as $index) {
        $currentElement = $start + $index *  $step;

        if ($index == $randElement) {
            echo '.. ';
            $result = $currentElement;
            continue;
        }
        echo "$currentElement ";
    }
}
# логика игры brain-progression
function progression(): void
{
    global $answer;

    # запрос ответа у пользователя
    echo 'Question: ', arithmetic(), "\n";
    echo "Your answer: ";
    $answer = trim(readline());


    # проверка ответа
    if (checkAnswer()) {
        progression(); // если ответ верный, запускаем еще одну итерацию вопросов
    }
}
