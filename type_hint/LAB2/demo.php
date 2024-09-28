<?php
declare(strict_types=1);
require_once 'classA.php';
require_once 'classB.php';

class Demo {

    // Return A
    public function typeAReturnA(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeBReturnA(): B {
        echo __FUNCTION__ . "<br>";
        return new A(); 
    }
    public function typeCReturnA(): C {
        echo __FUNCTION__ . "<br>";
        return new A(); 
    }
    public function typeIReturnA(): I {
        echo __FUNCTION__ . "<br>";
        return new A(); 
    }

    // Return B
    public function typeAReturnB(): A {
        echo __FUNCTION__ . "<br>";
        return new B(); 
    }
    public function typeBReturnB(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeCReturnB(): C {
        echo __FUNCTION__ . "<br>";
        return new B(); 
    }
    public function typeIReturnB(): I {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    
    // Return C
    public function typeAReturnC(): A {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeBReturnC(): B {
        echo __FUNCTION__ . "<br>";
        return new C(); 
    }
    public function typeCReturnC(): C {
        echo __FUNCTION__ . "<br>";
        return new C(); 
    }
    public function typeIReturnC(): I {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    // Return I
    
    public function typeAReturnI(): A {
        echo __FUNCTION__ . "<br>";
        return new I(); 
    }
    public function typeBReturnI(): B {
        echo __FUNCTION__ . "<br>";
        return new I(); 
    }
    public function typeCReturnI(): C {
        echo __FUNCTION__ . "<br>";
        return new I(); 
    }

    //Return null
    public function typeAReturnNull(): A {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeBReturnNull(): B {
        echo __FUNCTION__ . "<br>";
        return null; 
    }
    public function typeCReturnNull(): C {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    public function typeIReturnNull(): I {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    public function typeNullReturnNull(): ?object {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    
}

$D = new Demo();

//Return A
// $D->typeAReturnA();
// $D->typeBReturnA();
// $D->typeCReturnA();
// $D->typeIReturnA();
//Return B
// $D->typeAReturnB();
// $D->typeBReturnB();
// $D->typeCReturnB();
// $D->typeIReturnB();
//Return C

// $D->typeAReturnC();
// $D->typeBReturnC();
// $D->typeCReturnC();
// $D->typeIReturnC();

//Return I
// $D->typeAReturnI();
// $D->typeBReturnI();
// $D->typeCReturnI();

//Return Null

// $D->typeAReturnNull();
// $D->typeBReturnNull();
// $D->typeCReturnNull();
// $D->typeIReturnNull();
// $D->typeNullReturnNull();


?>