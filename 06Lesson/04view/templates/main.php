<ul>
    <?php foreach($viewData['content']['actionList'] as $name => $link) {?>
        <li><a href="index.php?<?=$link;?>"><?=$name;?></a></li>
    <?php }?>
</ul>