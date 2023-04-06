<?php

declare(strict_types=1);

function dd(...$vars)
{
    echo "<pre style='background-color: #121212; color: white; padding: 10px'>";
    foreach ($vars as $var) {
        var_dump($var);
        echo "<br/>";
    }
    echo "</pre>";
    die;
}

function formatDollarAmount(float $amount): string
{
    $isNegative = $amount < 0;

    return ($isNegative ? '-' : '') . '$' . number_format(abs($amount), 2);
}

function formatDate(string $date): string
{
    return date('M j, Y', strtotime($date));
}
