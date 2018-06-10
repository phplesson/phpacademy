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
    
    public static function createObj($a, $b)
    {
        return new self($a, $b);
    }
}

$obj = BB::createObj(1,2);

echo <<<'TEXT'
это предупреждение связанно с следующим фактом.

класс наследник(ВВ) предполагает расширение функционала родителя(АА)
это значит, что мы используя АА, можем легко перейти к использованию ВВ
просто заменив - например

$className = 'AA';

$obj = $className::createObj($value);
//some other code

если в примере выше заменить имя класса на ВВ, код будет не работоспособным, ибо аналогичный метод в потомке ожидает два
параметра. Это считаеться плохим стилем.
TEXT;
echo PHP_EOL;
