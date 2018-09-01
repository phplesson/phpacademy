<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12.07.18
 * Time: 11:25
 */

function getQueryResult($sql, PDO $dbh, $txt = null) {
    try {
        echo '====================================================================' . PHP_EOL;
        echo PHP_EOL.PHP_EOL.PHP_EOL.$txt. PHP_EOL;
        $result = $dbh->query($sql);
        var_dump($result);
        return $result;
    } catch (PDOException $e) {
        var_dump($e->getCode());
        var_dump($e->getMessage());
        exit();
    }
}

$dsn = 'mysql:dbname=phpunit;host=127.0.0.1';
$user = 'phpunit';
$password = 'phpunit';

echo '====================================================================' . PHP_EOL;
echo PHP_EOL.PHP_EOL.PHP_EOL.'CONNECT ' . PHP_EOL;

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
    exit();
}

//create table, drop if exist

$tblName = 'temp8418498431';


echo PHP_EOL.PHP_EOL.PHP_EOL.'DROP TABLE ' . PHP_EOL;

echo '====================================================================' . PHP_EOL;
$sql = 'drop table if exists ' . $tblName;

$result = $dbh->query($sql, PDO::FETCH_ASSOC);

if (!$result) {
    echo $dbh->errorCode() . PHP_EOL;
    var_dump($dbh->errorInfo());
    exit();
}

$result = $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
var_dump($result);

$sql2 = '22' . $sql;

getQueryResult($sql, $dbh, 'DROP TABLE 2');


$sql = <<<SQL
CREATE TABLE `$tblName` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL DEFAULT '0',
	`age` INT(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1
;
SQL;


getQueryResult($sql, $dbh, 'CREATE TABLE');


echo PHP_EOL.PHP_EOL.PHP_EOL.PHP_EOL.PHP_EOL;


$sql = "insert into $tblName value(:id, :name, :age)";

$prepare = $dbh->prepare($sql);
$i = 0;
$s = '';
$prepare->bindParam(':id', $i, PDO::PARAM_INT);
$prepare->bindParam(':name', $s, PDO::PARAM_STR);
for ($i = 1; $i < 100; $i++) {
    $prepare->bindValue(':age', mt_rand(2,100), PDO::PARAM_INT);
    $s = 'people ' . $i;

    $result = $prepare->execute();

    var_dump($result);
    var_dump($prepare->rowCount());
    $id = $dbh->lastInsertId();
    var_dump($id);
//    exit();
}

$name = 'some"data" and \'yet\'';

$newName = $dbh->quote($name, PDO::PARAM_STR);

$sql = "update $tblName set name = $newName where id = 10";

$r = getQueryResult($sql, $dbh, "UPDATE 1");

$sql = "update $tblName set name = :name where id = 11";

$prepare = $dbh->prepare($sql);
$prepare->bindValue(':name', $name, PDO::PARAM_STR);

$r = $prepare->execute();
var_dump($prepare);
var_dump($r);


echo PHP_EOL.PHP_EOL.PHP_EOL.PHP_EOL.' select 1' . PHP_EOL;

$sql = 'select * from ' . $tblName . ' where id < 10';

$result = $dbh->query($sql);

$r = $result->fetchAll(PDO::FETCH_FUNC, function() {
    $args = func_get_args();
    var_dump($args);
    return true;
});
var_dump($r);

echo PHP_EOL.PHP_EOL.PHP_EOL.PHP_EOL.' select 2' . PHP_EOL;

$result = $dbh->query($sql);

while($r = $result->fetch(PDO::FETCH_ASSOC)) {
    var_dump($r);
}


echo PHP_EOL.PHP_EOL.PHP_EOL.PHP_EOL.' select 3' . PHP_EOL;

$id = $name = $age = null;

$prepare = $dbh->prepare('select * from ' . $tblName . ' where id < 10');
$prepare->bindColumn('id', $id, PDO::PARAM_INT);
$prepare->bindColumn('name', $name, PDO::PARAM_STR);
$prepare->bindColumn('age', $age, PDO::PARAM_INT);

$result = $prepare->execute();

while($prepare->fetch()) {
    echo "$id is called $name, and $age aged" . PHP_EOL;
}
