<?php

function saveFeedbackPage(): void
{
    $data = getPostParameter(['name', 'email', 'country', 'gender', 'message']);

    $errors = [];
    $errors = array_merge($errors, fillСheck($data['name'], 'name'));
    $errors = array_merge($errors, emailСheck($data['email'], 'email'));
    $errors = array_merge($errors, fillСheck($data['email'], 'email'));
    $errors = array_merge($errors, fillСheck($data['message'], 'message'));
    $errors = array_merge($errors, maxLengthСheck($data['name'], 'name', 150));
    $errors = array_merge($errors, maxLengthСheck($data['email'], 'email', 150));
    $errors = array_merge($errors, maxLengthСheck($data['message'], 'message', 1000));
    $errors = array_merge($errors, alphaСheck($data['name'], 'name'));

    if(empty($errors))
    {
        $file = fopen(__DIR__ . '/../../data/' . strtolower($data['email']) . '.txt', 'w');
        $text = 'name=' . $data['name']
         . '&email=' . $data['email']
         . (isset($data['country']) ? '&country=' . $data['country'] : '')
         . (isset($data['gender']) ? '&gender=' . $data['gender'] : '')
         . '&message=' . $data['message'];
        if (fwrite($file, $text)) {
            http_response_code(201); // 201 создано
            fclose($file);
        }
        else
        {
            http_response_code(501); // 501 не реализовано
        }
    }
    else
    {
        http_response_code(422); // 422 имеется логическая ошибка
    }

    echo json_encode($errors);
}
