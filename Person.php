<?php
/**
 *
 */
abstract class Person
{
private $fname;
private $lname;
private $yearOfBirth;
public function setFName($value){
  $this->fname=$value;
}
public function setLName($value){
  $this->lname=$value;
}
public function setYearOfBirth($value){
  $this->yearOfBirth=$value;
}
public function getFName(){
  return $this->fname;
}
public function getLName(){
  return $this->lname;
}
public function getYearOfBirth(){
  return $this->yearOfBirth;
}
}
?>
