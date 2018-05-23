<p>Введите ваш текст. <?=$viewData['description'];?></p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=13.php">
    <textarea name="text" rows="5" cols="35" placeholder="text"></textarea><br />
    <button type="reset" value="Reset">Reset</button>
    <button type="submit" name="submit"  value="Submit">Submit</button>
</form>
<p>Result: <?php if (!empty($viewData['result'])) {foreach ($viewData['result'] as $key => $value) {
        echo "<br/>".$key." - ".$value;}}?></p>