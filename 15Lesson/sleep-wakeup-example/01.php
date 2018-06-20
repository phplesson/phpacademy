<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.06.18
 * Time: 2:58
 */
class AbstractWorker
{
    protected $file;
    protected $fileName;

    protected function initFile()
    {
        $this->file = fopen($this->fileName, 'a+');
    }

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        $this->initFile();
        $this->addLog('__construct()');
    }

    public function __sleep()
    {
        $this->addLog('__sleep()');
        fclose($this->file);

        return ['fileName'];
    }

    public function __wakeup()
    {
        $this->initFile();
        $this->addLog('__wakeup()');
    }

    public function addLog($str)
    {
        fwrite($this->file, date('Y-M-D H:j:s '). trim($str) . PHP_EOL);
    }

    public function __toString()
    {
        ob_start();

        fseek($this->file, 0);
        
        while (!feof($this->file)) {
            echo fread($this->file, 1024);
        }

        $this->addLog('__toString()');

        return ob_get_clean();
    }
}

class Worker extends AbstractWorker {}

$obj = new Worker('test.txt');
//var_dump($obj);

sleep(1);
$obj->addLog('after sleep 1 second, before serialize');

$str = serialize($obj);

$obj = null;

var_dump($str);

sleep(1);

$obj = unserialize($str);

var_dump($obj);

echo $obj . PHP_EOL;

