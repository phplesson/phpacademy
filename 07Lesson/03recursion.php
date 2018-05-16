<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.05.18
 * Time: 9:25
 */

function writeArray(array $data) {
    echo '<ul>';
    foreach($data as $key => $value) {
        echo '<li>';

        if (is_array($value)) {
            echo "<span>$key</span>:";
            writeArray($value);
        } else {
            echo "<span>$key</span>=<span>$value</span>";
        }

        echo '</li>';
    }
    echo '</ul>';
}

echo '<h1>recursion</h1>';

if (is_readable('.temp')) {
    $data = unserialize(file_get_contents('.temp'));
} else {
    $data = [];
}

writeArray($data);

exit();

//sumorial(0) = 0
//sumorial(N) = sumorial(N-1) +1;

function sumorial($a) {
    if ($a == 0) {
        return 0;
    }
    return sumorial($a - 1) + 1;
}

if (!empty($_GET['a'])) {
    $result = sumorial($_GET['a']);
    echo "<p>sumorial {$_GET['a']} = $result</p>";
}

$a = $_GET['a'];
$r = 0;
$arraySteck = [];
while(true) {
    if ($a == 0) {
        if (count($arraySteck) > 0) {
            $last = array_pop($arraySteck);
            $r++;
            continue;
        }
        break;
    }

    array_push($arraySteck, 1);
    $a--;
}

echo "<p>sumorial {$_GET['a']} = $r</p>";