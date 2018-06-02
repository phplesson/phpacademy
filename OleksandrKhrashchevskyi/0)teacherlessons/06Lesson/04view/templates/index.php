<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$viewData['title'];?></title>
</head>
<body>
<h1><?=$viewData['actionName'];?></h1>
<div>
    <?php include($viewData['content']['view']);?>
</div>
</body>
</html>