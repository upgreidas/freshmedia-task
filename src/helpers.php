<?php

function redirect(string $location)
{
    header('Location: ' . $location);
    exit();
}

function currency(int $value, string $currency = 'EUR', string $locale = 'lt_LT')
{
    $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);

    return $formatter->formatCurrency($value / 100, $currency);
}
