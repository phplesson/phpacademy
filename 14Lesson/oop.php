<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 03.06.18
 * Time: 11:19
 */

$files = scandir('./oop.files', SCANDIR_SORT_ASCENDING);


foreach ($files as $file) {
    if (!is_file('./oop.files/' . $file)) {
        continue;
    }
    
    echo 'file.php >>>                                         ' . PHP_EOL;
    echo '########################################################################################' . PHP_EOL;
    echo file_get_contents('./oop.files/' . $file) . PHP_EOL;
    
    fgets(STDIN);
    
    echo PHP_EOL . PHP_EOL;
    echo 'php file.php >>>                                     ' . PHP_EOL;
    echo '########################################################################################' . PHP_EOL;

    $process = proc_open('php ./oop.files/' . $file, [
        0 => ['pipe', 'r'],
        1 => STDOUT,
        2 => STDOUT,
    ], $pipes, null, null);
        
    sleep(1);
    
    fclose($pipes[0]);
    proc_close($process);
    fgets(STDIN);

    echo str_repeat(PHP_EOL, 30);
}