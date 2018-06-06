<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body>
<?php if (isset($content)) : ?>

    <?php foreach ($content as $item) : ?>
        <h2>
            <a href="index.php?id=<?= $item['id']; ?>"><?= $item['title']; ?></a>
        </h2>
        <p><?= $item['mini_descr']; ?>
        </p>
    <?php endforeach; ?>
<?php endif; ?>
<h6></h6>

</body>
</html>