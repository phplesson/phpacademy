<?php
$tel = ['380441221545' => true,
    '+380441221545' => true,
    '+38(044)1221545' => true,
    '+38 (044) 1221545' => true,
    '+38 (044) 122-15-45' => true,
    '+38 044 - 122-15-45' => true,
    '38 044 - 122-15-45' => true,
    '+38 (044) 122 15 45' => true,
    '+39 044 - 122-15-45' => false,
    '++38 044 - 122-15-45' => false,
    '-38 044 - 122-15-45' => false,
    '+38 (044) 122 15 45 12' => false,
    '+38 (044) 122 15 45 ' => false,
    '+38 (044) 122  -15 45' => false,
    '+38 (044) 122 - 15 - 45' => true,
];

function testReg($tel)
{
    $strDel = '(\s)?(\-)?(\s)?';
    $reg = "/^(\+?)(38)(\s?)(\(|\s)?([0-9]{3})(\)|\s|\-)*([0-9]{3}){$strDel}([0-9]{2}){$strDel}([0-9]{2})$/";
    if (preg_match_all($reg, $tel)) {
        echo "<br>Номер '{$tel}' введен корректно<br>";
    } else {

        echo "<br>Номер '{$tel}' - не корректный!<br>";
    }
}

//foreach ($tel as $item => $value) {
//    testReg($item);
//}

$domain = [
    'a.ru' => true,
    'a.ruru' => true,
    'a.rurur' => false,
    '.ruru' => false,
    '2.ruru' => false,
    'a2-.ruru' => false,
    '-a2.ruru' => false,
    'a-b.ruru' => true,
    'a-b.a.ruru' => true,
    'a-b.a3.ruru' => true,
    'a-b.a-c.ruru' => true,
    'a-b.a.z.ruru' => true,
    'a-b.a3.g3.ruru' => true,
    'a-b.a-c.h-k.ruru' => true,
    'a-b.a.z.z.ruru' => true,
    'a-b.a3.g3.g3.ruru' => true,
    'a-b.a-c.h-k.h-k.ruru' => true,
    'a-b.1.ruru' => false,
    'a-b..ruru' => false,
    'a-b.-a3.ruru' => false,
    'a-b.1a-c.ruru' => false,
    'a-b.a.z..ruru' => false,
    'a-b.a3.g3-.ruru' => false,
    'a-b.a-c.h-k.123.ruru' => false,
    'a-b.a.-.z.z.ruru' => false,
    'a-b.a3.-g3.g3.ruruwq' => false,
    'a-b.a-c.h-k.2h-k.ruruq' => false,
    'a-b.a-c.h-k.2h-k.aaaa' => false,
];

function domReg($dom)
{
    $strDel = '([a-z]+[0-9]*\-?\b[a-z]*)';
    $reg = "/^{$strDel}(\.{$strDel})*(\.([a-z]{2,4}))$/";
    if (preg_match_all($reg, $dom)) {
        echo "<br>Домен '{$dom}' введен корректно<br>";
    } else {

        echo "<br>Домен '{$dom}' - не корректный!<br>";
    }
}

foreach ($domain as $item => $value) {
    domReg($item);
}

var_dump($domain);