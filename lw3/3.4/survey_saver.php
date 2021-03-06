<?php

require_once 'functions.php';
header("Content-Type: text/plain");
$firstName = getGETStringParameter('first_name');
$lastName = getGETStringParameter('last_name');
$email = getGETStringParameter('email');
$age = getGETStringParameter('age');

if (isset($email) && $email !== '')
{
    $file = fopen(__DIR__ . '/data/' . $email . '.txt', 'w');

    $text = (isset($firstName) ? 'first_name=' . $firstName : null)
     . (isset($lastName) ? '&last_name=' . $lastName : null)
     . '&email=' . $email
     . (isset($age) ? '&age=' . $age : null);

    fwrite($file, $text);
    fclose($file);
    echo 'Информация записана';
}

