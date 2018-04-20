
<?php
// Электрическая схема

$options = getopt('a:b:c:');
$P1 = $options['a'];
$P2 = $options['b'];
$P3 = $options['c'];
if ($P1<=0 || $P2<=0 || $P3<=0) {
    echo "Enter the correct data";
    exit ();
} else {
    $res = 1/(1/($P1+$P2) + 1/$P3);
    echo "Resistance = ".$res;
}
?>
