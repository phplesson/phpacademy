<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 7/11/18
 * Time: 10:45 PM
 */
require_once './DBConnection.php';

$dbInstance = DBConnection::getInstance();
$dbInstance->query("CREATE TABLE `Users` (id INT AUTO_INCREMENT, name VARCHAR(30), email VARCHAR(30), passw VARCHAR(30), age TINYINT, reg_date DATETIME, PRIMARY KEY (id))");
$dbInstance->query("CREATE TABLE `Letters` (id_letter INT AUTO_INCREMENT, id_from INT, id_to INT, title VARCHAR(200), `text` TEXT, send_date DATETIME, `read` TINYINT(1) DEFAULT 0, PRIMARY KEY (id_letter))");
$dbInstance->query("INSERT INTO `Users` (name, email, passw, age, reg_date)
VALUES  ('Ivan Petrov', 'i.petrov@gmail.com', NULL, 20, NOW()), 
        ('Sergey Petrov', 's.petrov@gmail.com', NULL, 21, NOW()),
        ('Stepan Ivanov', 's.ivanov@gmail.com', NULL, 22, NOW()),
        ('Petr Stepnov', 'p.stepnov@gmail.com', NULL, 23, NOW()),
        ('Maxim Severnov', 'm.severnov@gmail.com', NULL, 24, NOW()),;");
