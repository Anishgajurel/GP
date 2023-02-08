<?php
require_once 'PHPUnitTest/UnitTest.php';

// TESTING THE APPLICANT DETAILS
class ApplicantsTest extends PHPUnit\Framework\TestCase {

  // TESTING IF THE NAME FIELD IS EMPTY
  public function testName(){
    $data = [
      'name' => '',
      'email' => 'anish@gmail.com',
      'details' => 'Hello World',
      'jobId' => '2'
    ];
    $test = applicantsCheck($data);
    $this->assertFalse($test);
  }

  // TESTING IF THE EMAIL FIELD IS EMPTY
  public function testEmail(){
    $data = [
        'name' => 'Anish',
        'email' => '',
        'details' => 'Hello World',
        'jobId' => '2'
      ];
    $test = applicantsCheck($data);
    $this->assertFalse($test);
  }

   // TESTING IF THE JOB ID IS EMPTY
  public function testJob(){
    $data = [
        'name' => 'Anish',
        'email' => 'anish@gmail.com',
        'details' => 'Hello World',
        'jobId' => ''
      ];
    $test = applicantsCheck($data);
    $this->assertFalse($test);
  }

   // TESTING IF THE DETAIL FIELD IS EMPTY
  public function testDetails(){
    $data = [
        'name' => 'Anish',
        'email' => 'anish@gmail.com',
        'details' => '',
        'jobId' => '2'
      ];
    $test = applicantsCheck($data);
    $this->assertFalse($test);
  }

  // TESTING IF THE ENQUIRY DATA IS VALID
  public function testValid(){
    $data = [
        'name' => 'Anish',
        'email' => 'anish@gmail.com',
        'details' => 'Hello World',
        'jobId' => '2'
      ];
    $test = applicantsCheck($data);
    $this->assertTrue($test);
  }
}