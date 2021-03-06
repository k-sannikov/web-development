<?php

require_once 'functions.php';
header("Content-Type: text/plain");
$email = getGETStringParameter('email');
if (isset($email) && $email !== '')
{
    $data = file_get_contents(__DIR__ . '/../3.4/data/' . $email . '.txt');
    $parameters  = [];
    parse_str($data, $parameters);

    echo 'First Name: ' . (isset($parameters['first_name']) ? $parameters['first_name'] : null) . PHP_EOL
     . 'Last Name: ' . (isset($parameters['last_name']) ? $parameters['last_name'] : null) . PHP_EOL
     . 'Email: ' . $parameters['email'] . PHP_EOL
     . 'Age: ' . (isset($parameters['age']) ? $parameters['age'] : null);
}
