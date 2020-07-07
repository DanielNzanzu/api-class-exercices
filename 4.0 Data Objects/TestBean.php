<?php

require_once 'RedBeanPHP5_5/rb.php';

#creating a connection
R::setup( 'mysql:host=localhost;dbname=class_db',
       'user1', 'user1' ); //for both mysql or mariaDB

$book = R::dispense('book');

$book->title = "Data Objects";
$book->pages = 120;
$book->isbn = '109831089212';
$book->author = 'Don Kamoya';
$book->price = 'KES 10,000';

$id = R::store($book);
