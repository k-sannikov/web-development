CREATE DATABASE `university`;

USE `university`;

CREATE TABLE `faculty`
(
	`faculty_id` INT AUTO_INCREMENT NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`faculty_id`)
)
	DEFAULT CHARACTER SET `utf8mb4`
    COLLATE `utf8mb4_unicode_ci`;

CREATE TABLE `group`
(
	`group_id` INT AUTO_INCREMENT NOT NULL,
    `faculty_id` INT NOT NULL,
    `acronym` VARCHAR(255) NOT NULL,
    `number` INT NOT NULL,
    `course` INT NOT NULL,
    PRIMARY KEY (`group_id`),
    FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON UPDATE CASCADE ON DELETE CASCADE
)
	DEFAULT CHARACTER SET `utf8mb4`
    COLLATE `utf8mb4_unicode_ci`;

CREATE TABLE `student`
(
	`student_id` INT AUTO_INCREMENT NOT NULL,
    `group_id` INT NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `first_name` VARCHAR(255) NOT NULL,
    `patronymic` VARCHAR(255),
    `age` INT NOT NULL,
    PRIMARY KEY (`student_id`),
    FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`) ON UPDATE CASCADE ON DELETE CASCADE
)
	DEFAULT CHARACTER SET `utf8mb4`
    COLLATE `utf8mb4_unicode_ci`;
    
INSERT INTO `faculty`
    (`name`)
VALUES
    ('Факультет информатики и вычислительной техники'),
    ('Радиотехнический факультет'),
    ('Факультет управления и права');


INSERT INTO `group`
    (`faculty_id`, `acronym`, `number`, `course`)
VALUES
    (1, 'ПС', 3, 1),
    (1, 'ИВТ', 2, 2),
    (1, 'ИБ', 1, 1),
    (2, 'ЭиТ', 2, 4),
    (2, 'БСиТ', 1, 2),
    (2, 'УвТС', 3, 1),
    (3, 'УК', 1, 3),
    (3, 'УП', 2, 2),
    (3, 'ГиМУ', 3, 1);

INSERT INTO `student`
    (`group_id`, `last_name`, `first_name`, `patronymic`, `age`)
VALUES
    (1, 'Шишкин', 'Владимир', 'Фёдорович', 17),
    (1, 'Сергеева', 'София', 'Артёмовна', 18),
    (1, 'Павлова', 'Алина', 'Александровна', 19),
    (1, 'Казаков', 'Савелий', 'Ярославович', 19),
    (1, 'Савельева', 'Марта', 'Львовна', 18),
    (2, 'Титова', 'Полина', 'Мироновна', 19),
    (2, 'Суворова', 'Алёна', 'Максимовна', 18),
    (2, 'Попов', 'Иван', 'Артёмович', 17),
    (2, 'Глушков', 'Даниил', 'Максимович', 19),
    (2, 'Федоров', 'Дамир', 'Никитич', 18),
    (3, 'Попова', 'Арина', 'Григорьевна', 19),
    (3, 'Филатов', 'Демид', 'Алексеевич', 18),
    (3, 'Суркова', 'Амалия', 'Давидовна', 17),
    (3, 'Иванов', 'Даниил', 'Артёмович', 17),
    (3, 'Коновалова', 'Ариана', 'Владимировна', 19),
    (4, 'Щеглова', 'Ева', 'Тихоновна', 18),
    (4, 'Некрасов', 'Даниил', 'Лукич', 17),
    (4, 'Васильев', 'Никита', 'Владимирович', 19),
    (4, 'Гусев', 'Владислав', 'Саввич', 18),
    (4, 'Романов', 'Григорий', 'Михайлович', 20),
    (5, 'Поляков', 'Иван', 'Егорович', 19),
    (5, 'Соболева', 'Анна', 'Захаровна', 19),
    (5, 'Смирнов', 'Степан', 'Константинович', 20),
    (5, 'Судакова', 'Виктория', 'Кирилловна', 18),
    (5, 'Осипова', 'Любовь', 'Романовна', 17),
    (6, 'Белова', 'Юлия', 'Руслановна', 17),
    (6, 'Касаткин', 'Олег', 'Богданович', 18),
    (6, 'Морозов', 'Юлия', 'Львовна', 19),
    (6, 'Морозова', 'Виктория', 'Кирилловна', 19),
    (6, 'Скворцова', 'Василиса', 'Михайловна', 17),
    (7, 'Шишкин', 'Михаил', 'Максимович', 20),
    (7, 'Кулагина', 'Стефания', 'Дмитриевна', 21),
    (7, 'Чистякова', 'Анна', 'Павловна', 18),
    (7, 'Маслов', 'Матвей', 'Тимофеевич', 17),
    (7, 'Носков', 'Богдан', 'Дмитриевич', 19),
    (8, 'Афанасьева', 'Евгения', 'Константиновна', 20),
    (8, 'Барсукова', 'Варвара', 'Богдановна', 21),
    (8, 'Сахарова', 'Полина', 'Богдановна', 18),
    (8, 'Волкова', 'Таисия', 'Марковна', 17),
    (8, 'Игнатов', 'Егор', 'Максимович', 19),
    (9, 'Лаврентьев', 'Кирилл', 'Георгиевич', 17),
    (9, 'Ильина', 'Ева', 'Леонидовна', 17),
    (9, 'Козлов', 'Савва', 'Тимофеевич', 19),
    (9, 'Никулина', 'Анна', 'Матвеевна', 18),
    (9, 'Озерова', 'Амелия', 'Мирославовна', 20);

/* Получение всех студентов в возрасте 19 лет */ 
SELECT 
	CONCAT(`last_name`, ' ', `first_name`, ' ', `patronymic`) AS 'full_name',
    `age`
FROM
	`student`
WHERE
	`age` = 19;
    
/* Получение всех студентов из конкретной группы */ 
SELECT
	CONCAT(`last_name`, ' ', `first_name`, ' ', `patronymic`) AS 'full_name',
    `age`,
    CONCAT(`acronym`, '-', `course`, `number`) AS 'group'
FROM
	`student`
INNER JOIN
	`group` ON `student`.`group_id` = `group`.`group_id`
WHERE
	`student`.`group_id` = 1;
    
/* Получение всех студентов конкретного факультета */ 
SELECT
	CONCAT(`last_name`, ' ', `first_name`, ' ', `patronymic`) AS 'full_name',
    `age`,
    `name` AS 'faculty_name',
    CONCAT(`acronym`, '-', `course`, `number`) AS 'group'
FROM
	`student`
INNER JOIN
	`group` ON `student`.`group_id` = `group`.`group_id`
INNER JOIN
	`faculty` ON `faculty`.`faculty_id` = `group`.`faculty_id`
WHERE
	`faculty`.`faculty_id` = 1;
    
/* Получение факультета и группы конкретного студента */ 
SELECT
	CONCAT(`last_name`, ' ', `first_name`, ' ', `patronymic`) AS 'full_name',
    `age`,
    `name` AS 'faculty_name',
    CONCAT(`acronym`, '-', `course`, `number`) AS 'group'
FROM
	`student`
INNER JOIN
	`group` ON `student`.`group_id` = `group`.`group_id`
INNER JOIN
	`faculty` ON `faculty`.`faculty_id` = `group`.`faculty_id`
WHERE
	`student`.`student_id` = 1;