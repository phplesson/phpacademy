<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 07.07.2018
 * Time: 12:18
 */

$mysqli = @new mysqli("localhost", "root", "", "test");

var_dump($mysqli);

echo $mysqli->connect_errno . PHP_EOL;
echo $mysqli->connect_error . PHP_EOL;

//$sql ='CREATE TABLE mytable(id INT NOT NULL AUTO_INCREMENT, name VARCHAR(30), age INT, PRIMARY KEY(id))';
//
//if (!$mysqli->query($sql)) {
//
//    echo $mysqli->errno . PHP_EOL;
//    echo $mysqli->error . PHP_EOL;
//}

$sql = 'insert into mytable(name, age) values("misha", 22), ("petya", 33);';

if (!$mysqli->query($sql)) {

    echo $mysqli->errno . PHP_EOL;
    echo $mysqli->error . PHP_EOL;
}

$sql = 'select * from mytable where id < 2';

$res = $mysqli->query($sql);

var_dump($res);

echo '==================' . PHP_EOL;

//1
//while($r = $res->fetch_row()) {
//    var_dump($r);
//}
//while($r = $res->fetch_assoc()) {
//    var_dump($r);
//}

//class Human {
//
//    protected $data = []
//    public function __construct()
//    {
//        echo __METHOD__ . PHP_EOL;
//        var_dump(func_get_args());
//    }
//
//    public function __set($name, $value)
//    {
//        $this->data[$name] = $value;
//        echo __METHOD__ . PHP_EOL;
//        var_dump(func_get_args());
//    }
//}
//
//while($r = $res->fetch_object('Human')) {
//    var_dump($r);
//}


//while($r = $res->fetch_array(MYSQLI_ASSOC)) {
//while($r = $res->fetch_array(MYSQLI_BOTH)) {
while($r = $res->fetch_array(MYSQLI_NUM)) {
    var_dump($r);
}

//class mymysqli extends mysqli {
//    protected static $instance = null;
//
//    public static function getInstance($host, $user,$pass, $db) {
//        if (self::$instance === null) {
//            self::$instance = new self($host, $user, $pass, $db);
//        }
//    }
//    protected function __constructor() {
//        call_user_func_array(['parent', '__constructor'], func_get_args());
//    }
//}
//
//$mysqli = @new mymysqli("localhost", "root", "", "test");
//
//var_dump($mysqli);

$prepare = $mysqli->prepare()