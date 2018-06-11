<?php

//private similar to protected, but children classes can not see to.
//only for private usage by the class where it is.

class A {
    public function doPublic() {
        echo __METHOD__ . PHP_EOL;
    }
    
    protected function doProtected() {
        echo __METHOD__ . PHP_EOL;        
    }
    
    private function doPrivate() {
        echo __METHOD__ . PHP_EOL;        
    }
}

class B extends A {
    public function tryParentAll() {
        echo __METHOD__ . PHP_EOL;
        $this->doPublic();
        $this->doProtected();
        $this->doPrivate(); // Error
    }
}

$b = new B();
$b->tryParentAll();