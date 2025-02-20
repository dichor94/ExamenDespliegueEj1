<?php

use PHPUnit\Framework\TestCase;
use App\Factorial;

class FactorialTest extends TestCase {

  public function testFactorial(){
    $calc = new Factorial();
    $this -> assertEquals(120, $calc->calcularFactorial(5));
  }

}

?>