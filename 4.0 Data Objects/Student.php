<?php

#@TODO  : use an autoloader instead
require_once 'RedBeanPHP5_5/rb.php';

class Student{

  #properties here
  public $id;
  public $admno;
  public $name;

  public function __construct(){

    //@TODO : use the serious way
    R::setup( 'mysql:host=localhost;dbname=class_db',
           'user1', 'user1' ); //for both mysql or mariaDB

    //var_dump(R::find('student'));

    //create schema if it doesn't exist
    if( count(R::find('student')) == 0 )
      $this->_init();

  }

  private function _init(){

    $student = R::dispense('student');
    $student->admno = 112686;
    $student->name = 'Muthengi Grace';
    R::store($student);

  }

  public function getStudent($id){
    return R::load('student',$id);
  }

}

$test = new Student();
echo $test->getStudent(1)->name;
