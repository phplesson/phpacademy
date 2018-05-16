<?php
error_reporting(E_ALL);
$menuConfig = include('config/studentsLists.php');
$needFolder = '';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <nav class="menu">
        <input type="checkbox" id="menu">
        <label for="menu" id="nav-icon">
            <span>&#9776;Menu</span>
        </label>

        <div class="multi-level">
            <div class="item">
                <input type="checkbox" id="homeWork">
                <label for="homeWork"><img src="img/Arrow.png" class="arrow">04DZ (26.04.2018)</label>
                <ul>
                    <?php
                        foreach ($menuConfig as $key=>$student) {
                        $studentId = 1 + $key;
                        echo "<li>
                                <div class='sub-item'>
                                    <input type='checkbox' id='student$studentId'>
                                    <label for='student$studentId'><img src='img/Arrow.png' class='arrow'>Студент $studentId</label>
                                    <ul>
                                    <li><a href='#'>Задача 1</a></li>
                                    <li><a href='#'>Задача 2</a></li>
                                    <li><a href='#'>Задача 3</a></li>
                                    </ul>
                                </div>
                              </li>";} ?>
                    <!--                    <li>-->
                    <!--                        <div class="sub-item">-->
                    <!--                            <input type="checkbox" id="student1">-->
                    <!--                            -->
                    <!--                            <label for="student1"><img src="img/Arrow.png" class="arrow">Студент 1</label>-->
                    <!--                            <ul>-->
                    <!--                                <li><a href="#">Задача 1</a></li>-->
                    <!--                                <li><a href="#">Задача 2</a></li>-->
                    <!--                                <li><a href="#">Задача 3</a></li>-->
                    <!--                            </ul>-->
                    <!--                        </div>-->
                    <!--                    </li>-->
                    <!--                    <li>-->
                    <!--                        <div class="sub-item">-->
                    <!--                            <input type="checkbox" id="student2">-->
                    <!--                            <label for="student2"><img src="img/Arrow.png" class="arrow">Студент 2</label>-->
                    <!--                            <ul>-->
                    <!--                                <li><a href="#">Задача 1</a></li>-->
                    <!--                                <li><a href="#">Задача 2</a></li>-->
                    <!--                                <li><a href="#">Задача 3</a></li>-->
                    <!--                            </ul>-->
                    <!--                        </div>-->
                    <!--                    </li>-->
                    <!--                    <li>-->
                    <!--                        <div class="sub-item">-->
                    <!--                            <input type="checkbox" id="student3">-->
                    <!--                            <label for="student3"><img src="img/Arrow.png" class="arrow">Студент 3</label>-->
                    <!--                            <ul>-->
                    <!--                                <li><a href="#">Задача 1</a></li>-->
                    <!--                                <li><a href="#">Задача 2</a></li>-->
                    <!--                                <li><a href="#">Задача 3</a></li>-->
                    <!--                            </ul>-->
                    <!--                        </div>-->
                    <!--                    </li>-->
                </ul>
            </div>


        </div>


    </nav>
    <div class="content">
        <div class="taskContent">Task Content</div>
    </div>

</div>

</body>
</html>