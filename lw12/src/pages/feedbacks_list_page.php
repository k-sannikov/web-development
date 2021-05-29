<?php

function feedbackPage(): void
{
    renderTemplate('feedbacks.tpl.php');
}

function feedbacksListPage(): void
{
    $errors = [];
    $data = getPostParameter(['email']);

    
    header("Content-Type: text/plain");
    

    $errors = array_merge($errors, emailСheck($data['email'], 'email'));
    $errors = array_merge($errors, fillСheck($data['email'], 'email'));
    $errors = array_merge($errors, maxLengthСheck($data['email'], 'email', 150));

    if ($errors === [])
    {
        http_response_code(200);
        $data = getFeedback($data['email']);
        if ($data === []) {
            $errors['email'] = 'E-mail не найден';
        }
    }
    if ($errors !== [])
    {
        echo json_encode($errors);
        http_response_code(422); // 422 имеется логическая ошибка
    }
    else
    {
        echo json_encode($data);
    }
}