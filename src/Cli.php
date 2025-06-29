<?php

namespace Php\Project\Cli;

use function cli\line;
use function cli\prompt;

function greetings(): void
{
    line('Welcome to the Brain Games!');
    $userName = prompt('May I have your name?');
    line("Hello, $userName!");
}
