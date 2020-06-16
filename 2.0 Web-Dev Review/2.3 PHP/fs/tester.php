<?php

#relative path
#absolute path

#var_dump($_SERVER);

#$kusoma_abs_path = $_SERVER['DOCUMENT_ROOT'].'app/kusoma.php';
$kusoma_rel_path = '../app/kusoma.php';
#echo $kusoma_abs_path;

require_once $kusoma_rel_path;

#json
$jsonPath = '../fs/books.json';

$books = kusomaJSON($jsonPath);
#var_dump($books);

#csv
$csvPath = '../fs/data.csv';
$data = kusomaCSV($csvPath);
#var_dump($data);

#ks
$ksPath = '../fs/settings.ks';
$settings = kusomaKS($ksPath);
#var_dump($settings);


#mysqli_connect($settings[0],$settings[1]);
