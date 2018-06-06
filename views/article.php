<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
</head>
<body>
<a href="index.php">Home</a>
<?php if (isset($content)) : ?>

        <h2>
            <?= $content['title']; ?>
        </h2>
        <p><?= $content['description']; ?>
        </p>

<?php endif; ?>
<h6></h6>

</body>
</html>