<?php

require_once 'functions.php';

header("Content-Type: text/plain");
$password = getGETStringParameter('password');

if (isset($password) && $password !== '')
{
     #Получение параметров пароля

    $length = strlen($password); //длинна пароля
    $repeatedChar = countRepeatedChar($password); //кол-во повторяющихся символов
    $digits = countDigits($password); //кол-во цифр в пароле
    $upperChar = countUpperChar($password); //кол-во символов верхнего регистра
    $lowerChar = countLowerChar($password); //кол-во символов нижнего регистра

    # Расчет надежности пароля

    $strength = 0; //надежность пароля
    $strength += 4 * $length;
    $strength += 4 * $digits;
    // если кол-во символов в верхнем регистре больше 0, то "(length - upperChar) * 2"
    $strength += ($length - $upperChar) * 2;
    // если кол-во символов в нижнем регистре больше 0, то "(length - lowerChar) * 2"
    $strength += ($length - $lowerChar) * 2;
    // если пароль состоит только из букв, то "strength - length"
    ctype_alpha($password) ? $strength -= $length : null;
    // если пароль состоит только из цифр, то "strength - length"
    ctype_digit($password) ? $strength -= $length : null;
    $strength -= $repeatedChar;

    echo $strength;
}
else
{
    echo 'Параметр пуст';
}