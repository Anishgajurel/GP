<?php
require_once 'PHPUnitTest/UnitTest.php';

// TESTING THE ENQUIRY 
class EnquiryTest extends PHPUnit\Framework\TestCase {

  // TESTING IF THE USERNAME FIELD IS EMPTY
  public function testName(){
    $data = [
      'name' => '',
      'email' => 'anish@gmail.com',
      'telephone' => '989837242398',
      'enquiry' => 'Hello World'
    ];
    $test = enquiryCheck($data);
    $this->assertFalse($test);
  }

  // TESTING IF THE EMAIL FIELD IS EMPTY
  public function testEmail(){
    $data = [
      'name' => 'Anish',
      'email' => '',
      'telephone' => '989837242398',
      'enquiry' => 'Hello World'
    ];
    $test = enquiryCheck($data);
    $this->assertFalse($test);
  }

   // TESTING IF THE PHONE NUMBER FIELD IS EMPTY
  public function testTelephone(){
    $data = [
      'name' => 'Anish',
      'email' => 'anish@gmail.com',
      'telephone' => '',
      'enquiry' => 'Hello World'
    ];
    $test = enquiryCheck($data);
    $this->assertFalse($test);
  }

   // TESTING IF THE MESSAGE FIELD IS EMPTY
  public function testMsg(){
    $data = [
      'name' => 'Anish',
      'email' => 'anish@gmail.com',
      'telephone' => '989837242398',
      'enquiry' => ''
    ];
    $test = enquiryCheck($data);
    $this->assertFalse($test);
  }

  // TESTING IF THE ENQUIRY DATA IS VALID
  public function testValid(){
    $data = [
      'name' => 'Anish',
      'email' => 'anish@gmail.com',
      'telephone' => '989837242398',
      'enquiry' => 'Hello World'
    ];
    $test = enquiryCheck($data);
    $this->assertTrue($test);
  }
}