<?php
class AA {
    protected $a;
    
    protected function __construnct($val) {
        $this->a = $val;
    }
    
    public static function createObj($val) {
        return new self($val);
    }
}

class BB extends AA {
    protected $b;
    
    protected function __construct($a, $b) {
        parent::__construnct($a);
        $this->b = $b;
    }
    
    public static function createObj($a, $b = 'default')
    {
        return new self($a, $b);
    }
}

$obj = BB::createObj(1,2);

echo <<<'TEXT'
этого предупреждения  нету - так как новый параметр имеет значение по умолчанию



$className = 'AA';

$obj = $className::createObj($value);
//some other code

теперь простая замена имени класса на ВВ не приведет к ошибке.
TEXT;
echo PHP_EOL;
