<?php

header("Content-Type: text/plain");
function getGETParameter(string $name): ?string
{
    return isset($_GET[$name]) ? (string) $_GET[$name] : null;
}
$text = getGETParameter('text');
if (isset($text) && $text !== '')
{
    // удаление пробелов в начале и в конце
    $text = trim($text);
    // замена множественных пробелов на один
    $text = preg_replace('/\s+/', ' ', $text);
    echo $text;
}
