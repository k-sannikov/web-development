CREATE DATABASE `landing_page`;

USE `landing_page`;

CREATE TABLE `feedback`
(
    `feedback_id` int(11)      NOT NULL AUTO_INCREMENT,
    `name`        varchar(255) NOT NULL,
    `email`       varchar(255) NOT NULL UNIQUE,
    `country`     varchar(255) NOT NULL,
    `gender`      varchar(7)   NOT NULL,
    `message`     text         NOT NULL,
    PRIMARY KEY (`feedback_id`)
)
    DEFAULT CHARSET=utf8mb4
    COLLATE utf8mb4_unicode_ci
    ENGINE InnoDB;