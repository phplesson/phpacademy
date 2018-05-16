<?php

//function cookielizeArray stores multi-dimensional array in cookie files.
//GET-request for checking:
//setcookie.php?a=1&b=2&c[0]=100&c[1]=280&c[2]=300&d[0][0]=100&d[0][1]=200&d[0][2][0]=400&d[0][2][1]=550&d[0][2][2]=600

function cookielizeArray(array $array, array $keyPath=null) {
    if(count($array) > 0) {
        foreach ($array as $key => $value) {
            if(!is_array($value)) { //if element of parent array IS NOT array, we work with it like with end-value, and put it in file.
                empty($keyPath) ? ($pathString = $key) : ($pathString = implode("", $keyPath)."[$key]");
                $result = setcookie($pathString, $value, time() + 180, '/');
            } else {
                //so, we've found a nested array, let's do something with it recursively...
                count($keyPath) > 0 ? $keyPath[]="[$key]" : $keyPath[]=$key; //add sub-array index to the end of path-array. If this is TOP-LEVEL element AND IS ARRAY, we DON'T want square brackets []!
                cookielizeArray($value, $keyPath); //indexes for end-elements this function will add during runtime
                $blackhHole = array_pop($keyPath); //delete sub-array index from the end of path-array. why? because we just dig out one level up
                //we don't need this index, so put it in $blackHole variable, which never used.
            }
        }
    }
    return ($result);
}

cookielizeArray($_GET);

echo '<h1>COOKIE</h1>';
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';