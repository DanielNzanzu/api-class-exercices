<?php

/**
SERIOUSPROJ
 -> Storing stuff in the DB (Database) : Models
 -> Logic of the application (Logic) : Controllers
 -> Look and feel (Presentation)
 -> Configuration (Config)
 -> API(Messages) (External)
**/
namespace src\Models;

class Store{

    #name of our CSV, defined as a constant
    const DB_FILE = '../../student_data_0.csv';

    #read_writer - holds the resource to the csv
    private $read_writer = false;

  //  public $dummy = 'no';

    function __construct(){
      //  $this->dummy = 'Never';
    //    $this->fictitious();
    }

    //function fictitious(){
    //  return 'Yes';
    //}
    /**
      Open the read_writer resource
     * @param string $mode
     */
    private function openReadWriter($mode = 'c+'){
        $this->read_writer = fopen(Store::DB_FILE,$mode);
    }

    /**
      Close the read_writer resource
     */
    private function closeReadWriter(){
        //close writer, if open
        if($this->read_writer !== FALSE)
            fclose($this->read_writer);
    }

    /**
      Get all the data from the csv
     * @return array
     */
    public function getAll(){

        $allRows = [];

        $this->openReadWriter();

        // Convert each line into the local $data variable
        while (($data = fgetcsv($this->read_writer, 1000, ",")) !== FALSE)
        {
            array_push($allRows,$data);
        }


        $this->closeReadWriter();

        return $allRows;
    }

    /**
      Get one row in the csv based on the index
     * @param $index
     * @return bool|mixed
     */
    public function getOne($index){
        $rows = $this->getAll();

        if ( $index >= count($rows) ){
            return false;
            #throw new \InvalidArgumentException("Row specified does not exist");
        }elseif ($index < 0 ) {
            return false;
            #throw new \InvalidArgumentException("Row specified does not exist");
        }else{
            return $rows[$index];
        }
    }

    /**
     * @param $arrayOfRows
     * @return bool
     */
    public function update($arrayOfRows){

        $this->openReadWriter('a');

        if(is_array($arrayOfRows)){
            foreach ($arrayOfRows as $field) {
                fputcsv($this->read_writer, $field);
            }
            return true;
        }else{
            return false;
        }
        //close
        $this->closeReadWriter();
    }

    /**
      Delete a certain row in the csv
     * @param $index
     * @return bool
     */
    public function delete($index){
        $allRows = $this->getAll();

        if ( $index >= count($allRows) ){
            return false;
            #throw new \InvalidArgumentException("Row specified does not exist");
        }elseif ($index < 0 ) {
            return false;
            #throw new \InvalidArgumentException("Row specified does not exist");
        }else{
            unset($allRows[$index]);
            $this->update($allRows);
            return true;
        }
    }

    /**
      Get the number of rows in csv
     * @return int
     */
    public function getCount(){
        return count($this->getAll());
    }

}
