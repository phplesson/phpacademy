<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dz</title>
</head>
<body>
    <ul>DZ04
        <?php
        error_reporting(E_ALL);
        //get $menuConfig
        $menuConfig = include('./menu-config.php');
        //make base url.

        //folders of all students are two levels up
        $needFolder = '../../';

        ?>


        <?php
        // I want to make a cycle with echo html
        // foreach($menuConfig as $menuItem) {
        //        echo "<li> something .... </li>";
        // }


        ?>


        <?php foreach($menuConfig as $studentName => $menuItem) {?>
<!--            This text is out of --><?php //?><!-- tags, so it is the same as echo "some ..."-->
            <li><?=$studentName;?><?php //it is short form of : <?php echo $value;?\> ?>
                <ul>
                    <?php foreach($menuItem['subMenu'] as $subMenuName => $subMenuLink) {?>
                        <li>
                            <?php $link = $needFolder . $menuItem['baseLink'] . $subMenuLink;?>
                            <a href="<?=$link;?>"><?=$subMenuName;?></a>
                        </li>
                    <?php }?>
                </ul>
            </li>
        <?php }?>
    </ul>
</body>
</html>
