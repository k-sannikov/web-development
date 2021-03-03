<?php

/**
 * Получение GET параметра по его имени
 *
 * @param string $name имя GET параметра
 * @return string|null значение GET параметра
 */
function getGETStringParameter(string $name): ?string
{
    return isset($_GET[$name]) && is_string($_GET[$name]) ? (string) $_GET[$name] : null;
}

/**
 * Подсчет кол-ва повторяющихся символов в строке
 *
 * @param string $string строка, в которой осуществляется поиск
 * @return integer кол-во вхождений повторяющихся символов в строке
 */
function countRepeatedChar(string $string): int
{
    $quantity = 0;
    foreach (count_chars($string , 1 ) as $number)
    {
        $number > 1 ? $quantity += $number : null;
    }
    return $quantity;
}

/**
 * Подсчет кол-ва цифр в строке
 *
 * @param string $string строка, в которой осуществляется поиск
 * @return integer кол-во вхождений цифр в строке
 */
function countDigits(string $string): int
{
    $digits = 0;
    foreach (str_split($string , 1 ) as $char)
    {
        ctype_digit($char) ? $digits++ : null;
    }
    return $digits;
}

/**
 * Подсчет кол-ва символов верхнего регистра в строке
 *
 * @param string $string строка, в которой осуществляется поиск
 * @return integer кол-во вхождений символов верхнего регистра в строке
 */
function countUpperChar(string $string): int
{
    $upperChar = 0;
    foreach (str_split($string , 1 ) as $char)
    {
        ctype_upper($char) ? $upperChar++ : null;
    }
    return $upperChar;
}

/**
 * Подсчет кол-ва символов нижнего регистра в строке
 *
 * @param string $string строка, в которой осуществляется поиск
 * @return integer кол-во вхождений символов нижнего регистра в строке
 */
function countLowerChar(string $string): int
{
    $lowerChar = 0;
    foreach (str_split($string , 1 ) as $char)
    {
        ctype_lower($char) ? $lowerChar++ : null;
    }
    return $lowerChar;
}
