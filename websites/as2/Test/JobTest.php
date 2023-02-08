<?php
require_once 'PHPUnitTest/UnitTest.php';

// TESTING JOB ADDING FUNCTIONALITY
class JobTest extends PHPUnit\Framework\TestCase {

  // TESTING IF THE JOB'S TITLE INPUT FIELD IS EMPTY
  public function testTitle(){
    $details = [
      'title' => '', 
      'description' => 'Must be IT Student.', 
      'salary' => '700',
      'closingDate' => '2023-04-10', 
      'categoryId' => '1',
      'location' => 'Northampton', 
      'archiveCheck' => 'No', 
      'addedBy' => 'Jo'
    ];
    $test = jobCheck($details);
    $this->assertFalse($test);
  }

   // TESTING IF THE JOB'S DESCRIPTION INPUT FIELD IS EMPTY
  public function testDescription(){
    $details = [
      'title' => 'Internship', 
      'description' => '', 
      'salary' => '700',
      'closingDate' => '2023-04-10', 
      'categoryId' => '1',
      'location' => 'Northampton', 
      'archiveCheck' => 'No', 
      'addedBy' => 'Jo'
    ];
    $test = jobCheck($details);
    $this->assertFalse($test);
  }

  // TESTING IF THE JOB'S SALARY INPUT FIELD IS EMPTY
  public function testSalary(){
    $details = [
      'title' => 'Internship', 
      'description' => 'Must be IT Student.', 
      'salary' => '',
      'closingDate' => '2023-04-10', 
      'categoryId' => '1',
      'location' => 'Northampton', 
      'archiveCheck' => 'No', 
      'addedBy' => 'Jo'
    ];
    $test = jobCheck($details);
    $this->assertFalse($test);
  }

   // TESTING IF THE JOB'S CLOSING DATE IS EMPTY
  public function testDate(){
    $details = [
      'title' => 'Internship', 
      'description' => 'Must be IT Student.', 
      'salary' => '700',
      'closingDate' => '2023-04-10', 
      'categoryId' => '1',
      'location' => 'Northampton', 
      'archiveCheck' => 'No', 
      'addedBy' => 'Jo'
    ];
    $test = jobCheck($details);
    $this->assertFalse($test);
  }

   // TESTING IF THE JOB'S CATEGORY ID IS EMPTY
  public function testCategory(){
    $details = [
      'title' => 'Internship', 
      'description' => 'Must be IT Student.', 
      'salary' => '700',
      'closingDate' => '2023-04-10', 
      'categoryId' => '',
      'location' => 'Northampton', 
      'archiveCheck' => 'No', 
      'addedBy' => 'Jo'
    ];
    $test = jobCheck($details);
    $this->assertFalse($test);
  }

   // TESTING IF THE JOB'S LOCATION IS EMPTY
  public function testLocation(){
    $details = [
      'title' => 'Internship', 
      'description' => 'Must be IT Student.', 
      'salary' => '700',
      'closingDate' => '2023-04-10', 
      'categoryId' => '1',
      'location' => '', 
      'archiveCheck' => 'No', 
      'addedBy' => 'Jo'
    ];
    $test = jobCheck($details);
    $this->assertFalse($test);
  }

   // TESTING IF THE JOB'S ARCHIVE CHECK IS EMPTY
  public function testArchive(){
    $details = [
      'title' => 'Internship', 
      'description' => 'Must be IT Student.', 
      'salary' => '700',
      'closingDate' => '2023-04-10', 
      'categoryId' => '1',
      'location' => 'Northampton', 
      'archiveCheck' => '', 
      'addedBy' => 'Jo'
    ];
    $test = jobCheck($details);
    $this->assertFalse($test);
  }

   // TESTING IF THE JOB'S ADDER NAME IS EMPTY OR NOT
  public function testAdded(){
    $details = [
      'title' => 'Internship', 
      'description' => 'Must be IT Student.', 
      'salary' => '700',
      'closingDate' => '2023-04-10', 
      'categoryId' => '1',
      'location' => 'Northampton', 
      'archiveCheck' => 'No', 
      'addedBy' => ''
    ];
    $test = jobCheck($details);
    $this->assertFalse($test);
  }

   // TESTING IF THE JOB'S DETAIL IS VALID
  public function testJob(){
    $details = [
      'title' => 'Internship', 
      'description' => 'Must be IT Student.', 
      'salary' => '700',
      'closingDate' => '2023-04-10', 
      'categoryId' => '1',
      'location' => 'Northampton', 
      'archiveCheck' => 'No', 
      'addedBy' => 'Jo'
    ];
    $test = jobCheck($details);
    $this->assertTrue($test);
  }
}