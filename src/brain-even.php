<?php

namespace Php\Project\Brain\Even;

use function Php\Project\Cli\greetings;

# Запуск приветствия игры brain-even
function runEven()
{
    greetings();
    echo "Answer 'yes' if the number is even, otherwise answer 'no'.\n";
}

# логика игры brain-even
function even()
{
    global $userName;
    $number = rand(1, 99);
    $result = match ($number % 2 == 0) {
        true => 'yes',
        false => 'no',
    };
    print_r("Question: $number \n");
    print_r("Your answer: ");
    $answer = trim(readline());
    if ($answer == $result) {
        echo "Correct!\n";
        return true;
    } else {
        echo "'{$answer}' is wrong answer ;(. Correct answer was '{$result}'. Let's try again, $userName!";
        return false;
    }
}

# проверка ответов игры brain-even
function checkAnswer()
{
    global $userName;
    $correctAnswer = 0;
    do {
        if (even() === true) {
            $correctAnswer++;
        } else {
            return false;
        }
    } while ($correctAnswer < 3);

    if ($correctAnswer = 3) {
        print_r("Congratulations, $userName!");
    }
}
