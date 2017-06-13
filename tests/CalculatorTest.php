<?php
 require_once 'src/calculator.php';

 class CalculatorTest extends PHPUnit_Framework_TestCase
 {

    protected $cal;

    protected function setUp()
    {
        $this->cal = new Calculator();
    }

     /**
      * @covers test summer
      */
     public function testSummer()
     {
         $this->assertEquals(8, $this->cal->summe(2, 2));
     }

}
