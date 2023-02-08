<?php
require_once 'PHPUnitTest/UnitTest.php';

// TESTING ADMIN LOGIN
class LoginTest extends PHPUnit\Framework\TestCase {

  // TESTING IF THE USERNAME FIELD IS EMPTY
  public function testUsername(){
    $info = ['username' => '', 'password' => 'letmein'];
    $test = loginCheck($info);
    $this->assertFalse($test);
  }

  // TESTING IF THE PASSWORD FIELD IS EMPTY
  public function testPassword(){
    $info = ['username' => 'Jo', 'password' => ''];
    $test = loginCheck($info);
    $this->assertFalse($test);
  }

  // TESTING IF THE PROVIDED CREDENTIALS IS VALID
  public function testValid(){
    $info = ['username' => 'Jo', 'password' => 'letmein'];
    $test = loginCheck($info);
    $this->assertTrue($test);
  }
}