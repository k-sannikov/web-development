<?php

header("Content-Type: text/plain");
function getGETParameter(string $name): ?string
{
    return isset($_GET[$name]) ? (string) $_GET[$name] : null;
}
$identifier = getGETParameter('identifier');
if (isset($identifier) && $identifier !== '')
{
    $firstChar = !preg_match('/^[a-z]/i', $identifier) ? 'Первый символ идентификатора не является буквой.' : null;
    $alphaNum = !preg_match('/^[a-z,0-9]+$/i', $identifier) ? 'Идентификатор содержит не только цифры и буквы.' : null;
    echo (!isset($firstChar) && !isset($alphaNum)) ? 'Yes' : null;
    echo isset($firstChar) ? $firstChar . PHP_EOL : null;
    echo $alphaNum;

}
