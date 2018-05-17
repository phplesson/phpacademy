<p>multiple file upload.</p>
<form method="POST" enctype="multipart/form-data" action="index.php?action=6.php">
	    <span>select files for upload</span>
        <input type="file" name="myFile[]" multiple="multiple" /> <br />
        <input type="submit" name="action" value="sendFiles" />
</form>
<p>Result: <?=$viewData['result'];?></p>