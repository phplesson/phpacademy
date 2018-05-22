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
                                            <a class="dz_link" href="<?= ($needFolder . $dzLink); ?>"><?= $dzName; ?></a>
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
        <div class="task-info">
        
        </div>
        <div class="form">
        
        </div>
        <div class="response">
        
        </div>

    </div>


</div>


<script>
    var a_href;
    $('.dz_link').click(function (homework) {
        homework.preventDefault();
        a_href = $(this).attr('href');
        $.ajax({
            type: 'post',
            url: $(this).attr('href'),
            success: function (data) {
                $('.task-info').html(data);
            }
        });
        return false;
    });

    $(document).on('click', ".task_link", function (task) {
        task.preventDefault();
        $.ajax({
            type: 'post',
            data: {'action': $(this).attr('name')},
            url: a_href,
            success: function (data) {
                var ajaxResponse = $(data).filter('.info');
                var ajaxResponse2 = $(data).filter('.home');
                console.log(ajaxResponse2);
                console.log(ajaxResponse);
                // $('.task-info').html($(data).find('.home'));
                $('.task-info').html(ajaxResponse2,ajaxResponse);
                $('.form').html($(data).filter('#form'));
            }
        });
        return false;
    });

    $(document).on('submit', "#form", function (formSend) {
        formSend.preventDefault();
        var formData = new FormData(document.getElementById("form"));
        formData.append('action', $(this).attr('name'));

        $.ajax({
            url: a_href,
            type: 'POST',
            success: function (frespond) {
                console.log(frespond);
                $('.response').append($(frespond).filter('.respond'));
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        });

    });
</script>

</body>
</html>