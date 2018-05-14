<?php

$options = getopt('m:p:');
$m = $options['m'];
$p = $options['p'];
define ('EARTH_GRAVITY', 9.8065);


if($m < $p )
{

    echo "good=";
}
else
    {
    echo "bad=";
}

$h = ($m * EARTH_GRAVITY)/$p;

echo $h;

