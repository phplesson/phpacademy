<p>Guest book without f-words.</p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=8.php">
            <label for="user">Your user:</label>
            <input type="text" name="user" id="user" placeholder="user"><br>
            <label for="comment">Your com:</label>
            <input type="text" name="comment"  id="comment" placeholder="comment">
      <button type="submit" name="submit">Submit</button>
</form>
<p>Result: <?=$viewData['result'];?></p>