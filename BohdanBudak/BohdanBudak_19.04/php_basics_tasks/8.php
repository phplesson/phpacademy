<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 21.04.2018
 * Time: 11:19
 */
$name = "Bohdan";
$age = "19";

if ($age >= 18 && $age <= 59) {
    echo "Вам еще работать и работать";
} elseif ($age < 59) {
    echo "Вам пора на пенсию";
} elseif ($age >= 0 && $age <= 17) {
    echo "Вам ещё рано работать";
} else {
    echo "Неизвестный возраст";
}