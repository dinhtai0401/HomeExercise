<?php

/**
 *
 */
class Teachers extends Person
{

  function __construct($fname, $lname, $yearOfBirth, $subjects, $department)
  {
    $this->setFName($fname);
    $this->setLname($lname);
    $this->setYearOfBirth($yearOfBirth);
    $this->subjects=$subjects;
    $this->department=$department;
  }
  private $subjects=array();
  private $department;
  public function getSubjects(){
    return $this->subjects;
  }
  public function setSubjects($param){
    array_push($this->department,$param);
  }
  public function setdepartment($param){
    $this->department=$param;
  }
  public function getdepartment(){
    return $this->department;
  }
}



?>
