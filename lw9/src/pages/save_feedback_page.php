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

    if(empty($errors))
    {
        $file = fopen(__DIR__ . '/../../data/' . strtolower($data['email']) . '.txt', 'w');
        $text = 'name=' . $data['name']
         . '&email=' . $data['email']
         . (isset($data['country']) ? '&country=' . $data['country'] : '')
         . (isset($data['gender']) ? '&gender=' . $data['gender'] : '')
         . '&message=' . $data['message'];
        fwrite($file, $text) ? $args['save_status'] = 'Данные сохранены' : $args['save_status'] = 'Данные не сохранены';
        fclose($file);
    }
    else
    {
        $args = array_merge($errors, $data);
    }

    renderTemplate('main.tpl.php', $args);
}
