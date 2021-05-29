<?php

function saveFeedbackPage(): void
{
    $data = getPostParameter(['name', 'email', 'country', 'gender', 'message']);

    $errors = [];
    $errors = array_merge($errors, fillСheck($data['name'], 'name'));
    $errors = array_merge($errors, emailСheck($data['email'], 'email'));
    $errors = array_merge($errors, fillСheck($data['email'], 'email'));
    $errors = array_merge($errors, fillСheck($data['message'], 'message'));
    $errors = array_merge($errors, maxLengthСheck($data['name'], 'name', 255));
    $errors = array_merge($errors, maxLengthСheck($data['email'], 'email', 255));
    $errors = array_merge($errors, maxLengthСheck($data['message'], 'message', 1000));
    $errors = array_merge($errors, alphaСheck($data['name'], 'name'));
    
    if(empty($errors))
    {
        if (saveFeedback($data)) {
            http_response_code(201); // 201 создано
        }
        else
        {
            http_response_code(501); // 501 не реализовано
        }
    }
    else
    {
        echo json_encode($errors);
        http_response_code(422); // 422 имеется логическая ошибка
    }
}
