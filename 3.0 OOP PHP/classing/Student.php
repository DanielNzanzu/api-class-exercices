<?php

class Student{
  //class body

  //within the class
  private $admission_number;

  //to all (within the class and outside the class)
  public $name;

  //within the class and to [child classes] : inheritance
  protected $age;

  #special methods
  #this is the constructor
  function __construct(){
    echo "Instantiated";
  }

  static function getTotalStudents(){
    echo 172;
  }

  #this is NOT a constructor
  function _construct(){
    echo "Fake Instantiated";
  }

  #methods/behavior
  #see the student
  private function getName(){

  }

  function gpa(){
    echo "your gpa";
  }
}
//denotes inheritance
class StudentOnScholarship extends Student{

}


#object creation
#an actual student
#instance of a class
#the real person / student
#(new Student())->gpa();

$carlton = new Student();
$carlton->gpa();

#get students
Student::getTotalStudents();
