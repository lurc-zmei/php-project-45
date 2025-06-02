<?php

namespace Php\Project\Engine;

# проверка ответов
function checkAnswer(): bool
{
    global $userName, $answer, $result, $correctAnswerCount;

    # сверяем ответ пользователя с нашим результатом
    switch ($answer == $result) {
        case true:
            echo "Correct!\n";
            $correctAnswerCount++; // увеличиваем счетчик на 1 верный ответ

            # если верных ответов меньше 3, то продолжаем игру, иначе выводим поздравление
            if ($correctAnswerCount < 3) {
                return true;
            } else {
                congratulate();
            }
            break;

        default:
            echo "'$answer' is wrong answer ;(. Correct answer was '$result'.\nLet's try again, $userName!\n";
    }
    return false; // завершаем игру
}


# поздравление
function congratulate(): void
{
    global $userName;

    print_r("Congratulations, $userName!\n");
}
