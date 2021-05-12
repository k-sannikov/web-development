<?php

function getPostParameter(array $keys): array
{
    $data = [];
    foreach ($keys as $key)
    {
        $data[$key] = $_POST[$key];
    }
    return $data;
}

function getRequestMethod(): string
{
    return $_SERVER['REQUEST_METHOD'];
}