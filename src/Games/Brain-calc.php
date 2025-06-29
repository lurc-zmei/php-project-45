<?php

namespace Php\Project\Games\Brain\Calc;

use function Php\Project\Engine\checkAnswer;

# условие игры и инициация счетчика
function runCalc(): void
{
    echo "What is the result of the expression?.\n";
    global $correctAnswerCount;
    $correctAnswerCount = 0;
}

# логика игры brain-calc
function calc(): void
{
    global $answer, $result;

    # генерируем случайные 2 числа и оператор
    $num1 = rand(1, 25);
    $num2 = rand(1, 25);
    $operatorArr = [0 => '+', 1 => '-', 2 => '*'];
    $operator = $operatorArr[random_int(0, 2)];

    # вычисляем результат выражения
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

    # запрос ответа у пользователя
    print_r("Question: $num1 $operator $num2\n");
    print_r("Your answer: ");
    $answer = trim(readline());

    # проверка ответа
    if (checkAnswer()) {
        calc(); // если ответ верный, запускаем еще одну итерацию вопросов
    }
}
