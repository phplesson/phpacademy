<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
<?php
    error_reporting(E_ALL);
    //get $menuConfig
    $menuConfig = include('config/studentsLists.php');
    //make base url.
    $needFolder = '../';

?>
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
                <label for="homeWork"><img src="img/Arrow.png" class="arrow">Студенты</label>
                <ul>
                    <?php foreach($menuConfig as $name => $config) {?>
                        <li>
                            <div class="sub-item">
                                <input type="checkbox" id="<?=sha1($name);?>">
                                <label for="<?=sha1($name);?>"><img src="img/Arrow.png" class="arrow"><?=$name;?></label>
                                <ul>
                                    <?php foreach($config['subMenu'] as $dzName => $dzLink) {?>
                                        <li>
                                            <a href="<?=($needFolder . $dzLink);?>"><?=$dzName;?></a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </li>
                    <?php }?>
                </ul>
            </div>


        </div>
<!--     <div>
        <?php foreach($menuConfig as $studentName => $menuItem) {?>
         
            <?=$studentName;?>
                
                    <?php foreach($menuItem['subMenu'] as $subMenuName => $subMenuLink) {?>
                        <li>
                            <?php $link = $needFolder . $menuItem['baseLink'] . $subMenuLink;?>
                            <a href="<?=$link;?>"><?=$subMenuName;?></a>
                        </li>
                    <?php }?>
                
            
        <?php }?>
    </ul>
    </div>
 -->
    </nav>
    <div class="content">
        <div class="taskContent">Task Content</div>
    </div>
    
</div>

</body>
</html>