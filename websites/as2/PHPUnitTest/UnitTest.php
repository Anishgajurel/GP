<?php

// TESTING FUNCTION TO TEST ALL THE DATA VALIDATIONS AND REQUIREMENTS

// CHECKING IF ADMIN LOGIN CREDENTIALS IS VALID, INVALID OR EMPTY
function loginCheck($info){
  $test = true;
  if ($info['username'] == ""){
    $test = false;
  }
  if ($info['password'] == ""){
    $test = false;
  }
  return $test;
}

// CHECKING IF CREDENTIALS REQUIRED FOR ADDING STAFF OR CLIENT IS VALID, INVALID OR EMPTY
function addStaffCheck($info){
  $test = true;
  if ($info['username'] == ""){
    $test = false;
  }
  if ($info['email'] == ""){
    $test = false;
  }
  if ($info['password'] == ""){
    $test = false;
  }
  return $test;
}

// CHECKING IF DATA REQUIRED FOR ADDING JOB IS VALID, INVALID OR EMPTY
function jobCheck($details){
  $test = true;
  if ($details['title'] == ""){
    $test = false;
  }
  if ($details['description'] == ""){
    $test = false;
  }
  if ($details['salary'] == ""){
    $test = false;
  }
  if ($details['closingDate'] == ""){
    $test = false;
  }
  if ($details['categoryId'] == ""){
    $test = false;
  }
  if ($details['location'] == ""){
    $test = false;
  }
  if ($details['archiveCheck'] == ""){
    $test = false;
  }
  if ($details['addedBy'] == ""){
    $test = false;
  }
  return $test;
}

// CHECKING IF DATA REQUIRED FOR ADDING CATEGORY NAME IS EMPTY OR NOT
function categoryCheck($category){
  $test = true;
  if ($category == '') {
    $test = false;
  }
  return $test;
}

// CHECKING IF DATA REQUIRED FOR ENQUIRY IS EMPTY OR NOT
function enquiryCheck($info){
  $test = true;
  if ($info['name'] == ""){
    $test = false;
  }
  if ($info['email'] == ""){
    $test = false;
  }
  if ($info['telephone'] == ""){
    $test = false;
  }
  if ($info['enquiry'] == ""){
    $test = false;
  }
  return $test;
}


// CHECKING IF DATA REQUIRED FOR APPLICANTS IS EMPTY OR NOT
function applicantsCheck($info){
  $test = true;
  if ($info['name'] == ""){
    $test = false;
  }
  if ($info['email'] == ""){
    $test = false;
  }
  if ($info['details'] == ""){
    $test = false;
  }
  if ($info['jobId'] == ""){
    $test = false;
  }
  return $test;
}

?>
