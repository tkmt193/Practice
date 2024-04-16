<?php
abstract class AbstractClass{
    public function templateMethod(){
        $this->method1();
        $this->method2();
    }
    abstract protected function method1();
    abstract protected function method2();
}

class ConcreateClass extends AbstractClass{
    protected function method1(){
        echo "method1";
    }
    protected function method2(){
        echo "method2";
    }
}
$obj = new ConcreateClass();
$obj->templateMethod();

?>