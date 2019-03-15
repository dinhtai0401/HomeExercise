<?php

/**
 *
 */
class Students extends Person
{

  function __construct($fname, $lname, $yearOfBirth, $age, $courses, $points)
  {
    $this->setFName($fname);
    $this->setLname($lname);
    $this->setYearOfBirth($yearOfBirth);
    $this->setAge($age);
    $this->courses=$courses;
    $this->points=$points;
  }
  private $courses=array();
  private $points;
  public function getCourses()
    {
        return $this->courses;
    }
  public function setCourses($param)
    {
        array_push($this->courses,$param);
    }
  public function getPoints()
    {
        return $this->points;
    }
  public function setPoints($number){
        $this->points=$number;
    }
}
?>
