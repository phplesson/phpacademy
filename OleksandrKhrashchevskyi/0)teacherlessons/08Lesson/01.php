<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12.05.18
 * Time: 9:06
 */

output_add_rewrite_var('var', 'value');

echo '<a href="file.php">ссылка</a>
<a href="http://test.local/phpacademy/08Lesson/01.php">ссылка2</a>
<a href="01.php?a=100">ссылка3</a>';

echo '<form action="script.php" method="post">
<input type="text" name="var2" />
</form>';

echo '<pre>';
print_r(ob_list_handlers());
echo '</pre>';