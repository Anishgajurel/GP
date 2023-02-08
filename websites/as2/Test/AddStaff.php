<?php
require_once 'PHPUnitTest/UnitTest.php';

// TESTING ADMIN ADDING FUNCTIONALITY
class AddStaff extends PHPUnit\Framework\TestCase {

  // TESTING IF THE USERNAME FIELD IS EMPTY
  public function testUsername(){
    $info = ['username' => '',
      'email' => 'jojobs@gmail.com',
      'password' => 'letmein'
    ];
    $test = addStaffCheck($info);
    $this->assertFalse($test);
  }

  // TESTING IF THE EMAIL FIELD IS EMPTY
  public function testEmail(){
    $info = ['username' => 'Jo',
      'email' => '',
      'password' => 'letmein'
    ];
    $test = addStaffCheck($info);
    $this->assertFalse($test);
  }

  // TESTING IF THE PASSWORD FIELD IS EMPTY
  public function testPassword(){
    $info = ['username' => 'Jo',
      'email' => 'jojobs@gmail.com',
      'password' => ''
    ];
    $test = addStaffCheck($info);
    $this->assertFalse($test);
  }

  // TESTING IF THE PROVIDED CREDENTIALS IS VALID
  public function testValid(){
    $info = ['username' => 'Jo',
      'email' => 'jojobs@gmail.com',
      'password' => 'letmein'
    ];
    $test = addStaffCheck($info);
    $this->assertTrue($test);
  }
}