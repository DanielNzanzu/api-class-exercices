<?php
#PHP class autoaloading
#composer autoloader
require_once 'vendor/autoload.php';

#our autoloader
require_once 'our_autoloader.php';


use \src\Models\Store as Thito;
use \src\Controllers\Student as Std;

#$testStore = new Thito();
#$paul = new Std();

#$a_pupil = new Pupil();
#$a_master_student = new MasterStudent();

use League\Csv\Reader;
use League\Csv\Writer;
use League\Csv\Statement;

$csv = Reader::createFromPath('student-data-1.csv','r');
$csv->setHeaderOffset(0);
$stmt = (new Statement())
    ->limit(25);
$records = $stmt->process($csv);

foreach ($records as $record) {
    print_r($record);
    print '<br/>';
}
