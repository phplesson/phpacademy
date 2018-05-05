<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.05.18
 * Time: 8:14
 */

$targetDir = 'uploads';

$list = scandir($targetDir);
?>
<ul>list of files
    <?php foreach($list as $key => $value) {
        if (is_dir($value)) {
            continue;
        }?>
        <li><a href="03getfile.php?fname=<?=$value;?>"><?=$value;?></a></li>
    <?php }?>
</ul>
