<?php

namespace Php\Project\Games\Brain\Gcd;

use function Php\Project\Engine\checkAnswer;

# условие игры и инициация счетчика
function runGcd(): void
{
    echo "Find the greatest common divisor of given numbers.\n";
    global $correctAnswerCount;
    $correctAnswerCount = 0;
}

# логика игры brain-calc
function gcd(): void
{
    global $answer, $result;

    # генерируем случайные 2 числа
    $num1 = rand(1, 99);
    $num2 = rand(1, 99);

    # запрос ответа у пользователя
    print_r("Question: $num1 $num2\n");
    print_r("Your answer: ");
    $answer = trim(readline());

    # вычисляем результат выражения
    if ($num2 == 0) {
        $result = $num1;
    }

    do {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
        $result = $num1;
    } while ($num2 !== 0);


    # проверка ответа
    if (checkAnswer()) {
        gcd(); // если ответ верный, запускаем еще одну итерацию вопросов
    }
}
