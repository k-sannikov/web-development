<?php

function feedbackPage(): void
{
    renderTemplate('feedbacks.tpl.php');
}

function feedbacksListPage(): void
{
    $errors = [];
    $data = getPostParameter(['email']);
    $pathFile = __DIR__ . '/../../data/' . $data['email'] . '.txt';
    if (file_exists($pathFile))
    {
        $rawData = file_get_contents($pathFile);
        parse_str($rawData, $data);
    }
    else
    {
        $errors['email_error_msg'] = 'E-mail не найден';
    }
    $errors = array_merge($errors, emailСheck($data['email'], 'email'));
    $errors = array_merge($errors, fillСheck($data['email'], 'email'));
    $errors = array_merge($errors, maxLengthСheck($data['email'], 'email', 150));
    renderTemplate('feedbacks.tpl.php', array_merge($errors, $data));
}