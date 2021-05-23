<?php

function fillСheck(string $arg, string $fieldName): array
{
    return empty($arg) ? [$fieldName => 'Заполните поле'] : [];
}

function emailСheck(string $arg, string $fieldName): array
{
    return !filter_var($arg, FILTER_VALIDATE_EMAIL) ? [$fieldName => 'Введите корректный e-mail'] : [];
}

function maxLengthСheck(string $arg, string $fieldName, int $maxLength): array
{
    return mb_strlen($arg, 'UTF-8') > $maxLength ? [$fieldName => "Вводите не более {$maxLength} символов"] : [];
}

function alphaСheck(string $arg, string $fieldName): array
{
    return preg_match("/[^a-z A-Z а-я А-Я]+/u", $arg) ? [$fieldName => "Вводите только буквы"] : [];
}