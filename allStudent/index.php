<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php
    error_reporting(1);
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
                    <?php foreach ($menuConfig as $name => $config) { ?>
                        <li>
                            <div class="sub-item">
                                <input type="checkbox" id="<?= sha1($name); ?>">
                                <label for="<?= sha1($name); ?>"><img src="img/Arrow.png" class="arrow"><?= $name; ?>
                                </label>
                                <ul>
                                    <?php foreach ($config['subMenu'] as $dzName => $dzLink) { ?>
                                        <li>
                                            <a class="<?= $name; ?>" href="<?= ($needFolder . $dzLink); ?>"><?= $dzName; ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>


        </div>
        <!--     <div>
        <?php foreach ($menuConfig as $studentName => $menuItem) { ?>
         
            <?= $studentName; ?>
                
                    <?php foreach ($menuItem['subMenu'] as $subMenuName => $subMenuLink) { ?>
                        <li>
                            <?php $link = $needFolder . $menuItem['baseLink'] . $subMenuLink; ?>
                            <a href="<?= $link; ?>"><?= $subMenuName; ?></a>
                        </li>
                    <?php } ?>
                
            
        <?php } ?>
    </ul>
    </div>
 -->
    </nav>
    <div class="content">
        <div class="taskContent">Task Content</div>
        <?php
        if($_POST['user']=='AlexPshegodsky') {
            include "../AlexPshegodsky/04phpBase/functions_forms_tasks/loops.php";
        }

        echo "<ul>";
        foreach ($urls as $url) {

            echo '<li><a class="task" data="task='.$url['task'].'&showform=1&user=AlexPshegodsky" href="">'.$url["name"].'</a></li>';
        }

        echo "</ul>";
        var_dump($_FILES);
        ?>

        <div id="responde"></div>
    </div>



</div>

<script>

    $(document).on('click', "a.task", function () {
        $.ajax({
            type: 'post',
            url: '',
            data: $(this).attr("data"), //'task=\'.$url[\'task\'].\'&showform',
            success: function (data) {
                $('#responde').html($(data).find('#form'));
            }
        });
        return false;
    });


    $(document).on('submit', "#form", function () {
        $.ajax({
            type: 'post',
            url: '',
            data: $('#form').serialize(),
            success: function (data) {
                console.log(data);
                console.log($(data).find('#responde'));
                $('#responde').html($(data).find('#result'));
            }
        });
        return false;
    });


    // $(document).on('submit', "#form", function () {
    //
    //     var data = new FormData();
    //     $.('#form').files(function (file) {
    //         data.append(file);
    //     });
    //     console.log(data);
    //     console.log(file);
    //     $.ajax({
    //         url: '',
    //         data: data,
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         method: 'POST',
    //         type: 'post',
    //         success: function (data) {
    //             alert(data);
    //         }
    //     });
    //     //return false; // for good measure
    // });



    $('a.AlexPshegodsky').click(function(homework) {
        homework.preventDefault();
        $.ajax({
            type: 'post',
            data: 'user=AlexPshegodsky',
            success: function (data) {
                $('.content').replaceWith($(data).find('.content'));
            }
        });
        return false; // for good measure
    });






</script>

</body>
</html>