<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload file</title>
</head>
<body>
    <h2>multiple file upload</h2>
    <form enctype="multipart/form-data" method="post" action="index.php?action=1.php>
        <span>select files for upload</span>
        <input type="file" name="myFile[]" multiple="multiple" /> <br />
        <input type="submit" name="action" value="sendFiles" />
    </form>
</body>
</html>