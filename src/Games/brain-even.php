<?php

namespace Php\Project\Games\Brain\Even;

use function Php\Project\Engine\checkAnswer;

# условие игры и инициация счетчика
function runEven(): void
{
    echo "Answer 'yes' if the number is even, otherwise answer 'no'.\n";
    global $correctAnswerCount;
    $correctAnswerCount = 0;
}

# логика игры brain-even
function even(): void
{
    global $answer, $result;

    # генерируем проверяемое число
    $number = rand(1, 99);

    # результат четное - 'yes'/нечетное - 'no'
    $result = match ($number % 2 == 0) {
        true => 'yes',
        false => 'no',
    };

    # запрос ответа у пользователя
    print_r("Question: $number \n");
    print_r("Your answer: ");
    $answer = trim(readline());

    # проверка ответа пользователя
    if (checkAnswer()) {
        even(); // если ответ верный, запускаем еще одну итерацию вопросов
    }
}
