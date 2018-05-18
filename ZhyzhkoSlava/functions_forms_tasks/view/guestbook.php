    <form action="index.php?action=7.php" method="post">
    	<p>Guest Book.</p>
        <div>
            <label for="user">Your user:</label>
            <input type="text" name="user"  id="user" placeholder="user">
        </div>
        <div class="form-group">
            <label for="comment">Your com:</label>
            <input type="text" name="comment"  id="comment" placeholder="comment">
        </div>
      <button type="submit" name="submit" >Submit</button>
    </form>
    <p>Result: <?=$viewData['result'];?></p>
