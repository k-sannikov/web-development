<?php

function database(): ?PDO
{
    static $connection = null;
    if ($connection === null)
    {
        try {
            $connection = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        } catch (PDOException $exception ) {
            $connection = null;
            exit($exception->getMessage());
        }
    }

    return $connection;
}

function saveFeedback(array $feedback): bool
{
    foreach ($feedback as $key => $value) {
        $feedback[$key] = database()->quote($value);
    }

    $countRows = database()->query(
        "SELECT
            count(*) as 'count'
        FROM
            `feedback`
        WHERE
            `email` = {$feedback['email']};")->fetch();

    if ($countRows['count'] === "0") {
        $result = database()->query(
            "INSERT INTO `feedback` SET
                `name` = {$feedback['name']},
                `email` = {$feedback['email']},
                `country` = {$feedback['country']},
                `gender` = {$feedback['gender']},
                `message` = {$feedback['message']}"
            );
    } else {
        $result = database()->query(
            "UPDATE `feedback` SET
                `name` = {$feedback['name']},
                `email` = {$feedback['email']},
                `country` = {$feedback['country']},
                `gender` = {$feedback['gender']},
                `message` = {$feedback['message']}
            WHERE `email` = {$feedback['email']}");
    }
    
    return $result !== false;
}

function getFeedback(string $email): array
{
    $email = database()->quote($email);
    $result = database()->query(
        "SELECT
            `name`,
            `email`,
            `country`,
            `gender`,
            `message`
        FROM
            `feedback`
        WHERE
            `email` = {$email};")->fetch(PDO::FETCH_ASSOC);

    return $result === false ? [] : $result;
}