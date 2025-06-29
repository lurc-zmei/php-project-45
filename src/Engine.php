<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

function checkAnswer(array $data, string $description): void
{
    line('Welcome to the Brain Game!');
    $userName = prompt('May I have your name?');
    line("Hello, $userName!");

    line($description);

    foreach ($data as $item) {
        $question = $item['question'];
        $rightAnswer = $item['result'];

        # задаем вопрос и ждем ответ
        line("Question: $question");

        $userAnswer = prompt("Your answer");

        # проверка ответа
        if ($userAnswer !== $rightAnswer) {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$rightAnswer'.\nLet's try again, $userName!");
            return;
        } else {
            line("Correct!");
        }
    }
    congratulate($userName);
}

function congratulate(string $userName): void
{
    line("Congratulations, $userName!");
}
