<?php
require_once 'PHPUnitTest/UnitTest.php';

class CategoryTest extends PHPUnit\Framework\TestCase {


  public function testEmptyName(){
    $category = [
      'name' => ''
    ];
    $test = categoryCheck($category);
    $this->assertFalse($test);
  }


  // TESTING IF THE CATEGORY'S DATA IS VALID
  public function testName(){
    $category = [
      'name' => 'Sales'
    ];
    $test = categoryCheck($category);
    $this->assertTrue($test);
  }
  
}