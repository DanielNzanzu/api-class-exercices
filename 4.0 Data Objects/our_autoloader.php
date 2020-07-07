<?php

spl_autoload_register('Loader');

function Loader($class){
  $newStr = str_replace('\\','/',$class);
  $file = $newStr.'.php';
  #echo "Autoloader Called for ".$file.'<br/>';
  require_once $file;
}
