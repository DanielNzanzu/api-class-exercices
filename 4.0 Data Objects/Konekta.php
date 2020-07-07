<?php

#namespace Models;

class Konekta{

  #will hold our connection resource
  public $konn;

  #the configuration string
  private $config;

  public function __construct(){
    #get our configuration and save it in $config
    $this->getConfig();

    #new mysqli connection : OOP
    $this->konn = new mysqli($this->config->host,
    $this->config->username,
    $this->config->password,
    $this->config->db);

    if ($this->konn->connect_errno) {
      echo "Failed to connect to MySQL: " . $this->konn->connect_error;
      exit();
    }

  }

  public function getConfig(){

    $config_relative_path ='config.json';
    $config_absolute_path = __DIR__.'/config.json';

    $config_string = file_get_contents($config_absolute_path);

    $config_object = json_decode($config_string);

    $this->config = $config_object;
  }

}
