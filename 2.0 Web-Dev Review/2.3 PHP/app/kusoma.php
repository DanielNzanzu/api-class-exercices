<?php

/**
A function that reads from json files

@params
$filePath : The path of the json file

@returns
Array of the contents of the file
*/

function kusomaJSON($filePath){
  $contents = file_get_contents($filePath);

  return json_decode($contents,true);
}

/**
A function that reads from CSV files
*/
function kusomaCSV($filePath){
  $contents = file_get_contents($filePath);

  return str_getcsv($contents);
}

/**
A function that reads from KS files
*/
function kusomaKS($filePath){

  $contents = file_get_contents($filePath);
  
  return explode(PHP_EOL,$contents);

}
