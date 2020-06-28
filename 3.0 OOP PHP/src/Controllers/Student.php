<?php

#logical grouping of my code.
namespace src\Controllers;

#the file with the class
#require_once '../Models/Store.php';

#aliasing
use  \src\Models\Store as Thito;

class Student{
  //class body

  //within the class
  private $admission_number;

  //to all (within the class and outside the class)
  public $name;

  //within the class and to [child classes] : inheritance
  protected $age;

  public $store;

  #special methods
  #this is the constructor
  function __construct(){
    $this->store = new Thito();
  }

  #get all the students
  function getAllStudents(){
    return $this->store->getAll();
  }

  static function getTotalStudents(){
    return (new Thito())->getCount();
  }

  #this is NOT a constructor
  function _construct(){
    //echo "Fake Instantiated";
  }

  #methods/behavior
  #see the student
  private function getName(){

  }

  public function getDetails($index){
    return $this->store->getOne($index);
  }

  function gpa(){
    echo "your gpa";
  }

  static function updateList($listOfStudents){
    return (new Thito())->update($listOfStudents);
  }
}

$perez = new Student();
$api_2020_students = $perez->getAllStudents();
#var_dump($api_2020_students);
echo "<br>Total number of students : ".Student::getTotalStudents()."</br>";

$myra = new Student();
$details = $myra->getDetails(1);
var_dump($details);

$new_students = [
  [104088,"Brian"],
  [110201,"Angela"],
  [110548,"Benjamin"]
];

Student::updateList($new_students);
var_dump($perez->getAllStudents());
