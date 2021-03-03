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