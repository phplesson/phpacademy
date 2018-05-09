<hr>
<ul>
    <?php foreach($viewData['actionList'] as $action => $name) {?>
        <li><a href="index.php?action=<?=$action;?>"><?=$name;?></a></li>
    <?php }?>
</ul>
<hr>